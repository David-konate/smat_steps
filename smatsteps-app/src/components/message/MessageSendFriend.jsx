import { Close } from "@mui/icons-material";
import { Avatar, Dialog, IconButton, Typography } from "@mui/material";
import { Box, Stack } from "@mui/system";
import { useState } from "react";
import CustomButton from "../buttons/CustomButton";
import { displayImage } from "../../utils";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import CustomButton2 from "../buttons/CustomButton2";

const MessageSendFriend = ({
  open,
  onClose,
  friendPending,
  updateFriendPending,
  userProfil,
  user,
}) => {
  const navigate = useNavigate();

  //   const [isConfirmationOpen, setIsConfirmationOpen] = useState(false);
  //   const [friendToDelete, setFriendToDelete] = useState(null);
  //   const [friendToAccept, setFriendToAccept] = useState(null);

  const handleOpenConfirmation = async (friendId) => {
    try {
      await axios.post(`users/${friendId}/accept-friend-with/${user.id}`, null);
      onClose(); // Fermer le dialogue après avoir accepté l'ami
      updateFriendPending(); // Mettre à jour friendPending après l'acceptation
      navigate(`/profil/${user.slug}`);
    } catch (error) {
      console.log(error);
    }
  };

  const handleOpenRefuse = async (friendId) => {
    try {
      await axios.delete(`users/${friendId}/deleted-friend-with/${user.id}`);
      onClose(); // Fermer le dialogue après avoir refusé l'ami
      updateFriendPending(); // Mettre à jour friendPending après le refus
      navigate(`/profil/${user.slug}`);
    } catch (error) {
      console.log(error);
    }
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
        {" "}
        <Typography
          variant="h6"
          sx={{ color: "var(--secondary-color-special)" }}
        >
          Demandes d'amis reçut
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
        {" "}
        {friendPending.map((friend, index) => (
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
                  src={displayImage(friend.user?.user_image)}
                />
              </Box>
              <Typography variant="h5" color="var(--primary-color-special)">
                {friend.user.user_pseudo}
              </Typography>
              <Stack direction={"row"} gap={3}>
                <CustomButton2
                  onClick={() => handleOpenConfirmation(friend.user.id)}
                >
                  {" "}
                  {/* Pass friend's id to handleOpenConfirmation */}
                  Accepter
                </CustomButton2>
                <CustomButton2 onClick={() => handleOpenRefuse(friend.user.id)}>
                  {" "}
                  {/* Pass friend's id to handleOpenConfirmation */}
                  Refuser
                </CustomButton2>
              </Stack>
            </Stack>
          </Stack>
        ))}
      </Stack>
    </Dialog>
  );
};
export default MessageSendFriend;
