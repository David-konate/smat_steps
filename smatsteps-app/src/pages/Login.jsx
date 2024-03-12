// VotrePage.js

import LoginFormComponent from "../components/forms/LoginFormComponent";
import RegisterFormComponent from "../components/forms/RegisterFormComponent";
import React, { useState } from "react";
import WhiteButton from "../components/buttons/WhiteButton";

import { Box, Button, Container } from "@mui/material";

const Login = () => {
  const [tabSelected, setTabSelected] = useState("loginForm");
  return (
    <Container
      style={{
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        margin: "1rem auto",
      }}
    >
      <Box>
        <Button
          onClick={() => setTabSelected("loginForm")}
          isActive={tabSelected === "loginForm"}
          style={{ margin: "0 8px 2px 0", color: "var(--text-color)" }}
        >
          Connexion
        </Button>

        <Button
          onClick={() => setTabSelected("registerForm")}
          isActive={tabSelected === "registerForm"}
          style={{ margin: "0 0 2px 0", color: "var(--text-color)" }}
        >
          Inscription
        </Button>
      </Box>

      <Box>
        {tabSelected === "loginForm" && <LoginFormComponent />}
        {tabSelected === "registerForm" && <RegisterFormComponent />}
      </Box>
    </Container>
  );
};

export default Login;
