import React, { useState, useEffect } from "react";
import {
  CircularProgress,
  Typography,
  Box,
  Container,
  FormControl,
  TextField,
  FormHelperText,
} from "@mui/material";
import { vestResolver } from "@hookform/resolvers/vest";
import { Controller, useForm } from "react-hook-form";
import { validationQuestion, errorField } from "../../utils/formValidator";
import axios from "axios";
import ReactQuill from "react-quill";
import "react-quill/dist/quill.snow.css"; // Styles par défaut de ReactQuill
import { Stack } from "@mui/system";

const QuestionForm = ({ questionId = null }) => {
  const [isBusy, setIsBusy] = useState(true);
  const [themes, setThemes] = useState([]);
  const [sousThemes, setSousThemes] = useState([]);
  const [levels, setLevels] = useState([]);
  const [searchTextTheme, setSearchTextTheme] = useState("");
  const [searchTextSousTheme, setSearchTextSousTheme] = useState("");
  const [searchLevel, setSearchLevel] = useState(null); // Modifié
  const [selectedTheme, setSelectedTheme] = useState(null);
  const [listVisibleTheme, setListVisibleTheme] = useState(false);
  const [listVisibleSousTheme, setListVisibleSousTheme] = useState(false);
  const [listVisibleLevel, setListVisibleLevel] = useState(false);

  const {
    register,
    handleSubmit,
    setValue,
    control,
    formState: { errors },
  } = useForm({
    mode: "onBlur",
    resolver: vestResolver(validationQuestion),
  });

  useEffect(() => {
    const fetchDataThemes = async () => {
      try {
        const response = await axios.get(`themes/`);
        setThemes(response.data);
      } catch (error) {
        console.error("Erreur lors de la récupération des thèmes :", error);
      }
    };

    const fetchDataSousThemes = async () => {
      try {
        const response = await axios.get(`sous-themes/`);
        setSousThemes(response.data);
      } catch (error) {
        console.error(
          "Erreur lors de la récupération des sous-thèmes :",
          error
        );
      }
    };

    const fetchDataLevels = async () => {
      try {
        const response = await axios.get(`levels/`);
        setLevels(response.data);
      } catch (error) {
        console.error("Erreur lors de la récupération des niveaux :", error);
      }
    };

    const fetchData = async () => {
      try {
        await Promise.all([
          fetchDataThemes(),
          fetchDataSousThemes(),
          fetchDataLevels(),
        ]);
        setIsBusy(false);
      } catch (error) {
        console.error("Une erreur est survenue lors du chargement :", error);
        setIsBusy(false);
      }
    };

    fetchData();
  }, []);

  useEffect(() => {
    if (
      !isBusy &&
      themes.length > 0 &&
      sousThemes.length > 0 &&
      levels.length > 0 &&
      questionId
    ) {
      fetchQuestionData(questionId);
    }
  }, [isBusy, themes, sousThemes, levels, questionId]);

  const fetchQuestionData = async (questionId) => {
    try {
      const response = await axios.get(`questions/${questionId}`);
      setValue("question", response.data.question);
      setValue("theme_id", response.data.theme);
      setValue("sous_theme_id", response.data.sousThemes);
      setValue("level_id", response.data.levels);
    } catch (error) {
      console.error("Erreur lors de la récupération de la question :", error);
    }
  };

  const onSubmit = (data) => {
    console.log(data); // Placeholder for actual form submission
  };

  // Fonction générique pour gérer les changements de recherche
  const handleChange = (e, setValue, setSearchText, setListVisible) => {
    const inputValue = e.target.value.toLowerCase();
    setSearchText(inputValue);
    setListVisible(true);
  };

  const handleChangeTheme = (e) =>
    handleChange(e, setValue, setSearchTextTheme, setListVisibleTheme);

  const handleSelectTheme = (theme) => {
    setSelectedTheme(theme);
    setValue("theme_id", theme.id);
    setSearchTextTheme(theme.theme);
    setListVisibleTheme(false);
  };

  const handleChangeSousTheme = (e) =>
    handleChange(e, setValue, setSearchTextSousTheme, setListVisibleSousTheme);

  const handleSelectSousTheme = (sousTheme) => {
    setSelectedTheme(sousTheme);
    setValue("sous_theme_id", sousTheme.id);
    setSearchTextSousTheme(sousTheme.sous_theme);
    setListVisibleSousTheme(false);
  };

  const handleChangeLevel = (e) =>
    setSearchLevel(e.target.value !== "" ? parseInt(e.target.value) : null); // Modifié

  const handleSelectLevel = (level) => {
    setValue("level_id", level);
    setSearchLevel(level);
    setListVisibleLevel(false);
  };

  return (
    <Container>
      {isBusy ? (
        <CircularProgress />
      ) : (
        <Box>
          <Typography> Gestion question</Typography>
          <Box component="form" onSubmit={handleSubmit(onSubmit)}>
            <FormControl>
              <Controller
                control={control}
                name="question"
                render={({ field: { value, onChange } }) => (
                  <ReactQuill
                    theme="snow"
                    modules={{
                      toolbar: [
                        [{ header: [1, 2, false] }],
                        ["bold", "italic", "underline"],
                        ["image", "code-block"],
                      ],
                    }}
                    value={value}
                    onChange={onChange}
                  />
                )}
              />
              {Boolean(errors?.question) && (
                <FormHelperText>{errors?.question?.message}</FormHelperText>
              )}

              <TextField
                {...register("theme_id", { required: true })}
                {...errorField(errors?.theme_id)}
                margin="normal"
                variant="standard"
                fullWidth
                type="text"
                value={searchTextTheme}
                onChange={handleChangeTheme}
                placeholder="Thème de la question"
              />
              {listVisibleTheme && (
                <Box>
                  {themes
                    .filter((theme) =>
                      theme.theme.toLowerCase().includes(searchTextTheme)
                    )
                    .map((theme) => (
                      <div
                        key={theme.id}
                        onClick={() => handleSelectTheme(theme)}
                      >
                        {theme.theme}
                      </div>
                    ))}
                </Box>
              )}
              <TextField
                {...register("sous_theme_id", { required: true })}
                {...errorField(errors?.sous_theme_id)}
                margin="normal"
                variant="standard"
                fullWidth
                type="text"
                value={searchTextSousTheme}
                onChange={handleChangeSousTheme}
                placeholder="Sous-thème de la question"
              />
              {listVisibleSousTheme && (
                <Box>
                  {sousThemes
                    .filter((sousTheme) =>
                      sousTheme.sous_theme
                        .toLowerCase()
                        .includes(searchTextSousTheme)
                    )
                    .map((sousTheme) => (
                      <div
                        key={sousTheme.id}
                        onClick={() => handleSelectSousTheme(sousTheme)}
                      >
                        {sousTheme.sous_theme}
                      </div>
                    ))}
                </Box>
              )}
              <TextField
                {...register("level_id", { required: true })}
                {...errorField(errors?.level_id)}
                margin="normal"
                variant="standard"
                fullWidth
                type="number"
                value={searchLevel !== null ? searchLevel : ""} // Modifié
                onChange={handleChangeLevel}
                placeholder="Niveau de la question 1, 2 ou 3"
              />
              {listVisibleLevel && (
                <Box>
                  {levels
                    .filter(
                      (level) =>
                        searchLevel !== null &&
                        level.level.toString().includes(searchLevel)
                    )
                    .map((level) => (
                      <div
                        key={level.id}
                        onClick={() => handleSelectLevel(level)}
                      >
                        {level.level}
                      </div>
                    ))}
                </Box>
              )}
              <Stack direction={"row"}>
                <TextField
                  {...register("answer1")} // Reliez le champ de réponse au formulaire
                  margin="normal"
                  variant="standard"
                  fullWidth
                  label="Réponse 1"
                />
                {/* Ajoutez le bouton radio pour la première réponse */}
                <input
                  type="radio"
                  name="correctAnswer"
                  value="1"
                  onChange={(e) => setValue("correctAnswer", e.target.value)} // Mettez à jour la valeur de la réponse correcte
                />
              </Stack>
              <Stack direction={"row"}>
                {/* Répétez les étapes pour les trois autres réponses */}
                <TextField
                  {...register("answer2")}
                  margin="normal"
                  variant="standard"
                  fullWidth
                  label="Réponse 2"
                />
                <input
                  type="radio"
                  name="correctAnswer"
                  value="2"
                  onChange={(e) => setValue("correctAnswer", e.target.value)}
                />
              </Stack>
              <Stack direction={"row"}>
                {" "}
                <TextField
                  {...register("answer3")}
                  margin="normal"
                  variant="standard"
                  fullWidth
                  label="Réponse 3"
                />
                <input
                  type="radio"
                  name="correctAnswer"
                  value="3"
                  onChange={(e) => setValue("correctAnswer", e.target.value)}
                />
              </Stack>

              <Stack direction={"row"}>
                {" "}
                <TextField
                  {...register("answer4")}
                  margin="normal"
                  variant="standard"
                  fullWidth
                  label="Réponse 4"
                />
                <input
                  type="radio"
                  name="correctAnswer"
                  value="4"
                  onChange={(e) => setValue("correctAnswer", e.target.value)}
                />
              </Stack>
            </FormControl>
          </Box>
        </Box>
      )}
    </Container>
  );
};

export default QuestionForm;
