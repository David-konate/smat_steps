import React, { useEffect, useMemo, useState } from "react";
import axios from "axios";
import { Box, Container, Grid, InputBase, Typography } from "@mui/material";
import { CircularProgress } from "@mui/material";
import CardSousTheme from "../../components/cards/CardSousTheme";
import { Helmet } from "react-helmet-async";

const IndexSousTheme = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [searchText, setSearchText] = useState("");
  const [sousThemes, setSousThemes] = useState([]);

  useEffect(() => {
    fetchData();
  }, []); // Removed sousThemes from dependency array to prevent infinite loop

  const fetchData = async () => {
    try {
      setIsBusy(true);
      const res = await axios.get(`/sous-themes`);

      console.log(res.data);
      setSousThemes(res.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const filteredThemes = useMemo(() => {
    const sous_theme = [...sousThemes];
    return searchText?.length
      ? sous_theme.filter((theme) =>
          theme.sous_theme.toLowerCase().includes(searchText.toLowerCase())
        )
      : sousThemes;
  }, [searchText, sousThemes]);

  return (
    <Container className="index-sous-theme">
      <Helmet>
        <title>Page index sous themes -SmatSteps</title>
        <meta
          name="description"
          content="Bienvenue sur la page sous themes de SmatSteps, une application de quiz interactive, conviviale et enrichissante. Explorez et élargissez vos connaissances avec SmatSteps !"
        />
      </Helmet>
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
                  {/* Utiliser le composant CardTheme */}
                  <CardSousTheme
                    theme={topSousTheme.sous_theme}
                    theme_id={topSousTheme.id}
                    theme_image={topSousTheme.sous_theme_image}
                  />
                </Grid>
              ))
            ) : (
              <Typography
                sx={{ color: "var(--color-text)", fontFamily: "Madimi One" }}
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
