import React, { useState } from "react";
import { Container, Typography, TextField, Box } from "@mui/material";
import axios from "axios";
import MessageDialog from "../message/MessageDialog";
import { useNavigate } from "react-router-dom";
import { useUserContext } from "../../context/UserProvider";
import { useForm } from "react-hook-form";
import { Stack } from "@mui/system";
import CustomButton2 from "../buttons/CustomButton2";

const LoginFormComponent = () => {
  const { setUser } = useUserContext();
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm();

  const onSubmit = async (data) => {
    try {
      const response = await axios.post("/security/login", data);
      localStorage.setItem("token", response.data.token);
      setUser(response.data.user);
      setDialogTitle("Success");
      setDialogMessage(response.data.message);
      setOpenDialog(true);
      window.location.replace("/");
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(
        error.response?.data?.message || "Une erreur s'est produite"
      );
      setOpenDialog(true);
    }
  };

  const handleDialogClose = () => {
    setOpenDialog(false);
  };

  return (
    <Container component="main" maxWidth="xs">
      <Box
        className="form-connexion"
        sx={{
          marginTop: 4,
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
        }}
      >
        <Typography className="title-connexion" component="h1" variant="h1">
          Connexion
        </Typography>
        <Stack
          component="form"
          onSubmit={handleSubmit(onSubmit)} // Utiliser handleSubmit(onSubmit)
          noValidate
          justifyContent="center"
          alignItems="center"
          sx={{ mt: 3 }}
        >
          {/* Supprimer le formulaire inutile */}
          <TextField
            className="input-connexion"
            margin="normal"
            required
            fullWidth
            id="user_pseudo"
            label="Pseudo"
            {...register("user_pseudo", { required: true })}
            error={!!errors.user_pseudo}
            helperText={errors.user_pseudo && "Ce champ est requis"}
          />
          <TextField
            className="input-connexion"
            margin="normal"
            required
            fullWidth
            name="password"
            label="Mot de passe"
            type="password"
            {...register("password", { required: true })}
            error={!!errors.password}
            helperText={errors.password && "Ce champ est requis"}
          />
          <Box mt={3}>
            {/* Utiliser CustomButton correctement */}
            <CustomButton2
              className="btn-connexion"
              type="submit"
              fullWidth
              variant="contained"
              sx={{ mt: 3, mb: 2 }}
            >
              Connexion
            </CustomButton2>
          </Box>
        </Stack>
      </Box>
      <Box>
        <MessageDialog
          open={openDialog}
          onClose={handleDialogClose}
          title={dialogTitle}
          message={dialogMessage}
        />
      </Box>
    </Container>
  );
};

export default LoginFormComponent;
