import React, { useState } from "react";
import {
  Box,
  Container,
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  Paper,
  TableSortLabel,
  TextField,
  Typography,
} from "@mui/material";
import moment from "moment";
import { firstLetterUppercase } from "../../utils";

const RankingsListProfil = ({ rankings }) => {
  const [orderBy, setOrderBy] = useState("result_quiz"); // Modifier orderBy pour le tri initial
  const [order, setOrder] = useState("desc"); // Modifier order pour le tri initial
  const [filterValue, setFilterValue] = useState("");

  const handleSort = (property) => {
    const isAsc = orderBy === property && order === "asc";
    setOrder(isAsc ? "desc" : "asc");
    setOrderBy(property);
  };

  const sortedRankings = [...rankings].sort((a, b) => {
    const valueA = a[orderBy];
    const valueB = b[orderBy];

    if (typeof valueA === "string" && typeof valueB === "string") {
      return order === "asc"
        ? valueA.localeCompare(valueB)
        : valueB.localeCompare(valueA);
    } else if (typeof valueA === "number" && typeof valueB === "number") {
      return order === "asc" ? valueA - valueB : valueB - valueA;
    } else if (moment.isMoment(valueA) && moment.isMoment(valueB)) {
      return order === "asc" ? valueA.diff(valueB) : valueB.diff(valueA);
    } else {
      // Handle other types of data comparison as needed
      // For example, you might want to handle booleans or other types here
      return 0;
    }
  });
  const filteredRankings = sortedRankings.filter((ranking) => {
    const theme = ranking.theme.theme.toLowerCase();
    const sousTheme = ranking.sous_theme
      ? ranking.sous_theme.sous_theme.toLowerCase()
      : "";

    const filterText = filterValue.toLowerCase();
    return (
      filterValue === "" ||
      theme.includes(filterText) ||
      sousTheme.includes(filterText)
    );
  });
  return (
    <Container component="main" maxWidth="md">
      <Box sx={{ mb: 2, textAlign: "center" }}>
        <TextField
          className="box-field"
          label="Filtrer par theme ou sous theme"
          variant="outlined"
          value={filterValue}
          onChange={(e) => setFilterValue(e.target.value)}
        />
      </Box>
      <TableContainer className="container-result-profil" component={Paper}>
        <Table>
          <TableHead className="head-result-profil">
            <TableRow>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "result_quiz"}
                  direction={orderBy === "result_quiz" ? order : "asc"}
                  onClick={() => handleSort("result_quiz")}
                >
                  <Typography className="label-result-profil">
                    {" "}
                    Résultat
                  </Typography>
                </TableSortLabel>
              </TableCell>

              <TableCell className="label-result-profil">Theme</TableCell>
              <TableCell className="label-result-profil">Sous Theme</TableCell>
              <TableCell className="label-result-profil">Date</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {filteredRankings.map(
              (ranking, index) =>
                (order === "asc" ||
                  filterValue !== "" ||
                  index >= 3 ||
                  orderBy !== "result_quiz") && (
                  <TableRow key={index}>
                    <TableCell className="cell-result-profil">
                      {ranking.result_quiz}%
                    </TableCell>
                    <TableCell className="cell-other-profil">
                      {firstLetterUppercase(ranking.theme.theme)}
                    </TableCell>
                    <TableCell className="cell-other-profil">
                      {ranking.sous_theme
                        ? firstLetterUppercase(ranking.sous_theme.sous_theme)
                        : "N/A"}
                    </TableCell>
                    <TableCell className="cell-other-profil">
                      {moment(ranking.created_at).format("D MMMM YYYY")}
                    </TableCell>
                  </TableRow>
                )
            )}
          </TableBody>
        </Table>
      </TableContainer>
    </Container>
  );
};

export default RankingsListProfil;
