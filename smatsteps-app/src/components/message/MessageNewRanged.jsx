import React, { useState, useMemo, useEffect } from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
  InputBase,
  Typography,
  IconButton,
  Box,
  Container,
  Card,
} from "@mui/material";
import { useNavigate } from "react-router-dom";
import { useGameContext } from "../../context/GameProvider";
import LevelBox from "../LevelBox";
import axios from "axios";

const MessageNewRanged = ({
  open,
  onClose,
  title,
  message,
  redirection = null,
}) => {
  const navigate = useNavigate();
  const onClick = () => {
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
  } = useGameContext();
  const [searchTextTheme, setSearchTextTheme] = useState("");
  const [searchTextSousTheme, setSearchTextSousTheme] = useState("");
  const [isBusy, setIsBusy] = useState(false);
  const [openDialog, setOpenDialog] = useState(false);

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

  const handleCloseDialog = () => {
    setOpenDialog(false);
  };

  return (
    <Dialog sx className="new-ranked" open={open} onClose={onClose}>
      <Box sx={{ padding: 3 }} className="card-new-ranked">
        <Typography
          sx={{
            fontSize: {
              xs: "2.5rem",
              sm: "3rem",
              md: "3.5rem",
              lg: "4rem",
              xl: "4.5rem",
            },
          }}
          className="title"
        >
          Partie classé
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
              className="li"
              key={sousTheme.id}
              onClick={() => handleSousThemeChange(sousTheme)}
            >
              {sousTheme.sous_theme}
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
            lancer
          </Button>
        </DialogActions>
      </Box>
    </Dialog>
  );
};

export default MessageNewRanged;
