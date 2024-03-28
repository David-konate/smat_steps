import React, { useState } from "react";
import { Link } from "react-router-dom";
import { Avatar, Dialog, Grid, Typography, TextField } from "@mui/material";
import { Stack } from "@mui/system";
import { displayImage } from "../../utils";
import PlayerCard2 from "../cards/PlayerCars2 ";
const MessageListFriend = ({ open, onClose, friends }) => {
  const [searchTerm, setSearchTerm] = useState("");

  const filteredFriends = friends?.filter((friend) =>
    friend.user_pseudo.toLowerCase().includes(searchTerm.toLowerCase())
  );

  const handleLinkClick = () => {
    onClose(); // Fermer la fenêtre de dialogue
  };

  return (
    <Dialog
      open={open}
      onClose={onClose}
      fullWidth
      maxWidth="sm"
      style={{ padding: 2 }}
      sx={{ m: 0 }}
    >
      <Stack
        direction="column"
        alignItems="center"
        justifyContent="space-between"
        px={2}
        py={1}
        sx={{
          border: " 1px solid var(--primary-color-special)",
          boxShadow: "1px 1px 6px var(--secondary-color-special)",
          backgroundColor: "var(--primary-color-special)",
        }}
      >
        <Typography
          variant="h6"
          sx={{
            width: "100%",
            color: "var(--secondary-color-special)",
          }}
        >
          Vos amis
        </Typography>
      </Stack>
      <TextField
        label="Rechercher un ami"
        variant="outlined"
        value={searchTerm}
        onChange={(e) => setSearchTerm(e.target.value)}
        sx={{ width: "100%", margin: "auto" }}
      />
      <Grid container p={1} spacing={2} justifyContent="center" mt={3}>
        {filteredFriends?.map((friend, index) => (
          <Grid item xs={4} sm={2} md={3} key={index}>
            <Link
              to={`/profil/${friend.id}`}
              style={{ textDecoration: "none" }}
              onClick={handleLinkClick} // Appeler la fonction de fermeture de la fenêtre de dialogue lors du clic
            >
              <PlayerCard2
                userRanking={friend}
                shadowColor="var(--primary-color-special)"
                borderColor="var(--secondary-color-special)"
              />
            </Link>
          </Grid>
        ))}
      </Grid>
    </Dialog>
  );
};

export default MessageListFriend;
