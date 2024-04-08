import React from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Button,
  Typography,
} from "@mui/material";
import { useNavigate } from "react-router-dom";
import CustomButton from "../buttons/CustomButton";

const MessageDialog = ({
  open,
  onClose,
  title,
  message,
  redirection = null,
}) => {
  const navigate = useNavigate();
  const onClick = () => {
    onClose();
    if (redirection) {
      navigate(redirection);
    }
  };

  return (
    <Dialog className="message-dialog" open={open} onClose={onClose}>
      <DialogTitle className="message-title">
        <Typography variant="h4"> {title}</Typography>
      </DialogTitle>

      <DialogContent sx={{ mt: 5 }}>
        <Typography className="message-text"> {message}</Typography>
      </DialogContent>
      <DialogActions>
        <CustomButton
          className="message-btn"
          onClick={onClick}
          color="primary"
          autoFocus
        >
          OK
        </CustomButton>
      </DialogActions>
    </Dialog>
  );
};

export default MessageDialog;
