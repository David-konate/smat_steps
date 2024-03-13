import React from "react";
import { SvgIcon } from "@mui/material";

const MultiplePersonsIcon = (props) => {
  return (
    <SvgIcon {...props} viewBox="0 0 24 24">
      {/* Première personne */}
      <circle cx="12" cy="7" r="3" />
      {/* Deuxième personne */}
      <circle cx="8" cy="13" r="3" />
      {/* Troisième personne */}
      <circle cx="16" cy="13" r="3" />
    </SvgIcon>
  );
};

export default MultiplePersonsIcon;
