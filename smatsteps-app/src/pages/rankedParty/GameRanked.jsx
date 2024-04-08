import {
  Box,
  Card,
  CardActionArea,
  CardContent,
  CardMedia,
  Grid,
  Typography,
} from "@mui/material";
import { Container, Stack } from "@mui/system";
import { useGameContext } from "../../context/GameProvider";
import {
  QUESTION_TIMER_DURATION,
  calculatePercentage,
  convertToRoman,
  displayImage,
  pointsTotal,
} from "../../utils";
import { useEffect, useState } from "react";
import CompletionMessage from "../../components/message/CompletionMessage";

const GameRanked = () => {
  const {
    questionsRanked,
    points,
    pointsMax,
    currentQuestion,
    setTimeRemaining,
    timeRemaining,
    setCurrentAnswer,
    countLevel1,
    countLevel2,
    countLevel3,
    isQuizFinished,
  } = useGameContext();

  const totalQuestions = questionsRanked.length;
  // Utilisation de la fonction pointsTotal pour calculer le total des points
  const totalPoints = pointsTotal(countLevel1, countLevel2, countLevel3);
  const currentScorePercentage = calculatePercentage(points, totalPoints);

  // Utilisation correcte de totalPoints dans votre composant
  const currentScoreMaxPercentage = calculatePercentage(pointsMax, totalPoints);
  // Fonction pour calculer la largeur de la carte en fonction de la taille de l'écran

  const [image, setImage] = useState(() => {
    if (questionsRanked[currentQuestion].image_question) {
      return questionsRanked[currentQuestion].image_question;
    } else if (
      questionsRanked[currentQuestion].sous_theme &&
      questionsRanked[currentQuestion].sous_theme.sous_theme_image
    ) {
      return questionsRanked[currentQuestion].sous_theme.sous_theme_image;
    } else if (
      questionsRanked[currentQuestion].theme &&
      questionsRanked[currentQuestion].theme.theme_image
    ) {
      return questionsRanked[currentQuestion].theme.theme_image;
    } else {
      return null; // Défaut à null si aucune image n'est trouvée
    }
  });

  // en secondes
  const [isTimeUpDialogOpen, setIsTimeUpDialogOpen] = useState(false);
  const intervalIdRef = useState(null);
  let intervalId; // Déclaration en dehors de l'effet

  // Gestion du chronomètre & currentPointMax
  useEffect(() => {
    // Réinitialiser le chronomètre à la valeur initiale
    setTimeRemaining(QUESTION_TIMER_DURATION / 1000);

    // Nettoie le minuteur lors du changement de question
    return () => clearInterval(intervalIdRef.current);
  }, [currentQuestion]);

  // Gestion de la confirmation de quitter la page
  const [showLeavePageDialog, setShowLeavePageDialog] = useState(false);

  useEffect(() => {
    // Si le temps restant atteint 0, afficher le message et arrêter le chronomètre
    if (timeRemaining === 0) {
      setIsTimeUpDialogOpen(true);
      clearInterval(intervalIdRef.current); // Arrêter le chronomètre
    }

    // Décrémente le temps restant toutes les secondes
    intervalIdRef.current = setInterval(() => {
      setTimeRemaining((prevTime) => Math.max(prevTime - 1, 0));
    }, 1000);

    // Nettoie le minuteur lors du changement de question
    return () => clearInterval(intervalIdRef.current);
  }, [questionsRanked, timeRemaining]);

  //arret du chrono
  const stopTimer = () => {
    clearInterval(intervalId);
  };

  //récupération reponse utilisateur
  const handleCardClick = (answer) => {
    stopTimer();
    setTimeRemaining(timeRemaining); // Réinitialiser le chronomètre
    setCurrentAnswer(answer);
  };

  // Logique pour définir le fond et la bordure en fonction de l'index
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

  return (
    <Container>
      <Stack mt={3} direction="row" justifyContent="space-between">
        <Typography className="text-bar-question">
          {currentQuestion + 1}/{totalQuestions}
        </Typography>
        <Box sx={{ width: "60%" }}>
          <Box
            sx={{
              position: "relative",
              height: 8,
              backgroundColor: "var(--proress-bar-bg)",
              borderRadius: 4,
            }}
          >
            <Box
              sx={{
                position: "absolute",
                left: 0,
                top: 0,
                bottom: 0,
                width: `${currentScoreMaxPercentage}%`,
                backgroundColor: "var(--primary-color)",
                borderRadius: "4px 0 0 4px",
              }}
            />
            <Box
              sx={{
                position: "absolute",
                left: 0,
                top: 0,
                bottom: 0,
                width: `${currentScorePercentage}%`,
                backgroundColor: "var(--secondary-color)",
                borderRadius: "4px 0 0 4px",
              }}
            />
          </Box>
        </Box>
        <Typography
          className={timeRemaining <= 5 ? "red-text" : "text-bar-question"}
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
              sx={{ width: "100%", height: "100%", objectFit: "cover" }}
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
              {convertToRoman(questionsRanked[currentQuestion].level_id)}
            </Typography>
          </CardActionArea>
        </Box>
      </Box>

      <Typography className="question" mt={5}>
        {questionsRanked[currentQuestion].question}
      </Typography>

      <Grid container spacing={2} mt={5}>
        {questionsRanked[currentQuestion].answers.map((answer, index) => (
          <Grid item xs={6} lg={3} key={index}>
            {" "}
            {/* Ajoutez la prop key ici */}
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
                <Typography className="answer-text">{answer.answer}</Typography>
              </CardContent>
            </CardActionArea>
          </Grid>
        ))}
      </Grid>

      <CompletionMessage
        open={isQuizFinished}
        onClose={() => setShowLeavePageDialog(false)}
      />
    </Container>
  );
};

export default GameRanked;
