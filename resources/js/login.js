// let checkemail = new RegExp("^[\w-.]+@([\w-]+.)+[\w-]{2,4}$");
let checklength = new RegExp("^(?=.{8,20})");
let checkupper = new RegExp("^(?=.*[A-Z])");
let checknum = new RegExp("^(?=.*[0-9])");
let PassWordSignUp = document.querySelector('#Sign-Up > form > input:nth-child(5)');
let RePassWordSignUp = document.querySelector('#Sign-Up > form > input:nth-child(7)');
let PassWordSignIn = document.querySelector('#Sign-In > form > input:nth-child(5)');
let checkbox = document.querySelector('.checklist').getElementsByTagName('li');
//hide password
document.querySelector('#Sign-Up > form > span:nth-child(6)').addEventListener('click', () =>{
    if (PassWordSignUp.type === "password") {
        document.querySelector('#Sign-Up > form > span:nth-child(6) >svg').classList.remove('fa-eye-slash');
        document.querySelector('#Sign-Up > form > span:nth-child(6) >svg').classList.add('fa-eye');
        PassWordSignUp.type = "text";
    } else {
        document.querySelector('#Sign-Up > form > span:nth-child(6) >svg').classList.remove('fa-eye');
        document.querySelector('#Sign-Up > form > span:nth-child(6) >svg').classList.add('fa-eye-slash');
        PassWordSignUp.type = "password";
    }
})
document.querySelector('#Sign-Up > form > span:nth-child(8)').addEventListener('click', () =>{
    if (RePassWordSignUp.type === "password") {
        document.querySelector('#Sign-Up > form > span:nth-child(8) >svg').classList.remove('fa-eye-slash');
        document.querySelector('#Sign-Up > form > span:nth-child(8) >svg').classList.add('fa-eye');
        RePassWordSignUp.type = "text";
    } else {
        document.querySelector('#Sign-Up > form > span:nth-child(8) >svg').classList.remove('fa-eye');
        document.querySelector('#Sign-Up > form > span:nth-child(8) >svg').classList.add('fa-eye-slash');
        RePassWordSignUp.type = "password";
    }
})
document.querySelector('#Sign-In > form > span:nth-child(6)').addEventListener('click', () =>{
    if (PassWordSignIn.type === "password") {
        document.querySelector('#Sign-In > form > span:nth-child(6) >svg').classList.remove('fa-eye-slash');
        document.querySelector('#Sign-In > form > span:nth-child(6) >svg').classList.add('fa-eye');
        PassWordSignIn.type = "text";
    } else {
        document.querySelector('#Sign-In > form > span:nth-child(6) >svg').classList.remove('fa-eye');
        document.querySelector('#Sign-In > form > span:nth-child(6) >svg').classList.add('fa-eye-slash');
        PassWordSignIn.type = "password";
    }
})
//check box
PassWordSignUp.addEventListener('input', () => {
    document.querySelector('#Sign-Up > form > ul').classList.remove('hiden')

    if (checkupper.test(PassWordSignUp.value.trim()) == 1) {
        checkbox[0].classList.add('check');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(1) > svg').classList.remove('fa-x');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(1) > svg').classList.add('fa-check');
    } else {
        checkbox[0].classList.remove('check');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(1) > svg').classList.add('fa-x');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(1) > svg').classList.remove('fa-check');
    }

    if (checknum.test(PassWordSignUp.value.trim()) == 1) {
        checkbox[1].classList.add('check');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(2) > svg').classList.remove('fa-x');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(2) > svg').classList.add('fa-check');
    } else {
        checkbox[1].classList.remove('check');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(2) > svg').classList.add('fa-x');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(2) > svg').classList.remove('fa-check');
    }

    if (checklength.test(PassWordSignUp.value.trim()) == 1) {
        checkbox[2].classList.add('check');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(3) > svg').classList.remove('fa-x');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(3) > svg').classList.add('fa-check');
    } else {
        checkbox[2].classList.remove('check');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(3) > svg').classList.add('fa-x');
        document.querySelector('#Sign-Up > form > ul > li:nth-child(3) > svg').classList.remove('fa-check');
    }
})
//check Re-Pass
RePassWordSignUp.addEventListener('input',()=>{
    RePassWordSignUp.value.trim() == PassWordSignUp.value.trim() ? checkbox[3].classList.add('hiden') : checkbox[3].classList.remove('hiden');
})
//switch siginn signup
let signUpButton = document.getElementById('signUp');
let signInButton = document.getElementById('signIn');
let container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
	document.getElementById('signin').reset();
	document.querySelector('#Sign-In > form > span:nth-child(6) >svg').classList.remove('fa-eye');
    document.querySelector('#Sign-In > form > span:nth-child(6) >svg').classList.add('fa-eye-slash');
	document.querySelector('#Sign-In > form > input:nth-child(5)').type="password";
	document.getElementById('Sign-In').classList.add("fade-out");
	document.getElementById('Sign-In').classList.remove("fade-in");
	document.getElementById('Sign-Up').classList.remove("fade-out");
	document.getElementById('Sign-Up').classList.add("fade-in");
	
});
signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
	document.getElementById('signup').reset();
	document.querySelector('#Sign-Up > form > span:nth-child(8) >svg').classList.remove('fa-eye');
    document.querySelector('#Sign-Up > form > span:nth-child(8) >svg').classList.add('fa-eye-slash');
    document.querySelector('#Sign-Up > form > span:nth-child(6) >svg').classList.remove('fa-eye');
    document.querySelector('#Sign-Up > form > span:nth-child(6) >svg').classList.add('fa-eye-slash');
	document.querySelector('#Sign-Up > form > input:nth-child(7)').type="password"
	document.querySelector('#Sign-Up > form > input:nth-child(5)').type="password"
	document.getElementById('Sign-Up').classList.add("fade-out");
	document.getElementById('Sign-Up').classList.remove("fade-in");
	document.getElementById('Sign-In').classList.remove("fade-out");
	document.getElementById('Sign-In').classList.add("fade-in");
	
})
//remember me
let rmCheck = document.getElementById("checkbox"),
    EmailSignIn = document.querySelector('#Sign-In > form > input:nth-child(4)');
if (localStorage.checkbox && localStorage.checkbox !== "") {
  rmCheck.setAttribute("checked", "checked");
  EmailSignIn.value = localStorage.username;
  PassWordSignIn.value = localStorage.password;
} else {
  rmCheck.removeAttribute("checked");
  EmailSignIn.value = "";
  PassWordSignIn.value = "";
}
document.querySelector('#Sign-In > form > button').onclick = () =>{
    if (rmCheck.checked && EmailSignIn.value !== "") {
        localStorage.username = EmailSignIn.value;
        localStorage.password = PassWordSignIn.value;
        localStorage.checkbox = rmCheck.value;
      } else {
        localStorage.username = "";
        localStorage.password = "";
        localStorage.checkbox = "";
      }
}