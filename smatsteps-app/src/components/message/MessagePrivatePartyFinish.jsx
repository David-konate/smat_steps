import { Close } from "@mui/icons-material";
import {
  Avatar,
  Card,
  CardContent,
  Dialog,
  IconButton,
  TextField,
  Typography,
} from "@mui/material";
import { Box, Stack } from "@mui/system";
import { useState } from "react";
import { useUserContext } from "../../context/UserProvider";
import CustomButton2 from "../buttons/CustomButton2";
import { PieChart, Pie, ResponsiveContainer, Cell } from "recharts";
import { useNavigate } from "react-router-dom";
import { useGameContext } from "../../context/GameProvider";
import axios from "axios";

const MessagePrivatePartyFinish = ({ open, onClose, smatsFinish }) => {
  const { user } = useUserContext();
  const [filterText, setFilterText] = useState("");
  const COLORS = ["#0088FE", "#00C49F"];
  const RADIAN = Math.PI / 180;
  const navigate = useNavigate();
  const { setSmatUsers, setSmat } = useGameContext();
  console.log({ smatsFinish });
  // Filtrer les parties privées en cours en fonction du texte de recherche
  const filteredSmats = smatsFinish?.filter((smat) =>
    smat?.relatedSmats?.some(
      (relatedSmat) =>
        relatedSmat.user.user_pseudo
          .toLowerCase()
          .includes(filterText.toLowerCase()) ||
        smat.smat.theme.theme
          .toLowerCase()
          .includes(filterText.toLowerCase()) ||
        (smat.smat.sous_theme &&
          smat.smat.sous_theme.sous_theme
            .toLowerCase()
            .includes(filterText.toLowerCase()))
    )
  );

  return (
    <Dialog
      open={open}
      onClose={onClose}
      fullWidth
      maxWidth="sm"
      style={{ padding: 2 }}
      sx={{ m: 0 }}
    >
      {/* En-tête de la boîte de dialogue */}
      <Stack
        direction="row"
        alignItems="center"
        justifyContent="space-between"
        px={2}
        py={1}
        sx={{
          backgroundColor: "var(--primary-color-special)",
          boxShadow: "0px 1px 6px var(--secondary-color-special)",
        }}
      >
        <Typography
          variant="h6"
          sx={{ color: "var(--secondary-color-special)" }}
        >
          Partie privées finies
        </Typography>
        <IconButton onClick={onClose}>
          <Close sx={{ color: "var(--secondary-color-special)" }} />
        </IconButton>
      </Stack>

      {/* Champ de recherche */}
      <Box mb={2}>
        <TextField
          label="Recherche par pseudo, thème ou sous-thème"
          variant="outlined"
          value={filterText}
          onChange={(e) => setFilterText(e.target.value)}
          fullWidth
        />
      </Box>

      {/* Affichage des parties filtrées */}
      <Box p={5} sx={{ margin: "0 auto" }}>
        {filteredSmats?.map((smat, index) => {
          // Détermination de l'index de l'utilisateur actuel et de son adversaire
          const currentUserIndex =
            smat.relatedSmats[0].user_id === user.id ? 0 : 1;
          const currentUser = smat.relatedSmats[currentUserIndex];
          const opponent = smat.relatedSmats[1 - currentUserIndex];
          console.log(currentUser.current_question);
          console.log(opponent.current_question);
          // Vérifier si c'est au tour de l'utilisateur actuel de jouer
          const isCurrentUserTurn =
            currentUser.current_question - opponent.current_question <= 1;
          console.log(currentUser.current_question - opponent.current_question);
          console.log({ isCurrentUserTurn });
          // Initialiser les données pour le graphique en camembert
          let data = [];

          // Vérifier les différents cas pour déterminer les pourcentages
          if (currentUser.result_smat != 0.0 && opponent.result_smat != 0.0) {
            // Calculer les pourcentages si les deux joueurs ont répondu
            const currentUserPercentage = parseFloat(
              (
                (currentUser.result_smat / currentUser.smat.totals_point) *
                100
              ).toFixed(2)
            );
            const opponentPercentage = parseFloat(
              (
                (opponent.result_smat / opponent.smat.totals_point) *
                100
              ).toFixed(2)
            );

            // Définir les données pour le graphique
            data = [
              {
                name: currentUser.user.user_pseudo,
                value: currentUserPercentage,
              },
              { name: opponent.user.user_pseudo, value: opponentPercentage },
            ];
            console.log("1");
          } else {
            // Cas où les deux joueurs n'ont pas encore répondu
            if (currentUser.result_smat == 0.0 && opponent.result_smat == 0) {
              // Les deux joueurs ont 50% chacun
              data = [
                { name: currentUser.user.user_pseudo, value: 50 },
                { name: opponent.user.user_pseudo, value: 50 },
              ];
              console.log("2");
            } else if (
              currentUser.result_smat == 0.0 &&
              opponent.result_smat != 0.0
            ) {
              // Cas où seul l'adversaire a répondu
              data = [
                { name: currentUser.user.user_pseudo, value: 0 },
                { name: opponent.user.user_pseudo, value: 100 },
              ];
              console.log("3");
            } else {
              // Cas où seul l'utilisateur actuel a répondu
              data = [
                { name: currentUser.user.user_pseudo, value: 100 },
                { name: opponent.user.user_pseudo, value: 0 },
              ];
              console.log("4");
            }
          }

          return (
            <Box key={index} maxWidth={300}>
              <Card
                title={smat.id}
                style={{
                  marginTop: 20,
                  borderRadius: 20,
                  display: "flex",
                  justifyContent: "center",
                  alignItems: "center",
                  boxShadow: `0px 4px 6px var(--primary-color-special)`,
                  border: `1px solid var(--secondary-color-special)`,
                  background: "var(--primary-color-special)",
                }}
              >
                <Box pl={4} pr={4}>
                  <CardContent
                    className="card-private-party"
                    sx={{ textAlign: "center" }}
                  >
                    {/* Graphique en camembert */}
                    <Box
                      sx={{
                        display: "flex",
                        justifyContent: "center",
                        alignItems: "center",
                      }}
                    >
                      <Box
                        sx={{
                          width: 200,
                          height: 200,
                          background: "var(--background)",
                          borderRadius: 5,
                          boxShadow: "0px 4px 8px rgba(0, 0, 0, 0.2)",
                        }}
                      >
                        <ResponsiveContainer width="100%" height="100%">
                          <PieChart>
                            <Pie
                              data={data}
                              cx="50%"
                              cy="50%"
                              startAngle={45}
                              endAngle={-315}
                              labelLine={false}
                              label={({
                                cx,
                                cy,
                                midAngle,
                                innerRadius,
                                outerRadius,
                                percent,
                                index,
                              }) => {
                                const radius =
                                  innerRadius +
                                  (outerRadius - innerRadius) * 0.5;
                                const x =
                                  cx + radius * Math.cos(-midAngle * RADIAN);
                                const y =
                                  cy + radius * Math.sin(-midAngle * RADIAN);
                                return (
                                  <text
                                    className="text-camembert"
                                    x={x}
                                    y={y}
                                    fill="white"
                                    textAnchor="middle"
                                    dominantBaseline="central"
                                  >
                                    {`${data[index].name}: ${(
                                      percent * 100
                                    ).toFixed(0)}%`}
                                  </text>
                                );
                              }}
                              outerRadius={80}
                              fill="#8884d8"
                              dataKey="value"
                            >
                              {data.map((entry, index) => (
                                <Cell
                                  key={`cell-${index}`}
                                  fill={COLORS[index % COLORS.length]}
                                />
                              ))}
                            </Pie>
                          </PieChart>
                        </ResponsiveContainer>
                      </Box>
                    </Box>

                    {/* Informations sur la partie */}
                    <Typography className="opponent-txt-private-party" mt={1}>
                      {currentUser.user_id === user.id
                        ? opponent.user.user_pseudo
                        : currentUser.user.user_pseudo}
                    </Typography>
                    <Typography className="theme-txt-private-party" mt={1}>
                      {smat.smat.sous_theme
                        ? smat.smat.sous_theme.sous_theme
                        : smat.smat.theme.theme}
                    </Typography>
                    <Typography className="opponent-txt-private-party" mt={1.2}>
                      Level : {smat?.smat.level_id}
                    </Typography>

                    {/* Bouton "Jouer" ou information sur le tour de jeu */}

                    <Box mt={2}>
                      <CustomButton2
                        onClick={async () => {
                          try {
                            await axios.post(`smats/${smat.smat.id}/finish`);
                          } catch (error) {
                          } finally {
                            navigate(`/`);
                          }
                        }}
                      >
                        pk
                      </CustomButton2>
                    </Box>
                  </CardContent>
                </Box>
              </Card>
            </Box>
          );
        })}
      </Box>
    </Dialog>
  );
};

export default MessagePrivatePartyFinish;
