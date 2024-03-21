// CustomThemeProvider.jsx
import React from "react";
import {
  ThemeProvider as MuiThemeProvider,
  createTheme,
  responsiveFontSizes,
} from "@mui/material";
import { useTheme } from "./ThemeContext";

const CustomThemeProvider = ({ children }) => {
  const { theme } = useTheme();

  let themeConfig = createTheme({
    typographies: {
      // Correction ici : utilisez 'typographies' au lieu de 'typography'
      fontFamily: "Baloo, sans-serif",
    },
    components: {
      MuiCssBaseline: {
        styleOverrides: () => ({
          a: {
            textDecoration: "none",
          },
        }),
      },
      MuiTypography: {
        styleOverrides: {
          h1: {
            fontFamily: "Bangers, sans-serif",
          },
          h2: {
            fontFamily: "Bangers, sans-serif",
          },
          h3: {
            fontFamily: "Bangers, sans-serif",
          },
          h5: {
            fontFamily: "Bangers, sans-serif",
          },
          h6: {
            fontFamily: "Bangers, sans-serif",
          },
          h4: {
            fontFamily: "Bangers, sans-serif",
          },
        },
      },
    },

    palette: {
      mode: theme,
      primary: {
        main: "#f3f3f3",
      },
    },
  });
  themeConfig = responsiveFontSizes(themeConfig);
  return <MuiThemeProvider theme={themeConfig}>{children}</MuiThemeProvider>;
};

export default CustomThemeProvider;
