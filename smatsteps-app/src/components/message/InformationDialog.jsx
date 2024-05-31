import React from "react";
import { Dialog, DialogTitle, DialogContent, Typography } from "@mui/material";
import { useNavigate } from "react-router-dom";

const InformationDialog = ({ open, onClose = null, title, message }) => {
  return (
    <Dialog className="message-dialog" open={open} onClose={onClose}>
      <DialogTitle className="message-title">
        <Typography variant="h4"> {title}</Typography>
      </DialogTitle>

      <DialogContent sx={{ mt: 5 }}>
        <Typography className="message-text"> {message}</Typography>
      </DialogContent>
    </Dialog>
  );
};

export default InformationDialog;
