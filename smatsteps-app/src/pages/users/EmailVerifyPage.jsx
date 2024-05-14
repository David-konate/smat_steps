import { useEffect, useState } from "react";
import { useLocation } from "react-router";
import MessageDialog from "../../components/message/MessageDialog";
import axios from "axios";

const EmailVerifyPage = () => {
  const location = useLocation();
  const [isSuccess, setIsSuccess] = useState(false); // État pour suivre si la vérification est réussie
  console.log(location);
  useEffect(() => {
    onVerifyAccount();
  }, []);

  const onVerifyAccount = async () => {
    try {
      await axios.post(`/email-verify${location.search}`, "post");
      console.log("success");
      setIsSuccess(true); // Mettre à jour l'état pour indiquer que la vérification est réussie
    } catch (error) {
      console.error(error);
    }
  };

  return (
    <>
      {isSuccess && ( // Rendre le MessageDialog uniquement si la vérification est réussie
        <MessageDialog
          open={true}
          message={"Mail validé avec succès"}
          redirection={"/login"}
        />
      )}
    </>
  );
};

export default EmailVerifyPage;
