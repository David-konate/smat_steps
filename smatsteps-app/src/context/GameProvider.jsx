import { useEffect, useState, createContext, useContext } from "react";
import axios from "axios";

// Création du contexte de jeu
const GameContext = createContext({});

// Définition du composant fournisseur de contexte
export const GameProvider = ({ children }) => {
  // Déclaration des états pour stocker les données du jeu
  const [topThemes, setTopThemes] = useState([]);
  const [topSousThemes, setTopSousThemes] = useState([]);

  const [themes, setThemes] = useState([]);
  const [questions, setQuestions] = useState([]);
  const [sousThemes, setSousThemes] = useState([]);
  const [randomThemes, setRandomThemes] = useState([]);
  const [topUserRanking, setTopUserRanking] = useState();
  const [isBusy, setIsBusy] = useState(false);
  const [currentTheme, setCurrentTheme] = useState(null);
  const [currentSousTheme, setCurrentSousTheme] = useState(null);
  const [currentThemes, setCurrentThemes] = useState(null);
  const [currentSousThemes, setCurrentSousThemes] = useState(null);
  const [currentLevel, setCurrentLevel] = useState(() => {
    const storedLevel = localStorage.getItem("level");
    return storedLevel ? parseInt(storedLevel) : 2;
  });

  // Fonction pour charger les données du jeu depuis le serveur
  useEffect(() => {
    fetchNewGame();
    fetchTopCollection(); // Appel de la fonction pour charger les données
  }, []); // useEffect exécuté uniquement après le premier rendu

  const fetchTopCollection = async () => {
    try {
      const res = await axios.get(`/rankings/top-collection`);
      setTopThemes(res.data.themes);
      setTopSousThemes(res.data.sousThemes);
      setRandomThemes(res.data.randoms);
      console.log(res.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const fetchNewGame = async () => {
    try {
      setIsBusy(true);
      console.log({ currentLevel }, { currentTheme }, { currentSousTheme });
      const res = await axios.get(`/new-game/${currentLevel}`, {
        params: {
          theme: currentTheme.id,
          sousTheme: currentSousTheme.id,
        },
      });
      console.log(res.data);
      setQuestions(res.data);
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  };

  // Mise à disposition des données du contexte et des fonctions de mise à jour
  const contextValue = {
    topThemes,
    topSousThemes,
    themes,
    sousThemes,
    randomThemes,
    topUserRanking,
    isBusy,
    currentTheme,
    currentThemes,
    currentSousThemes,
    currentSousTheme,
    currentLevel,
    setThemes,
    setSousThemes,
    setCurrentTheme,
    setCurrentSousTheme,
    setCurrentThemes,
    setCurrentSousThemes,
    setTopUserRanking,
    setCurrentLevel,
    fetchNewGame,
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
