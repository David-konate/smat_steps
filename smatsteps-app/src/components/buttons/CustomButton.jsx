// CustomButton.js
import React from "react";
import { Button, Typography } from "@mui/material";

const CustomButton = ({ onClick, children }) => {
  return (
    <Button
      className="btn"
      onClick={onClick}
      style={{
        margin: "0 8px 2px 0",
        color: "var(--secondary-color-special)",
        boxShadow: "1px 1px 6px var( --secondary-color-special)",
        border: " 2px solid  --primary-color-special",
      }}
    >
      <Typography className="text-btn" variant="h6">
        {children}
      </Typography>
    </Button>
  );
};

export default CustomButton;
