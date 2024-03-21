import React from "react";
import {
  Box,
  Card,
  CardContent,
  Typography,
  Avatar,
  Paper,
} from "@mui/material";
import { displayImage } from "../../utils";

const PlayerCard = ({ userRanking, shadowColor }) => {
  return (
    <Card
      className="player-card"
      style={{
        borderRadius: 20,
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
        boxShadow: `0px 4px 8px ${shadowColor}`,
        border: `3px solid ${shadowColor}`,
        background: shadowColor,
      }}
    >
      <CardContent className="player-info" sx={{ textAlign: "center" }}>
        <Box
          sx={{
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
          }}
        >
          <Avatar
            sx={{
              width: 100,
              height: 100,
              boxShadow: "0px 4px 8px rgba(0, 0, 0, 0.2)",
            }}
            src={displayImage(userRanking.user.user_image)}
          />
        </Box>
        <Typography mt={2} variant="body1" className="player-pseudo">
          {userRanking.user.user_pseudo}
        </Typography>
        <Paper>
          <Typography mt={1} variant="body1" className="player-top-ranking">
            {userRanking.result_quiz} %
          </Typography>
        </Paper>
      </CardContent>
    </Card>
  );
};

export default PlayerCard;
