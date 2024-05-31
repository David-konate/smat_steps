import React, { useState } from "react";
import {
  Container,
  Typography,
  TextField,
  Box,
  IconButton,
  InputAdornment,
} from "@mui/material";
import { Visibility, VisibilityOff } from "@mui/icons-material";
import axios from "axios";
import { useUserContext } from "../../context/UserProvider";
import { useForm } from "react-hook-form";
import { Stack } from "@mui/system";
import CustomButton2 from "../buttons/CustomButton2";
import Cookies from "js-cookie";
import InformationDialog from "../message/InformationDialog";

const LoginFormComponent = () => {
  const { setUser } = useUserContext();
  const [openDialog, setOpenDialog] = useState(false);
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");
  const [showPassword, setShowPassword] = useState(false); // État pour gérer l'affichage du mot de passe
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm();

  const onSubmit = async (data) => {
    try {
      const response = await axios.post("/security/login", data);
      Cookies.set("token", response.data.token, {
        expires: 1,
        secure: true,
        sameSite: "Strict",
      });
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

  const handleClickShowPassword = () => {
    setShowPassword((prevShowPassword) => !prevShowPassword);
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
            id="email"
            label="email"
            {...register("email", { required: true })}
            error={!!errors.email}
            helperText={errors.email && "Ce champ est requis"}
          />
          <TextField
            className="input-connexion"
            margin="normal"
            required
            fullWidth
            name="password"
            label="Mot de passe"
            type={showPassword ? "text" : "password"} // Changer le type en fonction de l'état
            {...register("password", { required: true })}
            error={!!errors.password}
            helperText={errors.password && "Ce champ est requis"}
            InputProps={{
              endAdornment: (
                <InputAdornment position="end">
                  <IconButton
                    aria-label="toggle password visibility"
                    onClick={handleClickShowPassword}
                    edge="end"
                  >
                    {showPassword ? <VisibilityOff /> : <Visibility />}
                  </IconButton>
                </InputAdornment>
              ),
            }}
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
        <InformationDialog
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
