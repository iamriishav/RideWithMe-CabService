function validateEmail() {
    var email = document.getElementById("email").value;

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value)) {
        return true;
    }
    else {
        alert("You have entered an invalid email address!")
        return false;
    }
}

function validatePassword() {
    var pass = document.getElementById("password").value;
    var repass = document.getElementById("repeatPassword").value;

    if (pass != repass) {
        alert("Password doesn't match, please enter the same password.");
        return false;
    }
    return true;
}

function signup() {
    if (validateEmail()) {
        return false;
    }
    if (validatePassword()) {
        return false;
    }
    else {
        alert("Account created Successfully");
        return true;
    }

}