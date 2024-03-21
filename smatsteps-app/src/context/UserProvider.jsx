// UserProvider.jsx
import axios from "axios";
import React, { createContext, useContext, useMemo, useState } from "react";
import { useGameContext } from "./GameProvider";

const UserContext = createContext({});

export const UserProvider = ({ children }) => {
  const [user, setUser] = useState(null);
  const [userRankings, setUserRankings] = useState([]);
  const [userTopRankings, setUserTopRankings] = useState(null);
  const [userRankingsCount, setUserRankingsCount] = useState(null);
  const [userLatestRankings, setUserLastetRankings] = useState(null);
  const [isBusy, setIsBusy] = useState(true);

  const { currentLevel } = useGameContext();
  const userToken = useMemo(() => {
    return localStorage.getItem("token");
  }, [localStorage.getItem("token")]);

  const shadowColors = [
    "rgba(218, 165, 32, 0.2)",
    "rgba(192, 192, 192, 0.2)",
    "rgba(205, 127, 50, 0.2)",
  ];

  function authentification() {
    try {
      axios.get(`/me/${currentLevel}`).then((res) => {
        setUser(res.data.user);
      });
    } catch (error) {
      console.log(error);
    } finally {
      setIsBusy(false);
    }
  }

  return (
    <UserContext.Provider
      value={{
        userLatestRankings,
        userRankingsCount,
        userTopRankings,
        userRankings,
        user,
        userToken,
        setUser,
        authentification,
      }}
    >
      {children}
    </UserContext.Provider>
  );
};

export const useUserContext = () => useContext(UserContext);
