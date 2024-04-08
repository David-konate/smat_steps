import React from "react";
import {
  Dialog,
  Button,
  Card,
  Typography,
  Box,
  CircularProgress,
  CardContent,
} from "@mui/material";

import { Container, Stack, height } from "@mui/system";
import { useState } from "react";
import { useGameContext } from "../../context/GameProvider";
import { LEVELS } from "../../utils";
import CustomButton from "../buttons/CustomButton";
import { useNavigate } from "react-router-dom";
import CustomButton2 from "../buttons/CustomButton2";
import { useUserContext } from "../../context/UserProvider";

const CompletionMessageSmat = ({
  open,
  onClose,
  currentSmatQuestion,
  currentSmatAnswers,
  currentAnswerSmat,
}) => {
  const {
    resultat,
    badAnswers,
    isBusy,
    gameFinished,
    currentPointsSmat,
    timeRemaining,
    resetSmat,
  } = useGameContext();
  const navigate = useNavigate();
  const { authentification } = useUserContext();
  const [showCorrection, setShowCorrection] = useState(false);
  const toggleCorrection = () => {
    setShowCorrection(!showCorrection);
  };

  const onClick = () => {
    authentification();
    navigate(`/`);
    resetSmat();
  };

  // Fonction personnalisée pour la fermeture avec surcharge
  const handleCustomClose = () => {
    console.log("Merci d'avoir jouer a Smat-Steps");
    //appelez la fonction onClose fournie par les props pour fermer la boîte de dialogue
    onClose();
    gameFinished();
  };
  console.log({ currentAnswerSmat });
  console.log({ currentPointsSmat });
  return isBusy ? (
    <Box>
      <CircularProgress></CircularProgress>
    </Box>
  ) : (
    <Container sx={{ backgroundColor: "transparent" }}>
      <Dialog open={open} onClose={onClose}>
        {currentAnswerSmat.is_correct === 1 && timeRemaining > 0 ? (
          <Card
            className="completion-msg-card"
            sx={{
              padding: 2,
              backgroundColor: "transparent",
            }}
          >
            <Typography className="title" variant="h3">
              Vous avez bien répondus à cette question !
            </Typography>
            <Stack
              direction={"row"}
              alignItems="center"
              justifyContent="center"
              mt={2}
              gap={1}
            >
              <Typography className="text-score" variant="h6">
                Votre score est de :
              </Typography>

              <Typography className="result" variant="h6">
                {currentPointsSmat} / {LEVELS[currentSmatQuestion.level_id]}
              </Typography>
            </Stack>
          </Card>
        ) : currentAnswerSmat.is_correct === 1 && timeRemaining <= 0 ? (
          <Card
            className="completion-msg-card"
            sx={{
              padding: 2,
              backgroundColor: "transparent",
            }}
          >
            <Typography className="title" variant="h3">
              Dommage vous avez pas trouvez la bonne réponse mais pas dans le
              temps impartit
            </Typography>
            <Typography className="text-score" variant="h6">
              Votre score est de :
            </Typography>

            <Typography className="result" variant="h6">
              {currentPointsSmat} / {LEVELS[currentSmatQuestion.level_id]}
            </Typography>
          </Card>
        ) : (
          <Card
            className="completion-msg-card"
            sx={{
              padding: 2,
              backgroundColor: "white",
            }}
          >
            <Typography className="title" variant="h3">
              Dommage vous n'avez pas trouvez la bonne réponse
            </Typography>
            <Box mt={3} p={1} className="card-correction">
              <Typography className="question-correction" variant="h4">
                {currentSmatQuestion.question}
              </Typography>
              <Stack
                mt={1}
                sx={{ textAlign: "center" }}
                justifyContent="center"
              >
                <Typography
                  className="text-answer-correction"
                  mt={1}
                  variant="h5"
                >
                  Votre réponse : {currentAnswerSmat.answer}
                </Typography>
                <Stack
                  mt={2}
                  p={1}
                  className="stack-answer-correction"
                  direction="row"
                  margin={"auto"} // Utiliser 80% de la largeur disponible
                  justifyContent="center" // Centrer horizontalement
                  gap={1}
                  alignItems="center" // Centrer verticalement
                  borderRadius={20}
                >
                  <Typography
                    className="good-answer-correction"
                    mt={2}
                    p={1}
                    variant="h3"
                    sx={{ textAlign: "center" }} // Ajouter un style pour centrer le texte
                  >
                    {
                      currentSmatAnswers.find(
                        (answer) => answer?.is_correct === 1
                      )?.answer
                    }
                  </Typography>
                </Stack>
              </Stack>
            </Box>
          </Card>
        )}
        <Box sx={{ textAlign: "center", marginTop: 2, marginBottom: 1 }}>
          <CustomButton2 onClick={onClick}>OK</CustomButton2>
        </Box>
      </Dialog>
    </Container>
  );
};

export default CompletionMessageSmat;
