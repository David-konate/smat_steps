import {
  Box,
  Button,
  CircularProgress,
  Container,
  Typography,
} from "@mui/material";
import { useEffect, useState, useRef } from "react";

import axios from "axios";
import QuestionsList from "../../components/list/QuestionsList";
import CustomButton from "../../components/buttons/CustomButton";

const Dashboard = () => {
  const [isBusy, setIsBusy] = useState(false);
  const [data, setData] = useState();
  const [tabs, setTabs] = useState([
    {
      id: 1,
      isOpen: false,
      buttonLabel: "Liste évènements",
      component: QuestionsList,
    },
    {
      id: 2,
      isOpen: false,
      buttonLabel: "Liste lieux",
      component: QuestionsList,
    },
    {
      id: 3,
      isOpen: false,
      buttonLabel: "Liste entreprises",
      component: QuestionsList,
    },
    {
      id: 4,
      isOpen: false,
      buttonLabel: "Liste candidats",
      component: QuestionsList,
    },
  ]);

  const [tabSelected, setTabSelected] = useState(null); // Modifier ici

  const handleCreateFormSubmit = (index) => {
    const selectedTab = tabs.find((tab) => tab.id === index);
    setTabs((prevTabs) =>
      prevTabs.map((tab) =>
        tab.id === index ? { ...tab, isOpen: !tab.isOpen } : tab
      )
    );
    setTabSelected((prevTabSelected) =>
      prevTabSelected?.id === index ? null : selectedTab
    );
  };

  // Référence pour la div principale du dashboard
  const dashboardRef = useRef(null);

  // Gestionnaire de clic pour refermer les formulaires lors d'un clic en dehors
  const handleClickOutside = (event) => {
    if (dashboardRef.current && !dashboardRef.current.contains(event.target)) {
      setTabSelected(null); // Fermer les formulaires lorsque l'utilisateur clique en dehors
    }
  };

  // Ajout de l'écouteur d'événement de clic lorsque le composant est monté
  useEffect(() => {
    document.addEventListener("click", handleClickOutside, true);
    return () => {
      document.removeEventListener("click", handleClickOutside, true);
    };
  }, []);

  return isBusy ? (
    <Container>
      <CircularProgress />
    </Container>
  ) : (
    <Container>
      <Container
        ref={dashboardRef} // Référence à la div principale du dashboard
        style={{
          display: "flex",
          flexDirection: "column",
          alignItems: "center",
          margin: "1rem auto",
        }}
      >
        <Box>
          {tabs.map((tab) => (
            <Button
              key={tab.id}
              onClick={() => handleCreateFormSubmit(tab.id)}
              className={tab.id === tabSelected?.id ? "activeButton" : ""}
              style={{ margin: "2px" }}
            >
              <Typography color={"red"}> {tab.buttonLabel}</Typography>
            </Button>
          ))}
        </Box>

        <Box>
          {tabSelected && (
            <tabSelected.component onFormSubmit={handleCreateFormSubmit} />
          )}
        </Box>
      </Container>
    </Container>
  );
};
export default Dashboard;
