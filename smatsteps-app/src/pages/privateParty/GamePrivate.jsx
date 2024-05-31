import React, { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import { useGameContext } from "../../context/GameProvider";
import axios from "axios";
import { Box, Container, Stack } from "@mui/system";
import MessageDialog from "../../components/message/MessageDialog";
import {
  Card,
  CardActionArea,
  CardContent,
  CardMedia,
  CircularProgress,
  Grid,
  Typography,
} from "@mui/material";
import { convertToRoman, displayImage } from "../../utils";
import CompletionMessageSmat from "../../components/message/CompletionMessageSmat";
import CustomButton2 from "../../components/buttons/CustomButton2";

const Gameprivate = () => {
  const {
    smat,
    timeRemaining,
    smatUsers,
    setTimeRemaining,
    currentSmatQuestion,
    currentSmatAnswers,
    setCurrentSmatQuestion,
    setCurrentSmatAnswers,
    pointsMaxSmat,
    setPointsMaxSmat,
    saveResultCurrentQuestionSmat,
    currentAnswerSmat,
    setCurrentAnswerSmat,
  } = useGameContext();

  // État local pour le score du joueur et de l'adversaire, et autres variables d'état
  const [isBusy, setIsBusy] = useState(false);

  const [currentPointsMaxSmat, setCurrentPointsMaxSmat] = useState(null);
  const [itIsTurn, setItIsTurn] = useState(true);
  const [intervalId, setIntervalId] = useState(null);
  const navigate = useNavigate();

  // État local pour gérer l'ouverture du dialogue
  const [openDialog, setOpenDialog] = useState(false);

  // État local pour stocker une image (commentée car non utilisée dans le code)
  const [image] = useState(() => {
    // Commenté : Logique pour récupérer une image
  });

  // Effet pour récupérer les données de la question actuelle lors du montage initial
  useEffect(() => {
    fetchDataCurrentQuestion();
  }, []);

  // Effet pour mettre à jour currentPointsMaxSmat lorsque pointsMaxSmat change
  useEffect(() => {
    setCurrentPointsMaxSmat(pointsMaxSmat);
  }, [pointsMaxSmat]);

  // Fonction asynchrone pour récupérer les données de la question actuelle depuis le serveur
  const fetchDataCurrentQuestion = async () => {
    setIsBusy(true);
    try {
      const res = await axios.get(
        `questions-smat/${smat.id}/question/${smatUsers.current_question}`
      );
      setCurrentSmatQuestion(res.data.currentQuestion);
      setCurrentSmatAnswers(res.data.currentAnswers);
      setPointsMaxSmat(res.data.smat.pointsMaxSmat);
      setCurrentPointsMaxSmat(res.data.smat.currentPointsMax);
    } catch (error) {
      if (error.code === 409) {
        setItIsTurn(false);
      }
    } finally {
      setIsBusy(false);
    }
  };

  // Effet pour démarrer le chronomètre lors du montage initial
  useEffect(() => {
    // Intervalle qui se déclenche toutes les 1000 millisecondes (1 seconde)
    const time = setInterval(() => {
      // À chaque déclenchement de l'intervalle, met à jour le temps restant en décrémentant d'une seconde
      // La fonction Math.max est utilisée pour s'assurer que le temps restant ne devient jamais négatif
      setTimeRemaining((prevTime) => Math.max(prevTime - 1, 0));
    }, 1000);

    // Stocke le temps de l'intervalle pour pouvoir le nettoyer plus tard
    setIntervalId(time);

    // Cette fonction de nettoyage est exécutée lors du démontage du composant
    return () => clearInterval(time);
  }, []);

  // Fonction pour arrêter le chronomètre
  const stopTimer = () => {
    clearInterval(intervalId);
  };

  // Gestion de la logique lorsque l'utilisateur sélectionne une réponse
  const handleCardClick = async (answer) => {
    stopTimer();
    setTimeRemaining(timeRemaining);
    setCurrentAnswerSmat(answer);

    await saveResultCurrentQuestionSmat(smat, answer);

    setOpenDialog(true);
  };

  // Fonction pour fermer le dialogue
  const handleClose = () => {
    navigate("/");
  };

  // Fonction pour définir le style des cartes en fonction de l'index
  const getCardStyle = (index) => {
    let backgroundColor, color, shadow;
    switch (index % 4) {
      case 0:
        backgroundColor = "#6949ff";
        shadow = `#ffc107`;
        break;
      case 1:
        backgroundColor = "#ffc107";
        shadow = `#6949ff`;
        break;
      case 2:
        backgroundColor = "#00ffff";
        shadow = `#c2ff5d`;
        break;
      case 3:
        backgroundColor = "#c2ff5d";
        shadow = `#00ffff`;
        break;
      default:
        backgroundColor = "#000000";
        color = "#000000";
        shadow = `#ffc107`;
    }

    return {
      backgroundColor: backgroundColor,
      border: `1px solid #ffffff`,
      borderRadius: 10,
      boxShadow: `0px 1px 6px ${shadow}`,
      color: color,
    };
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container>
      {smatUsers.current_question === 10 ? (
        <Box mt={5}>
          <Card
            className="card-finish-private"
            sx={{ width: "fit-content", margin: "auto" }}
          >
            <CardContent className="card-content-finish-private" sx={{}}>
              <Typography
                sx={{ color: "var(--secondary-color-special)" }}
                mt={2}
                variant="h2"
              >
                Vous avez finis cette Partie
              </Typography>
            </CardContent>
            <CardActionArea>
              <Box mt={2} ml={2} mb={2}>
                {" "}
                <CustomButton2 onClick={() => navigate(`/`)}>ok</CustomButton2>
              </Box>
            </CardActionArea>
          </Card>
        </Box>
      ) : (
        <Box>
          {!itIsTurn ? (
            <MessageDialog
              open={true} // open MessageDialog only if itIsTurn is true
              onClose={handleClose}
              title={"Votre envie fait plaisir !!!"}
              message={"Mais ce n'est pas encore à votre tour de jouer. ^^"}
              redirection={"/"}
            />
          ) : (
            <Container>
              {openDialog && (
                <CompletionMessageSmat
                  open={openDialog}
                  onClose={() => setOpenDialog(false)}
                  title="Title"
                  currentSmatQuestion={currentSmatQuestion}
                  currentSmatAnswers={currentSmatAnswers}
                  currentAnswerSmat={currentAnswerSmat}
                />
              )}
              <Stack mt={3} direction="row" justifyContent="space-between">
                <Typography className="text-bar-question">
                  {smatUsers.current_question + 1} /9
                </Typography>
                <Box sx={{ width: "60%" }}></Box>
                <Typography
                  className={
                    timeRemaining <= 5 ? "red-text" : "text-bar-question"
                  }
                >
                  {timeRemaining}
                </Typography>
              </Stack>
              <Box
                sx={{
                  display: "flex",
                  justifyContent: "center",
                }}
              >
                {" "}
                <Box
                  sx={{
                    width: "100%", // Ajustez selon vos besoins
                    maxWidth: "600px", // Largeur maximale de la boîte
                    aspectRatio: "3 / 1", // Rapport hauteur-largeur de 3:1
                    display: "flex",
                    justifyContent: "center",
                  }}
                >
                  <CardActionArea
                    sx={{
                      alignContent: "center",
                      marginTop: 2,

                      border: "1px solid var(--secondary-color)",
                      boxShadow: "0px 4px 8px rgba(105, 73, 255, 0.7)",
                      display: "flex",
                      justifyContent: "center",
                      alignItems: "center",
                      position: "relative", // Ajout de position relative
                    }}
                  >
                    <CardMedia
                      sx={{
                        width: "100%",
                        height: "100%",
                        objectFit: "cover",
                      }}
                      className="image-theme-home"
                      component="img"
                      image={displayImage(image)}
                      alt="Image description"
                    />
                    <Typography
                      variant="body2"
                      component="div"
                      className="text-top-home"
                      sx={{
                        position: "absolute",
                        bottom: 0,
                        left: 0, // Utiliser left à la place de transform
                        backgroundColor: "rgba(105, 73, 255, 0.8)",
                        padding: "4px",
                        borderTopLeftRadius: "4px",
                        borderTopRightRadius: "4px",
                        textAlign: "center",
                        width: "100%",
                        color: "var(--secondary-color)",
                        boxSizing: "border-box",
                      }}
                    >
                      {convertToRoman(currentSmatQuestion?.level_id)}
                    </Typography>
                  </CardActionArea>
                </Box>
              </Box>
              <Typography className="question" mt={5}>
                {currentSmatQuestion?.question}
              </Typography>
              <Grid container spacing={2} mt={5}>
                {currentSmatAnswers &&
                  currentSmatAnswers.map((answer, index) => (
                    <Grid item xs={6} lg={3} key={index}>
                      <CardActionArea
                        sx={{
                          height: 150,
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                          ...getCardStyle(index),
                        }}
                        onClick={() => handleCardClick(answer)}
                      >
                        <CardContent>
                          <Typography className="answer-text">
                            {answer.answer}
                          </Typography>
                        </CardContent>
                      </CardActionArea>
                    </Grid>
                  ))}
              </Grid>
            </Container>
          )}
        </Box>
      )}
    </Container>
  );
};

export default Gameprivate;
