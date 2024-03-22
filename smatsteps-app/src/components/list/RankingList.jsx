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

const RankingsList = () => {
  const { topUserRanking } = useGameContext();

  const [orderBy, setOrderBy] = useState("id");
  const [order, setOrder] = useState("asc");

  const handleSort = (property) => {
    const isAsc = orderBy === property && order === "asc";
    setOrder(isAsc ? "desc" : "asc");
    setOrderBy(property);
  };

  const sortedRankings = [...topUserRanking].sort((a, b) => {
    const percentA = parseInt(a.result_quiz);
    const percentB = parseInt(b.result_quiz);

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
            {sortedRankings.slice(3, 14).map((ranking, index) => (
              <TableRow key={index}>
                <TableCell>{index + 4}</TableCell>
                <TableCell>{ranking.result_quiz}%</TableCell>
                <TableCell>{ranking.time_quiz}</TableCell>
                <TableCell>{ranking.user.user_pseudo}</TableCell>
                <TableCell>
                  {moment(ranking.created_at).format("D MMMM YYYY")}
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </Container>
  );
};

export default RankingsList;
