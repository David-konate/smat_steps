import React, { useState, useEffect, useMemo } from "react";
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
  InputBase,
} from "@mui/material";
import { useNavigate } from "react-router-dom";
import { useGameContext } from "../../context/GameProvider";
import axios from "axios";
import { useUserContext } from "../../context/UserProvider";
import MessageDialog from "./MessageDialog";

const MessageDualPart = ({ open, onClose }) => {
  const navigate = useNavigate();
  const [isBusy, setIsBusy] = useState(true);
  const [openDialog, setOpenDialog] = useState(false);
  const [searchTextPseudo, setSearchTextPseudo] = useState("");
  const [message, setMessage] = useState(null); // State to hold the message
  const [messageDialogOpen, setMessageDialogOpen] = useState(false); // State to control MessageDialog visibility

  const {
    setThemes,
    setSousThemes,
    currentSousTheme,
    currentTheme,
    fetchPrivateNewGame,
    resetGame,
    currentLevel,
  } = useGameContext();
  const { friends, user } = useUserContext();

  useEffect(() => {
    if (!user) {
      navigate("/login");
    } else {
      fetchData();
    }
  }, [user]);

  const fetchData = async () => {
    try {
      const resST = await axios.get(`/sous-themes`);
      const resT = await axios.get(`/themes`);
      setThemes(resT.data);
      setSousThemes(resST.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const handlePseudoChange = (selectedPseudo) => {
    setSearchTextPseudo(selectedPseudo);
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

  const handleCloseDialog = () => {
    setOpenDialog(false);
  };

  const onClick = async () => {
    const selectedFriendId = filteredPseudos.find(
      (friend) => friend.user_pseudo === searchTextPseudo
    )?.id;

    if (selectedFriendId && currentTheme) {
      try {
        await fetchPrivateNewGame(user.id, selectedFriendId);
        navigate(`/profil/${user.slug}`);
      } catch (error) {
        // En cas d'erreur, ouvrir la boîte de dialogue d'erreur
        setOpenDialog(true);
      }
    } else {
      setOpenDialog(true);
    }
  };

  return isBusy ? (
    <Box
      sx={{
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
        height: "100vh",
      }}
    >
      <CircularProgress />
    </Box>
  ) : (
    <>
      <Dialog className="theme-new-ranked" open={open} onClose={onClose}>
        <Box
          sx={{ padding: 3 }}
          className="card-theme-new-ranked"
          textAlign={"center"}
        >
          <Typography variant="h1" className="title">
            <span className="text-with-shadow">Duel</span>
          </Typography>
          <Typography className="text" mt={2} variant="h6">
            Vous vous apprêtez à lancer un nouveau duel
          </Typography>
          <Box mt={2}>
            <Card className="card">
              <Typography className="label" variant="h3">
                {currentSousTheme?.sous_theme || currentTheme?.theme}
              </Typography>
            </Card>
          </Box>
          <Typography className="text" mt={2} variant="h6">
            Niveau
          </Typography>
          <Box
            mt={2}
            width={"30%"}
            style={{ marginLeft: "auto", marginRight: "auto" }}
          >
            <Card className="card">
              <Typography className="level" variant="h3">
                {currentLevel}
              </Typography>
            </Card>
          </Box>
          <Typography className="text" mt={2} variant="h6">
            Contre
          </Typography>
          <Box
            mt={2}
            style={{ maxHeight: "80px", overflowY: "auto", borderRadius: 5 }}
          >
            <InputBase
              sx={{ marginBottom: 2 }}
              variant="standard"
              fullWidth
              type="text"
              value={searchTextPseudo}
              onChange={(e) => setSearchTextPseudo(e.target.value)}
              placeholder="Rechercher un adversaire..."
            />
            <Card className="card" p={1}>
              {friends && filteredPseudos.length > 0 ? (
                filteredPseudos.map((friend, index) => (
                  <Box
                    key={index}
                    style={{ cursor: "pointer" }}
                    className="li"
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
            </Card>
          </Box>
          <Dialog open={openDialog} onClose={handleCloseDialog}>
            <DialogTitle>Erreur</DialogTitle>
            <DialogContent>
              <Typography>
                Veuillez sélectionner un adversaire et un thème.
              </Typography>
            </DialogContent>
            <DialogActions>
              <Button onClick={handleCloseDialog}>Fermer</Button>
            </DialogActions>
          </Dialog>
          <Dialog open={messageDialogOpen} onClose={handleCloseDialog}>
            <DialogTitle>Succès</DialogTitle>
            <DialogContent>
              <Typography>{message}</Typography>
            </DialogContent>
            <DialogActions>
              <Button onClick={onClose}>Fermer</Button>
            </DialogActions>
          </Dialog>
          <DialogActions>
            <Button
              className="bouton"
              onClick={onClick}
              color="primary"
              autoFocus
            >
              Lancer
            </Button>
          </DialogActions>
        </Box>
      </Dialog>
    </>
  );
};

export default MessageDualPart;
