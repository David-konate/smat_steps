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
} from "@mui/material";
import { useGameContext } from "../../context/GameProvider";

import moment from "moment";

const RankingsList = ({ rankings }) => {
  const { topUserRanking } = useGameContext();

  // Utilisez les classements passés en paramètre s'ils sont définis, sinon utilisez topUserRanking
  const rankingData = rankings || topUserRanking;

  const [orderBy, setOrderBy] = useState("id");
  const [order, setOrder] = useState("asc");

  const handleSort = (property) => {
    const isAsc = orderBy === property && order === "asc";
    setOrder(isAsc ? "desc" : "asc");
    setOrderBy(property);
  };

  const sortedRankings = [...rankingData].sort((a, b) => {
    // Convertir les pourcentages en nombres entiers pour la comparaison
    const percentA = parseInt(a.result_quiz);
    const percentB = parseInt(b.result_quiz);

    // Comparaison des pourcentages
    if (percentA < percentB) {
      return order === "asc" ? -1 : 1;
    }
    if (percentA > percentB) {
      return order === "asc" ? 1 : -1;
    }
    return 0;
  });

  return (
    <Container component="main" maxWidth="md">
      <TableContainer component={Paper}>
        <Table>
          <TableHead>
            <TableRow>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "id"}
                  direction={orderBy === "id" ? order : "asc"}
                  onClick={() => handleSort("id")}
                >
                  #
                </TableSortLabel>
              </TableCell>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "result_quiz"}
                  direction={orderBy === "result_quiz" ? order : "asc"}
                  onClick={() => handleSort("result_quiz")}
                >
                  Résultat (%)
                </TableSortLabel>
              </TableCell>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "time_quiz"}
                  direction={orderBy === "time_quiz" ? order : "asc"}
                  onClick={() => handleSort("time_quiz")}
                >
                  Temps
                </TableSortLabel>
              </TableCell>
              <TableCell>
                <TableSortLabel
                  active={orderBy === "user.user_pseudo"}
                  direction={orderBy === "user.user_pseudo" ? order : "asc"}
                  onClick={() => handleSort("user.user_pseudo")}
                >
                  Joueur
                </TableSortLabel>
              </TableCell>
              {/* Ajout de la colonne "Niveau" */}
              <TableCell>
                <TableSortLabel
                  active={orderBy === "created_at"}
                  direction={orderBy === "created_at" ? order : "asc"}
                  onClick={() => handleSort("created_at")}
                >
                  Date
                </TableSortLabel>
              </TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {sortedRankings.slice(3, 14).map(
              (
                ranking,
                index // Utilisation de slice pour extraire de la 4ème à la 14ème itération
              ) => (
                <TableRow key={index}>
                  <TableCell>{index + 4}</TableCell>{" "}
                  {/* Pour afficher les numéros à partir de 4 */}
                  <TableCell>{ranking.result_quiz}%</TableCell>
                  <TableCell>{ranking.time_quiz}</TableCell>
                  <TableCell>{ranking.user.user_pseudo}</TableCell>
                  {/* Affichage du niveau dans la colonne "Niveau" */}
                  <TableCell>
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

export default RankingsList;
