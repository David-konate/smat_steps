import React from "react";
import {
  RadioGroup,
  FormControlLabel,
  Radio,
  Typography,
  Box,
  IconButton, // Importez IconButton depuis Material-UI
} from "@mui/material";
import { useGameContext } from "../context/GameProvider";

const levelBoxStyles = {
  textAlign: "center",
  // Ajoutez d'autres styles selon vos besoins
};

const checkboxStyles = {
  color: "var(--primary-color)",
  "&.Mui-checked": {
    color: "var(--primary-color)", // Couleur de la checkbox lorsque coché
  },
  "&:hover": {
    color: "var(--secondary-color)", // Couleur de la checkbox lorsqu'il est survolé
  },
};

const labelStyles = {
  color: "var(--primary-color)",
};

const LevelBox = ({}) => {
  const { setCurrentLevel, currentLevel } = useGameContext();
  const handleLevelChange = (event) => {
    setCurrentLevel(event.target.value); // Met à jour la valeur de currentLevel avec la nouvelle valeur sélectionnée
  };

  return (
    <Box sx={levelBoxStyles}>
      <Typography className="title-box-level" variant="h6" gutterBottom>
        Choisissez un niveau
      </Typography>

      <Box mt={1} display="flex" justifyContent="center">
        <RadioGroup
          row
          aria-label="Niveau"
          name="level"
          value={currentLevel}
          onChange={handleLevelChange}
        >
          <FormControlLabel
            value="1"
            control={<Radio sx={checkboxStyles} />}
            label={<Typography sx={labelStyles}>1</Typography>}
            checked={currentLevel === "1"} // Coche le niveau si currentLevel est égal à "1"
          />
          <FormControlLabel
            value="2"
            control={<Radio sx={checkboxStyles} />}
            label={<Typography sx={labelStyles}>2</Typography>}
            checked={currentLevel === "2"} // Coche le niveau si currentLevel est égal à "2"
          />
          <FormControlLabel
            value="3"
            control={<Radio sx={checkboxStyles} />}
            label={<Typography sx={labelStyles}>3</Typography>}
            checked={currentLevel === "3"} // Coche le niveau si currentLevel est égal à "3"
          />
        </RadioGroup>
      </Box>

      {/* Bouton rond avec l'icône de quiz */}
    </Box>
  );
};

export default LevelBox;
