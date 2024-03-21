import React, { useState, useEffect } from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
  Typography,
  Box,
  Card,
  CircularProgress,
} from "@mui/material";

import { useNavigate } from "react-router-dom";
import { useGameContext } from "../../context/GameProvider";
import axios from "axios";

const MessageThemeNewRanged = ({
  open,
  onClose,

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
    setThemes,
    setSousThemes,

    currentSousTheme,
    currentTheme,
    fetchNewGame,
    resetGame,
    currentLevel,
  } = useGameContext();

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

  const handleCloseDialog = () => {
    setOpenDialog(false);
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Dialog className="theme-new-ranked" open={open} onClose={onClose}>
      <Box
        sx={{ padding: 5 }}
        className="card-theme-new-ranked"
        textAlign={"center"}
      >
        <Typography variant="h1" className="title">
          <span className="text-with-shadow">Partie classée</span>
        </Typography>
        <Typography className="text" mt={2} variant="h6">
          Vous vous apprêtez à lancer un nouveau quizz
        </Typography>{" "}
        <Box mt={2}>
          <Card className="card">
            <Typography className="label" variant="h3">
              {currentSousTheme?.sous_theme || currentTheme?.theme}
            </Typography>
          </Card>
        </Box>
        <Typography className="text" mt={2} variant="h6">
          niveau
        </Typography>{" "}
        <Box
          mt={2}
          width={"30%"}
          style={{ marginLeft: " auto", marginRight: " auto" }}
        >
          {" "}
          <Card className="card">
            <Typography className="level" variant="h3">
              {currentLevel}
            </Typography>
          </Card>
        </Box>
        <Dialog open={openDialog} onClose={handleCloseDialog}>
          <DialogTitle>Confirmation</DialogTitle>
          <DialogContent>
            Êtes-vous sûr de vouloir lancer le quizz ?
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

export default MessageThemeNewRanged;
