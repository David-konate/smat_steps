import React from "react";
import { Typography, Box } from "@mui/material";
import { Container } from "@mui/system";

const RulesPage = () => {
  return (
    <Container>
      <Box mt={2} className={"regles"}>
        <Typography variant="h1">Règles du Jeu</Typography>
        <Typography variant="body1" className={"body"}>
          Bienvenue dans l'univers captivant des quiz interactifs de notre
          application ! Que vous soyez un amateur de compétition ou un joueur
          occasionnel cherchant à défier vos amis, nos modules de jeu vous
          offrent une expérience divertissante et enrichissante.
        </Typography>
        <Typography variant="h2">Module Quiz</Typography>
        <Typography variant="body1" className={"body"}>
          Plongez dans une aventure de connaissances où vous avez le contrôle
          total sur le choix des sujets qui vous passionnent. Explorez une
          variété de thèmes et de sous-thèmes, et testez vos compétences dans
          des questions variées. Notre module de partie classée va au-delà du
          traditionnel quiz en offrant une personnalisation complète, rendant
          votre expérience de jeu plus pertinente et engageante.
        </Typography>
        <Typography variant="h2">Module de Duel</Typography>
        <Typography variant="body1" className={"body"}>
          Préparez-vous à des affrontements épiques en tête-à-tête dans notre
          module Duel ! Défiez vos amis ou d'autres joueurs dans une série de
          questions variées, mettant ainsi à l'épreuve vos connaissances et
          votre rapidité. Répondez aux questions dans un temps limité, ajoutez
          une dimension de défi et d'excitation à chaque échange. Suivez vos
          performances en temps réel avec notre système de duel, visualisez qui
          domine le quiz à chaque instant grâce à des graphiques dynamiques.
        </Typography>
        <Typography variant="body1" className={"body"}>
          Que vous cherchiez à tester vos connaissances ou à simplement vous
          amuser, nos modules de jeu sont conçus pour vous offrir une expérience
          engageante et compétitive. Préparez-vous à vivre des moments
          inoubliables remplis de défis et d'amusement !
        </Typography>
      </Box>
    </Container>
  );
};

export default RulesPage;
