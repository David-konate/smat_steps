import { create, test, enforce } from "vest";

const IS_REQUIRED_MESSAGE = "Ce champ est requis";
const IS_NOT_REGEX_VALID_MESSAGE = "Le format est invalide";
const IS_NOT_SAME_VALUE_MESSAGE = "Les mots de passe ne correspondent pas";
const PSEUDO_REGEX = /^[a-zA-Z0-9_.]+$/;
const EMAIL_REGEX = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
const LEVEL_LIMIT_MESSAGE = "Le niveau doit être 1, 2 ou 3";
const PASSWORD_MESSAGE = "Password invalide";
const PASSWORD_REGEX =
  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

const maxLength = (length) =>
  `Le champ ne doit pas dépasser ${length} caractères.`;
const minLength = (length) =>
  `Le champ doit avoir au minimum ${length} caractères.`;
const minNumber = (number) => `Minimum ${number}`;

export const validationRegister = create((data = {}) => {
  test("user_pseudo", IS_REQUIRED_MESSAGE, () => {
    enforce(data.user_pseudo).isNotEmpty();
  });
  test("user_pseudo", IS_NOT_REGEX_VALID_MESSAGE, () => {
    enforce(data.user_pseudo).matches(PSEUDO_REGEX);
  });
  test("user_pseudo", maxLength(20), () => {
    enforce(data.user_pseudo).shorterThanOrEquals(20);
  });

  test("email", IS_REQUIRED_MESSAGE, () => {
    enforce(data.email).isNotEmpty();
  });
  test("email", IS_NOT_REGEX_VALID_MESSAGE, () => {
    enforce(data.email).matches(EMAIL_REGEX);
  });

  test("password", IS_REQUIRED_MESSAGE, () => {
    enforce(data.password).isNotEmpty();
  });
  test("password", minLength(6), () => {
    enforce(data.password).longerThanOrEquals(6);
  });

  test("confirmPassword", IS_REQUIRED_MESSAGE, () => {
    enforce(data.confirmPassword).isNotEmpty();
  });
  test("confirmPassword", IS_NOT_SAME_VALUE_MESSAGE, () => {
    enforce(data.confirmPassword).equals(data.password);
  });
});

export const validationLogin = create((data = {}) => {
  test("email", IS_REQUIRED_MESSAGE, () => {
    enforce(data.email).isNotEmpty();
  });
  test("email", IS_NOT_REGEX_VALID_MESSAGE, () => {
    enforce(data.email).matches(EMAIL_REGEX);
  });

  test("password", IS_REQUIRED_MESSAGE, () => {
    enforce(data.password).isNotEmpty();
  });
});

export const validationQuestion = create((data = {}) => {
  test("question", IS_REQUIRED_MESSAGE, () => {
    enforce(data.question).isNotEmpty();
  });

  test("sous_theme_id", IS_REQUIRED_MESSAGE, () => {
    enforce(data.sous_theme_id).isNotEmpty();
  });

  test("theme_id", IS_REQUIRED_MESSAGE, () => {
    enforce(data.theme_id).isNotEmpty();
  });

  test("level_id", IS_REQUIRED_MESSAGE, () => {
    enforce(data.level_id)
      .isNotEmpty()
      .matches(/^(1|2|3)$/)
      .message(LEVEL_LIMIT_MESSAGE);
  });
});

export const validationForgotPassword = create((data = {}) => {
  console.log({ data });
  test("email", IS_REQUIRED_MESSAGE, () => {
    enforce(data.email).isNotEmpty();
  });
  test("email", IS_NOT_REGEX_VALID_MESSAGE, () => {
    enforce(data.email).matches(EMAIL_REGEX);
  });
});

export const validationChangePassword = create((data = {}) => {
  test("email", IS_REQUIRED_MESSAGE, () => {
    enforce(data.email).isNotEmpty();
  });
  test("email", IS_NOT_REGEX_VALID_MESSAGE, () => {
    enforce(data.email).matches(EMAIL_REGEX);
  });

  test("password", IS_REQUIRED_MESSAGE, () => {
    enforce(data.password).isNotEmpty();
  });
  test("password", PASSWORD_MESSAGE, () => {
    enforce(data.password).matches(PASSWORD_REGEX);
  });

  test("password_confirmation", IS_REQUIRED_MESSAGE, () => {
    enforce(data.password_confirmation).isNotEmpty();
  });
  test("password_confirmation", IS_NOT_SAME_VALUE_MESSAGE, () => {
    enforce(data.password_confirmation).equals(data.password);
  });
});

export const errorField = (error) => {
  return {
    error: Boolean(error),
    helperText: error?.message || "",
  };
};
