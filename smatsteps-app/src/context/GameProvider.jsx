import { useEffect, useState, createContext, useContext } from "react";
import axios from "axios";

const GameContext = createContext({});

export const GameProvider = ({ children }) => {
  const [topThemes, setTopThemes] = useState([]);
  const [topSousThemes, setTopSousThemes] = useState([]);
  const [randomThemes, setRandomThemes] = useState([]);
  const [isBusy, setIsBusy] = useState(false);
  const [currentLevel, setCurrentLevel] = useState(() => {
    const storedLevel = localStorage.getItem("level");
    return storedLevel ? parseInt(storedLevel) : 2;
  });

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
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

  return (
    <GameContext.Provider
      value={{
        topSousThemes,
        topThemes,
        randomThemes,
        currentLevel,
        setCurrentLevel,
      }}
    >
      {isBusy ? "Chargement..." : children}
    </GameContext.Provider>
  );
};
export const useGameContext = () => useContext(GameContext);
