import React from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Typography,
} from "@mui/material";
import { useNavigate } from "react-router-dom";
import CustomButton2 from "../buttons/CustomButton2";

const MessageDialog = ({
  open,
  onClose = null,
  title,
  message,
  redirection = null,
}) => {
  const navigate = useNavigate();
  const onClick = () => {
    if (redirection) {
      navigate(redirection);
    } else {
      onClose();
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
        <CustomButton2
          className="message-btn"
          onClick={onClick}
          color="primary"
          autoFocus
        >
          OK
        </CustomButton2>
      </DialogActions>
    </Dialog>
  );
};

export default MessageDialog;
