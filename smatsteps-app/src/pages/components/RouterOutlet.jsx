import { Route, Routes } from "react-router-dom";
import Home from "../Home";
import Login from "../Login";
import Profil from "../users/Profil";
import Theme from "../themes/Theme";
import SousTheme from "../sousThemes/SousTheme";

const RouterOutlet = () => {
  return (
    <Routes>
      <Route path="/" element={<Home />} />

      <Route path={`/login`} element={<Login />} />

      <Route path="/profil" element={<Profil />} />
      <Route path="/theme/:id" element={<Theme />} />
      <Route path="/sous-theme/:id" element={<SousTheme />} />
    </Routes>
  );
};

export default RouterOutlet;
