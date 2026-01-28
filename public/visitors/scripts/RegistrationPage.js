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

function validateEmail() {
  const recoveryEmailVal = document
      .getElementById("recoveryEmailInput")
      .value.trim(),
    emailInputVal = document.getElementById("emailInput").value.trim();

  const recoveryEmailInput = document.getElementById("recoveryEmailInput");

  if (recoveryEmailVal === "") {
    recoveryEmailInput.classList.remove("border-danger");
    recoveryEmailInput.classList.remove("border-success");
    return false;
  }

  if (recoveryEmailVal === emailInputVal) {
    recoveryEmailInput.classList.remove("border-danger");
    recoveryEmailInput.classList.add("border-success");
    return false;
  }

  if (recoveryEmailVal !== emailInputVal) {
    recoveryEmailInput.classList.add("border-danger");
    recoveryEmailInput.classList.remove("border-success");
  }
}

function validatePassword() {
  const password = document.getElementById("passwordInput").value,
    confirmPasswordInput = document.getElementById("confirmPassword"),
    confirmPassword = document.getElementById("confirmPassword").value;

  if (password === "" || confirmPassword === "") {
    confirmPasswordInput.classList.remove("border-danger");
    confirmPasswordInput.classList.remove("border-success");
    return false;
  }

  if (password !== confirmPassword) {
    confirmPasswordInput.classList.add("border-danger");
    return false;
  }

  confirmPasswordInput.classList.remove("border-danger");
  confirmPasswordInput.classList.add("border-success");
  return true;
}
