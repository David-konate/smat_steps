import React, { useState } from "react";
import { Close } from "@mui/icons-material";
import {
  Box,
  Card,
  CardContent,
  Dialog,
  DialogContent,
  IconButton,
  TextField,
  Typography,
} from "@mui/material";
import { PieChart, Pie, ResponsiveContainer, Cell } from "recharts";
import { useUserContext } from "../../context/UserProvider";

const MessagePrivatePartyFinish = ({ open, onClose, smatsFinish }) => {
  const { user } = useUserContext();
  const [filterText, setFilterText] = useState("");

  const COLORS = [
    "var(--primary-color-special)",
    "var(--secondary-color-special)",
  ];
  const RADIAN = Math.PI / 180;
  const filteredSmats = smatsFinish?.filter((smat) =>
    smat?.users?.some(
      (user) =>
        user.user_pseudo.toLowerCase().includes(filterText.toLowerCase()) ||
        (smat.sous_theme &&
          smat.sous_theme.sous_theme
            .toLowerCase()
            .includes(filterText.toLowerCase())) ||
        (smat.theme &&
          smat.theme.theme.toLowerCase().includes(filterText.toLowerCase()))
    )
  );

  const handleFilterChange = (e) => {
    setFilterText(e.target.value);
  };
  return (
    <Dialog open={open} onClose={onClose} fullWidth maxWidth="sm">
      <Box
        sx={{
          display: "flex",
          alignItems: "center",
          justifyContent: "space-between",
          p: 2,
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
      </Box>

      <Box px={2} mt={1} pb={2}>
        <TextField
          label="Recherche par pseudo, thème ou sous-thème"
          variant="outlined"
          value={filterText}
          onChange={handleFilterChange}
          fullWidth
        />
      </Box>

      <Box p={2} sx={{ margin: "0 auto" }}>
        {filteredSmats?.map((smat, index) => {
          const currentUserIndex = smat.user_smats[0].id === user.id ? 0 : 1;
          const currentUser = smat.user_smats[currentUserIndex];
          const currentUserInfo = smat.users[currentUserIndex];
          const opponent = smat.user_smats[1 - currentUserIndex];
          const opponentInfo = smat.users[1 - currentUserIndex];
          let data = [];
          if (currentUser.result_smat !== 0.0 && opponent.result_smat !== 0.0) {
            const currentUserPercentage = parseFloat(
              (
                (currentUser.result_smat / currentUser.current_points_max) *
                100
              ).toFixed(2)
            );
            const opponentPercentage = parseFloat(
              (
                (opponent.result_smat / opponent.current_points_max) *
                100
              ).toFixed(2)
            );
            data = [
              {
                name: currentUserInfo.user_pseudo,
                value: currentUserPercentage,
              },
              { name: opponentInfo.user_pseudo, value: opponentPercentage },
            ];
          } else {
            if (currentUser.result_smat === 0.0 && opponent.result_smat === 0) {
              data = [
                { name: currentUser.user_pseudo, value: 50 },
                { name: opponent.user_pseudo, value: 50 },
              ];
            } else if (
              currentUser.result_smat === 0.0 &&
              opponent.result_smat !== 0.0
            ) {
              data = [
                { name: currentUser.user_pseudo, value: 0 },
                { name: opponent.user_pseudo, value: 100 },
              ];
            } else {
              data = [
                { name: currentUser.user_pseudo, value: 100 },
                { name: opponent.user_pseudo, value: 0 },
              ];
            }
          }

          return (
            <Box key={index} maxWidth={300}>
              <Card
                className="card-part-end"
                sx={{ marginTop: 2, borderRadius: 2 }}
              >
                <CardContent>
                  <Box sx={{ width: 200, height: 200, borderRadius: 5 }}>
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
                              innerRadius + (outerRadius - innerRadius) * 0.5;
                            const x =
                              cx + radius * Math.cos(-midAngle * RADIAN);
                            const y =
                              cy + radius * Math.sin(-midAngle * RADIAN);
                            return (
                              <text
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

                  <Typography variant="h4" mt={1}>
                    {smat?.sous_theme
                      ? smat?.sous_theme.sous_theme
                      : smat?.theme?.theme}
                  </Typography>
                  <Typography mt={1}>Level : {smat?.level_id}</Typography>
                </CardContent>
              </Card>
            </Box>
          );
        })}
      </Box>
    </Dialog>
  );
};

export default MessagePrivatePartyFinish;
