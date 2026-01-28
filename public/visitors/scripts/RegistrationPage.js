function validateInputs() {
  const registerBtn = document.getElementById("registerBtn"),
    password = document.getElementById("passwordInput").value,
    confirmPassword = document.getElementById("confirmPassword").value,
    passwordStatus = document.getElementById("passwordStatus");

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
    registerBtn.disabled = true;
  } else {
    if (password !== confirmPassword || password.confirmPassword === "") {
      registerBtn.disabled = true;
      passwordStatus.textContent = "Password Mismatch"; // Separate Password Validation Function
    } else {
      registerBtn.disabled = false;
      passwordStatus.textContent = "";
    }
  }
}

// function validateEmail(){
//   const recoveryEmailInput = document.getElementById("recoveryEmailInput").value,
//                 emailInput = document.getElementById("emailInput").value,
//                 emailValidation = document.getElementById("emailValidation");

//                 if(recoveryEmailInput === emailInput){
//                   emailValidation.textContent = "Can not be the same as Email.";
//                   registerBtn.disabled = true;
//                   console.log("Can not be the same");
//                 } else{
//                    emailValidation.textContent = "same";
//                   registerBtn.disabled = false;
//                   console.log("not the same anymore yay");
//                 }

// }
