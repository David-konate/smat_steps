import React from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
} from "@mui/material";

const ConfirmationDialog = ({ open, onClose, title, message, redirection }) => {
  return (
    <Dialog open={open} onClose={onClose}>
      <DialogTitle>{title}</DialogTitle>
      <DialogContent>{message}</DialogContent>
      <DialogActions>
        <Button onClick={() => onClose()} color="primary">
          OK
        </Button>
        <Button onClick={() => onClose()} color="primary">
          Annuler
        </Button>
      </DialogActions>
    </Dialog>
  );
};

export default ConfirmationDialog;
