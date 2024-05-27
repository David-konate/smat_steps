import React, { useEffect, useMemo, useState } from "react";
import axios from "axios";
import { Box, Container, Grid, InputBase, Typography } from "@mui/material";
import { CircularProgress } from "@mui/material";
import CardTheme from "../../components/cards/CardTheme"; // Import the CardTheme component

const IndexTheme = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [themes, setThemes] = useState([]);
  const [searchText, setSearchText] = useState("");

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      setIsBusy(true);
      const res = await axios.get(`/themes`);

      console.log(res.data);
      setThemes(res.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const filteredThemes = useMemo(() => {
    const theme = [...themes];
    return searchText?.length
      ? theme.filter((theme) =>
          theme.theme.toLowerCase().includes(searchText.toLowerCase())
        )
      : themes;
  }, [searchText, themes]);

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
                  <CardTheme
                    theme={topTheme.theme}
                    theme_id={topTheme.id}
                    theme_image={topTheme.theme_image}
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

export default IndexTheme;
