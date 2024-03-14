import React, { useEffect, useMemo, useState } from "react";
import axios from "axios";
import {
  Box,
  Container,
  Grid,
  Input,
  InputBase,
  TextField,
  Typography,
} from "@mui/material";
import {
  Card,
  CardActionArea,
  CardMedia,
  CircularProgress,
} from "@mui/material";
import { NavLink } from "react-router-dom";
import { useGameContext } from "../../context/GameProvider";
import { displayImage } from "../../utils";
import { border } from "@mui/system";

const IndexTheme = () => {
  const [isBusy, setIsBusy] = useState(true);
  const { topThemes } = useGameContext();
  const [searchText, setSearchText] = useState(""); // État pour stocker le texte de recherche

  // Utilisation de useEffect pour mettre à jour isBusy une fois les données chargées
  useEffect(() => {
    setIsBusy(false);
  }, [topThemes]);

  const filteredThemes = useMemo(() => {
    const theme = [...topThemes];
    return searchText?.length
      ? theme.filter((theme) =>
          theme.theme.toLowerCase().includes(searchText.toLowerCase())
        )
      : topThemes;
  }, [searchText, topThemes]);

  return (
    <Container className="index-sous-theme">
      {isBusy ? (
        <Box
          sx={{
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
            height: "100vh",
          }}
        >
          <CircularProgress />
        </Box>
      ) : (
        <>
          <Typography
            sx={{ color: "var(--primary-color)" }}
            mt={2}
            textAlign={"center"}
            variant="h3"
          >
            THEMES
          </Typography>

          <Grid
            container
            mt={3}
            sx={{ display: "flex", justifyContent: "center" }}
          >
            <Grid xs={10} sm={6}>
              <InputBase
                className="text-field-sous-theme"
                variant="standard"
                fullWidth
                type="text"
                value={searchText}
                onChange={(e) => setSearchText(e.target.value)}
                placeholder="Rechercher un thème..."
              />
            </Grid>
          </Grid>
          <Grid container className="card-top-theme-home" spacing={3} mt={1}>
            {filteredThemes?.length ? (
              filteredThemes.map((topTheme, index) => (
                <Grid item key={index} md={3} sm={4} xs={6}>
                  <Card
                    sx={{
                      border: "1px solid var(--secondary-color)",
                      boxShadow: "0px 4px 8px rgba(105, 73, 255, 0.7)",
                    }}
                    key={index}
                  >
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
                </Grid>
              ))
            ) : (
              <Container>
                {" "}
                <Typography
                  sx={{ color: "var(--color-text)", fontFamily: "Madimi One" }}
                  className="no-result"
                  variant="body1"
                  textAlign="center"
                >
                  Aucun résultat trouvé.
                </Typography>
              </Container>
            )}
          </Grid>
        </>
      )}
    </Container>
  );
};

export default IndexTheme;
