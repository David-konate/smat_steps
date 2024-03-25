// UserProvider.jsx
import axios from "axios";
import React, { createContext, useContext, useMemo, useState } from "react";
import { useGameContext } from "./GameProvider";

const UserContext = createContext({});

export const UserProvider = ({ children }) => {
  const [user, setUser] = useState(null);
  const [friendPending, setFriendPending] = useState(null);
  const [friendSent, setFriendSent] = useState(null);
  const [friends, setFriends] = useState(null);
  const [isBusy, setIsBusy] = useState(true);

  const { currentLevel } = useGameContext();
  const userToken = useMemo(() => {
    return localStorage.getItem("token");
  }, [localStorage.getItem("token")]);

  function authentification() {
    try {
      axios.get(`/me/${currentLevel}`).then((res) => {
        setUser(res.data.user);
        setFriendPending(res.data.friendPending);
        setFriendSent(res.data.friendSent);
        setFriends(res.data.friends);
        console.log(res.data.friends);
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
        friendPending,
        friendSent,
        user,
        userToken,
        friends,
        setFriends,
        setFriendSent,
        setFriendPending,
        setUser,
        authentification,
      }}
    >
      {children}
    </UserContext.Provider>
  );
};

export const useUserContext = () => useContext(UserContext);
