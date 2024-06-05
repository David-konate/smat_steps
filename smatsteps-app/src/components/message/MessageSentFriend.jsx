import React, { useState, useEffect } from "react";
import { Avatar, Dialog, IconButton, Typography } from "@mui/material";
import { Box, Stack } from "@mui/system";
import { Close } from "@mui/icons-material";
import { displayImage } from "../../utils";
import CustomButton from "../buttons/CustomButton";
import axios from "axios";
import ConfirmationDialog from "./ConfirmationDialog";
import { useNavigate } from "react-router-dom";

const MessageSentFriend = ({
  open,
  onClose,
  friendSent,
  updateFriendSent,
  userProfil,
  user,
}) => {
  const [isConfirmationOpen, setIsConfirmationOpen] = useState(false);
  const [friendToDelete, setFriendToDelete] = useState(null);
  const navigate = useNavigate();

  const handleOpenConfirmation = (friendId) => {
    setFriendToDelete(friendId);
    setIsConfirmationOpen(true);
  };

  const handleDeleteFriend = async () => {
    try {
      await axios.delete(
        `users/${user.id}/deleted-friend-with/${friendToDelete}`
      );
      onClose();
      updateFriendSent();
      navigate(`/profil/${user.id}`);
    } catch (error) {
      console.log(error);
    }
    setIsConfirmationOpen(false);
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
        direction="row"
        alignItems="center"
        justifyContent="space-between"
        px={2}
        py={1}
        sx={{
          backgroundColor: "var(--primary-color-special)",
          boxShadow: "0px 1px 6px var(--secondary-color-special)",
        }}
      >
        <Typography
          variant="h6"
          sx={{ color: "var(--secondary-color-special)" }}
        >
          Demandes d'amis en attente
        </Typography>
        <IconButton onClick={onClose}>
          <Close sx={{ color: "var(--secondary-color-special)" }} />
        </IconButton>
      </Stack>

      <Stack
        className="form-modif-user"
        sx={{
          p: 2,
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
        }}
      >
        {friendSent &&
          friendSent.map((friend, index) => (
            <Stack
              width={200}
              className="card-sent-friend"
              mt={4}
              key={index}
              direction="column"
              alignItems="center"
              spacing={2}
              p={2}
            >
              <Stack
                key={index}
                direction="column"
                alignItems="center"
                spacing={2}
              >
                <Box>
                  <Avatar
                    sx={{ width: 150, height: 150 }}
                    src={displayImage(friend.friend?.user_image)}
                  />
                </Box>
                <Typography variant="h5" color="var(--primary-color-special)">
                  {friend.friend.user_pseudo}
                </Typography>
                <CustomButton
                  onClick={() => handleOpenConfirmation(friend.friend.id)}
                >
                  {" "}
                  {/* Pass friend's id to handleOpenConfirmation */}
                  Annuler
                </CustomButton>
              </Stack>
            </Stack>
          ))}
      </Stack>
      {/* Pass necessary props to ConfirmationDialog */}
      <ConfirmationDialog
        open={isConfirmationOpen}
        onClose={() => setIsConfirmationOpen(false)}
        onConfirm={handleDeleteFriend}
        title="Confirmation"
        message={`Vous vous apprêtez à annuler la demande d'ami ?`}
      />
    </Dialog>
  );
};

export default MessageSentFriend;
