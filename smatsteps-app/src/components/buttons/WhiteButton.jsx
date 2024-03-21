import Button from "@mui/material/Button";

const WhiteButton = ({ children, onClick, isActive = false }) => {
  return (
    <Button
      className="white-btn"
      onClick={onClick}
      sx={{
        borderRadius: 20,

        backgroundColor: "white",
        color: "var(--primary-color)",
        width: "fit-content",
        fontSize: "0.7em",
        "&:hover": {
          color: "white",
          background: "var(--light-dark-color)",
        },
      }}
    >
      {children}
    </Button>
  );
};

export default WhiteButton;
