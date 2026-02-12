<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="input-group d-flex align-items-center justify-content-center"
        id="registrationForm">

        <h1 class="lead display-5 mb-5 w-100 text-dark" style="border-bottom:1px solid green">
            Personal Information
        </h1>

        <div class="row g-3">
            <div class="col-md-3">
                <label for="firstNameInput" class="lead text-dark">First Name</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="firstNameInput" name="firstName" required autocomplete="off">
            </div>

            <div class="col-md-3">
                <label for="lastNameInput" class="lead text-dark">Last Name</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="lastNameInput" name="lastName" required autocomplete="off">
            </div>

            <div class="col-md-3">
                <label for="middleNameInput" class="lead text-dark">Middle Name</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="middleNameInput" name="middleName" required autocomplete="off">
            </div>

            <div class="col-md-2 col-5 ms-md-auto">
                <label for="extensionName" class="lead text-dark">Extention Name</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="extensionName" name="exName" autocomplete="off">
            </div>

            <div class="col-md-4">
                <label for="birthdateInput" class="lead text-dark">Date of Birth</label>
                <input type="date" class="form-control form-control-sm text-dark border-1"
                    id="birthdateInput" name="birthDate" required autocomplete="off">
            </div>

            <div class="col-md-1 col-3 mx-md-auto">
                <label for="ageInput" class="lead text-dark">Age</label>
                <input type="text" class="form-control form-control-sm text-dark text-center border-1"
                    id="ageInput" name="age" readonly autocomplete="off">
            </div>

            <div class="col-md-2 col-4 mx-md-auto">
                <label for="nationalityInput" class="lead text-dark">Nationality</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="nationalityInput" name="nationality" required autocomplete="off">
            </div>

            <div class="col-md-2 col-6">
                <label for="civilStatusInput" class="lead text-dark">Civil Status</label>
                <select class="form-select form-select-sm text-dark border-1"
                    id="civilStatusInput" name="civilStatus" required>
                    <option value="" disabled selected>Select Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="widow">Widow</option>
                    <option value="separated">Separated</option>
                </select>
            </div>

            <div class="col-md-2 col-6 ms-auto">
                <label for="genderInput" class="lead text-dark">Gender</label>
                <select class="form-select form-select-sm text-dark border-1"
                    id="genderInput" name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Prefer not to say</option>
                </select>
            </div>

            <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                Contact Information
            </h1>

            <div class="col-md-4 col-9">
                <label for="emailInput" class="lead text-dark">Email</label>
                <input type="email" class="form-control form-control-sm text-dark border-1"
                    id="emailInput" name="email" oninput="validateEmail()" required autocomplete="off">
            </div>

            <div class="col-md-4 col-6">
                <label for="phoneNumberInput" class="lead text-dark">Phone Number</label>
                <input type="tel" class="form-control form-control-sm text-dark border-1"
                    id="phoneNumberInput" name="phoneNumber" required autocomplete="off">
            </div>

            <div class="col-md-4">
                <label for="addressInput" class="lead text-dark">Address / House Number</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="addressInput" name="address" required autocomplete="off">
            </div>

            <div class="col-md-4">
                <label for="addressInput" class="lead text-dark">Barangay</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="barangayInput" name="barangayInput" required autocomplete="off">
            </div>

            <div class="col-md-4 col-6">
                <label for="cityInput" class="lead text-dark">City / District</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="cityInput" name="city" required autocomplete="off">
            </div>

            <div class="col-md-3 col-6">
                <label for="provinceInput" class="lead text-dark">Province</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="provinceInput" name="province" required autocomplete="off">
            </div>

            <div class="col-md-1 col-3 mx-md-auto">
                <label for="zipcodeInput" class="lead text-dark">Zip Code</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="zipcodeInput" name="zipCode" required autocomplete="off">
            </div>

            <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                Academic Information
            </h1>

            <div class="col-md-3 col-6">
                <label for="programInput" class="lead text-dark">Program</label>
                <select class="form-select form-select-sm text-dark border-1"
                    id="programInput" name="program" required>
                    <option value="" disabled selected>Select Program</option>
                    <option value="education">Education</option>
                    <option value="accounting">Accounting</option>
                    <option value="computer_science">Computer Science</option>
                    <option value="business_management">Business Management</option>
                </select>
            </div>

            <div class="col-md-3 col-6">
                <label for="yearLevelInput" class="lead text-dark">Year Level</label>
                <select class="form-select form-select-sm text-dark border-1"
                    id="yearLevelInput" name="yearLevel" required>
                    <option value="" disabled selected>Select Year Level</option>
                    <option value="1stYear">1st Year</option>
                    <option value="2ndYear">2nd Year</option>
                    <option value="3rdYear">3rd Year</option>
                    <option value="4thYear">4th Year</option>
                </select>
            </div>

            <div class="col-md-3 col-6">
                <label for="studentType" class="lead text-dark">Student Type</label>
                <select class="form-select form-select-sm text-dark border-1"
                    id="studentType" name="studentType" required>
                    <option value="" disabled selected>Select Student Type</option>
                    <option value="newStudent">New Student</option>
                    <option value="returnee">Returnee</option>
                    <option value="transferee">Transferee</option>
                </select>
            </div>

            <div class="col-md-3 col-6">
                <label for="enrollmentType" class="lead text-dark">Enrollment Type</label>
                <select class="form-select form-select-sm text-dark border-1"
                    id="enrollmentType" name="enrollmentType" required>
                    <option value="" disabled selected>Select Enrollment Type</option>
                    <option value="regular">Regular</option>
                    <option value="irregular">Irregular</option>
                </select>
            </div>

            <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                Emergency Contact
            </h1>

            <div class="col-md-4">
                <label for="guardianInput" class="lead text-dark">Guardian</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="guardianInput" name="guardianName" required autocomplete="off">
            </div>

            <div class="col-md-4">
                <label for="relationshipInput" class="lead text-dark">Relationship</label>
                <select class="form-select form-select-sm text-dark border-1"
                    id="relationshipInput" name="relationship" required>
                    <option value="" disabled selected>Select relationship</option>
                    <option value="Mother">Mother</option>
                    <option value="Father">Father</option>
                    <option value="Guardian">Guardian</option>
                    <option value="StepMother">Step Mother</option>
                    <option value="StepFather">Step Father</option>
                    <option value="Grandparent">Grandparent</option>
                    <option value="Sibling">Sibling</option>
                    <option value="AuntUncle">Aunt / Uncle</option>
                    <option value="FosterParent">Foster Parent</option>
                    <option value="Other">Other</option>
                </select>

            </div>

            <div class="col-md-4">
                <label for="guardianphoneInput" class="lead text-dark">Guardian&#39;s Contact Number</label>
                <input type="tel" class="form-control form-control-sm text-dark border-1"
                    id="guardianphoneInput" name="guardianPhone" required autocomplete="off">
            </div>

            <div class="col-md-4">
                <label for="guardianmailInput" class="lead text-dark">Guardian&#39;s Email</label>
                <input type="email" class="form-control form-control-sm text-dark border-1"
                    id="guardianmailInput" name="guardianEmail" required autocomplete="off">
            </div>

            <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                Account Information
            </h1>

            <div class="col-md-4">
                <label for="guardianInput" class="lead text-dark">Account Username</label>
                <input type="text" class="form-control form-control-sm text-dark border-1"
                    id="accountUsernameInput" name="accountUsername" required autocomplete="off">
            </div>

            <div class="col-md-4">
                <label for="guardianInput" class="lead text-dark">Password</label>
                <input type="password" class="form-control form-control-sm text-dark border-1"
                    id="passwordInput" name="password" oninput="validatePassword()" required autocomplete="off">
            </div>

            <div class="col-md-4">
                <label for="guardianInput" class="lead text-dark">Confirm Password</label>
                <input type="password" class="form-control form-control-sm text-dark border-1"
                    id="confirmPassword" name="confirmPassword" oninput="validatePassword()" required autocomplete="off">
                <span id="passwordStatus" class="text-danger" style="font-size: 13px;"></span>
                <br>
            </div>

            <div class="col-md-4">
                <label for="guardianInput" class="lead text-dark">Recovery Email </label>
                <input type="email" class="form-control form-control-sm text-dark border-1"
                    id="recoveryEmailInput" name="recoveryInput" oninput="validateEmail()" required autocomplete="off">
                <span id="emailStatus" class="text-danger" style="font-size: 13px;"></span>
                <br>
            </div>

        </div>

        <!-- EULA MODAL -->
        <div class="modal fade" id="eulaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
                <div class="modal-content bg-light text-dark">

                    <div class="modal-header">
                        <h1 class="modal-title display-5" id="staticBackdropLabel">Terms and Conditions</h1>
                        <button type="button" class="btn-close bg-light me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        By using this online registration system, you agree to the following terms and conditions.

                        This system is provided by the college for the purpose of student application, enrollment, and academic administration. You confirm that all information you submit is true, accurate, and complete. Submission of false, inaccurate, or misleading information may result in denial of registration, cancellation of enrollment, or other actions in accordance with college rules and policies.
                        <br><br>
                        Submission of this form does not guarantee admission, enrollment, or placement in any course or program. All registrations are subject to review, academic requirements, availability of slots, and institutional approval.
                        <br><br>
                        You authorize the college to collect, store, and process your personal information for academic, administrative, and legal purposes, including enrollment processing, student records management, communication, and compliance with applicable laws. Your information will be handled in accordance with the college&#39;s Privacy Policy and applicable data protection regulations.
                        <br><br>
                        You agree to use this system only for lawful and authorized purposes. Any attempt to gain unauthorized access, disrupt system operations, or misuse this platform may result in disciplinary action and may be subject to legal consequences.
                        <br><br>
                        By checking the box below and clicking “Understood,” you acknowledge that you have read, understood, and agree to these Terms and Conditions and the Privacy Policy, and that you are legally authorized to submit this registration.
                    </div>

                    <div class="mt-5 mx-3 d-flex align-items-center justify-content-center fs-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termsCheck" required>
                            <p class="form-check-label">
                                I agree to the
                                <a class="text-success">Terms and Conditions</a>
                                and
                                <a class="text-success">Privacy Policy</a>
                            </p>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="acceptEULA">Understood</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-grid gap-2 d-flex justify-content-md-end mt-5 ms-auto">
            <button type="button" class="btn btn-outline-success"
                onclick="window.location.href='Landing Page.php'">
                Cancel
            </button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#eulaModal" id="registerBtn">
                Register
            </button>
        </div>


    </form>
</body>

</html>