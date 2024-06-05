import React, { useState, useEffect } from "react";
import {
  CircularProgress,
  Typography,
  Box,
  Container,
  FormControl,
  TextField,
  FormHelperText,
  Select,
  MenuItem,
  RadioGroup,
  FormControlLabel,
  Radio,
} from "@mui/material";
import Cookies from "js-cookie";
import { vestResolver } from "@hookform/resolvers/vest";
import { Controller, useForm } from "react-hook-form";
import { validationQuestion, errorField } from "../../utils/formValidator";
import axios from "axios";
import ReactQuill from "react-quill";
import "react-quill/dist/quill.snow.css";
import { Stack, color } from "@mui/system";
import CustomButton2 from "../buttons/CustomButton2";
import { useUserContext } from "../../context/UserProvider";

const QuestionForm = ({ questionId = null }) => {
  const [isBusy, setIsBusy] = useState(true);
  const [themes, setThemes] = useState([]);
  const [sousThemes, setSousThemes] = useState([]);
  const [levels, setLevels] = useState([]);
  const [searchTextTheme, setSearchTextTheme] = useState("");
  const [searchTextSousTheme, setSearchTextSousTheme] = useState("");
  const [searchLevel, setSearchLevel] = useState(null);
  const [selectedTheme, setSelectedTheme] = useState(null);
  const [listVisibleTheme, setListVisibleTheme] = useState(false);
  const [listVisibleSousTheme, setListVisibleSousTheme] = useState(false);
  const [listVisibleLevel, setListVisibleLevel] = useState(false);
  const [answers, setAnswers] = useState(Array(4).fill(""));
  const [correctAnswerIndex, setCorrectAnswerIndex] = useState(null);
  const [correctAnswers, setCorrectAnswers] = useState(Array(4).fill(false));

  const { user } = useUserContext();

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
    console.log(errors);
  }, [errors]);

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
  const handleSelectCorrect = (index) => {
    // Mettre à jour l'index de la réponse correcte
    setCorrectAnswerIndex(index);
  };

  const onSubmit = async (data) => {
    // Créer un tableau pour stocker les réponses au format attendu
    const formattedAnswers = answers.map((answer, index) => ({
      answerText: answer,
      is_correct: index === correctAnswerIndex ? 1 : 0,
    }));

    // Ajouter les réponses formatées aux données à soumettre
    data.answers = formattedAnswers;

    // Ajoutez l'ID de l'utilisateur connecté
    data.user_id = user.id;
    try {
      const token = Cookies.get("token");
      const response = await axios.post("/questions", data, {
        headers: {
          Authorization: `Bearer ${token}`,
        },
      });
    } catch (error) {
      console.error("Erreur lors de la soumission de la question :", error);
    }
  };

  const handleChange = (e, setValue, setSearchText, setListVisible) => {
    const inputValue = e.target.value.toLowerCase();
    setSearchText(inputValue);
    setListVisible(true);
  };

  const handleChangeTheme = (e) =>
    handleChange(e, setValue, setSearchTextTheme, setListVisibleTheme);

  const handleSelectTheme = async (theme) => {
    setSelectedTheme(theme);
    setValue("theme_id", theme.id);
    setSearchTextTheme(theme.theme);
    setListVisibleTheme(false);

    // Filtrer les sous-thèmes en fonction du thème sélectionné
    const filteredSousThemes = sousThemes.filter(
      (sousTheme) => sousTheme.theme_id === theme.id
    );

    // Mettre à jour l'état des sous-thèmes avec la liste filtrée
    setSousThemes(filteredSousThemes);
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
    setSearchLevel(e.target.value !== "" ? parseInt(e.target.value) : null);

  const handleSelectLevel = (level) => {
    setValue("level_id", level.id);
    setSearchLevel(level.level);
    setListVisibleLevel(false);
  };
  return (
    <Container>
      {isBusy ? (
        <CircularProgress />
      ) : (
        <Box p={2} className="form-question" maxWidth={"sm"} margin={"auto"}>
          <Typography
            variant="h2"
            display="flex"
            justifyContent="center"
            alignItems="center"
            className="title"
          >
            Gestion question
          </Typography>
          <Box
            mt={4}
            component="form"
            onSubmit={handleSubmit(onSubmit)}
            display="flex"
            flexDirection="column"
            alignItems="center"
          >
            <FormControl margin="auto">
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
                value={searchLevel !== null ? searchLevel : ""}
                onChange={handleChangeLevel}
                placeholder="Niveau de la question 1, 2 ou 3"
              />
              {listVisibleLevel && (
                <Box>
                  {levels
                    .filter(
                      (level) =>
                        searchLevel !== null &&
                        level.level.toString().includes(searchLevel.toString())
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
              {answers.map((answer, index) => (
                <Box key={index} mt={2} display="flex" alignItems="center">
                  <TextField
                    {...register(`answers[${index}]`)}
                    {...errorField(errors?.answers && errors.answers[index])}
                    margin="normal"
                    variant="standard"
                    fullWidth
                    label={`Réponse ${index + 1}`}
                    value={answer}
                    onChange={(e) => {
                      const newAnswers = [...answers];
                      newAnswers[index] = e.target.value;
                      setAnswers(newAnswers);
                    }}
                  />
                  <RadioGroup
                    aria-label={`correct-answer-${index}`}
                    name={`correct-answer-${index}`}
                    value={index === correctAnswerIndex ? index.toString() : ""}
                    onChange={() => handleSelectCorrect(index)}
                  >
                    <FormControlLabel
                      value={index.toString()}
                      control={<Radio />}
                      sx={{ marginLeft: "auto" }} // Pour placer le bouton radio à droite
                    />
                  </RadioGroup>
                </Box>
              ))}

              <Box mt={3}>
                <CustomButton2
                  className="btn-connexion"
                  type="submit"
                  fullWidth
                  variant="contained"
                  sx={{ mt: 3, mb: 2 }}
                >
                  Enregistrer
                </CustomButton2>
              </Box>
            </FormControl>
          </Box>
        </Box>
      )}
    </Container>
  );
};

export default QuestionForm;
