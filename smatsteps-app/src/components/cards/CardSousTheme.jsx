import React from "react";
import { Card, CardActionArea, CardMedia, Typography } from "@mui/material";
import { NavLink } from "react-router-dom";
import { displayImage } from "../../utils";

const CardSousTheme = ({ theme, theme_id, theme_image }) => {
  return (
    <Card
      sx={{
        border: "1px solid var(--secondary-color)",
        boxShadow: "0px 4px 8px rgba(105, 73, 255, 0.7)",
      }}
    >
      <NavLink to={`/sous-theme/${theme_id}`}>
        <CardActionArea style={{ width: "100%" }}>
          <CardMedia
            className="image-theme-home"
            component="img"
            height="100px"
            width="350px"
            image={displayImage(theme_image)}
            alt="Image description"
          />
          <Typography
            variant="body2"
            component="div"
            className="text-top-home"
            sx={{
              position: "absolute",
              bottom: 0,
              left: "50%",
              transform: "translateX(-50%)",
              backgroundColor: "rgba(105, 73, 255, 0.8)",
              padding: "4px",
              borderRadius: "4px",
              textAlign: "center",
              width: "100%",
              color: "var(--secondary-color)",
            }}
          >
            {theme}
          </Typography>
        </CardActionArea>
      </NavLink>
    </Card>
  );
};

export default CardSousTheme;
