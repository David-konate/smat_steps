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

const CompletionMessage = ({ open, onClose }) => {
  const { resultat, badAnswers, isBusy, gameFinished } = useGameContext();
  const [showCorrection, setShowCorrection] = useState(false);
  const toggleCorrection = () => {
    setShowCorrection(!showCorrection);
  };

  // Fonction personnalisée pour la fermeture avec surcharge
  const handleCustomClose = () => {
    console.log("Merci d'avoir jouer a Smat-Steps");
    //appelez la fonction onClose fournie par les props pour fermer la boîte de dialogue
    onClose();
    gameFinished();
  };

  return isBusy ? (
    <Box>
      <CircularProgress></CircularProgress>
    </Box>
  ) : (
    <Container sx={{ backgroundColor: "transparent" }}>
      <Dialog open={open} onClose={onClose}>
        <Card
          className="completion-msg-card"
          sx={{
            padding: 2,
            backgroundColor: "transparent",
          }}
        >
          <Typography className="title" variant="h3">
            SmatSteps - Partie terminée
          </Typography>
          <Box mt={3} width={"80%"} marginLeft={"auto"} marginRight={"auto"}>
            <Card className="card">
              <CardContent>
                <Typography textAlign={"center"} className="text">
                  Félicitations ! Vous avez répondu à toutes les questions de
                  cette manche. N'hésitez pas à regarder le detail de votre
                  partie. A très vite !!!
                </Typography>
              </CardContent>
            </Card>
          </Box>

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
              {resultat} %
            </Typography>
          </Stack>

          <Box>
            <Box
              mt={2}
              style={{ display: "flex", justifyContent: "space-between" }}
            >
              <Button className="btn-correction" onClick={toggleCorrection}>
                Correction
              </Button>
              <Button
                className="btn-fermer"
                onClick={handleCustomClose}
                color="primary"
                autoFocus
              >
                Fermer
              </Button>
            </Box>
          </Box>
        </Card>
        {showCorrection && (
          <Box
            sx={{ backgroundColor: "transparent" }}
            className="box-correction"
            height={250}
            textAlign="center"
            mt={2}
          >
            <Typography variant="h2" className="title-correction">
              Correction
            </Typography>
            {badAnswers && Object.keys(badAnswers).length > 0 && (
              <Card
                className="border-correction"
                sx={{
                  border: "2px solid rgba(255, 193, 7)",
                  marginTop: 2,
                }}
              >
                {Object.keys(badAnswers).map((questionIndex, index) => (
                  <Box mt={3} p={1} className="card-correction" key={index}>
                    <Typography className="question-correction" variant="h3">
                      {badAnswers[questionIndex]?.question.question}
                    </Typography>
                    <Stack mt={1} justifyContent="center">
                      <Typography
                        className="text-answer-correction"
                        mt={1}
                        variant="h4"
                      >
                        Votre réponse :{" "}
                        {badAnswers[questionIndex]?.selectedAnswer.answer}
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
                          className="text-good-answer-correction"
                          mt={2}
                          variant="h4"
                        >
                          Bonne réponse:{" "}
                        </Typography>
                        <Typography
                          className="good-answer-correction"
                          mt={2}
                          p={1}
                          variant="h3"
                          sx={{ textAlign: "center" }} // Ajouter un style pour centrer le texte
                        >
                          {
                            badAnswers[questionIndex]?.question.answers.find(
                              (answer) => answer?.is_correct === 1
                            )?.answer
                          }
                        </Typography>
                      </Stack>
                    </Stack>
                  </Box>
                ))}
              </Card>
            )}
          </Box>
        )}
      </Dialog>
    </Container>
  );
};

export default CompletionMessage;
