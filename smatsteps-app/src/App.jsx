// App.js
import React, { useEffect, useState } from "react";
import NavBar from "./components/NavBar";
import RouterOutlet from "./pages/components/RouterOutlet";
import { useUserContext } from "./context/UserProvider";
import { CircularProgress } from "@mui/material";

function App() {
  const { authentification, userToken } = useUserContext();
  useEffect(() => {
    loadApplication();
  }, []);

  const [isLoaded, setIsLoaded] = useState(false);

  async function loadApplication() {
    try {
      userToken && (await authentification());
    } catch (error) {
      console.log(error);
    } finally {
      setIsLoaded(true);
    }
  }

  return isLoaded ? (
    <>
      <NavBar />
      <RouterOutlet />
    </>
  ) : (
    <>
      <CircularProgress />
    </>
  );
}

export default App;
