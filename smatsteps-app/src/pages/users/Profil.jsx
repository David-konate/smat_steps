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
} from "@mui/material";
import { useParams } from "react-router-dom";
import { displayImage, firstLetterUppercase } from "../../utils";
import { useGameContext } from "../../context/GameProvider";
import LevelBox from "../../components/LevelBox";
import { Stack } from "@mui/system";
import CustomButton from "../../components/buttons/CustomButton";
import ExpandMoreIcon from "@mui/icons-material/ExpandMore";
import RankingsList from "../../components/list/RankingList";

const Profil = () => {
  const { id } = useParams();
  const { user } = useUserContext();
  const [isBusy, setIsBusy] = useState(true);
  const { currentLevel, currentTheme, currentSousTheme } = useGameContext();
  const [userProfil, setuserProfil] = useState();
  const [userRankings, setUserRankings] = useState();

  useEffect(() => {
    fetchData();
  }, [currentLevel]);

  const fetchData = async () => {
    try {
      const res = await axios.get(`users/${id}`, {
        params: {
          currentLevel: currentLevel,
          currentSousTheme: currentSousTheme,
          currentTheme: currentTheme,
        },
      });
      console.log(res.data.rankings);
      setuserProfil(res.data.user);
      setUserRankings(res.data.rankings);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const shadowColors = [
    "rgba(218, 165, 32, 0.2)",
    "rgba(192, 192, 192, 0.2)",
    "rgba(205, 127, 50, 0.2)",
  ];

  return (
    <Paper elevation={3} style={{ padding: "20px", margin: "20px" }}>
      {isBusy ? (
        <CircularProgress />
      ) : (
        <Container>
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
                      {firstLetterUppercase(userProfil.user_pseudo)}
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
                    .sort((a, b) => a.result_quiz - b.result_quiz) // Trie par ordre ascendant de result_quiz
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
                            variant="body1"
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
                            <Typography className="text-stack">
                              Score :
                            </Typography>
                            <Typography className="text-score" variant="body1">
                              {ranking?.result_quiz}
                            </Typography>
                            <Typography className="text-stack">%</Typography>
                          </Stack>
                        </CardContent>
                      </Card>
                    ))
                ) : (
                  <Typography variant="body1">Aucun score trouvé</Typography>
                )}
              </Stack>
              <Box mt={1}>
                {" "}
                <Button>
                  <ExpandMoreIcon
                    style={{ color: "var(--secondary-color-special)" }}
                  />
                </Button>
              </Box>
              <RankingsList rankings={userRankings} />
            </Box>
          ) : (
            <Typography variant="body1">Aucun utilisateur connecté</Typography>
          )}
        </Container>
      )}
    </Paper>
  );
};

export default Profil;
