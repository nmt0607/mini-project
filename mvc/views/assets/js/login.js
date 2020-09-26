let femail = document.getElementById("email");
let fpass = document.getElementById("password");
let fshow = document.getElementById("show");

fshow.addEventListener("click", show);
fpass.addEventListener("blur", valiPass);
femail.addEventListener("blur", valiEmail);


function valiPass() {
    let password = fpass.value;
    if (password === "") {
        document.getElementById("mess_pass").innerHTML = "Password is required"
    }
    else if (password.length < 6) {
        document.getElementById("mess_pass").innerHTML = "Please lengthen this text to 6 characters or more "
    } else {
        document.getElementById("mess_pass").innerHTML = ""

    }
}
function valiEmail() {
    let email = femail.value;
    if (email == "") {
        document.getElementById("mess_email").innerHTML = "Email is required"
    }
    else {
        document.getElementById("mess_email").innerHTML = ""

    }
}
function show() {
    let x = fpass.type;
    if (x == "text") {
        fpass.setAttribute("type", "password");
    } else {
        fpass.setAttribute("type", "text");
    }
}
