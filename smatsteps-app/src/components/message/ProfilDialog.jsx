import React, { useState } from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  DialogActions,
  Typography,
  TextField,
  Box,
  Button,
  Avatar,
  Input,
} from "@mui/material";
import { useForm } from "react-hook-form";
import axios from "axios";
import { useUserContext } from "../../context/UserProvider";
import MessageDialog from "../message/MessageDialog";
import { displayImage } from "../../utils";
import { useNavigate } from "react-router-dom";

const ProfileDialog = ({ open, onClose }) => {
  const navigate = useNavigate();
  const { setUser, user, authentification } = useUserContext();
  const [openMessageDialog, setOpenMessageDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");
  const [image, setImage] = useState(user.user_image || "");
  const {
    register,
    handleSubmit,
    setValue,
    formState: { errors },
  } = useForm();

  const onSubmit = async (data, event) => {
    event.preventDefault();
    try {
      const formData = new FormData();
      formData.append("user_pseudo", data.user_pseudo);
      if (data.user_image && data.user_image.length > 0) {
        formData.append("user_image", data.user_image[0]);
      }
      const response = await axios.post(`users/${user.id}`, formData);
      setUser(response.data.user);
      await authentification();
      navigate(`/profil/${user.slug}`);
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(
        error.response?.data?.message || "Une erreur s'est produite"
      );
      setOpenMessageDialog(true);
    }
  };

  const handleMessageDialogClose = () => {
    setOpenMessageDialog(false);
  };

  const handleImageChange = (event) => {
    const file = event.target.files[0];
    setImage(URL.createObjectURL(file));
    setValue("user_image", event.target.files);
  };

  return (
    <Dialog open={open} onClose={onClose} fullWidth maxWidth="sm">
      <DialogTitle>Modifier le Profil</DialogTitle>
      <DialogContent>
        <Box
          className="form-profile"
          sx={{
            display: "flex",
            flexDirection: "column",
            alignItems: "center",
          }}
        >
          <Box
            sx={{
              display: "flex",
              justifyContent: "center",
              alignItems: "center",
            }}
          >
            <Avatar
              sx={{
                width: 100,
                height: 100,
                boxShadow: "0px 4px 8px rgba(0, 0, 0, 0.2)",
              }}
              src={image ? image : displayImage(user.user_image)}
            />
          </Box>

          <Input
            style={{ marginTop: 5 }}
            type="file"
            id="user_image"
            name="user_image"
            onChange={handleImageChange}
            accept="image/*"
            margin="none"
          />
          {errors.user_image && (
            <Typography color="error" variant="body2" className="input-profil">
              {errors.user_image.message}
            </Typography>
          )}
          <TextField
            sx={{ marginTop: 2 }}
            margin="normal"
            fullWidth
            id="user_pseudo"
            label="Pseudo"
            defaultValue={user.user_pseudo}
            {...register("user_pseudo")}
            error={!!errors.user_pseudo}
            helperText={errors.user_pseudo && errors.user_pseudo.message}
            className="input-profil"
          />
        </Box>
      </DialogContent>

      <DialogActions>
        <Button onClick={onClose} color="secondary">
          Annuler
        </Button>
        <Button onClick={handleSubmit(onSubmit)} color="primary">
          Enregistrer
        </Button>
      </DialogActions>
      <MessageDialog
        open={openMessageDialog}
        onClose={handleMessageDialogClose}
        title={dialogTitle}
        message={dialogMessage}
      />
    </Dialog>
  );
};

export default ProfileDialog;
