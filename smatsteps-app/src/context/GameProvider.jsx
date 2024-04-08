import { useEffect, useState, createContext, useContext } from "react";
import axios from "axios";
import {
  LEVELS,
  QUESTION_TIMER_DURATION,
  calculatePercentage,
  calculatePoints,
} from "../utils";
import { useNavigate } from "react-router-dom";
import { useUserContext } from "./UserProvider";

// Création du contexte de jeu
const GameContext = createContext({});

// Définition du composant fournisseur de contexte
export const GameProvider = ({ children }) => {
  const [smat, setSmat] = useState(null);
  const [smatUsers, setSmatUsers] = useState(null);
  const [currentSmatQuestion, setCurrentSmatQuestion] = useState(null);
  const [currentSmatAnswers, setCurrentSmatAnswers] = useState(null);

  // Déclaration des états pour stocker les données du jeu
  const [topThemes, setTopThemes] = useState([]);
  const [topSousThemes, setTopSousThemes] = useState([]);
  const [points, setPoints] = useState(0);
  const [pointsMax, setPointsMax] = useState(0);
  const [pointsTotal] = useState(0);
  const [themes, setThemes] = useState([]);
  const [theme, setTheme] = useState();
  const [resultat, setResultat] = useState(0);
  const [pointsMaxSmat, setPointsMaxSmat] = useState(null);
  const [currentPointsSmat, setCurrentPointsSmat] = useState(0);
  const [currentQuestion, setCurrentQuestion] = useState(0);
  const [countLevel1, setCountLevel1] = useState(0);
  const [count, setCount] = useState(0);
  const [totalTime, setTotalTime] = useState(0);
  const [badAnswers, setBadAnswers] = useState();
  const [isQuizFinished, setIsQuizFinished] = useState(true);
  const [currentQuestionData, setCurrentQuestionData] = useState(null);
  const [countLevel2, setCountLevel2] = useState(0);
  const [countLevel3, setCountLevel3] = useState(0);
  const [questionsRanked, setQuestionsRanked] = useState([null]);
  const [sousTheme, setSousTheme] = useState();
  const [sousThemes, setSousThemes] = useState([]);
  const [randomThemes, setRandomThemes] = useState([]);
  const [topUserRanking, setTopUserRanking] = useState();
  const [isBusy, setIsBusy] = useState(false);
  const [currentTheme, setCurrentTheme] = useState(null);
  const [currentSousTheme, setCurrentSousTheme] = useState(null);
  const [currentThemes, setCurrentThemes] = useState(null);
  const [currentAnswer, setCurrentAnswer] = useState(null);
  const [currentAnswerSmat, setCurrentAnswerSmat] = useState(null);
  const [currentSousThemes, setCurrentSousThemes] = useState(null);
  const [isSmatFinished, setIsSmatFinished] = useState(false);

  const [currentSmatScore, setCurrentSmatScore] = useState(0);
  const [currentLevel, setCurrentLevel] = useState(() => {
    const storedLevel = localStorage.getItem("level");
    return storedLevel ? parseInt(storedLevel) : 2;
  });
  const { user } = useUserContext();
  const navigate = useNavigate();
  // Fonction pour charger les données du jeu depuis le serveur
  useEffect(() => {
    fetchTopCollection(); // Appel de la fonction pour charger les données
  }, []); // useEffect exécuté uniquement après le premier rendu

  useEffect(() => {
    if (currentAnswer) {
      onCalculPointRanked();
    }
  }, [currentAnswer]);
  //Récupération theme et sous theme ds ordre dutilisation
  const fetchTopCollection = async () => {
    try {
      setIsBusy(true);
      const res = await axios.get(`/rankings/top-collection`);
      setTopThemes(res.data.themes);
      setTopSousThemes(res.data.sousThemes);
      setRandomThemes(res.data.randomSousThemes);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  //récupération questionnaire
  const fetchNewGame = async () => {
    try {
      resetGame();
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
        console.log(res.data);
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
  const fetchPrivateNewGame = async (user1, user2) => {
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
        params.user1 = user1;
        params.user2 = user2;

        const res = await axios.get(`/new-private-game/${currentLevel}`, {
          params,
        });
        console.log(res);
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
  console.log({ topThemes });
  console.log({ topSousThemes });
  console.log({ randomThemes });
  const saveBadAnswer = (currentQuestionData, currentAnswer) => {
    setBadAnswers((prevBadAnswers) => ({
      ...prevBadAnswers,
      [currentQuestion]: {
        question: currentQuestionData,
        selectedAnswer: currentAnswer,
      },
    }));
  };

  // const onCalculPointSmat = () => {
  //   let points = 0;
  //   if (
  //     currentAnswerSmat &&
  //     currentAnswerSmat.is_correct === 1 &&
  //     timeRemaining > 0
  //   ) {
  //     switch (currentSmatQuestion.level_id) {
  //       case 1:
  //         points = calculatePoints(timeRemaining, 1);
  //         break;
  //       case 2:
  //         points = calculatePoints(timeRemaining, 2);
  //         break;
  //       default:
  //         points = calculatePoints(timeRemaining, 3);
  //         break;
  //     }
  //   }
  //   setCurrentPointsSmat(points);
  // };

  const saveResultCurrentQuestionSmat = async (smat, answer) => {
    console.log({ timeRemaining });
    console.log({ answer }); // Afficher la réponse reçue
    let res = 0; // Initialiser res

    if (answer && answer.is_correct === 1 && timeRemaining > 0) {
      console.log("ok");
      switch (currentSmatQuestion.level_id) {
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
    }

    // Utilisation de la fonction de rappel pour s'assurer que la mise à jour de l'état est terminée
    setCurrentPointsSmat((prevPointsSmat) => prevPointsSmat + res);
    console.log({ currentPointsSmat });

    // Appel de axios.post une fois que l'état est mis à jour
    try {
      axios.post(
        `smats/${smat.id}/save-result/${user.id}`,
        {
          newScore: res, // Utilisation de currentPointsSmat mis à jour
          newCurrentPointsMax: LEVELS[currentSmatQuestion.level_id],
        },
        {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        }
      );
    } catch (error) {
      console.error(error);
    }
  };
  const resetSmat = () => {
    setSmatUsers(null);
    setSmat(null);
    setIsSmatFinished(false);
    setCurrentPointsSmat(0);

    setTimeRemaining(QUESTION_TIMER_DURATION / 1000);
    // setQuestions();
    // fetchData();
  };

  //Calcule des points gagné par questions
  const onCalculPointRanked = () => {
    setCurrentQuestionData(questionsRanked[currentQuestion]);
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
      const sousThemeId =
        currentSousTheme !== null ? parseInt(currentSousTheme) : null;

      await axios.post(
        `rankings/save-stats`,
        {
          result_quiz: resultat,
          time_quiz: totalTime,
          user_id: user.id,
          sous_theme_id: sousThemeId,
          theme_id: currentTheme.id,
          level: currentLevel,
        },
        {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        }
      );
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
    smat,
    currentPointsSmat,
    setSmat,
    currentAnswerSmat,
    setCurrentAnswerSmat,
    smatUsers,
    currentSmatQuestion,
    currentSmatAnswers,
    pointsMaxSmat,
    // onCalculPointSmat,
    setPointsMaxSmat,
    saveResultCurrentQuestionSmat,
    setCurrentQuestionData,
    setCurrentSmatAnswers,
    setCurrentSmatQuestion,
    setSmatUsers,
    fetchPrivateNewGame,
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
    resetSmat,
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
