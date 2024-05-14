import React, { useEffect, useState } from "react";
import { CircularProgress, Grid, TextField, Typography } from "@mui/material";
import { Box, Container } from "@mui/system";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import PlayerCard2 from "../../components/cards/PlayerCars2 ";

const IndexUsers = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [users, setUsers] = useState([]);
  const [filter, setFilter] = useState("");
  const navigate = useNavigate();

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get(`users`);
      console.log(res.data);
      setUsers(res.data);
    } catch (error) {
      // Gérer les erreurs
    } finally {
      setIsBusy(false);
    }
  };

  const handleFilterChange = (event) => {
    setFilter(event.target.value);
  };

  const filteredUsers = users.filter((user) =>
    user.user_pseudo.toLowerCase().includes(filter.toLowerCase())
  );

  const handleCardClick = (user) => {
    // Naviguer vers la page de profil de l'utilisateur avec l'ID userId
    navigate(`/profil/${user}`);
  };

  return isBusy ? (
    <Container>
      <CircularProgress />
    </Container>
  ) : (
    <Container
      style={{ display: "flex", flexDirection: "column", alignItems: "center" }}
    >
      <Typography variant="h2" color={"var(--secondary-color-special)"}>
        Nos joueurs
      </Typography>
      <Box mt={2} mb={2} sx={{ display: "flex", justifyContent: "center" }}>
        <TextField
          label="Rechercher un utilisateur"
          value={filter}
          onChange={handleFilterChange}
        />
      </Box>

      <Grid container style={{ width: "100%", justifyContent: "center" }}>
        {filteredUsers.map((user, index) => (
          <Grid item key={index} xs={3} m={2}>
            <Box
              onClick={() => handleCardClick(user.user_pseudo)}
              style={{
                cursor: "pointer",
              }}
            >
              {" "}
              <PlayerCard2
                userRanking={user}
                shadowColor="var(--secondary-color-special)" // Utilisez var() pour les variables CSS personnalisées
                borderColor="var(--primary-color-special)"
                bgColor="var(--background-color)"
              />
            </Box>
          </Grid>
        ))}
      </Grid>
    </Container>
  );
};

export default IndexUsers;
