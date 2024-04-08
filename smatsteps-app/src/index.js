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

moment.locale("fr");

axios.defaults.baseURL = BASE_URL_API;
axios.defaults.withCredentials = true;
axios.interceptors.response.use(
  function (response) {
    // Any status code that lie within the range of 2xx cause this function to trigger
    // Do something with response data

    return response;
  },
  function (error) {
    if (error.response.status === 401) {
      localStorage.removeItem("token");
    }
    // Any status codes that falls outside the range of 2xx cause this function to trigger
    // Do something with response error
    return Promise.reject(error);
  }
);
const TOKEN = localStorage.getItem("token");

if (TOKEN) {
  axios.defaults.headers["Authorization"] = `Bearer ${TOKEN}`;
}

ReactDOM.createRoot(document.getElementById("root")).render(
  <MainThemeProvider>
    <BrowserRouter>
      <CustomThemeProvider>
        <FilterProvider>
          <UserProvider>
            <GameProvider>
              <App />
            </GameProvider>
          </UserProvider>
        </FilterProvider>
      </CustomThemeProvider>
    </BrowserRouter>
  </MainThemeProvider>
);
