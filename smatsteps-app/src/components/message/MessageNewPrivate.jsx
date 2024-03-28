import React, { useState, useMemo, useEffect } from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
  InputBase,
  Typography,
  Box,
} from "@mui/material";

import { useNavigate } from "react-router-dom";
import { useGameContext } from "../../context/GameProvider";
import LevelBox from "../LevelBox";
import axios from "axios";
import { useUserContext } from "../../context/UserProvider";
import MessageDialog from "./MessageDialog";
import { Redirect } from "react-router-dom";

const MessageNewPrivate = ({
  open,
  onClose,
  title,
  message,
  redirection = "/partie-classe",
}) => {
  const navigate = useNavigate();
  const [errorOpen, setErrorOpen] = useState(false); // State pour gérer l'affichage du MessageDialog
  const {
    themes,
    sousThemes,
    setThemes,
    setSousThemes,
    setCurrentSousTheme,
    setCurrentTheme,
    currentSousTheme,
    currentTheme,
    fetchPrivateNewGame,
    // resetGame,
  } = useGameContext();

  const onClick = () => {
    if (filteredPseudos.length > 0 && currentTheme && searchTextPseudo) {
      const selectedFriendId = filteredPseudos.find(
        (friend) => friend.user_pseudo === searchTextPseudo
      )?.id;
      // Si les conditions sont remplies, effectuez votre action normale
      fetchPrivateNewGame(user.id, selectedFriendId);
      onClose();
      if (redirection) {
        // navigate(redirection);
      }
    } else {
      // Sinon, affichez le MessageDialog
      setErrorOpen(true);
    }
  };

  // Contenu de la carte CardNewRanked

  const [searchTextTheme, setSearchTextTheme] = useState("");
  const [searchTextSousTheme, setSearchTextSousTheme] = useState("");
  const [searchTextPseudo, setSearchTextPseudo] = useState("");
  const [isBusy, setIsBusy] = useState(false);
  const [openDialog, setOpenDialog] = useState(false);
  const { friends, user } = useUserContext(); // Utilisez le hook useUserContext pour obtenir l'état d'authentification

  useEffect(() => {
    // Vérifie si l'utilisateur est connecté, sinon redirige vers la page de connexion
    if (!user) {
      navigate("/login");
    } else {
      fetchData();
    }
  }, [user]);

  console.log(friends);
  const fetchData = async () => {
    try {
      const resST = await axios.get(`sous-themes`);
      const resT = await axios.get(`themes`);
      setThemes(resT.data);
      setSousThemes(resST.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const filteredPseudos = useMemo(() => {
    return friends?.filter(
      (friend) =>
        typeof searchTextPseudo === "string" &&
        friend.user_pseudo
          .toLowerCase()
          .includes(searchTextPseudo.toLowerCase())
    );
  }, [friends, searchTextPseudo]);

  const filteredThemes = useMemo(() => {
    return themes.filter(
      (theme) =>
        typeof searchTextTheme === "string" &&
        theme.theme.toLowerCase().includes(searchTextTheme.toLowerCase())
    );
  }, [themes, searchTextTheme]);

  const filteredSousThemes = useMemo(() => {
    if (searchTextSousTheme.trim() === "") {
      return sousThemes.filter((sousTheme) =>
        currentTheme ? sousTheme.theme_id === currentTheme.id : true
      );
    } else {
      return sousThemes.filter(
        (sousTheme) =>
          sousTheme.sous_theme
            .toLowerCase()
            .includes(searchTextSousTheme.toLowerCase()) &&
          (currentTheme ? sousTheme.theme_id === currentTheme.id : true)
      );
    }
  }, [sousThemes, searchTextSousTheme, currentTheme]);

  const handleThemeChange = (theme) => {
    setSearchTextTheme(theme === currentTheme ? "" : theme.theme);
    setCurrentTheme(theme === currentTheme ? null : theme);
    setCurrentSousTheme(null);
  };

  const handleSousThemeChange = (sousTheme) => {
    setSearchTextSousTheme(
      sousTheme === currentSousTheme ? "" : sousTheme.sous_theme
    );
    setCurrentSousTheme(sousTheme === currentSousTheme ? null : sousTheme);
  };

  const handlePseudoChange = (selectedPseudo) => {
    setSearchTextPseudo(selectedPseudo);
  };

  const handleCloseDialog = () => {
    setOpenDialog(false);
  };
  const onConfirmNewPrivateGame = async (smatId) => {
    try {
      await axios.post(`/smats/accept-dual/${smatId}`, null, {
        headers: {
          Authorization: `Bearer ${localStorage.getItem("token")}`,
        },
      });
    } catch (error) {
      console.error(
        "Erreur lors de la confirmation de la nouvelle partie privée :",
        error
      );
    }
  };

  return (
    <Dialog className="new-ranked" open={open} onClose={onClose}>
      <Box sx={{ padding: 3 }} className="card-new-ranked">
        <Typography variant="h2" className="title">
          Partie Privée
        </Typography>
        <InputBase
          className="sous-theme"
          sx={{ marginTop: 3 }}
          variant="standard"
          fullWidth
          type="text"
          value={searchTextTheme}
          onChange={(e) => setSearchTextTheme(e.target.value)}
          placeholder="Rechercher un thème..."
        />
        <Box className="ul" style={{ maxHeight: "80px", overflowY: "auto" }}>
          {filteredThemes.map((theme) => (
            <Box
              style={{ cursor: "pointer" }}
              className="li"
              key={theme.id}
              onClick={() => handleThemeChange(theme)}
            >
              {theme.theme}
            </Box>
          ))}
        </Box>
        <InputBase
          sx={{ marginTop: 3 }}
          className="sous-theme"
          variant="standard"
          fullWidth
          type="text"
          value={searchTextSousTheme}
          onChange={(e) => setSearchTextSousTheme(e.target.value)}
          placeholder="Rechercher un sous-thème..."
        />
        <Box className="ul" style={{ maxHeight: "80px", overflowY: "auto" }}>
          {filteredSousThemes.map((sousTheme) => (
            <Box
              style={{ cursor: "pointer" }}
              className="li"
              key={sousTheme.id}
              onClick={() => handleSousThemeChange(sousTheme)}
            >
              {sousTheme.sous_theme}
            </Box>
          ))}
        </Box>
        <InputBase
          sx={{ marginTop: 3 }}
          className="sous-theme"
          variant="standard"
          fullWidth
          type="text"
          value={searchTextPseudo}
          onChange={(e) => setSearchTextPseudo(e.target.value)}
          placeholder="Rechercher un adversaire..."
        />
        <Box className="ul" style={{ maxHeight: "80px", overflowY: "auto" }}>
          {friends && filteredPseudos.length > 0 ? (
            filteredPseudos.map((friend) => (
              <Box
                style={{ cursor: "pointer" }}
                className="li"
                key={friend.id}
                onClick={() => handlePseudoChange(friend.user_pseudo)}
              >
                {friend.user_pseudo}
              </Box>
            ))
          ) : (
            <Typography className="li" variant="body2">
              Pas d'amis trouvé
            </Typography>
          )}
        </Box>

        <Box sx={{ color: "black" }} mt={2}>
          <LevelBox />
        </Box>
        <Dialog open={openDialog} onClose={handleCloseDialog}>
          <DialogTitle>Confirmation</DialogTitle>
          <DialogContent>
            Êtes-vous sûr de vouloir lancer le quiz ?
          </DialogContent>
          <DialogActions>
            <Button onClick={handleCloseDialog}>Annuler</Button>
            <Button onClick={onClick} color="primary">
              Confirmer
            </Button>
          </DialogActions>
        </Dialog>

        <DialogActions>
          <Button
            className="bouton"
            onClick={onClick}
            color="primary"
            autoFocus
            disabled={filteredPseudos?.length === 0 || !currentTheme}
          >
            Inviter
          </Button>
        </DialogActions>
      </Box>
      <MessageDialog
        open={errorOpen}
        onClose={() => setErrorOpen(false)} // Fermer le MessageDialog
        title="Erreur"
        message="Veuillez sélectionner un adversaire et un thème."
      />
    </Dialog>
  );
};

export default MessageNewPrivate;
