// CustomButton.js
import React from "react";
import { Button, Typography } from "@mui/material";

const CustomButton = ({ onClick, children }) => {
  return (
    <Button
      className="btn"
      onClick={onClick}
      style={{
        color: "var(--secondary-color-special)",
        boxShadow: "1px 1px 6px var( --secondary-color-special)",
        border: " 1px solid var( --primary-color-special)",
      }}
    >
      <Typography className="text-btn">{children}</Typography>
    </Button>
  );
};

export default CustomButton;
