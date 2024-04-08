import React from "react";
import {
  Dialog,
  DialogTitle,
  DialogContent,
  IconButton,
  Typography,
  Avatar,
} from "@mui/material";
import CloseIcon from "@mui/icons-material/Close";
import { Box, Stack } from "@mui/system";
import { displayImage, firstLetterUppercase } from "../../utils";
import CustomButton from "../buttons/CustomButton";
import { useUserContext } from "../../context/UserProvider";
import CustomButton2 from "../buttons/CustomButton2";

const ConfirmationNewPrivateGame = ({
  open,
  onClose,
  title,
  message,
  onDelete,
  onConfirm,
  newSmats,
}) => {
  const { user } = useUserContext();

  return (
    <Dialog open={open} onClose={onClose}>
      <DialogTitle
        className="request-new-private"
        sx={{
          position: "relative",
          display: "flex",
          justifyContent: "space-between",
          alignItems: "center",
          color: "var(--secondary-color-special)",
          backgroundColor: "var(--primary-color-special)",
          boxShadow: "0px 1px 6px var(--secondary-color-special)",
        }}
      >
        <Typography className="title-new-request" p={1}>
          {title}
        </Typography>
        <IconButton
          onClick={onClose}
          size="small"
          sx={{ position: "absolute", top: 0, right: 0 }}
        >
          <CloseIcon />
        </IconButton>
      </DialogTitle>
      <DialogContent>
        {newSmats.map((smatData, index) => (
          <Box
            key={index}
            m={4}
            className={
              smatData.relatedSmats[1]?.user_id !== user.id
                ? "content-new-request"
                : "content-new-request2"
            }
            sx={{
              padding: 2,
              display: "flex",
              justifyContent: "center",
              alignItems: "center",
              flexDirection: "column",
            }}
          >
            <Avatar
              className={
                smatData.relatedSmats[1]?.user_id !== user.id
                  ? "avatar-new-request"
                  : "avatar-new-request2"
              }
              sx={{
                width: 110,
                height: 110,
                boxShadow:
                  smatData.relatedSmats[1]?.user_id !== user.id
                    ? "0px 1px 6px var(--secondary-color-special)"
                    : "0px 1px 6px var(--primary-color-special)",
              }}
              src={displayImage(
                smatData.relatedSmats[
                  smatData.relatedSmats[1]?.user_id !== user.id
                ]?.user.user_image
              )}
            />
            <Typography
              mt={1}
              className={
                smatData.relatedSmats[1]?.user_id !== user.id
                  ? "text-new-request"
                  : "text-new-request2"
              }
            >
              {smatData.relatedSmats[1]?.user_id !== user.id
                ? smatData.relatedSmats[1]?.user.user_pseudo
                : smatData.relatedSmats[0]?.user.user_pseudo}
            </Typography>

            <Typography
              p={1}
              mt={1}
              className={
                smatData.relatedSmats[1]?.user_id !== user.id
                  ? "theme-new-request"
                  : "theme-new-request2"
              }
              variant="h4"
            >
              {smatData?.sousTheme || smatData.theme}
            </Typography>

            <Typography
              mt={1}
              className={
                smatData.relatedSmats[1]?.user_id !== user.id
                  ? "text-new-request"
                  : "text-new-request2"
              }
            >
              Level {smatData.relatedSmats[1]?.smat.level_id}
            </Typography>

            <Stack mt={1} direction="row" gap={3}>
              {smatData.relatedSmats[1]?.user_id !== user.id ? (
                <>
                  <CustomButton
                    className={
                      smatData.relatedSmats[1]?.user_id !== user.id
                        ? "btn-custom"
                        : "btn-custom2"
                    }
                    onClick={() => onDelete(smatData.relatedSmats[1]?.smat_id)}
                  >
                    Annuler
                  </CustomButton>
                </>
              ) : (
                <>
                  <CustomButton2
                    className={
                      smatData.relatedSmats[1]?.user_id !== user.id
                        ? "btn-custom"
                        : "btn-custom2"
                    }
                    onClick={() => {
                      onConfirm(smatData.relatedSmats[1]?.smat_id);
                      onClose();
                    }}
                  >
                    Accepter
                  </CustomButton2>
                  <CustomButton2
                    className={
                      smatData.relatedSmats[1]?.user_id !== user.id
                        ? "btn-custom"
                        : "btn-custom2"
                    }
                    onClick={() => onDelete(smatData.relatedSmats[1]?.smat_id)}
                  >
                    Annuler
                  </CustomButton2>
                </>
              )}
            </Stack>
          </Box>
        ))}
      </DialogContent>
    </Dialog>
  );
};

export default ConfirmationNewPrivateGame;
