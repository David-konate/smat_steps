// VotrePage.js
import LoginFormComponent from "../components/forms/LoginFormComponent";
import RegisterFormComponent from "../components/forms/RegisterFormComponent";
import React, { useState } from "react";
import CustomButton from "../components/buttons/CustomButton";

import { Box, Container } from "@mui/material";
import { Stack } from "@mui/system";
import CustomButton2 from "../components/buttons/CustomButton2";

const Login = () => {
  const [tabSelected, setTabSelected] = useState("loginForm");
  return (
    <Container>
      <Stack mt={3} direction={"row"} gap={5} justifyContent={"center"}>
        <CustomButton2 onClick={() => setTabSelected("loginForm")}>
          Connexion
        </CustomButton2>

        <CustomButton2 onClick={() => setTabSelected("registerForm")}>
          Inscription
        </CustomButton2>
      </Stack>

      <Box>
        {tabSelected === "loginForm" && <LoginFormComponent />}
        {tabSelected === "registerForm" && <RegisterFormComponent />}
      </Box>
    </Container>
  );
};

export default Login;
