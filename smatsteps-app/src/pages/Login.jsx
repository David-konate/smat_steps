// VotrePage.js
import LoginFormComponent from "../components/forms/LoginFormComponent";
import RegisterFormComponent from "../components/forms/RegisterFormComponent";
import React, { useState } from "react";
import CustomButton from "../components/buttons/CustomButton";

import { Box, Container } from "@mui/material";
import { Stack } from "@mui/system";

const Login = () => {
  const [tabSelected, setTabSelected] = useState("loginForm");
  return (
    <Container>
      <Stack mt={3} direction={"row"} gap={5} justifyContent={"center"}>
        <CustomButton onClick={() => setTabSelected("loginForm")}>
          Connexion
        </CustomButton>

        <CustomButton onClick={() => setTabSelected("registerForm")}>
          Inscription
        </CustomButton>
      </Stack>

      <Box>
        {tabSelected === "loginForm" && <LoginFormComponent />}
        {tabSelected === "registerForm" && <RegisterFormComponent />}
      </Box>
    </Container>
  );
};

export default Login;
