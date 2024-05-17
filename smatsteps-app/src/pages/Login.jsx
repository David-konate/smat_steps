// VotrePage.js
import LoginFormComponent from "../components/forms/LoginFormComponent";
import RegisterFormComponent from "../components/forms/RegisterFormComponent";
import React, { useState } from "react";
import CustomButton from "../components/buttons/CustomButton";

import { Box, Container } from "@mui/material";
import { Stack } from "@mui/system";
import CustomButton2 from "../components/buttons/CustomButton2";
import ResetPasswordForm from "../components/forms/ResetPasswordForm";
import { useUserContext } from "../context/UserProvider";

const Login = () => {
  const [tabSelected, setTabSelected] = useState("loginForm");
  const [showResetPasswordForm, setShowResetPasswordForm] = useState(false); // Ajoutez un état pour contrôler l'affichage du formulaire de réinitialisation
  const { user } = useUserContext();
  return (
    <Container>
      <Stack mt={3} direction={"row"} gap={5} justifyContent={"center"}>
        <CustomButton2 onClick={() => setTabSelected("loginForm")}>
          Connexion
        </CustomButton2>
        <CustomButton2 onClick={() => setTabSelected("registerForm")}>
          Inscription
        </CustomButton2>

        <CustomButton2 onClick={() => setShowResetPasswordForm(true)}>
          Mot de passe oublié
        </CustomButton2>
      </Stack>
      <Box>
        {tabSelected === "loginForm" && !showResetPasswordForm && (
          <LoginFormComponent />
        )}
        {tabSelected === "registerForm" && <RegisterFormComponent />}

        {showResetPasswordForm && <ResetPasswordForm />}
      </Box>
    </Container>
  );
};

export default Login;
