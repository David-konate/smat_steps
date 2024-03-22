import React, { useState, useEffect } from "react";
import axios from "axios";

import {
  Dialog,
  Stack,
  TextField,
  Button,
  Typography,
  InputLabel,
  Input,
} from "@mui/material";
import { useNavigate } from "react-router-dom";
import CustomButton from "../buttons/CustomButton";
import { Box } from "@mui/system";
import ConfirmationDialog from "./ConfirmationDialog";

const MessageUpdateProfil = ({
  userProfil,
  open,
  onClose,
  redirection,
  setuserProfil,
}) => {
  const navigate = useNavigate();
  const [currentUserProfil, setCurrentUserProfil] = useState(userProfil);
  const [selectedFile, setSelectedFile] = useState(null);
  const [isConfirmationDialogOpen, setIsConfirmationDialogOpen] =
    useState(false);

  // Initialisez currentUserProfil avec userProfil lorsqu'il est mis à jour
  useEffect(() => {
    setCurrentUserProfil(userProfil);
  }, [userProfil]);

  const handlePseudoChange = (event) => {
    setCurrentUserProfil({
      ...currentUserProfil,
      user_pseudo: event.target.value, // Mettez à jour user_pseudo plutôt que pseudo
    });
  };

  const handleImageChange = (event) => {
    const file = event.target.files[0];
    setSelectedFile(file);
    setCurrentUserProfil({
      ...currentUserProfil,
      user_image: URL.createObjectURL(file),
    });
  };

  const onClick = async () => {
    const formData = new FormData(); // Créer un nouvel objet FormData
    formData.append("user_pseudo", currentUserProfil.user_pseudo); // Ajouter le pseudo au FormData
    formData.append("user_image", selectedFile); // Ajouter l'image au FormData

    try {
      await axios.post(`users/${userProfil.id}`, formData);
      setIsConfirmationDialogOpen(true);
    } catch (error) {
      console.error("Erreur lors de la requête POST :", error);
    }
  };

  return (
    <Dialog
      open={open}
      onClose={onClose}
      fullWidth
      maxWidth="sm"
      style={{ padding: 2 }}
    >
      <ConfirmationDialog
        redirection={"/"}
        open={isConfirmationDialogOpen}
        onClose={() => {
          setIsConfirmationDialogOpen(false);
          navigate("/");
        }}
        onConfirm={() => {
          setIsConfirmationDialogOpen(false);
        }}
        title="Confirmation"
        message="Votre profil a été mis à jour avec succès."
      />
      <Stack
        className="form-modif-user"
        sx={{
          p: 2,
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
        }}
      >
        <Typography
          mb={2}
          sx={{ color: "var(--secondary-color-special)" }}
          variant="h3"
        >
          Modification profil
        </Typography>
        <TextField
          sx={{ mt: 2 }}
          className="input-pseudo"
          value={currentUserProfil ? currentUserProfil.user_pseudo : ""}
          onChange={handlePseudoChange}
          label="Pseudo"
          margin="normal"
          required
          placeholder="Votre pseudo"
        />
        <Box mt={2} sx={{ textAlign: "center" }}>
          <InputLabel
            className="text-img-profil"
            style={{ margin: 4 }}
            htmlFor="image_user"
          >
            Image profil
          </InputLabel>
          <Box className="box-image-profil" mt={1}>
            <Typography className="typo-image-profil" p={1}>
              Choisir un fichier
            </Typography>
            <Input
              className="input-image-profil"
              type="file"
              id="image_user"
              name="image_user"
              onChange={handleImageChange}
              accept="image/*"
              fullWidth
              margin="none"
            />
          </Box>
          {selectedFile && (
            <Typography
              mt={1}
              className="text-img-select"
              variant="body2"
              color="textSecondary"
            >
              {selectedFile.name}
            </Typography>
          )}
        </Box>

        <Box mt={5}>
          <CustomButton
            variant="contained"
            className="btn-connexion"
            onClick={onClick}
          >
            Enregistrer
          </CustomButton>
        </Box>
      </Stack>
    </Dialog>
  );
};

export default MessageUpdateProfil;
