// LOADER ANIMATION
const spinner = document.querySelector(".spinner-wrapper");

window.addEventListener("load", () => {
  setTimeout(() => (spinner.style.display = "none"), 1000);
});

// AUTOMATED AGE CALCULATION AND DISPLAY
const ageInput = document.getElementById("ageInput");
document
  .getElementById("birthdateInput")
  .addEventListener("change", function () {
    const birthDate = new Date(this.value);
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) age--;
    ageInput.value = age;
  });

// AJAX Submittion
window.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("registrationForm");
  const acceptBtn = document.getElementById("acceptEULA");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    acceptBtn.disabled = true;
    acceptBtn.innerHTML =
      '<span class="spinner-border spinner-border-sm text-dark" role ="status"> <span class="visually-hidden"> Loading... </span></span>';

    const formData = new FormData(form);
    formData.append("action", "send_otp");

    try {
      const res = await fetch(`../ajax/registrationOTP.php`, {
        method: "POST",
        body: formData,
        credentials: "same-origin",
      });

      if (!res.ok) {
        console.log(res);
        document.querySelector(".toast-body").textContent =
          "Request Error. Please try again.";
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
          document.getElementById("liveToast"),
        );
        toastBootstrap.show();
      }

      const result = await res.json();

      if (result.success) {
        let OTP_Modal = bootstrap.Modal.getOrCreateInstance(
          document.getElementById("otpModal"),
        );
        let eulaModal = bootstrap.Modal.getOrCreateInstance(
          document.getElementById("eulaModal"),
        );

        eulaModal.hide();
        OTP_Modal.show();

        document.querySelector(".toast-body").textContent = "OTP Sent.";
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
          document.getElementById("liveToast"),
        );
        toastBootstrap.show();
      }
    } catch (error) {
      console.log(error);
      document.querySelector(".toast-body").textContent =
        "An error occurred. Please try again.";
      const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
        document.getElementById("liveToast"),
      );
      toastBootstrap.show();
    } finally {
      acceptBtn.disabled = false;
      acceptBtn.innerHTML = "Understood";
    }
  });
});

// VERIFY OTP
window.addEventListener("DOMContentLoaded", () => {
  const otp_form = document.getElementById("OTP_form");
  const verifyOTP_btn = document.getElementById("verifyOTP_btn");

  otp_form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const digit1 = document.querySelector('input[name="Digit1"]').value;
    const digit2 = document.querySelector('input[name="Digit2"]').value;
    const digit3 = document.querySelector('input[name="Digit3"]').value;
    const digit4 = document.querySelector('input[name="Digit4"]').value;
    const digit5 = document.querySelector('input[name="Digit5"]').value;
    const digit6 = document.querySelector('input[name="Digit6"]').value;

    const otp = digit1 + digit2 + digit3 + digit4 + digit5 + digit6; // Concatenate the digits to form the OTP

    verifyOTP_btn.disabled = true;
    verifyOTP_btn.innerHTML =
      '<span class="spinner-grow spinner-grow-sm text-dark" role ="status"> <span class="visually-hidden"> Loading... </span></span>';

    try {
      const res = await fetch("../ajax/registrationOTP.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          action: "verify_otp",
          otp: otp,
        }),
        credentials: "same-origin",
      });

      if (!res.ok) {
        document.querySelector(".toast-body").textContent =
          "Something went wrong. Please try again.";
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
          document.getElementById("liveToast"),
        );
        toastBootstrap.show();
      }

      const response = await res.json();

      if (response.success) {
        // IF OTP VERIFICATION IS A SUCCESS
        const form = document.getElementById("registrationForm");
        try {
          const registerRes = await fetch(`../ajax/registerStudent.php`, {
            method: "POST",
            body: new FormData(form),
            credentials: "same-origin",
          });

          if (!registerRes.ok) {
            document.querySelector(".toast-body").textContent =
              "Something went wrong. Please try again.";
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
              document.getElementById("liveToast"),
            );
            toastBootstrap.show();
          }

          const registerResponse = await registerRes.json();

          if (registerResponse.success) {
            // IF REGISTRATION IS A SUCCESS
            document.querySelector(".toast-body").textContent =
              registerResponse.message;
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
              document.getElementById("liveToast"),
            );
            toastBootstrap.show();

            let OTP_Modal = bootstrap.Modal.getOrCreateInstance(
              document.getElementById("otpModal"),
            );

            OTP_Modal.hide();

            form.reset();
            otp_form.reset();
            window.scrollTo(0, 0);
          } else {
            // IF REGISTRATION FAILED
            let OTP_Modal = bootstrap.Modal.getOrCreateInstance(
              document.getElementById("otpModal"),
            );
            document.querySelector(".toast-body").textContent =
              registerResponse.message;
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
              document.getElementById("liveToast"),
            );

            OTP_Modal.hide();
            toastBootstrap.show();
            otp_form.reset();
            window.scrollTo(0, 0);
          }
        } catch (error) {
          // IF REGISTRATION FAILED
          document.querySelector(".toast-body").textContent =
            "Something went wrong. Please try again.";
          const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
            document.getElementById("liveToast"),
          );
          toastBootstrap.show();
          otp_form.reset();
          window.scrollTo(0, 0);
        } finally {
          verifyOTP_btn.disabled = false;
          verifyOTP_btn.innerHTML = "Verify";
        }
      } else {
        // IF OTP VERIFICATION FAILED
        document.querySelector(".toast-body").textContent = response.message;
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
          document.getElementById("liveToast"),
        );
        toastBootstrap.show();

        window.scrollTo(0, 0);
      }
    } catch (error) {
      document.querySelector(".toast-body").textContent =
        "Something went wrong. Please try again.";
      const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
        document.getElementById("liveToast"),
      );
      toastBootstrap.show();
    } finally {
      verifyOTP_btn.disabled = false;
      verifyOTP_btn.textContent = "Verify";
    }
  });
});

//OTP AUTO NEXT
document.addEventListener("DOMContentLoaded", function () {
  const otpInputs = document.querySelectorAll('#otpModal input[type="text"]');

  otpInputs.forEach((input, index) => {
    // Move to next input on input
    input.addEventListener("input", function (e) {
      if (this.value.length === 1 && index < otpInputs.length - 1) {
        otpInputs[index + 1].focus();
      }
    });

    // Handle backspace to move to previous input
    input.addEventListener("keydown", function (e) {
      if (e.key === "Backspace" && this.value === "" && index > 0) {
        otpInputs[index - 1].focus();
      }
    });

    // Prevent typing more than 1 character
    input.addEventListener("input", function (e) {
      if (this.value.length > 1) {
        this.value = this.value.slice(0, 1);
      }
    });

    // Only allow numbers
    input.addEventListener("keypress", (e) => {
      if (!/[0-9]/.test(e.key)) {
        e.preventDefault();
      }
    });
  });

  // Auto-focus first input when modal opens
  const modal = document.getElementById("otpModal");
  modal.addEventListener("shown.bs.modal", () => {
    otpInputs[0].focus();
  });
});

window.addEventListener("DOMContentLoaded", () => {
  const registerBtn = document.getElementById("registerBtn"),
    understoodEULAButton = document.getElementById("acceptEULA"),
    eulaCheckBox = document.getElementById("termsCheck");
  registerBtn.disabled = true;
  understoodEULAButton.disabled = true;

  document.getElementById("registrationForm").addEventListener("input", () => {
    const isValid = validateInputs() && validateEmail() && validatePassword();
    registerBtn.disabled = !isValid;

    if (eulaCheckBox.checked) {
      understoodEULAButton.disabled = false;
    } else {
      understoodEULAButton.disabled = true;
    }
  });
});

// CHECK FOR EMPTY INPUTS
function validateInputs() {
  const registrationForm = {
    // Personal Information
    firstName: document.getElementById("firstNameInput").value,
    lastName: document.getElementById("lastNameInput").value,
    middleName: document.getElementById("middleNameInput").value,
    extensionName: document.getElementById("extensionName").value,
    birthDate: document.getElementById("birthdateInput").value,
    age: document.getElementById("ageInput").value,
    nationality: document.getElementById("nationalityInput").value,
    civilStatus: document.getElementById("civilStatusInput").value,
    gender: document.getElementById("genderInput").value,

    // Contact Information
    email: document.getElementById("emailInput").value,
    phoneNumber: document.getElementById("phoneNumberInput").value,
    address: document.getElementById("addressInput").value,
    barangay: document.getElementById("barangayInput").value,
    city: document.getElementById("cityInput").value,
    province: document.getElementById("provinceInput").value,
    zipCode: document.getElementById("zipcodeInput").value,

    // Academic Information
    program: document.getElementById("programInput").value,
    yearLevel: document.getElementById("yearLevelInput").value,
    studentType: document.getElementById("studentType").value,
    enrollmentType: document.getElementById("enrollmentType").value,

    // Emergency Contact
    guardianName: document.getElementById("guardianInput").value,
    relationship: document.getElementById("relationshipInput").value,
    guardianPhone: document.getElementById("guardianphoneInput").value,
    guardianEmail: document.getElementById("guardianmailInput").value,

    // Account Information
    accountUsername: document.getElementById("accountUsernameInput").value,
    password: document.getElementById("passwordInput").value,
    confirmPassword: document.getElementById("confirmPassword").value,
    recoveryEmail: document.getElementById("recoveryEmailInput").value,
  };

  const hasEmptyField = Object.values(registrationForm).some(
    (value) => value === "" || value === null || value === undefined,
  );

  if (hasEmptyField) {
    return false;
  } else {
    return true;
  }
}

// VALIDATE EMAIl
function validateEmail() {
  const recoveryEmailInput = document.getElementById("recoveryEmailInput");
  const emailStatus = document.getElementById("emailStatus");

  const recoveryEmail = recoveryEmailInput.value.trim();
  const email = document.getElementById("emailInput").value.trim();

  // Empty check
  if (!recoveryEmail || !email) {
    recoveryEmailInput.classList.remove("border-danger", "border-success");
    emailStatus.innerHTML = "";
    return false;
  }

  // EMAIL CHECKING
  if (recoveryEmail === email) {
    recoveryEmailInput.classList.add("border-danger");
    recoveryEmailInput.classList.remove("border-success");
    emailStatus.innerHTML = "Can't be the same as Email";
    return false;
  }

  // Valid
  recoveryEmailInput.classList.add("border-success");
  recoveryEmailInput.classList.remove("border-danger");
  emailStatus.innerHTML = "";
  return true;
}

function validatePassword() {
  const password = document.getElementById("passwordInput").value,
    confirmPassword = document.getElementById("confirmPassword").value;

  const confirmPasswordInput = document.getElementById("confirmPassword");
  const passwordStatus = document.getElementById("passwordStatus");

  if (!password || !confirmPassword) {
    passwordStatus.innerHTML = "";
    confirmPasswordInput.classList.remove("border-danger");
    confirmPasswordInput.classList.remove("border-success");
    return false;
  }

  if (password !== confirmPassword) {
    passwordStatus.innerHTML = "Password mismatch";
    confirmPasswordInput.classList.add("border-danger");
    return false;
  }

  passwordStatus.innerHTML = "";
  confirmPasswordInput.classList.remove("border-danger");
  confirmPasswordInput.classList.add("border-success");
  return true;
}
