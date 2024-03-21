import { useEffect, useState, createContext, useContext } from "react";
import axios from "axios";
import {
  QUESTION_TIMER_DURATION,
  calculatePercentage,
  calculatePoints,
} from "../utils";
import { Navigate, useNavigate } from "react-router-dom";

// Création du contexte de jeu
const GameContext = createContext({});

// Définition du composant fournisseur de contexte
export const GameProvider = ({ children }) => {
  // Déclaration des états pour stocker les données du jeu
  const [topThemes, setTopThemes] = useState([]);
  const [topSousThemes, setTopSousThemes] = useState([]);
  const [points, setPoints] = useState(0);
  const [pointsMax, setPointsMax] = useState(0);
  const [pointsTotal, setPointsTotal] = useState(0);
  const [themes, setThemes] = useState([]);
  const [theme, setTheme] = useState();
  const [resultat, setResultat] = useState(0);

  const [currentQuestion, setCurrentQuestion] = useState(0);
  const [countLevel1, setCountLevel1] = useState(0);
  const [count, setCount] = useState(0);
  const [totalTime, setTotalTime] = useState(0);
  const [badAnswers, setBadAnswers] = useState();
  const [isQuizFinished, setIsQuizFinished] = useState(true);

  const [countLevel2, setCountLevel2] = useState(0);
  const [countLevel3, setCountLevel3] = useState(0);
  const [questionsRanked, setQuestionsRanked] = useState([]);
  const [sousTheme, setSousTheme] = useState();
  const [sousThemes, setSousThemes] = useState([]);
  const [randomThemes, setRandomThemes] = useState([]);
  const [topUserRanking, setTopUserRanking] = useState();
  const [isBusy, setIsBusy] = useState(false);
  const [currentTheme, setCurrentTheme] = useState(null);
  const [currentSousTheme, setCurrentSousTheme] = useState(null);
  const [currentThemes, setCurrentThemes] = useState(null);
  const [currentAnswer, setCurrentAnswer] = useState(null);
  const [currentSousThemes, setCurrentSousThemes] = useState(null);
  const [currentLevel, setCurrentLevel] = useState(() => {
    const storedLevel = localStorage.getItem("level");
    return storedLevel ? parseInt(storedLevel) : 2;
  });
  const navigate = useNavigate();
  // Fonction pour charger les données du jeu depuis le serveur
  useEffect(() => {
    fetchTopCollection(); // Appel de la fonction pour charger les données
  }, []); // useEffect exécuté uniquement après le premier rendu

  useEffect(() => {
    if (currentAnswer) {
      onCalculPoint();
    }
  }, [currentAnswer]);
  //Récupération theme et sous theme ds ordre dutilisation
  const fetchTopCollection = async () => {
    try {
      setIsBusy(true);
      const res = await axios.get(`/rankings/top-collection`);
      setTopThemes(res.data.themes);
      setTopSousThemes(res.data.sousThemes);
      setRandomThemes(res.data.randoms);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  //récupération questionnaire
  const fetchNewGame = async () => {
    try {
      setIsBusy(true);
      if (currentTheme || currentSousTheme) {
        // Utilisation de || pour vérifier si au moins l'un des deux est défini
        const params = {};
        if (currentTheme) {
          params.theme = currentTheme.id;
        }
        if (currentSousTheme) {
          params.sousTheme = currentSousTheme.id;
        }

        const res = await axios.get(`/new-game/${currentLevel}`, { params });
        setQuestionsRanked(res.data.questions);
        console.log(res.data.questions);
        setCountLevel1(res.data.countLevel1);
        setCountLevel2(res.data.countLevel2);
        setCountLevel3(res.data.countLeve2);
      } else {
        console.error("Neither currentTheme nor currentSousTheme is defined");
      }
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };

  //transformation du temps pour le chrono
  const [timeRemaining, setTimeRemaining] = useState(
    QUESTION_TIMER_DURATION / 1000
  );

  const saveBadAnswer = (currentQuestionData, currentAnswer) => {
    setBadAnswers((prevBadAnswers) => ({
      ...prevBadAnswers,
      [currentQuestion]: {
        question: currentQuestionData,
        selectedAnswer: currentAnswer,
      },
    }));
  };

  //Calcule des points gagné par questions
  const onCalculPoint = () => {
    const currentQuestionData = questionsRanked[currentQuestion];
    console.log({ currentQuestionData });
    console.log({ currentAnswer });
    if (currentAnswer.is_correct === 1 && timeRemaining > 0) {
      console.log("Tu as suivi la voie de la Force! Bonne réponse!");
      let res;
      switch (currentQuestionData.level_id) {
        case 1:
          res = calculatePoints(timeRemaining, 1);
          break;
        case 2:
          res = calculatePoints(timeRemaining, 2);
          break;
        default:
          res = calculatePoints(timeRemaining, 3);
          break;
      }

      // Mise à jour des points et pointsMax
      setCount((prevCount) => prevCount + 1);
      setPoints((prevPoints) => prevPoints + res);
      setPointsMax(
        (prevPointsMax) => prevPointsMax + currentQuestionData.level_id * 2
      );

      // Ajoutez le temps écoulé au temps total
      setTotalTime(
        (prevTotalTime) =>
          prevTotalTime + (QUESTION_TIMER_DURATION / 1000 - timeRemaining)
      );
    } else if (currentAnswer.is_correct === 0) {
      saveBadAnswer(currentQuestionData, currentAnswer);
      console.log({ badAnswers });
      // Ajoutez le temps écoulé au temps total
      setTotalTime(
        (prevTotalTime) =>
          prevTotalTime + (QUESTION_TIMER_DURATION / 1000 - timeRemaining)
      );

      setPointsMax(
        (prevPointsMax) => prevPointsMax + currentQuestionData.level_id * 2
      );

      console.log(
        "Le côté obscur vous a dominé ! Mauvaise réponse / Temps dépassé!"
      );
      setCount((prevCount) => prevCount + 1);
    }

    nextQuestion(currentQuestion, questionsRanked);
  };

  const nextQuestion = (currentQuestion, questionsRanked) => {
    if (currentQuestion + 1 < questionsRanked.length) {
      // Si oui, passez à la question suivante
      setCurrentQuestion((prevQuestion) => prevQuestion + 1);
    } else {
      // Si non, définissez setIsQuizFinished(true)
      setIsQuizFinished(true);
    }
  };
  //modifcaton resulat
  useEffect(() => {
    setResultat(calculatePercentage(points, pointsMax));
    console.log("Total points", points + " / " + pointsMax);
    console.log("Total : ", resultat, "%");
  }, [points, pointsMax, resultat]);

  //Sauvergarde d'une partie classés
  const gameFinished = async () => {
    try {
      setIsBusy(true);

      await axios.post(`rankings`, {
        resultQuizz: resultat,
        timeQuizz: totalTime,
        // user_id: user.id,
      });
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
      navigate("/");
      resetGame();
    }
  };
  //nettoyage de fin de partie
  const resetGame = () => {
    setCurrentQuestion(0);
    setIsQuizFinished(false);
    setBadAnswers([]);
    setTimeRemaining(QUESTION_TIMER_DURATION / 1000);
    // setQuestions();
    // fetchData();
  };

  // Mise à disposition des données du contexte et des fonctions de mise à jour
  const contextValue = {
    topThemes,
    badAnswers,
    topSousThemes,
    themes,
    sousThemes,
    sousTheme,
    randomThemes,
    topUserRanking,
    isBusy,
    currentTheme,
    currentThemes,
    currentSousThemes,
    currentSousTheme,
    currentLevel,
    currentQuestion,
    questionsRanked,
    countLevel1,
    countLevel2,
    countLevel3,
    timeRemaining,
    pointsMax,
    points,
    pointsTotal,
    theme,
    resultat,
    isQuizFinished,
    gameFinished,
    setTheme,
    resetGame,
    setCurrentAnswer,
    setThemes,
    setSousThemes,
    setSousTheme,
    setCurrentTheme,
    setCurrentSousTheme,
    setCurrentThemes,
    setCurrentSousThemes,
    setTopUserRanking,
    setCurrentLevel,
    fetchNewGame,
    setTimeRemaining,
  };

  // Rendu du fournisseur de contexte avec ses enfants
  return (
    <GameContext.Provider value={contextValue}>
      {isBusy ? "Chargement..." : children}
    </GameContext.Provider>
  );
};

// Hook personnalisé pour utiliser le contexte de jeu dans les composants enfants
export const useGameContext = () => useContext(GameContext);
