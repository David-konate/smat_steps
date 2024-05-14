import { useNavigate } from "react-router";
import { getViolationField } from "../../utils";
import { Controller, useForm } from "react-hook-form";
import { Container, Input, Stack, TextField, Typography } from "@mui/material";
import {
  errorField,
  validationChangePassword,
  validationForgotPassword,
} from "../../utils/formValidator";
import { LoadingButton } from "@mui/lab";
import { useSearchParams } from "react-router-dom";
import axios from "axios";
import { vestResolver } from "@hookform/resolvers/vest";
import { useEffect } from "react";

const ChangePassword = () => {
  const navigate = useNavigate();
  const [searchParam, setSearchParams] = useSearchParams();

  const {
    register,
    handleSubmit,
    control,
    formState: { errors, isSubmitting },
    reset,
  } = useForm({
    resolver: vestResolver(validationChangePassword),
  });

  useEffect(() => {
    console.log(errors);
  }, [errors]);

  const onSubmit = async (data) => {
    try {
      await axios.post("/reset-password", {
        password: data.password,
        email: data.email, // Utilisez correctement le nom de l'e-mail
        token: searchParam.get("token"),
        password_confirmation: data.password_confirmation,
      });
      reset();
      navigate("/login");
    } catch (error) {
      console.error(error);
    }
  };

  return (
    <Container>
      <Stack justifyContent="center" alignItems="center">
        <Stack spacing={5} my={5} width={700} maxWidth="100%">
          <Typography>Nouveau mot de passe</Typography>
          <Stack component="form" onSubmit={handleSubmit(onSubmit)} spacing={3}>
            <TextField
              {...register("email")}
              {...errorField(errors?.email)}
              label="Adresse email"
              required
              placeholder="email@email.fr"
              type="email"
              name="email" // Ajouter le nom de l'input
            />

            <Controller
              control={control}
              name="password"
              render={({ field: { value, onChange } }) => {
                return (
                  <Input
                    value={value}
                    onChange={onChange}
                    margin="normal"
                    {...errorField(errors?.password)}
                    fullWidth
                    label="Mot de passe"
                    required
                    placeholder="6+ caractères requis"
                  />
                );
              }}
            />
            <Controller
              control={control}
              name="password_confirmation"
              render={({ field: { value, onChange } }) => {
                return (
                  <Input
                    {...errorField(errors?.password_confirmation)}
                    fullWidth
                    value={value}
                    onChange={onChange}
                    margin="normal"
                    label="Confirmez votre mot de passe"
                    required
                    placeholder="6+ caractères requis"
                    type="password"
                  />
                );
              }}
            />

            <LoadingButton
              variant="contained"
              loading={isSubmitting}
              type="submit"
            >
              Réinitialiser
            </LoadingButton>
          </Stack>
        </Stack>
      </Stack>
    </Container>
  );
};

const SendMail = () => {
  const {
    register,
    handleSubmit,
    setError,
    formState: { errors, isSubmitting },
    reset,
  } = useForm({
    resolver: vestResolver(validationForgotPassword),
  });
  useEffect(() => {
    console.log(errors);
  }, [errors]);

  const onSubmit = async (data) => {
    try {
      console.log({ data });
      await axios.post("/forgot-password", {
        email: data.email,
      });
      reset();
    } catch (error) {
      getViolationField(error, setError);
    }
  };

  return (
    <Container>
      <Stack justifyContent="center" alignItems="center">
        <Typography>Réinitialiser le mot de passe</Typography>

        <Stack spacing={5} my={5} width={700} maxWidth="100%">
          <Stack component="form" onSubmit={handleSubmit(onSubmit)} spacing={3}>
            <TextField
              {...register("email")}
              {...errorField(errors?.email)}
              label="Adresse email"
              required
              placeholder="email@email.fr"
              type="email"
              name="email" // Ajouter le nom de l'input
            />
            <LoadingButton
              variant="contained"
              loading={isSubmitting}
              type="submit"
            >
              Valider
            </LoadingButton>
          </Stack>
        </Stack>
      </Stack>
    </Container>
  );
};

const PasswordForgotPage = () => {
  const [searchParam, setSearchParams] = useSearchParams();

  const showPasswordChangeForm = !!searchParam.get("token");

  return showPasswordChangeForm ? <ChangePassword /> : <SendMail />;
};

export default PasswordForgotPage;
