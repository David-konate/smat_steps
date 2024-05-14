import React from "react";
import { Button, Typography } from "@mui/material";

const CustomButton2 = ({ onClick, children }) => {
  return (
    <Button
      className="btn-custom2"
      onClick={onClick}
      type="submit" // Ajoutez la propriété type="submit"
      style={{}}
    >
      <Typography className="text-btn2">{children}</Typography>
    </Button>
  );
};

export default CustomButton2;
