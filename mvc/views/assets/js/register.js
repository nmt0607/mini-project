let fname = document.getElementById("name");
let femail = document.getElementById("email");
let fpass = document.getElementById("password");
let frepass = document.getElementById("re_password");
let fage = document.getElementById("age");

fname.addEventListener("blur", valiName);
frepass.addEventListener("blur", valiRePass);
fpass.addEventListener("blur", valiPass);


function valiName() {
    let name = fname.value;
    if (name == "") {
        document.getElementById("mess_name").innerHTML = "Name is required "
    } else if (name.length < 6) {
        document.getElementById("mess_name").innerHTML = "Please lengthen this text to 6 characters or more "
    } else{
        document.getElementById("mess_name").innerHTML = ""
    }
}
function valiPass(){
    let password = fpass.value;
    if(password.length<6){
        document.getElementById("mess_pass").innerHTML= "Please lengthen this text to 6 characters or more "
    } else {
        document.getElementById("mess_pass").innerHTML= ""

    }
}
function valiRePass() {
    let password = fpass.value;
    let rePassword = frepass.value;
    console.log(password);
    console.log(rePassword)
    if (password !== rePassword) {
        document.getElementById("confirm_password").innerHTML = "Not matching password !"
    } else{
        document.getElementById("confirm_password").innerHTML = ""

    }
}