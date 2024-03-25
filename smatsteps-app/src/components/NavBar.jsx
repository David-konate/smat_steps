import axios from "axios";

import {
  Typography,
  AppBar,
  Container,
  Box,
  Toolbar,
  Switch,
  Hidden,
  IconButton,
  Drawer,
  List,
} from "@mui/material/";
import { NavLink, useNavigate } from "react-router-dom";
import { firstLetterUppercase, links } from "../utils";
import MenuIcon from "@mui/icons-material/Menu";
import PersonAddIcon from "@mui/icons-material/PersonAdd";

import { useTheme } from "../context/ThemeContext";
import Logo from "./Logo";
import { useUserContext } from "../context/UserProvider"; // Importez le hook
import React, { useState } from "react";
import MessageSendFriend from "./message/MessageSendFriend";

function NavBar() {
  const navigate = useNavigate();
  const { theme, toggleTheme } = useTheme();
  const { user, setUser, friendPending, setFriendPending } = useUserContext(); // Utilisez le hook useUserContext pour obtenir l'état d'authentification
  const [drawerOpen, setDrawerOpen] = useState(false);
  const [messageSendOpen, setMessageSendOpen] = useState(false); // État pour contrôler l'ouverture de MessageSendFriend

  const handleDrawerOpen = () => {
    setDrawerOpen(true);
  };

  const handleDrawerClose = () => {
    setDrawerOpen(false);
  };

  // Fonction pour ouvrir MessageSendFriend
  const openMessageSendFriend = () => {
    setMessageSendOpen(true);
  };

  // Fonction pour fermer MessageSendFriend
  const closeMessageSendFriend = () => {
    setMessageSendOpen(false);
  };

  const onProfil = () => {
    console.log("profil");
    navigate(`/profil/${user.id}`);
  };
  const handleLogout = async () => {
    console.log("logout");
    localStorage.removeItem("token");
    try {
      await axios.post(
        "/security/logout",

        {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        }
      );

      // Réinitialiser l'utilisateur à null
      setUser(null);

      localStorage.removeItem("token");
      navigate("/login");
    } catch (error) {
      console.error("Erreur lors de la déconnexion :", error);
    }
  };

  return (
    <React.Fragment>
      {messageSendOpen && (
        <MessageSendFriend
          open={messageSendOpen}
          onClose={closeMessageSendFriend}
          friendPending={friendPending}
          updateFriendPending={setFriendPending} // Passer la fonction de mise à jour
          user={user}
          // Autres props si nécessaire
        />
      )}
      <AppBar position="sticky" sx={{ top: 0 }}>
        <Container maxWidth={"xl"}>
          <Toolbar sx={{ display: "flex", justifyContent: "space-between" }}>
            <IconButton
              color="inherit"
              edge="start"
              onClick={handleDrawerOpen}
              sx={{ display: { xs: "block", sm: "none" } }}
            >
              <MenuIcon />
            </IconButton>
            <Hidden smDown>
              <Logo />
              <Box
                className="Box"
                sx={{
                  display: "flex",
                  justifyContent: "center",
                  flex: 1,
                  height: "100%",
                  width: "70%",
                }}
              >
                {links.map((link) => (
                  <NavLink
                    className="navbar_link"
                    key={link.label}
                    to={link.path}
                  >
                    {firstLetterUppercase(link.label)}
                  </NavLink>
                ))}
                {user ? (
                  <Typography
                    sx={{ fontSize: "0.8rem" }}
                    className="navbar_link"
                    onClick={onProfil}
                  >
                    Profil
                  </Typography>
                ) : (
                  <></>
                )}
                {user ? (
                  <Typography
                    sx={{ fontSize: "0.8rem" }}
                    className="navbar_link"
                    onClick={handleLogout}
                  >
                    Logout
                  </Typography>
                ) : (
                  <NavLink className="navbar_link" to={"/login"}>
                    Login
                  </NavLink>
                )}
              </Box>
            </Hidden>

            <Box
              sx={{
                display: "flex",
                alignItems: "center",
              }}
            >
              {friendPending?.length > 0 ? (
                <IconButton sx={{}} onClick={openMessageSendFriend}>
                  <PersonAddIcon
                    style={{ color: "var(--secondary-color-special)" }}
                  />
                  <Typography
                    className="numb-pending-friend"
                    style={{
                      position: "absolute", // Pour positionner l'élément de manière absolue
                      top: 1, // Positionnement par rapport au haut de l'élément parent
                      right: 0, // Positionnement par rapport à la droite de l'élément parent
                      color: "var(--secondary-color-special)",
                      fontSize: "0.7rem",
                    }}
                  >
                    {friendPending.length}
                  </Typography>
                </IconButton>
              ) : (
                <Box></Box>
              )}

              <Switch
                checked={theme === "dark"}
                onChange={toggleTheme}
                inputProps={{ "aria-label": "toggle theme" }}
              />
            </Box>
          </Toolbar>
        </Container>
      </AppBar>

      <Drawer anchor="left" open={drawerOpen} onClose={handleDrawerClose}>
        <List>
          {links.map((link) => (
            <NavLink className="navbar_link" key={link.label} to={link.path}>
              {firstLetterUppercase(link.label)}
            </NavLink>
          ))}

          {user ? (
            <Typography
              sx={{ fontSize: "0.8rem" }}
              className="navbar_link"
              onClick={handleLogout}
            >
              Logout
            </Typography>
          ) : (
            <NavLink className="navbar_link" to={"/login"}>
              Login
            </NavLink>
          )}
        </List>
      </Drawer>
    </React.Fragment>
  );
}

export default NavBar;
