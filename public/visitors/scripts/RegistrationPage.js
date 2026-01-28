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
  const recoveryEmailInput = document
    .getElementById("recoveryEmailInput")
    .value.trim();
  const emailInput = document.getElementById("emailInput").value.trim();
  const emailStatus = document.getElementById("emailStatus");

  if (recoveryEmailInput === "") {
    emailStatus.textContent = "";
    return false;
  }

  if (recoveryEmailInput === emailInput) {
    emailStatus.textContent = "Cannot be the same as Initial Email";
    return false;
  }

  emailStatus.textContent = "";
  return true;
}

function validatePassword() {
  const password = document.getElementById("passwordInput").value,
    confirmPassword = document.getElementById("confirmPassword").value,
    passwordStatus = document.getElementById("passwordStatus");

  if (password === "" || confirmPassword === "") {
    passwordStatus.textContent = "";
    return false;
  }

  if (password !== confirmPassword) {
    passwordStatus.textContent = "Password mismatch";
    return false;
  }

  passwordStatus.textContent = "Confirmed";
  return true;
}
