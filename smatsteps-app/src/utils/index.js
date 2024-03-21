// index.js

export const IMAGE_PATH = process.env.REACT_APP_BASE_URL + "/storage/uploads/";
export const IMAGE_API = process.env.REACT_APP_BASE_URL + "/storage/images/";

export const BASE_URL = process.env.REACT_APP_BASE_URL;

export const BASE_URL_API = process.env.REACT_APP_BASE_URL_API;

// Navigation
export const linksUserLoged = [
  {
    label: "Home",
    path: "/",
  },
  {
    label: "Profil",
    path: "/profil",
  },

  {
    label: "Logout",
    path: "/login",
  },
  {
    label: "login",
    path: "/login",
  },
];
export const links = [
  {
    label: "Home",
    path: "/",
  },
  {
    label: "Profil",
    path: "/profil",
  },
];

export const linksAcceuil = [
  {
    label: "Home",
    path: "/",
  },
  {
    label: "Profil",
    path: "/rofil",
  },
  {
    label: "Login",
    path: "/login",
  },
  {
    label: "Logout",
    path: "/lpgin",
  },
];

// Transformation
export const firstLetterUppercase = (value) => {
  return value.charAt(0).toUpperCase() + value.slice(1);
};

export const convertToRoman = (num) => {
  const romanNumerals = ["I", "II", "III"];
  const values = [1, 2, 3];

  let result = "";

  for (let i = values.length - 1; i >= 0; i--) {
    while (num >= values[i]) {
      result += romanNumerals[i];
      num -= values[i];
    }
  }

  return result;
};

export const displayImage = (image) =>
  image ? IMAGE_PATH + "/" + image : IMAGE_PATH + "/notImage.png";

export const displayImageApi = (image) =>
  image ? IMAGE_API + "/" + image : IMAGE_PATH + "/notImage.png";

export const cleanHtmlText = (htmlString) => {
  const cleanText = htmlString
    .replace(/<[^>]*>/g, " ")
    .replace(/\s+/g, " ")
    .trim();

  return cleanText;
};
export const getViolationField = (error, setError) => {
  if ("errors" in error?.response?.data) {
    const errors = error?.response?.data?.errors;
    if (errors.length) {
      for (const field in errors) {
        if (errors.hasOwnProperty(field)) {
          const messages = errors[field];
          for (const message of messages) {
            setError(field, {
              type: "manual",
              message: message,
            });
          }
        }
      }
    }
  }
};

//proriété pour les jeux

// Durée du timer pour chaque question (en secondes)
export const QUESTION_TIMER_DURATION = 25000;

// Délai avant de commencer à déduire des points (en secondes)
export const LIMITE_ALL_POINT = QUESTION_TIMER_DURATION - 2000;
// Niveaux de réponse et leurs points respectifs

// Fonction pour calculer les points en fonction du temps
export const calculatePoints = (userTime, userLevel) => {
  console.log(userTime);
  userTime = userTime * 1000;
  const pointsMax = LEVELS[userLevel];

  // Vérifier si le temps mis par l'utilisateur est inférieur à la durée LIMITE_ALL_POINT
  if (userTime < LIMITE_ALL_POINT) {
    const pointsPerdus =
      Math.round((pointsMax / userTime) * LIMITE_ALL_POINT * 0.1 * 100) / 100;
    console.log({ pointsPerdus });
    const points = pointsMax - pointsPerdus;
    return points;
  } else {
    console.log("full point", LEVELS[userLevel]);
    // Si le temps est supérieur à POINTS_LIMITE_ALL_POINT, attribuer le nombre maximum de points
    return pointsMax;
  }
};

export const calculatePercentage = (currentPoints, totalPoints) => {
  const percentage =
    totalPoints !== 0 ? (currentPoints / totalPoints) * 100 : 0;
  return parseFloat(percentage.toFixed(2));
};

export const currentPoints = (currentLevel) => {
  return LEVELS[currentLevel];
};

export const LEVELS = {
  1: 2,
  2: 4,
  3: 6,
};

export const pointsTotal = (
  countLevel1 = 0,
  countLevel2 = 0,
  countLevel3 = 0
) => {
  // Calcul du total des points en multipliant chaque valeur par le nombre de points correspondant
  let totalPoints = 0;
  totalPoints += countLevel1 * 2; // Ajout des points pour le niveau 1
  totalPoints += countLevel2 * 4; // Ajout des points pour le niveau 2
  totalPoints += countLevel3 * 6; // Ajout des points pour le niveau 3

  return totalPoints;
};
