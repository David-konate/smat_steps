import React, { useEffect, useState } from "react";
import axios from "axios";
import {
  CircularProgress,
  Container,
  TextField,
  Typography,
  Box,
  Button,
} from "@mui/material";
import FormatListNumberedIcon from "@mui/icons-material/FormatListNumbered";
import CategoryIcon from "@mui/icons-material/Category";
import SportsIcon from "@mui/icons-material/Sports";
import LayersIcon from "@mui/icons-material/Layers";
import QuestionForm from "../forms/QuestionForm";
import { displayImage, firstLetterUppercase } from "../../utils";
import { useNavigate } from "react-router-dom";
import AddIcon from "@mui/icons-material/Add"; // Import de l'icône Add

const columns = [
  { key: "image_question", title: "#" },
  { key: "question", icon: <FormatListNumberedIcon /> },
  { key: "theme_id", icon: <SportsIcon /> },
  { key: "sous_theme_id", icon: <CategoryIcon /> },
  { key: "level_id", icon: <LayersIcon /> },
];

const QuestionsList = () => {
  const [isBusy, setIsBusy] = useState(true);
  const [filter, setFilter] = useState("");
  const [questions, setQuestions] = useState([]);
  const [filteredQuestions, setFilteredQuestions] = useState([]);
  const [orderBy, setOrderBy] = useState({
    field: "question",
    ascending: true,
  });
  const [isFormOpen, setIsFormOpen] = useState(false);

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    try {
      const res = await axios.get("/questions");
      setQuestions(res.data);
      setFilteredQuestions(res.data);
    } catch (error) {
      console.error(error);
    } finally {
      setIsBusy(false);
    }
  };

  const handleFilterChange = (event) => {
    setFilter(event.target.value);
    filterQuestions(questions, event.target.value);
  };

  const handleHeaderClick = (field) => {
    if (orderBy.field === field) {
      setOrderBy({ ...orderBy, ascending: !orderBy.ascending });
    } else {
      setOrderBy({ field, ascending: true });
    }
    sortQuestions(field);
  };

  const sortQuestions = (field) => {
    const sortedQuestions = [...filteredQuestions].sort((a, b) => {
      let aValue =
        typeof a[field] === "string" ? a[field].toLowerCase() : a[field];
      let bValue =
        typeof b[field] === "string" ? b[field].toLowerCase() : b[field];

      if (typeof aValue === "number" && typeof bValue === "number") {
        return orderBy.ascending ? aValue - bValue : bValue - aValue;
      }

      if (typeof aValue === "string" && typeof bValue === "string") {
        return orderBy.ascending
          ? aValue.localeCompare(bValue)
          : bValue.localeCompare(aValue);
      }

      return orderBy.ascending ? aValue - bValue : bValue - aValue;
    });
    setFilteredQuestions(sortedQuestions);
  };

  const filterQuestions = (questions, filter) => {
    const filtered = questions.filter((question) => {
      const questionText = question.question.toLowerCase();
      const theme = question.theme.theme.toLowerCase();
      const sousTheme = question.sous_theme.sous_theme.toLowerCase();
      const filterLower = filter.toLowerCase();
      return (
        questionText.includes(filterLower) ||
        theme.includes(filterLower) ||
        sousTheme.includes(filterLower)
      );
    });
    setFilteredQuestions(filtered);
  };

  const handleCloseForm = () => {
    setIsFormOpen(false); // Fermer le formulaire
  };
  const handleAddQuestionClick = () => {
    setIsFormOpen(true); // Ouvrir le formulaire lors du clic sur le bouton "Ajouter une question"
  };

  // Fonction pour fermer la liste des questions lorsque le formulaire est ouvert
  const handleCloseList = () => {
    setIsFormOpen(false);
  };

  return (
    <Container>
      {isBusy ? (
        <CircularProgress />
      ) : (
        <>
          <Typography variant="h5" gutterBottom>
            Liste des questions
          </Typography>
          {/* Afficher le formulaire QuestionForm si isFormOpen est vrai */}
          {isFormOpen && <QuestionForm onClose={handleCloseForm} />}
          <Box
            display="flex"
            justifyContent="space-between"
            alignItems="center"
          >
            <Box>
              <TextField
                label="Rechercher"
                value={filter}
                onChange={handleFilterChange}
              />
            </Box>
            <Box>
              <Button
                variant="contained"
                onClick={handleAddQuestionClick}
                startIcon={<AddIcon />} // Utilisation de l'icône Add
              >
                Ajouter une question
              </Button>
            </Box>
          </Box>
          <Box
            display="grid"
            gridTemplateColumns="0.3fr 1fr 1fr 1fr 1fr"
            borderBottom={1}
            borderColor="divider"
            mt={2}
            sx={{ textAlign: "center" }}
          >
            {columns.map((column) => (
              <Box
                key={column.key}
                p={1}
                onClick={() => handleHeaderClick(column.key)}
                sx={{ cursor: "pointer" }}
              >
                <Box display="flex" flexDirection="column" alignItems="center">
                  {column.icon}
                  <Typography variant="subtitle1">{column.title}</Typography>
                </Box>
              </Box>
            ))}
          </Box>
          {filteredQuestions.map((question, index) => (
            <Box
              key={index}
              display="flex"
              alignItems="center"
              borderBottom={1}
              borderColor="divider"
              mt={1}
            >
              <Box
                sx={{
                  flex: 1,
                  display: "flex",
                  justifyContent: "center",
                  alignItems: "center",
                }}
              >
                <Box style={{ cursor: "pointer" }}>
                  <img
                    style={{
                      borderRadius: "10px",
                      width: "50px",
                      height: "50px",
                      objectFit: "cover",
                    }}
                    src={displayImage(question.question_image)}
                    alt={question.question_theme}
                  />
                </Box>
              </Box>
              <Box
                sx={{
                  flex: 3,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  m: 1,
                  p: 1,
                }}
              >
                <Typography align="center">
                  {firstLetterUppercase(question.question)}
                </Typography>
              </Box>
              <Box
                sx={{
                  flex: 3,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  m: 1,
                  p: 1,
                }}
              >
                <Typography align="center">
                  {firstLetterUppercase(question.theme.theme)}
                </Typography>
              </Box>
              <Box
                sx={{
                  flex: 3,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  m: 1,
                  p: 1,
                }}
              >
                <Typography align="center">
                  {firstLetterUppercase(question.sous_theme.sous_theme)}
                </Typography>
              </Box>
              <Box
                sx={{
                  flex: 3,
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  m: 1,
                  p: 1,
                }}
              >
                <Typography align="center">{question.level.id}</Typography>
              </Box>
            </Box>
          ))}
        </>
      )}
    </Container>
  );
};

export default QuestionsList;
