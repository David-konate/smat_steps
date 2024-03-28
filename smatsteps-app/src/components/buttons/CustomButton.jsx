// CustomButton.js
import React from "react";
import { Button, Typography } from "@mui/material";

const CustomButton = ({ onClick, children }) => {
  return (
    <Button className="btn-custom" onClick={onClick} style={{}}>
      <Typography className="text-btn">{children}</Typography>
    </Button>
  );
};

export default CustomButton;
