import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";
import { Box, Container, Stack } from "@mui/system";
import {
  Avatar,
  Button,
  Card,
  CardContent,
  CircularProgress,
  Grid,
  Paper,
  Typography,
} from "@mui/material";
import LevelBox from "../../components/LevelBox";
import { useGameContext } from "../../context/GameProvider";
import { displayImage } from "../../utils";
import ListIcon from "@mui/icons-material/List";
import MultiplePersonsIcon from "../../components/svg/MultiplePersonsIcon";
import RankingsList from "../../components/list/RankingList";
import MessageRankedPart from "../../components/message/MessageRankedPart";
import MessageDualPart from "../../components/message/MessageDualPart.jsx";

const SousTheme = () => {
  const { id } = useParams();
  const [isCardNewRankedOpen, setIsCardNewRankedOpen] = useState(false);
  const [isCardNewDualOpen, setIsCardNewDualOpen] = useState(false);
  const [isBusy, setIsBusy] = useState(true);
  const {
    currentLevel,
    setCurrentLevel,
    topUserRanking,
    setTopUserRanking,
    sousTheme,
    setSousTheme,
    setCurrentSousTheme,
  } = useGameContext();
  const shadowColors = [
    "rgba(218, 165, 32, 0.2)",
    "rgba(192, 192, 192, 0.2)",
    "rgba(205, 127, 50, 0.2)",
  ];
  const [isRankingsListOpen, setIsRankingsListOpen] = useState(false);

  useEffect(() => {
    fetchData();
  }, [currentLevel]);

  const fetchData = async () => {
    try {
      const res = await axios.get(`sous-themes/${id}`, {
        params: {
          currentLevel: currentLevel,
        },
      });

      setSousTheme(res.data.sousTheme);
      setCurrentSousTheme(res.data.sousTheme);
      setTopUserRanking(res.data.topRankings);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const toggleRankingsList = () => {
    setIsRankingsListOpen(!isRankingsListOpen);
  };

  const handleLevelChange = (event) => {
    setCurrentLevel(parseInt(event.target.value));
  };

  const handleOpenCardNewRanked = () => {
    setIsCardNewRankedOpen(true);
  };

  const handleOpenCardNewDual = () => {
    setIsCardNewDualOpen(true);
  };

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container>
      <Box textAlign="center" mt={3}>
        <Typography mb={2} color={"var(--primary-color)"} variant="h3">
          {sousTheme?.sous_theme}
        </Typography>
        <LevelBox
          currentLevel={currentLevel}
          handleLevelChange={handleLevelChange}
        />
      </Box>
      <Grid container spacing={2} justifyContent="center" mt={3}>
        {topUserRanking.slice(0, 3).map((userRanking, index) => (
          <Grid item xs={4} sm={2} md={3} key={index}>
            <Card
              className={`player-card`}
              style={{
                borderRadius: 20,
                display: "flex",
                justifyContent: "center",
                alignItems: "center",

                boxShadow: `0px 4px 8px ${
                  shadowColors[index % shadowColors.length]
                }`,
                border: `3px solid ${
                  shadowColors[index % shadowColors.length]
                }`,
                background: ` ${shadowColors[index % shadowColors.length]}`,
              }}
            >
              <CardContent className="player-info" sx={{ textAlign: "center" }}>
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
                    src={displayImage(userRanking.user.user_image)}
                  />
                </Box>
                <Typography mt={2} variant="body1" className="player-pseudo">
                  {userRanking.user.user_pseudo}
                </Typography>
                <Paper>
                  {" "}
                  <Typography
                    mt={1}
                    variant="body1"
                    className="player-top-ranking"
                  >
                    {userRanking.result_quiz} %
                  </Typography>
                </Paper>
              </CardContent>
            </Card>
          </Grid>
        ))}
      </Grid>
      <Box textAlign="center">
        <Button
          sx={{ mt: 5 }}
          className="btn-resultat"
          onClick={toggleRankingsList}
        >
          {isRankingsListOpen ? "Fermer les résultats" : "Tous les résultats"}
        </Button>
      </Box>
      {isRankingsListOpen && <RankingsList />}

      <Stack
        className="stack-nav-list-multi"
        mt={5}
        direction="row"
        borderRadius={16}
        justifyContent="space-between"
      >
        <Button
          onClick={handleOpenCardNewRanked}
          className="btn-list"
          label="Classée"
          value="list"
        >
          <ListIcon className="icon-list" />
        </Button>
        <Button
          onClick={handleOpenCardNewDual}
          className="btn-multi"
          sx={{ color: "var(--secondary-color)" }}
          label="Multi"
          value="persons"
        >
          <MultiplePersonsIcon className="icon-multi" />
        </Button>
      </Stack>
      {isCardNewRankedOpen && (
        <MessageRankedPart
          open={isCardNewRankedOpen}
          onClose={() => setIsCardNewRankedOpen(false)}
        />
      )}
      {isCardNewDualOpen && (
        <MessageDualPart
          open={isCardNewDualOpen}
          onClose={() => setIsCardNewDualOpen(false)}
        />
      )}
    </Container>
  );
};

export default SousTheme;
