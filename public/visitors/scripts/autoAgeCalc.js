export function calculateAge() {
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

  window.addEventListener("DOMContentLoaded", () => {
    const registerBtn = document.getElementById("registerBtn"),
      understoodEULAButton = document.getElementById("acceptEULA"),
      eulaCheckBox = document.getElementById("termsCheck");
    registerBtn.disabled = true;
    understoodEULAButton.disabled = true;

    document
      .getElementById("registrationForm")
      .addEventListener("input", () => {
        const isValid =
          validateInputs() && validateEmail() && validatePassword();
        registerBtn.disabled = !isValid;

        if (eulaCheckBox.checked) {
          understoodEULAButton.disabled = false;
        } else {
          understoodEULAButton.disabled = true;
        }
      });
  });
}
