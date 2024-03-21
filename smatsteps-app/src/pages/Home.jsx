import React, { useState } from "react";
import { Link, NavLink } from "react-router-dom";
import {
  Box,
  Typography,
  Container,
  Stack,
  Card,
  CardContent,
  CardMedia,
  CardActionArea,
} from "@mui/material";

import WhiteButton from "../components/buttons/WhiteButton";
import { displayImage } from "../utils";
import { useGameContext } from "../context/GameProvider";
import MessageNewRanged from "../components/message/MessageNewRanged";

const Home = () => {
  const { topSousThemes, topThemes, randomThemes } = useGameContext();
  const [isCardNewRankedOpen, setIsCardNewRankedOpen] = useState(false);

  const handleOpenCardNewRanked = () => {
    setIsCardNewRankedOpen(true);
  };

  return (
    <Container>
      <Box mt={5} width={"100%"} justifyContent={"center"}>
        <Card
          className="card-new-ranking"
          sx={{
            width: {
              xs: "100%",
              sm: "80%",
              md: "60%",
              l: "60%",
              xl: "60%",
              margin: "auto",
              borderRadius: 20,
            },
          }}
        >
          <CardContent>
            <Stack
              position={"relative"}
              justifyContent={"space-between"}
              direction={"row"}
              flexWrap={"wrap"}
            >
              <Stack width={"80%"}>
                <Stack direction={"row"} alignItems={"baseline"} spacing={2}>
                  <Typography
                    className="text-special"
                    sx={{
                      fontSize: {
                        xs: "1.3rem",
                        sm: "2rem",
                        md: "2.4rem",
                        lg: "2.8rem",
                        xl: "3.2rem",
                      },
                      color: "white",
                    }}
                  >
                    Jouez
                  </Typography>
                  <Stack>
                    <Typography
                      variant="h6"
                      className="text-card-home"
                      sx={{
                        color: "white",
                        fontSize: {
                          xs: "1.1rem",
                          sm: "1.8rem",
                          md: "2.2rem",
                          lg: "2.6rem",
                          xl: "2.6rem",
                        },
                      }}
                    >
                      VS la communauté
                    </Typography>

                    <Box mt={2} position={"absolute"} bottom={0}>
                      <WhiteButton onClick={handleOpenCardNewRanked}>
                        C'est partie
                      </WhiteButton>
                    </Box>
                  </Stack>
                </Stack>
              </Stack>
              <img width={"20%"} src="/avatars.png" alt="Avatar Random" />
            </Stack>
          </CardContent>
        </Card>
        {isCardNewRankedOpen && (
          <MessageNewRanged
            open={isCardNewRankedOpen}
            onClose={() => setIsCardNewRankedOpen(false)}
          />
        )}
        <Card
          className="card-new-prived"
          style={{ borderRadius: 20, marginTop: 10 }}
          sx={{
            width: {
              xs: "100%",
              sm: "80%",
              md: "60%",
              l: "60%",
              xl: "60%",
              margin: "auto",
            },
          }}
        >
          <CardContent>
            <Stack
              position={"relative"}
              justifyContent={"space-between"}
              direction={"row"}
              flexWrap={"wrap"}
            >
              <Stack width={"80%"}>
                <Stack direction={"row"} alignItems={"baseline"} spacing={2}>
                  <Typography
                    className="text-special"
                    sx={{
                      fontSize: {
                        xs: "1.3rem",
                        sm: "2rem",
                        md: "2.4rem",
                        lg: "2.8rem",
                        xl: "3.2rem",
                      },
                      color: "black",
                    }}
                  >
                    Défiez
                  </Typography>
                  <Stack>
                    <Typography
                      variant="h6"
                      className="text-card-home"
                      sx={{
                        color: "black",
                        fontSize: {
                          xs: "1.1rem",
                          sm: "1.8rem",
                          md: "2.2rem",
                          lg: "2.6rem",
                          xl: "2.6rem",
                        },
                      }}
                    >
                      VS vos amis
                    </Typography>
                    <Box position={"absolute"} bottom={0}>
                      <WhiteButton>C'est partie</WhiteButton>
                    </Box>
                  </Stack>
                </Stack>
              </Stack>
              <img width={"20%"} src="/avatars.png" alt="Avatar Random" />
            </Stack>
          </CardContent>
        </Card>
        <Stack mt={5} direction={"row"} justifyContent={"space-between"}>
          <Typography className="top-theme-title">TOP THEMES</Typography>
          <Link to={`/theme`} className="top-theme-link">
            Tous voir
          </Link>
        </Stack>
        <Stack
          className="card-top-theme-home"
          direction={"row"}
          spacing={3}
          mt={1}
          sx={{ overflowX: "auto" }}
        >
          {topThemes.length ? (
            topThemes.slice(0, 5).map((topTheme, index) => (
              <Card sx={{ minWidth: 200, height: "100px" }} key={index}>
                <NavLink
                  to={`/theme/${topTheme.theme_id}`}
                  key={topTheme.theme_id}
                >
                  <CardActionArea style={{ width: "100%" }}>
                    <CardMedia
                      className="image-theme-home"
                      component="img"
                      height="100px"
                      width="350px"
                      image={displayImage(topTheme.theme_image)}
                      alt="Image description"
                    />
                    <Typography
                      variant="body2"
                      component="div"
                      className="text-top-home"
                      sx={{
                        position: "absolute",
                        bottom: 0,
                        left: "50%",
                        transform: "translateX(-50%)",
                        backgroundColor: "rgba(105, 73, 255, 0.8)",
                        padding: "4px",
                        borderRadius: "4px",
                        textAlign: "center",
                        width: "100%",
                        color: "var(--secondary-color)",
                      }}
                    >
                      {topTheme.theme}
                    </Typography>
                  </CardActionArea>
                </NavLink>
              </Card>
            ))
          ) : (
            <></>
          )}
        </Stack>
        <Stack
          mt={5}
          direction={"row"}
          justifyContent={"space-between"}
          justifyItems={"end"}
        >
          <Typography className="top-theme-title">TOP SOUS THEMES</Typography>
          <Link to={`/sous-theme`} className="top-theme-link">
            Tous voir
          </Link>
        </Stack>
        <Stack
          className="card-top-theme-home"
          direction={"row"}
          spacing={3}
          mt={1}
          sx={{ overflowX: "auto" }}
        >
          {topSousThemes.length ? (
            topSousThemes.slice(0, 5).map((topSousTheme, index) => (
              <Card sx={{ minWidth: 200, height: "100px" }} key={index}>
                <NavLink
                  to={`/sous-theme/${topSousTheme.id}`}
                  key={topSousTheme.id}
                >
                  <CardActionArea style={{ width: "100%" }}>
                    <CardMedia
                      className="image-theme-home"
                      component="img"
                      height="100px"
                      width="350px"
                      image={displayImage(topSousTheme.sous_theme_image)}
                      alt="Image description"
                    />
                    <Typography
                      variant="body2"
                      component="div"
                      className="text-top-home"
                      sx={{
                        position: "absolute",
                        bottom: 0,
                        left: "50%",
                        transform: "translateX(-50%)",
                        backgroundColor: "rgba(105, 73, 255, 0.8)",
                        padding: "4px",
                        borderRadius: "4px",
                        textAlign: "center",
                        width: "100%",
                        color: "var(--secondary-color)",
                      }}
                    >
                      {topSousTheme.sous_theme}
                    </Typography>
                  </CardActionArea>
                </NavLink>
              </Card>
            ))
          ) : (
            <></>
          )}
        </Stack>
        <Stack
          mt={5}
          direction={"row"}
          justifyContent={"space-between"}
          justifyItems={"end"}
        >
          <Typography className="top-theme-title">ALEATOIRE</Typography>
          <Link to={`/sous-theme`} className="top-theme-link">
            Tous voir
          </Link>
        </Stack>
        <Stack
          className="card-top-theme-home"
          direction={"row"}
          spacing={3}
          mt={1}
          sx={{ overflowX: "auto" }}
        >
          {randomThemes.length ? (
            randomThemes.slice(0, 5).map((randomTheme, index) => (
              <Card sx={{ minWidth: 200, height: "100px" }} key={index}>
                <NavLink
                  to={`/sous-theme/${randomTheme.id}`}
                  key={randomTheme.id}
                >
                  <CardActionArea style={{ width: "100%" }}>
                    <CardMedia
                      className="image-theme-home"
                      component="img"
                      height="100px"
                      width="350px"
                      image={displayImage(randomTheme.sous_theme_image)}
                      alt="Image description"
                    />
                    <Typography
                      variant="body2"
                      component="div"
                      className="text-top-home"
                      sx={{
                        position: "absolute",
                        bottom: 0,
                        left: "50%",
                        transform: "translateX(-50%)",
                        backgroundColor: "rgba(105, 73, 255, 0.8)",
                        padding: "4px",
                        borderRadius: "4px",
                        textAlign: "center",
                        width: "100%",
                        color: "var(--secondary-color)",
                      }}
                    >
                      {randomTheme.sous_theme}
                    </Typography>
                  </CardActionArea>
                </NavLink>
              </Card>
            ))
          ) : (
            <></>
          )}
        </Stack>
      </Box>
    </Container>
  );
};

export default Home;
