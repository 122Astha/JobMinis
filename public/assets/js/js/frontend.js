// js on sign up page

const signup = document.getElementById("signup");
const username = document.getElementById("username");
const accountType = document.getElementById("accountType");
const signUpBtn = document.getElementById("signUpbtn");
const usernameBtn = document.getElementById("usernameBtn");
const skillSelect = document.getElementById("skillSelect");
const signupDetail = document.getElementById("signupDetail");
const backToSign = document.getElementById("backToSign");
const backToUsername = document.getElementById("backToUsername");
const backToAccount = document.getElementById("backToAccount");
if(document.location.href.indexOf("signup")> 0) {
    signupDetail.style.display = "none"
    signup.style.display = "block";
    
    username.style.display = "none";
    accountType.style.display = "none";
    skillSelect.style.display = "none";
}
if(document.location.href.indexOf("accountType")> 0) {
    signupDetail.style.display = "block"
    signup.style.display = "none";
    skillSelect.style.display = "none";
    username.style.display = "none";
    accountType.style.display = "block";
}
if(document.location.href.indexOf("username")> 0) {
    signupDetail.style.display = "block"
    signup.style.display = "none";
    skillSelect.style.display = "none";
    username.style.display = "block";
    accountType.style.display = "none";
}
if(document.location.href.indexOf("skillSelect")> 0) {
    signupDetail.style.display = "block"
    signup.style.display = "none";
    skillSelect.style.display = "block";
    username.style.display = "none";
    accountType.style.display = "none";
}

function BackSign() {
    signupDetail.style.display = "none"
    signup.style.display = "block";
    
    username.style.display = "none";
    accountType.style.display = "none";
}
function BackUsername() {
    signupDetail.style.display = "block"
    signup.style.display = "none";
    
    username.style.display = "block";
    accountType.style.display = "none";
}
function BackAccount() {
    signupDetail.style.display = "block"
    signup.style.display = "none";
    
    username.style.display = "block";
    accountType.style.display = "none";
}