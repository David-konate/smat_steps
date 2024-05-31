import React from "react";
import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import Login from "../Login";
import Profil from "../users/Profil";
import Theme from "../themes/Theme";
import SousTheme from "../sousThemes/SousTheme";
import IndexSousTheme from "../sousThemes/IndexSousTheme";
import IndexTheme from "../themes/IndexTheme";
import GameRanked from "../rankedParty/GameRanked";
import UserRouteGuard from "./UserRouteGard";
import Gameprivate from "../privateParty/GamePrivate";
import EmailVerifyPage from "../users/EmailVerifyPage";
import IndexUsers from "../users/IndexUsers";
import NotFound from "../NotFound";
import Dashboard from "../dashBoard/DashBoard";
import AdminRouteGuard from "./AdminRouteGuard";
import PasswordForgotPage from "../users/ChangePassword";
import LegalMentions from "../LegalMentions";
import PrivacyPolicy from "../politique";
import RulesPage from "../RulesPage";

const RouterOutlet = () => {
  return (
    <Routes>
      {/* Routes home */}
      <Route path="/" element={<Home />} />
      {/* Routes login */}
      <Route path="/login" element={<Login />} />
      {/* Routes parties */}
      <Route path="/email/verify" element={<EmailVerifyPage />} />
      {/* Routes user */}
      <Route
        element={<UserRouteGuard element={<Profil />} />} // Utilisez UserRouteGuard pour la route Profil
        path="/profil/:slug"
      />
      <Route
        element={<UserRouteGuard element={<IndexUsers />} />} // Utilisez UserRouteGuard pour la route IndexUsers
        path="/joueurs"
      />
      {/* Routes themes */}
      <Route path="/theme/:id" element={<Theme />} />
      <Route path="/theme" element={<IndexTheme />} />
      {/* Routes sous-themes */}
      <Route path="/sous-theme/:id" element={<SousTheme />} />
      <Route path="/sous-theme" element={<IndexSousTheme />} />
      {/* Routes parties */}
      <Route
        path="/partie-classe"
        element={<UserRouteGuard element={<GameRanked />} />}
      />
      <Route
        path="/partie-privee/:id"
        element={<UserRouteGuard element={<Gameprivate />} />}
      />
      <Route
        path="/dashboard"
        element={<AdminRouteGuard element={<Dashboard />} />}
      />
      {/* Routes politique */}
      <Route path="/privacy-policy" element={<PrivacyPolicy />} />
      {/* Routes mentions */}
      <Route path="/legal-mentions" element={<LegalMentions />} />
      <Route path="/rules" element={<RulesPage />} />
      {/* Routes confirm email */}
      <Route path={`/email/verify`} element={<EmailVerifyPage />} />
      <Route path="/password/forgot" element={<PasswordForgotPage />} />
      {/* Ajoutez la route pour la page 404 */}
      <Route path="*" element={<NotFound />} />
    </Routes>
  );
};

export default RouterOutlet;
