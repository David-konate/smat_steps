import React from "react";
import { Container, Typography, Box, Link } from "@mui/material";
import { color } from "@mui/system";

const LegalMentions = () => {
  return (
    <Container className="politique" maxWidth="md">
      <Box my={4}>
        <Typography variant="h4" component="h1" gutterBottom>
          Mentions Légales
        </Typography>
        <Typography variant="body1" paragraph>
          <strong>David Konaté :</strong>
          <br />
          <br />
          4 avenue richelieu 44100 Nantes
          <br />
          Téléphone : 07 63 41 87 90
          <br />
          Email : da.konate@gmail.com
        </Typography>
        <Typography variant="body1" paragraph>
          <strong>Hébergement :</strong>
          <br />
          o2switch
          <br />
          222-224 Boulevard Gustave Flaubert
          <br />
          63000 Clermont-Ferrand
          <br />
          Téléphone : 04 44 44 60 40
          <br />
          Site web :{" "}
          <Link href="https://www.o2switch.fr" target="_blank" rel="noopener">
            www.o2switch.fr
          </Link>
        </Typography>
        <Typography variant="body1" paragraph>
          <strong>Propriété intellectuelle :</strong>
          <br />
          Le contenu du site, incluant, de façon non limitative, les textes,
          images, vidéos, et logos, est la propriété exclusive de l'éditeur du
          site, sauf mention contraire. Toute reproduction, distribution,
          modification, adaptation, retransmission ou publication, même
          partielle, de ces différents éléments est strictement interdite sans
          l'accord exprès par écrit de l'éditeur.
        </Typography>
        <Typography variant="body1" paragraph>
          <strong>Collecte des données :</strong>
          <br />
          Nous collectons votre adresse email uniquement pour vous permettre de
          créer un compte et de vous identifier sur notre application de quiz.
          Votre email ne sera pas partagé avec des tiers sans votre consentement
          explicite.
        </Typography>
        <Typography variant="body1" paragraph>
          <strong>Cookies :</strong>
          <br />
          Le site peut collecter automatiquement des informations standards
          telles que votre adresse IP, votre type de navigateur, et des
          informations sur votre utilisation du site via des cookies. Ces
          informations sont utilisées uniquement à des fins d'analyse
          statistique.
        </Typography>
        <Typography variant="body1" paragraph>
          <strong>Contact :</strong>
          <br />
          Pour toute question relative aux mentions légales du site, vous pouvez
          nous contacter à l'adresse suivante : da.konate@gmail.com
        </Typography>
      </Box>
    </Container>
  );
};

export default LegalMentions;
