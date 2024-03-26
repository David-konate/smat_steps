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

const MessageNewPrivate = ({
  open,
  onClose,
  title,
  message,
  redirection = "/partie-classe",
}) => {
  const navigate = useNavigate();
  const onClick = () => {
    resetGame();
    fetchNewGame();
    onClose();
    if (redirection) {
      navigate(redirection);
    }
  };

  // Contenu de la carte CardNewRanked
  const {
    themes,
    sousThemes,
    setThemes,
    setSousThemes,
    setCurrentSousTheme,
    setCurrentTheme,
    currentSousTheme,
    currentTheme,
    fetchNewGame,
    resetGame,
  } = useGameContext();

  const [searchTextTheme, setSearchTextTheme] = useState("");
  const [searchTextSousTheme, setSearchTextSousTheme] = useState("");
  const [searchTextPseudo, setSearchTextPseudo] = useState("");
  const [isBusy, setIsBusy] = useState(false);
  const [openDialog, setOpenDialog] = useState(false);
  const { friends } = useUserContext(); // Utilisez le hook useUserContext pour obtenir l'état d'authentification
  const [currentFriends, setCurrentFriends] = useState([friends]);

  useEffect(() => {
    fetchData();
  }, []);

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
    return friends.filter(
      (friend) =>
        typeof searchTextTheme === "string" &&
        friend.user.user_pseudo
          .toLowerCase()
          .includes(searchTextTheme.toLowerCase())
    );
  }, [themes, searchTextTheme]);
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

  const handlePseudoChange = (friendId) => {
    const friend = friends.find((friend) => friend.id === friendId);
    if (friend) {
      console.log(friend.user.user_pseudo);
      // Faites ce que vous avez à faire avec friend.user.user_pseudo
    } else {
      console.log("Ami introuvable ou friends est vide");
    }
  };

  const handleCloseDialog = () => {
    setOpenDialog(false);
  };
  console.log(friends[0].user.user_pseudo);
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
          {filteredPseudos.map((friend) => (
            <Box
              style={{ cursor: "pointer" }}
              className="li"
              key={friend.id}
              onClick={() => handlePseudoChange(friend?.user.user_pseudo)} // Correction ici
            >
              {friend.user?.user_pseudo}
            </Box>
          ))}
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
          >
            Inviter
          </Button>
        </DialogActions>
      </Box>
    </Dialog>
  );
};

export default MessageNewPrivate;
