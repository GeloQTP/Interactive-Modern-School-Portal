import { sendOTP } from "./sendOTP.js"; // SEND OTP
import { verifyOTP } from "./VerifyAndRegisterStudents.js"; // VERIFY OTP

const form = document.getElementById("registrationForm");
form.addEventListener("submit", sendOTP);
const otp_form = document.getElementById("OTP_form");
otp_form.addEventListener("submit", verifyOTP);
