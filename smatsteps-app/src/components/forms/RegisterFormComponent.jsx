// RegisterFormComponent.js

import React, { useState } from "react";
import { useForm } from "react-hook-form";
import {
  Container,
  Stack,
  TextField,
  Typography,
  InputAdornment,
} from "@mui/material";
import axios from "axios";
import { errorField, validationRegister } from "../../utils/formValidator";
import { vestResolver } from "@hookform/resolvers/vest";

import { getViolationField } from "../../utils";
import { useUserContext } from "../../context/UserProvider";
import LoadingButton from "@mui/lab/LoadingButton";
import MessageDialog from "../message/MessageDialog";
import { Box } from "@mui/system";
import CustomButton from "../buttons/CustomButton";

const RegisterFormComponent = () => {
  const {
    register,
    handleSubmit,
    setError,
    reset,
    watch,
    formState: { errors, isSubmitting },
  } = useForm({
    mode: "onBlur",
    resolver: vestResolver(validationRegister),
  });

  // const onSubmit = (data) => console.log(data)
  const { setUser } = useUserContext();
  const [dialogTitle, setDialogTitle] = useState("");
  const [dialogMessage, setDialogMessage] = useState("");
  const [openDialog, setOpenDialog] = useState(false);

  const onSubmit = async (data) => {
    try {
      const response = await axios.post("security/register", {
        user_pseudo: data.user_pseudo.trim(),
        email: data.email,
        password: data.password,
        password_confirmation: data.confirmPassword,
      });

      //recup les meesage back
      setDialogTitle(response.data.status);
      setDialogMessage(response.data.message);
      setOpenDialog(true);

      reset();
    } catch (error) {
      setDialogTitle("Erreur");
      setDialogMessage(
        error.response?.data?.message || "Une erreur s'est produite"
      );
      setOpenDialog(true);
      console.log(error);
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
          Inscription
        </Typography>
        <Stack justifyContent="center" alignItems="center">
          <Stack spacing={5} mt={5}>
            <Stack
              component="form"
              onSubmit={handleSubmit(onSubmit)}
              spacing={3}
            >
              <TextField
                className="input-connexion"
                {...register("user_pseudo")}
                {...errorField(errors?.user_pseudo)}
                label="Pseudo"
                fullWidth
                placeholder="Votre pseudo"
                required
                InputProps={{
                  endAdornment: (
                    <InputAdornment className="string_count" position="end">
                      {watch("user_pseudo")?.length || 0}/{20}
                    </InputAdornment>
                  ),
                  inputProps: {
                    maxLength: 20,
                  },
                }}
              />
              <TextField
                className="input-connexion"
                {...register("email")}
                {...errorField(errors?.email)}
                fullWidth
                label="Adresse email"
                required
                placeholder="email@email.fr"
                type="email"
              />
              <TextField
                className="input-connexion"
                {...register("password")}
                {...errorField(errors?.password)}
                fullWidth
                label="Mot de passe"
                required
                placeholder="6+ caractères requis"
                type="password"
              />
              <TextField
                className="input-connexion"
                {...register("confirmPassword")}
                {...errorField(errors?.confirmPassword)}
                fullWidth
                label="Confirmez votre mot de passe"
                required
                placeholder="6+ caractères requis"
                type="password"
              />
              <Box mt={3}>
                <LoadingButton
                  className="btn-connexion"
                  variant="contained"
                  loading={isSubmitting}
                  type="submit"
                >
                  Je m'inscris
                </LoadingButton>
              </Box>
              <MessageDialog
                open={openDialog}
                onClose={handleDialogClose}
                title={dialogTitle}
                message={dialogMessage}
                redirection={"/"}
              />
            </Stack>
          </Stack>
        </Stack>
      </Box>
    </Container>
  );
};
export default RegisterFormComponent;
