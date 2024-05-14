import { Typography } from "@mui/material";
import { Box } from "@mui/system";
import React from "react";

const NotFound = () => {
  return (
    <Box
      sx={{
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        justifyContent: "center",
        height: "200px", // Remplacez par la hauteur souhaitée
      }}
    >
      <Typography variant="h4" gutterBottom>
        404 - Page non trouvée
      </Typography>
      <Typography variant="body1">
        Désolé, la page que vous recherchez est introuvable.
      </Typography>
    </Box>
  );
};

export default NotFound;
