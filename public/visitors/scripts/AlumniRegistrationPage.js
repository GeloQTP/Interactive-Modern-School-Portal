import { sendOTP } from "./scripts/sendOTP.js"; // SEND OTP
import { verifyOTP } from "./scripts/verifyOTP.js"; //VERIFY OTP

const form = document.getElementById("registrationForm");
form.addEventListener("submit", sendOTP);

const otp_form = document.getElementById("OTP_form");
otp_form.addEventListener("submit", verifyOTP);
