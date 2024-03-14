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

const IndexSousTheme = () => {
  const [isBusy, setIsBusy] = useState(true);
  const { topSousThemes } = useGameContext();
  const [searchText, setSearchText] = useState(""); // État pour stocker le texte de recherche

  // Utilisation de useEffect pour mettre à jour isBusy une fois les données chargées
  useEffect(() => {
    setIsBusy(false);
  }, [topSousThemes]);

  const filteredThemes = useMemo(() => {
    const sous_theme = [...topSousThemes];
    return searchText?.length
      ? sous_theme.filter((theme) =>
          theme.sous_theme.toLowerCase().includes(searchText.toLowerCase())
        )
      : topSousThemes;
  }, [searchText, topSousThemes]);

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
            SOUS-THEMES
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
                placeholder="Rechercher un sous-thème..."
              />
            </Grid>
          </Grid>
          <Grid container className="card-top-theme-home" spacing={3} mt={1}>
            {filteredThemes?.length ? (
              filteredThemes.map((topSousTheme, index) => (
                <Grid item key={index} md={3} sm={4} xs={6}>
                  <Card
                    sx={{
                      border: "1px solid var(--secondary-color)",
                      boxShadow: "0px 4px 8px rgba(105, 73, 255, 0.7)",
                    }}
                    key={index}
                  >
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
                </Grid>
              ))
            ) : (
              <Typography
                sx={{ color: "var(--color-text)" }}
                variant="body1"
                textAlign="center"
              >
                Aucun résultat trouvé.
              </Typography>
            )}
          </Grid>
        </>
      )}
    </Container>
  );
};

export default IndexSousTheme;
