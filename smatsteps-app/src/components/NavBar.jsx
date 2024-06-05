import axios from "axios";
import React, { useState, useEffect } from "react";
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
  ListItem,
  ListItemText,
} from "@mui/material/";
import Cookies from "js-cookie";
import { NavLink, useNavigate } from "react-router-dom";
import { firstLetterUppercase, links } from "../utils";
import MenuIcon from "@mui/icons-material/Menu";
import PersonAddIcon from "@mui/icons-material/PersonAdd";
import SmartToyIcon from "@mui/icons-material/SmartToy";
import Logo from "./Logo";
import ConfirmationNewPrivateGame from "./message/ConfirmationNewPrivateGame";
import { useTheme } from "../context/ThemeContext";
import { useUserContext } from "../context/UserProvider";
import MessageSendFriend from "./message/MessageSendFriend";
import MessageDialog from "./message/MessageDialog";
import { useGameContext } from "../context/GameProvider";

function NavBar() {
  const navigate = useNavigate();
  const { theme, toggleTheme } = useTheme();
  const {
    user,
    setUser,
    friendPending,
    setFriendPending,
    newSmats,
    setNewSmats,
    authentification,
  } = useUserContext();
  const { setSmat, setSmatUsers } = useGameContext();
  const [drawerOpen, setDrawerOpen] = useState(false);
  const [messageSendOpen, setMessageSendOpen] = useState(false);
  const [messageNewGame, setMessageNewGame] = useState(false);
  const [confirm, setConfirm] = useState(false);
  const [message, setMessage] = useState("");
  const [confirmData, setConfirmData] = useState(null);
  const [numNewSmats, setNumNewSmats] = useState(0);

  useEffect(() => {
    setNumNewSmats(newSmats?.length);
  }, [newSmats]);
  const handleDrawerOpen = () => {
    setDrawerOpen(true);
  };

  const handleDrawerClose = () => {
    setDrawerOpen(false);
  };

  const openMessageSendFriend = () => {
    setMessageSendOpen(true);
  };

  const closeMessageSendFriend = () => {
    setMessageSendOpen(false);
  };

  const openMessageNewPrivateGame = () => {
    setMessageNewGame(true);
  };

  const closeMessageNewPrivateGame = () => {
    setMessageNewGame(false);
  };

  const openConfirmDial = () => {
    setConfirm(true);
  };

  const closeConfirmDial = () => {
    setMessageNewGame(false);
    setConfirm(false);
  };

  const onProfil = () => {
    if (user.id) {
      navigate(`/profil/${user.slug}`);
    }
  };

  const onConfirmNewPrivateGame = async (smatId) => {
    try {
      const response = await axios.post(`/smats/accept-dual/${smatId}`, null, {
        headers: {
          Authorization: `Bearer ${Cookies.get("token")}`,
        },
      });

      // Mettre à jour la liste de newSmats après la confirmation en utilisant setNewSmats
      // setNewSmats(response.data.updatedNewSmats);
      setSmat(response.data.smat);
      setConfirmData(response.data);
      authentification();
    } catch (error) {
      console.error(
        "Erreur lors de la confirmation de la nouvelle partie privée :",
        error
      );
    } finally {
      try {
        const responseSmatUsers = await axios.get(
          `smat-users/show-by/${smatId}`
        );
        setSmatUsers(responseSmatUsers.data.smatUsers);
      } catch (error) {
        console.log(error);
      } finally {
        navigate(`partie-privee/${smatId}`);
      }
    }
  };

  const onDeleteNewPrivateGame = async (smatId) => {
    try {
      const response = await axios.delete(`smats/${smatId}/`, {
        headers: {
          Authorization: `Bearer ${Cookies.get("token")}`,
        },
      });

      // Mettre à jour la liste de newSmats après la suppression en utilisant setNewSmats
      setNewSmats(response.data.updatedNewSmats);

      // setMessage(response.data.message);
      // openConfirmDial();
    } catch (error) {
      // setMessage(error.data.message);
      // openConfirmDial();
    } finally {
      authentification();
    }
  };

  const handleLogout = async () => {
    localStorage.removeItem("token");
    setUser(null);
    window.location.replace("/login");
  };

  return (
    <React.Fragment>
      {confirm && (
        <MessageDialog
          open={confirm}
          message={message}
          onClose={closeConfirmDial}
        />
      )}

      {messageSendOpen && (
        <MessageSendFriend
          open={messageSendOpen}
          onClose={closeMessageSendFriend}
          friendPending={friendPending}
          updateFriendPending={setFriendPending}
          user={user}
        />
      )}
      {messageNewGame && (
        <ConfirmationNewPrivateGame
          open={messageNewGame}
          onClose={closeMessageNewPrivateGame}
          onConfirm={onConfirmNewPrivateGame}
          onDelete={onDeleteNewPrivateGame}
          newSmats={newSmats}
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
              {newSmats?.length > 0 && (
                <IconButton
                  sx={{}}
                  onClick={openMessageNewPrivateGame}
                  title="Cliquez ici pour ouvrir vos invitations de partie privée"
                >
                  <SmartToyIcon style={{ color: "red" }} />
                  <Typography
                    className="numb-pending-friend"
                    style={{
                      position: "absolute",
                      top: 1,
                      right: 0,
                      color: "red",
                      fontSize: "0.7rem",
                    }}
                  >
                    {newSmats?.length}
                  </Typography>
                </IconButton>
              )}
              {friendPending?.length > 0 && (
                <IconButton
                  sx={{}}
                  onClick={openMessageSendFriend}
                  title="Cliquez ici pour ouvrir vos invitations d'amitié"
                >
                  <PersonAddIcon
                    style={{ color: "var(--secondary-color-special)" }}
                  />
                  <Typography
                    className="numb-pending-friend"
                    style={{
                      position: "absolute",
                      top: 1,
                      right: 0,
                      color: "var(--secondary-color-special)",
                      fontSize: "0.7rem",
                    }}
                  >
                    {friendPending?.length}
                  </Typography>
                </IconButton>
              )}
              <Hidden smDown>
                <Switch
                  checked={theme === "dark"}
                  onChange={toggleTheme}
                  inputProps={{ "aria-label": "toggle theme" }}
                />
              </Hidden>
            </Box>
          </Toolbar>
        </Container>
      </AppBar>
      <Drawer
        anchor="left"
        open={drawerOpen}
        onClose={handleDrawerClose}
        className="drawer"
      >
        <List className="drawer-list">
          {links.map((link) => (
            <ListItem
              key={link.label}
              onClick={handleDrawerClose}
              className="drawer-item"
            >
              <NavLink to={link.path} className="drawer-link">
                <ListItemText
                  sx={{ padding: 1 }}
                  className="drawer-text"
                  primary={
                    link.label.charAt(0).toUpperCase() + link.label.slice(1)
                  }
                />
              </NavLink>
            </ListItem>
          ))}
          {user && (
            <ListItem onClick={handleDrawerClose} className="drawer-item">
              <NavLink to={`profil/${user.slug}`} className="drawer-link">
                <ListItemText
                  sx={{ padding: 1 }}
                  className="drawer-text"
                  primary="Profil"
                />
              </NavLink>
            </ListItem>
          )}
          {user ? (
            <ListItem onClick={handleLogout} className="drawer-item">
              <ListItemText
                sx={{ padding: 1 }}
                className="drawer-text"
                primary="Logout"
              />
            </ListItem>
          ) : (
            <ListItem onClick={handleDrawerClose} className="drawer-item">
              <NavLink to="/login" className="drawer-link">
                <ListItemText
                  sx={{ padding: 1, fontWeight: "bold" }}
                  className="drawer-text"
                  primary="Login"
                />
              </NavLink>
            </ListItem>
          )}
        </List>
        <Box className="drawer-theme-switch">
          <IconButton
            onClick={toggleTheme}
            aria-label="toggle theme"
            className="icon-button"
          >
            <Switch checked={theme === "dark"} />
          </IconButton>
        </Box>
      </Drawer>
    </React.Fragment>
  );
}

export default NavBar;
