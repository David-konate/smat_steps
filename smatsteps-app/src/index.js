// index.js
import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import axios from "axios";
import { ThemeProvider as MainThemeProvider } from "./context/ThemeContext";
import CustomThemeProvider from "./context/ThemeProvider";
import { BASE_URL_API } from "./utils";
import moment from "moment";
import "moment/locale/fr";
import App from "./App";
import "./App.scss";
import { UserProvider } from "./context/UserProvider";
import { FilterProvider } from "./context/FilterProvider";
import { GameProvider } from "./context/GameProvider";
import { HelmetProvider } from "react-helmet-async";
import Cookies from "js-cookie";

moment.locale("fr");

// Configuration de l'URL de base pour les requêtes Axios
axios.defaults.baseURL = BASE_URL_API;

// Activation de l'envoi des cookies dans les requêtes Axios
axios.defaults.withCredentials = true;

// Interception des réponses Axios pour la gestion des erreurs d'authentification
axios.interceptors.response.use(
  function (response) {
    return response;
  },
  function (error) {
    console.log(error);
    // Si le code de statut de la réponse est 401 (Non autorisé),
    // supprime le jeton d'authentification du stockage local
    if (error.response.status === 401) {
      Cookies.remove("token");
    }
    // Tout code de statut qui ne tombe pas dans la plage 2xx déclenche cette fonction
    // Faites quelque chose avec l'erreur de réponse
    return Promise.reject(error);
  }
);

// Récupération du jeton d'authentification depuis le Cookie
const TOKEN = Cookies.get("token");

// Si un jeton est présent, l'ajouter aux en-têtes des requêtes Axios
if (TOKEN) {
  axios.defaults.headers["Authorization"] = `Bearer ${TOKEN}`;
}

ReactDOM.createRoot(document.getElementById("root")).render(
  <MainThemeProvider>
    <BrowserRouter>
      <CustomThemeProvider>
        <FilterProvider>
          <HelmetProvider>
            <UserProvider>
              <GameProvider>
                <App />
              </GameProvider>
            </UserProvider>
          </HelmetProvider>
        </FilterProvider>
      </CustomThemeProvider>
    </BrowserRouter>
  </MainThemeProvider>
);
