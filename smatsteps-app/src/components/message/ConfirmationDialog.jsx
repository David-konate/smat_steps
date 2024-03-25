import React from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
} from "@mui/material";
import { useNavigate } from "react-router-dom";

const ConfirmationDialog = ({ open, onClose, title, message, onConfirm }) => {
  return (
    <Dialog open={open} onClose={onClose}>
      <DialogTitle
        sx={{
          color: "var(--secondary-color-special)",
          backgroundColor: "var(--primary-color-special)",
          boxShadow: "0px 1px 6px var(--secondary-color-special)",
        }}
      >
        {title}
      </DialogTitle>
      <DialogContent sx={{ marginTop: 3 }}>{message}</DialogContent>
      <DialogActions>
        <Button
          className="btn-confirmation"
          sx={{ color: "var(--secondary-color-special)" }}
          onClick={onConfirm}
          color="primary"
        >
          OK
        </Button>
        <Button
          className="btn-confirmation"
          sx={{ color: "var(--secondary-color-special)" }}
          onClick={onClose}
          color="primary"
        >
          Annuler
        </Button>
      </DialogActions>
    </Dialog>
  );
};

export default ConfirmationDialog;
