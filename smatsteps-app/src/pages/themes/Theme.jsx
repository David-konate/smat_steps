import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";
import { Box, Container, Stack } from "@mui/system";
import { Button, CircularProgress, Grid, Typography } from "@mui/material";
import LevelBox from "../../components/LevelBox";
import { useGameContext } from "../../context/GameProvider";
import ListIcon from "@mui/icons-material/List";
import MultiplePersonsIcon from "../../components/svg/MultiplePersonsIcon";
import RankingsList from "../../components/list/RankingList";
import MessageThemeNewRanged from "../../components/message/MessageThemeNewRanged";
import PlayerCard from "../../components/cards/PlayerCars";

const Theme = () => {
  const { id } = useParams();
  const [isCardNewRankedOpen, setIsCardNewRankedOpen] = useState(false);
  const [isBusy, setIsBusy] = useState(true);
  const {
    currentLevel,
    setCurrentLevel,
    topUserRanking,
    setTopUserRanking,
    setCurrentTheme,
    theme,
    setTheme,
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
    setIsBusy(true);
    try {
      const res = await axios.get(`themes/${id}`, {
        params: {
          currentLevel: currentLevel,
        },
      });

      console.log(res.data);
      setTheme(res.data.theme);
      setCurrentTheme(res.data.theme);
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

  return isBusy ? (
    <Box sx={{ display: "flex" }}>
      <CircularProgress />
    </Box>
  ) : (
    <Container>
      <Box textAlign="center" mt={3}>
        <Typography mb={2} color={"var(--primary-color)"} variant="h3">
          {theme?.theme}
        </Typography>
        <LevelBox
          currentLevel={currentLevel}
          handleLevelChange={handleLevelChange}
        />
      </Box>
      <Grid container spacing={2} justifyContent="center" mt={3}>
        {topUserRanking.slice(0, 3).map((userRanking, index) => (
          <Grid item xs={4} sm={2} md={3} key={index}>
            <PlayerCard
              userRanking={userRanking}
              shadowColor={shadowColors[index % shadowColors.length]}
            />
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
          className="btn-multi"
          sx={{ color: "var(--secondary-color)" }}
          label="Multi"
          value="persons"
        >
          <MultiplePersonsIcon className="icon-multi" />
        </Button>
      </Stack>
      {isCardNewRankedOpen && (
        <MessageThemeNewRanged
          open={isCardNewRankedOpen}
          onClose={() => setIsCardNewRankedOpen(false)}
        />
      )}
    </Container>
  );
};

export default Theme;
