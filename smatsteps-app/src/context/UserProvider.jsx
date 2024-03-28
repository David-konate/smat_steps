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
  const [newSmats, setNewSmats] = useState(null);
  const [isBusy, setIsBusy] = useState(true);

  const { currentLevel } = useGameContext();
  const userToken = useMemo(() => {
    const token = localStorage.getItem("token");
    return token ? token : null;
  }, []);

  function authentification() {
    try {
      axios.get(`/me/${currentLevel}`).then((res) => {
        setUser(res.data.user);
        setFriendPending(res.data.friendPending);
        setFriendSent(res.data.friendSent);
        setFriends(res.data.friends);
        setNewSmats(res.data.newSmats);
        console.log(res.data);
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
        newSmats,

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
