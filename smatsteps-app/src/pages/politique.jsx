import React from "react";
import { Container, Typography, Box } from "@mui/material";

const PrivacyPolicy = () => {
  return (
    <Container className="politique" maxWidth="md" sx={{ padding: 3 }}>
      <Typography variant="h4" gutterBottom>
        Politique de Confidentialité
      </Typography>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">1. Introduction</Typography>
        <Typography variant="body1">
          Bienvenue sur SmartStep ("l'Application"), gérée par David Konaté. La
          protection de vos données personnelles est une priorité pour nous.
          Cette politique de confidentialité décrit comment nous collectons,
          utilisons et protégeons vos informations personnelles lorsque vous
          utilisez notre Application.
        </Typography>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">
          2. Informations que Nous Collectons
        </Typography>
        <Typography variant="body1">
          Lorsque vous vous inscrivez à notre Application, nous collectons les
          informations suivantes :
        </Typography>
        <ul>
          <li>
            <Typography variant="body1">
              <strong>Adresse e-mail</strong> : Utilisée pour l'inscription, la
              récupération de compte et les communications relatives à
              l'Application.
            </Typography>
          </li>
          <li>
            <Typography variant="body1">
              <strong>Pseudo</strong> : Utilisé comme identifiant dans
              l'Application.
            </Typography>
          </li>
        </ul>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">3. Utilisation des Informations</Typography>
        <Typography variant="body1">
          Nous utilisons les informations que nous collectons pour :
        </Typography>
        <ul>
          <li>
            <Typography variant="body1">
              <strong>Gérer votre compte</strong> : Vous identifier et fournir
              un accès sécurisé à l'Application.
            </Typography>
          </li>
          <li>
            <Typography variant="body1">
              <strong>Communiquer avec vous</strong> : Envoyer des
              notifications, mises à jour et informations relatives à
              l'Application.
            </Typography>
          </li>
        </ul>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">4. Partage des Informations</Typography>
        <Typography variant="body1">
          Nous ne partageons pas vos informations personnelles avec des tiers,
          sauf si requis par la loi ou avec votre consentement explicite.
        </Typography>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">5. Sécurité des Données</Typography>
        <Typography variant="body1">
          Nous mettons en œuvre des mesures de sécurité appropriées pour
          protéger vos informations contre tout accès non autorisé,
          modification, divulgation ou destruction.
        </Typography>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">6. Conservation des Données</Typography>
        <Typography variant="body1">
          Nous conservons vos informations personnelles aussi longtemps que
          nécessaire pour atteindre les objectifs décrits dans cette politique
          de confidentialité, sauf si une période de conservation plus longue
          est requise ou permise par la loi.
        </Typography>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">7. Vos Droits</Typography>
        <Typography variant="body1">Vous avez le droit de :</Typography>
        <ul>
          <li>
            <Typography variant="body1">
              <strong>Accéder à vos informations</strong> : Demander une copie
              des informations personnelles que nous détenons sur vous.
            </Typography>
          </li>
          <li>
            <Typography variant="body1">
              <strong>Corriger vos informations</strong> : Demander la
              correction de toute information personnelle inexacte ou
              incomplète.
            </Typography>
          </li>
          <li>
            <Typography variant="body1">
              <strong>Supprimer vos informations</strong> : Demander la
              suppression de vos informations personnelles, sous réserve de
              certaines conditions.
            </Typography>
          </li>
        </ul>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">
          8. Modifications de cette Politique de Confidentialité
        </Typography>
        <Typography variant="body1">
          Nous pouvons mettre à jour cette politique de confidentialité de temps
          en temps. Nous vous informerons de tout changement en publiant la
          nouvelle politique sur cette page et en mettant à jour la date de
          "Dernière mise à jour" en haut de cette politique.
        </Typography>
      </Box>

      <Box sx={{ marginBottom: 3 }}>
        <Typography variant="h6">9. Contact</Typography>
        <Typography variant="body1">
          Si vous avez des questions ou des préoccupations concernant cette
          politique de confidentialité ou nos pratiques de confidentialité,
          veuillez nous contacter à :
        </Typography>
        <Typography variant="body1">
          David Konaté
          <br />
          Email : [votre email de contact]
          <br />
          Adresse : [votre adresse]
        </Typography>
      </Box>

      <Typography variant="body1">Merci d'utiliser SmartStep.</Typography>
    </Container>
  );
};

export default PrivacyPolicy;
