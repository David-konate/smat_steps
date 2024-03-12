import React from "react";
import { useEffect, useState } from "react";
import CircularProgress from "@mui/material/CircularProgress";
import { Link } from "react-router-dom";
import {
  Box,
  Typography,
  Container,
  Stack,
  Card,
  CardContent,
  CardActions,
  Button,
  CardMedia,
  CardActionArea,
} from "@mui/material";
import axios from "axios";

import WhiteButton from "../components/buttons/WhiteButton";
import { displayImage } from "../utils";

const Home = () => {
  const [topThemes, setTopThemes] = useState();
  const [topSousThemes, setTopSousThemes] = useState();
  const [isBusy, setIsBusy] = useState(true);

  useEffect(() => {
    fetchData();
  }, []); // Ajouter slug dans la liste de dépendances pour recharger les données lorsque le slug change

  const fetchData = async () => {
    try {
      const res = await axios.get(`/rankings/top-collection`);
      setTopThemes(res.data.themes);
      setTopSousThemes(res.data.sousThemes);
      console.log(res.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  return isBusy ? (
    <Container>
      <Box sx={{ display: "flex" }}>
        <CircularProgress />
      </Box>
    </Container>
  ) : (
    <Container>
      <Box mt={5} width={"100%"}>
        <Card className="card-new-ranking" style={{ borderRadius: 20 }}>
          <CardContent>
            <Stack
              justifyContent={"space-between"}
              direction={"row"}
              flexWrap={"wrap"}
            >
              <Box width={"80%"}>
                <Stack direction={"row"} alignItems={"baseline"} spacing={1}>
                  <Typography
                    className="text-special"
                    sx={{ fontSize: "1.3rem", color: "white" }}
                  >
                    Jouez
                  </Typography>
                  <Typography
                    variant="h6"
                    className="text-card-home"
                    sx={{ color: "white" }}
                  >
                    contre les membres de la communauté ici !
                  </Typography>
                </Stack>

                <Box mt={2} ml={4}>
                  <WhiteButton>C'est partie</WhiteButton>
                </Box>
              </Box>
              <img width={"20%"} src="/avatars.png" alt="Avatar Random" />
            </Stack>
          </CardContent>
        </Card>
        <Card
          className="card-new-prived"
          style={{ borderRadius: 20, marginTop: 10 }}
        >
          <CardContent>
            <Stack
              justifyContent={"space-between"}
              direction={"row"}
              flexWrap={"wrap"}
            >
              <Box width={"80%"}>
                <Stack direction={"row"} alignItems={"baseline"} spacing={1}>
                  <Typography
                    className="text-special"
                    sx={{ fontSize: "1.3rem", color: "black" }}
                  >
                    Défiez
                  </Typography>
                  <Typography
                    variant="h6"
                    className="text-card-home"
                    sx={{ color: "black" }}
                  >
                    vos amis par ici !
                  </Typography>
                </Stack>

                <Box mt={5} ml={4}>
                  <WhiteButton>C'est partie</WhiteButton>
                </Box>
              </Box>
              <img width={"20%"} src="/avatars.png" alt="Avatar Random" />
            </Stack>
          </CardContent>
        </Card>
        <Stack mt={5} direction={"row"} justifyContent={"space-between"}>
          <Typography className="top-theme-title">TOP THEMES</Typography>
          <Link className="top-theme-link">Tous voir</Link>
        </Stack>
        <Stack direction={"row"} spacing={3} mt={1} sx={{ overflowX: "auto" }}>
          {topThemes.slice(0, 5).map((topTheme, index) => (
            <Card sx={{ width: "350px", height: "100px" }} key={index}>
              <CardActionArea style={{ width: "100%" }}>
                <CardMedia
                  component="img"
                  height="100px"
                  width="350px"
                  image={displayImage(topTheme.theme_image)} // Utilisation de topTheme.theme_image comme source d'image
                  alt="Image description"
                />
              </CardActionArea>
            </Card>
          ))}
        </Stack>
        <Stack
          mt={5}
          direction={"row"}
          justifyContent={"space-between"}
          justifyItems={"end"}
        >
          <Typography className="top-theme-title">TOP SOUS THEMES</Typography>
          <Link className="top-theme-link">Tous voir</Link>
        </Stack>
        <Stack direction={"row"} spacing={3} mt={1} sx={{ overflowX: "auto" }}>
          {topSousThemes.slice(0, 5).map((topTheme, index) => (
            <Card sx={{ width: "350px", height: "100px" }} key={index}>
              <CardActionArea style={{ width: "100%" }}>
                <CardMedia
                  component="img"
                  height="100px"
                  width="350px"
                  image={displayImage(topTheme.theme_image)} // Utilisation de topTheme.theme_image comme source d'image
                  alt="Image description"
                />
              </CardActionArea>
            </Card>
          ))}
        </Stack>
      </Box>
    </Container>
  );
};

export default Home;
