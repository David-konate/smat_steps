import axios from "axios";
import React, { createContext, useContext, useMemo, useState } from "react";
import { useGameContext } from "./GameProvider"; // Import du contexte du jeu, utilisé pour obtenir le niveau actuel du joueur
import Cookies from "js-cookie";

// Création du contexte utilisateur
const UserContext = createContext({});

// Création du fournisseur de contexte utilisateur
export const UserProvider = ({ children }) => {
  // Déclaration des différents états de l'utilisateur et de ses interactions

  const [friendPending, setFriendPending] = useState(null); // Les demandes d'amis en attente
  const [friendSent, setFriendSent] = useState(null); // Les demandes d'amis envoyées
  const [friends, setFriends] = useState(null); // Les amis de l'utilisateur
  const [newSmats, setNewSmats] = useState(null); // Les nouveaux Smats
  const [openSmats, setOpenSmats] = useState(null); // Les Smats ouverts
  const [user, setUser] = useState(null); // L'utilisateur actuel

  // Obtention du niveau actuel du jeu à partir du contexte du jeu
  const { currentLevel } = useGameContext();

  // Récupération du token utilisateur depuis le stockage local, s'il existe
  const userToken = useMemo(() => {
    const token = Cookies.get("token");
    return token ? token : null;
  }, []);

  // Fonction d'authentification pour récupérer les données de l'utilisateur depuis le backend
  const authentification = async () => {
    try {
      // Requête pour récupérer les données de l'utilisateur en fonction de son niveau actuel dans le jeu
      const res = await axios.get(`/me/${currentLevel}`);
      // Mise à jour des états de l'utilisateur avec les données récupérées depuis le backend
      setUser(res.data.user);
      setFriendPending(res.data.friendPending);

      setFriendSent(res.data.friendSent);
      setFriends(res.data.friends);
      setNewSmats(res.data.newSmats);
      setOpenSmats(res.data.openSmats);
    } catch (error) {
      console.log(error); // Gestion des erreurs potentielles
      if (error.status === 401) {
        console.log("true"); // S'il y a une erreur 401, l'utilisateur n'est pas authentifié
      }
    }
  };

  // Rendu du fournisseur de contexte utilisateur avec les valeurs fournies aux composants enfants
  return (
    <UserContext.Provider
      value={{
        friendPending,
        friendSent,
        user,
        userToken,
        friends,
        newSmats,
        openSmats,
        setFriends,
        setFriendSent,
        setFriendPending,
        setUser,
        authentification,
      }}
    >
      {children}{" "}
      {/* Rendu des composants enfants enveloppés dans le contexte utilisateur */}
    </UserContext.Provider>
  );
};

// Hook personnalisé pour utiliser le contexte utilisateur dans les composants enfants
export const useUserContext = () => useContext(UserContext);
