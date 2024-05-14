import React from "react";
import { Navigate } from "react-router-dom";
import { CircularProgress, Typography, Box } from "@mui/material";
import { useUserContext } from "../../context/UserProvider";

const UserRouteGuard = ({ element }) => {
  const { user, authentification } = useUserContext();

  if (!user) {
    // Si l'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
    return <Navigate to="/login" />;
  }

  // Vérifiez si l'utilisateur a le rôle d'utilisateur (ou un autre rôle spécifique si nécessaire)
  if (!user) {
    // Redirigez l'utilisateur vers une page d'erreur ou une page non autorisée
    return (
      <Box textAlign="center" marginTop="20px">
        <Typography variant="h6" color="error">
          Accès non autorisé. Veuillez vous connecter en tant qu'utilisateur.
        </Typography>
        <Navigate to="/login" />
      </Box>
    );
  }

  // Si l'utilisateur est connecté et a le rôle d'utilisateur, affichez le composant demandé
  return element;
};

export default UserRouteGuard;
