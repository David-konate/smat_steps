import React from "react";
import {
  AppBar,
  Container,
  Stack,
  Toolbar,
  Typography,
  useMediaQuery,
} from "@mui/material";
import { useNavigate } from "react-router-dom";
import { Box } from "@mui/system";

function Footer() {
  const navigate = useNavigate();
  const isSmallScreen = useMediaQuery("(max-width: 600px)"); // Adjust breakpoint as needed

  const handleMention = () => {
    navigate("/legal-mentions");
  };

  const handleConf = () => {
    navigate("/privacy-policy");
  };

  return (
    <Box variant="footer" sx={{ flexGrow: 1 }} mt={5}>
      <AppBar position="static" bottom="0">
        <Toolbar>
          <Stack spacing={2} p={1} direction="row" justifyContent="center">
            <Typography sx={{ cursor: "pointer" }} onClick={handleMention}>
              Mentions Légales
            </Typography>
            <Typography sx={{ cursor: "pointer" }} onClick={handleConf}>
              Politique de confidentialité
            </Typography>
          </Stack>
        </Toolbar>
      </AppBar>
    </Box>
  );
}

export default Footer;
