// ResetPasswordForm.js
import React, { useState } from "react";
import { Container, TextField, Typography, Box } from "@mui/material";
import axios from "axios";
import { useForm } from "react-hook-form";
import LoadingButton from "@mui/lab/LoadingButton";

const ResetPasswordForm = () => {
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [resetSuccess, setResetSuccess] = useState(false);

  const {
    register,
    handleSubmit,
    formState: { errors },
    reset,
  } = useForm({
    mode: "onBlur",
  });

  const onSubmit = async (data) => {
    setIsSubmitting(true);
    try {
      const response = await axios.post("/forgot-password", data);
      // Réinitialisation réussie, met à jour l'état
      setResetSuccess(true);
      reset(); // Réinitialiser le formulaire après une réinitialisation réussie
    } catch (error) {
      console.error(error);
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <Container component="main" maxWidth="xs">
      <Box
        sx={{
          marginTop: 4,
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
        }}
      >
        <Typography component="h1" variant="h5">
          Réinitialiser le mot de passe
        </Typography>
        {!resetSuccess ? (
          <Box component="form" onSubmit={handleSubmit(onSubmit)}>
            <TextField
              margin="normal"
              fullWidth
              id="email"
              label="Adresse Email"
              {...register("email", {
                required: "Email requis",
                pattern: {
                  value: /\S+@\S+\.\S+/,
                  message: "Adresse email invalide",
                },
              })}
              error={!!errors.email}
              helperText={errors.email?.message}
            />
            <LoadingButton
              type="submit"
              variant="contained"
              fullWidth
              loading={isSubmitting}
            >
              Réinitialiser
            </LoadingButton>
          </Box>
        ) : (
          <Typography component="p" variant="body1">
            Un email de réinitialisation a été envoyé à votre adresse email.
          </Typography>
        )}
      </Box>
    </Container>
  );
};

export default ResetPasswordForm;
