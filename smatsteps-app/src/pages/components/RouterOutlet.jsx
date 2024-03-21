import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import Login from "../Login";
import Profil from "../users/Profil";
import Theme from "../themes/Theme";
import SousTheme from "../sousThemes/SousTheme";
import IndexSousTheme from "../sousThemes/IndexSousTheme";
import IndexTheme from "../themes/IndexTheme";
import GameRanked from "../rankedParty/GameRanked";
import PrivateRouteGuard from "../../guards/PrivateRouteGuard";

const RouterOutlet = () => {
  return (
    <Routes>
      <Route path="/" element={<Home />} />

      <Route path={`/login`} element={<Login />} />

      <Route path="/profil" element={<Profil />} />

      {/* Routes themes */}
      <Route path="/theme/:id" element={<Theme />} />
      <Route path="/theme" element={<IndexTheme />} />
      {/* Routes sous-themes */}
      <Route path="/sous-theme/:id" element={<SousTheme />} />
      <Route path="/sous-theme" element={<IndexSousTheme />} />
      {/* Routes ranking */}
      <Route
        path="/partie-classe"
        element={<PrivateRouteGuard element={<GameRanked />} />}
      />
    </Routes>
  );
};

export default RouterOutlet;
