import React, { useEffect, useState } from "react";
import { useUserContext } from "../../context/UserProvider";
import axios from "axios";
import {
  CircularProgress,
  Typography,
  Paper,
  Container,
  Box,
  CardContent,
  Avatar,
  Card,
  Button,
  IconButton,
} from "@mui/material";
import { useNavigate, useParams } from "react-router-dom";
import { displayImage, firstLetterUppercase } from "../../utils";
import { useGameContext } from "../../context/GameProvider";
import LevelBox from "../../components/LevelBox";
import { Stack } from "@mui/system";
import ExpandMoreIcon from "@mui/icons-material/ExpandMore";
import MessageUpdateProfil from "../../components/message/MessageUpdateProfil";
import RankingsListProfil from "../../components/list/RankingListProfil";
import PersonAddIcon from "@mui/icons-material/PersonAdd";
import PersonAddDisabledIcon from "@mui/icons-material/PersonAddDisabled";
import ConfirmationDialog from "../../components/message/ConfirmationDialog";
import SettingsAccessibilityIcon from "@mui/icons-material/SettingsAccessibility";
import GroupIcon from "@mui/icons-material/Group";
import MessageSentFriend from "../../components/message/MessageSentFriend";
import MessageListFriend from "../../components/message/MessageListFriend";

const Profil = () => {
  const { id } = useParams();
  const { user, friendSent, friendSend, setFriendSent, friends, setFriends } =
    useUserContext();
  const [isBusy, setIsBusy] = useState(true);
  const { currentLevel, currentTheme, currentSousTheme } = useGameContext();
  const [userProfil, setuserProfil] = useState();
  const [userRankings, setUserRankings] = useState();
  const [friend, setFriend] = useState(false);

  const [isOpen, setIsOpen] = useState(false);
  const [isSentFriendDialogOpen, setIsSentFriendDialogOpen] = useState(false);
  const [isEditOpen, setIsEditOpen] = useState(false);
  const [isEditOpenDisableFriend, setIsEditOpenDisableFriend] = useState(false);
  const [isOpenListFriend, setIsOpenListFriend] = useState(false);
  const navigate = useNavigate();
  const params = useParams();

  useEffect(() => {
    fetchData();
  }, [currentLevel, params, friendSend, friendSent]);
  const fetchData = async () => {
    try {
      const res = await axios.get(`users/${id}`, {
        params: {
          currentLevel: currentLevel,
          currentSousTheme: currentSousTheme,
          currentTheme: currentTheme,
        },
      });
      const friend = await axios.get(`users/${id}/is-friend-with/${user.id}`);
      console.log(friend.data.friend);
      setFriend(friend.data.friend);
      setuserProfil(res.data.user);
      setUserRankings(res.data.rankings);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const handleCloseEdit = () => {
    setIsEditOpen(false);
  };

  // ConfirmationDialog pour ajouter un ami
  const handleAddFriendClick = () => {
    setIsEditOpenDisableFriend(true);
  };

  // MessageSentFriend
  const handlesOpenListFriend = () => {
    setIsOpenListFriend(!isOpenListFriend);
  };

  // MessageSentFriend
  const handleSentFriendDialogToggle = () => {
    setIsSentFriendDialogOpen(!isSentFriendDialogOpen);
  };

  const shadowColors = [
    "rgba(218, 165, 32, 0.2)",
    "rgba(192, 192, 192, 0.2)",
    "rgba(205, 127, 50, 0.2)",
  ];

  const toggleList = () => {
    setIsOpen(!isOpen);
  };
  const [isDialogOpen, setIsDialogOpen] = useState(false);

  const handleOpenDialog = () => {
    setIsDialogOpen(true);
  };

  const handleCloseDialog = () => {
    setIsDialogOpen(false);
  };
  // Assurez-vous que la fonction deleteFriendRequest est correctement appelée dans le ConfirmationDialog

  const addNewFriend = async () => {
    try {
      if (!friend) {
        // Vérifie si l'utilisateur n'est pas déjà ami
        const response = await axios.post(
          `users/${user.id}/add-friend-with/${userProfil.id}`
        );
        setIsEditOpenDisableFriend(false);
        navigate(`/profil/${user.id}`);
        console.log(response.data);
      }
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <Paper elevation={3} style={{ padding: "20px", margin: "20px" }}>
      {isBusy ? (
        <CircularProgress />
      ) : (
        <Container>
          <Box sx={{ position: "relative" }}>
            <Stack
              direction={"column"}
              gap={1}
              sx={{ position: "absolute", top: 0, left: 0 }}
            >
              <Stack>
                {" "}
                {userProfil.id === user.id && friendSent?.length > 0 ? (
                  <IconButton onClick={handleSentFriendDialogToggle}>
                    <SettingsAccessibilityIcon style={{ color: "red" }} />
                    <Typography
                      className="numb-pending-friend"
                      style={{
                        position: "absolute",
                        top: 1,
                        right: 0,
                        color: "red",
                        fontSize: "0.7rem",
                      }}
                    >
                      {friendSent.length}
                    </Typography>
                  </IconButton>
                ) : (
                  <></>
                )}
              </Stack>
              <Stack>
                {" "}
                {userProfil.id === user.id && friends?.length > 0 ? (
                  <IconButton onClick={handlesOpenListFriend}>
                    <GroupIcon
                      style={{ color: "var(--secondary-color-special)" }}
                    />
                  </IconButton>
                ) : (
                  <></>
                )}
              </Stack>
            </Stack>

            {userProfil.id !== user.id && (
              <IconButton
                sx={{ position: "absolute", top: 0, right: 0 }}
                onClick={handleAddFriendClick}
              >
                <PersonAddIcon
                  style={{ color: "var(--secondary-color-special)" }}
                />
              </IconButton>
            )}

            {userProfil.id !== user.id && friend === true && (
              <IconButton
                sx={{ position: "absolute", top: 0, right: 0 }}
                onClick={handleSentFriendDialogToggle}
              >
                <PersonAddDisabledIcon
                  style={{ color: "var(--secondary-color-special)" }}
                />
              </IconButton>
            )}
          </Box>
          {user ? (
            <Box
              sx={{
                display: "flex",
                flexDirection: "column",
                alignItems: "center",
              }}
            >
              <LevelBox />
              <Box mt={2}>
                <Card
                  className="player-card"
                  style={{
                    borderRadius: 20,
                    display: "flex",
                    justifyContent: "center",
                    alignItems: "center",
                    boxShadow: `0px 4px 8px var(--secondary-color-special)`,
                    border: `3px solid var(--primary-color-special)`,
                    background: "var(--secondary-color-special)",
                  }}
                >
                  <CardContent
                    className="player-info"
                    sx={{ textAlign: "center" }}
                  >
                    <Box
                      sx={{
                        display: "flex",
                        justifyContent: "center",
                        alignItems: "center",
                      }}
                    >
                      <Avatar
                        sx={{
                          width: 100,
                          height: 100,
                          boxShadow: "0px 4px 8px rgba(0, 0, 0, 0.2)",
                        }}
                        src={displayImage(userProfil.user_image)}
                      />
                    </Box>
                    <Typography
                      mt={2}
                      variant="body1"
                      className="player-pseudo"
                    >
                      {userProfil &&
                        firstLetterUppercase(userProfil.user_pseudo)}
                    </Typography>
                  </CardContent>
                </Card>
              </Box>
              <Typography mt={3} variant="h4">
                Top scores
              </Typography>
              <Stack alignItems="center" direction={"row"} gap={3} mt={3}>
                {userRankings.length > 0 ? (
                  userRankings
                    .sort((a, b) => b.result_quiz - a.result_quiz) // Trie par ordre ascendant de result_quiz
                    .slice(0, 3) // Récupère les trois premiers éléments
                    .map((ranking, index) => (
                      <Card
                        key={index}
                        className="card-top-score"
                        style={{
                          borderRadius: 20,
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                          boxShadow: `0px 4px 8px ${shadowColors[index]}`, // Utilisation de la couleur d'ombre correspondante
                          border: `3px solid ${shadowColors[index]}`,
                          background: `${shadowColors[index]}`,
                        }}
                      >
                        <CardContent style={{ textAlign: "center" }}>
                          <Typography
                            className="text-ranking-score"
                            variant="h5"
                          >
                            {ranking.sous_theme?.sous_theme ||
                              ranking.theme?.theme}
                          </Typography>
                          <Stack
                            mt={1}
                            alignItems="center"
                            className="text-stack-score"
                            direction={"row"}
                            gap={1}
                          >
                            {" "}
                            <Typography variant="h6" className="text-stack">
                              Score :
                            </Typography>
                            <Typography className="text-score" variant="h5">
                              {ranking?.result_quiz}
                            </Typography>
                            <Typography variant="h6" className="text-stack">
                              %
                            </Typography>
                          </Stack>
                        </CardContent>
                      </Card>
                    ))
                ) : (
                  <Typography variant="body1">Aucun score trouvé</Typography>
                )}
              </Stack>
              <Box mt={2}>
                {" "}
                <Button onClick={toggleList}>
                  <ExpandMoreIcon
                    style={{ color: "var(--secondary-color-special)" }}
                  />
                </Button>
              </Box>
              <Box mt={2}>
                {" "}
                {isOpen && <RankingsListProfil rankings={userRankings} />}
              </Box>
            </Box>
          ) : (
            <Typography variant="body1">Aucun utilisateur connecté</Typography>
          )}
        </Container>
      )}
      <MessageListFriend
        open={isOpenListFriend}
        onClose={handlesOpenListFriend}
        friends={friends}
      />
      <MessageSentFriend
        open={isSentFriendDialogOpen}
        onClose={handleSentFriendDialogToggle} // Assurez-vous que la fonction onClose est correctement définie
        friendSent={friendSent}
        user={user}
        updateFriendSent={setFriendSent}
      />
      {
        <MessageUpdateProfil
          userProfil={userProfil} // Passer les informations sur le profil de l'utilisateur
          open={isEditOpen} // Indiquer si le composant doit être ouvert ou fermé
          onClose={handleCloseEdit} // Gérer la fermeture du composant
          redirection={null} // Ajouter une éventuelle redirection après la modification du profil
          setuserProfil={setuserProfil} // Passer la fonction pour mettre à jour les informations du profil
        />
      }

      <ConfirmationDialog
        open={isEditOpenDisableFriend}
        onClose={() => setIsEditOpenDisableFriend(false)}
        onConfirm={() => addNewFriend}
        title="Confirmation"
        message={`Vous vous apprêtez à ajouter ${userProfil?.user_pseudo} à vos amis ?`}
      />
    </Paper>
  );
};

export default Profil;
