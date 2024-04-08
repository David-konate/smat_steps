import { useEffect } from "react";
import { Navigate, useLocation, useParams } from "react-router";
import MessageDialog from "../components/message/MessageDialog";
import axios from "axios";

const EmailVerifyPage = () => {
  const location = useLocation();

  useEffect(() => {
    onVerifyAccount();
  }, []);

  const onVerifyAccount = async () => {
    try {
      await axios.post(`/email-verify${location.search}`, "post");
      console.log("succes");
      //   toast.success(VALIDATION_EMAIL_MESSAGE);
      <MessageDialog open={true} message={"mail validé avec succes"} />;
    } catch (error) {
      //   toast.error(error?.message?.message);
    }
  };
  return <Navigate to="/login" />;
};

export default EmailVerifyPage;
