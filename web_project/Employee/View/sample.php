<html>

<head>
    <title>VISA PROCESSING</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="../Controller/visaprocessingCheck.php" enctype="">
        <pre>
    NAME: <input type="text" name="name" value="" onkeyup="N()" />
    <span id="nameError"></span><br>

    EMAIL: <input type="email" name="email" value="" onkeyup="E()" />
    <span id="emailError"></span><br>

    PHONE: <input type="number" name="number" value="" onkeyup="P()" />
    <span id="phoneError"></span><br>

    NID: <input type="number" name="number" value="" onkeyup="Ni()" />
    <span id="nidError"></span><br>

    PASSPORT: <input type="number" name="number" value="" onkeyup="PA()" />
    <span id="passportError"></span><br>
    </pre>

        <input type="button" name="submit" value="Submit">




    </form>
    <script>
        function N() {
            var nameInput = document.getElementsByName("name")[0];
            var nameValue = nameInput.value.trim();
            var nameError = document.getElementById("nameError");

            if (nameValue.length < 2) {
                nameInput.classList.add("error");
                nameError.innerText = "Name must be at least 2 characters";
            } else {
                nameInput.classList.remove("error");
                nameError.innerText = "";
            }
        }

        function E() {
            var emailInput = document.getElementsByName("email")[0];
            var emailValue = emailInput.value.trim();
            var emailError = document.getElementById("emailError");

            if (emailValue === "") {
                emailInput.classList.add("error");
                emailError.innerText = "Email is required";
            } else if (.test(emailValue)) {
                emailInput.classList.add("error");
                emailError.innerText = "Invalid email format";
            } else {
                emailInput.classList.remove("error");
                emailError.innerText = "";
            }
        }

        function P() {
            var phoneInput = document.getElementsByName("number")[1];
            var phoneValue = phoneInput.value.trim();
            var phoneError = document.getElementById("phoneError");

            if (phoneValue.length < 10 || phoneValue.length > 15) {
                phoneInput.classList.add("error");
                phoneError.innerText = "Phone number must be between 10-15 digits";
            } else {
                phoneInput.classList.remove("error");
                phoneError.innerText = "";
            }
        }

        function PA() {
            var passportInput = document.getElementsByName("number")[2];
            var passportValue = passportInput.value.trim();
            var passportError = document.getElementById("passportError");

            if (passportValue.length < 6 || passportValue.length > 10) {
                passportInput.classList.add("error");
                passportError.innerText = "Passport number must be between 6-10 digits";
            } else {
                passportInput.classList.remove("error");
                passportError.innerText = "";
            }
        }

        function N() {
            validateName();
        }

        function E() {
            validateEmail();
        }

        function P() {
            validatePhone();
        }

        function Ni() {
            validateNID();
        }

        function PA() {
            validatePassport();
        }

    </script>

</body>

</html>