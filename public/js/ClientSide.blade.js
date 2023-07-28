let username = document.getElementById("username");
let fullName = document.getElementById("fullName");
let birthDate = document.getElementById("birthdate");
let address = document.getElementById("address");
let phone = document.getElementById("phonenumber");
//let image = document.getElementById("userImage");
let email = document.getElementById("email");
let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirmPassword");
//const img = document.querySelector(".img");
function validateForm() {
    //img.querySelectorAll("p").forEach((el) => el.remove());
    //form.querySelectorAll("p").forEach((el) => el.remove());
    if (
        username.value === "" ||
        fullName.value === "" ||
        birthDate.value === "" ||
        address.value === "" ||
        phone.value === "" ||
        email.value === "" ||
        password.value === "" ||
        confirmPassword.value === ""
    ) {
        alert("Please fill all fields...!!!!!!");
        return false;
    }
    if (password.value != confirmPassword.value) {
        alert("Password did not match with confirm password...!!!!!!");
        return false;
    }
    if (password.value.length < 8) {
        alert("Password should be at least 8 character in length...!!!!!!");
        return false;
    }
    let regex = /^(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{8,}$/;
    if (!password.value.match(regex)) {
        alert(
            "Password should contain at least one special character and one number...!!!!!!"
        );
        return false;
    }
    return true;
}
