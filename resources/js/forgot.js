// mouse location

document.addEventListener("DOMContentLoaded", function (event) {
	function OTPInput() {
		const inputs = document.querySelectorAll('#otp > *[id]');
		for (let i = 0; i < inputs.length; i++){
			inputs[i].addEventListener('keydown', function (event){
				if (event.keyCode === 8 || event.keyCode === 46){
					inputs[i].value = '';
					if(i !== 0) inputs[i - 1].focus();
				}else{
					if (i ===  inputs.length - 1 && inputs[i].value != ''){
						return true;
					}else if((event.which > 47 && event.which < 58)||(event.which > 95 && event.which < 106)|| (event.keyCode >= 65 && event.keyCode <= 90)){
						inputs[i].value = event.key;
						if(i != inputs.length - 1) inputs[i + 1].focus(); event.preventDefault();
					}
				}
			});
		}
	} OTPInput();
});
//hide password
let checklength = new RegExp("^(?=.{8,20})");
let checkupper = new RegExp("^(?=.*[A-Z])");
let checknum = new RegExp("^(?=.*[0-9])");
let PassWordSignUp = document.querySelector('#reset  > form > input:nth-child(1)');
let RePassWordSignUp = document.querySelector('#reset  > form > input:nth-child(3)');
let checkbox = document.querySelector('.checklist').getElementsByTagName('li');
document.querySelector('#reset  > form > span:nth-child(2)').addEventListener('click', () =>{
    if (PassWordSignUp.type === "password") {
        document.querySelector('#reset  > form > span:nth-child(2) > i').classList.remove('fa-eye-slash');
        document.querySelector('#reset  > form > span:nth-child(2) > i').classList.add('fa-eye');
        PassWordSignUp.type = "text";
    } else {
        document.querySelector('#reset  > form > span:nth-child(2) > i').classList.remove('fa-eye');
        document.querySelector('#reset  > form > span:nth-child(2) > i').classList.add('fa-eye-slash');
        PassWordSignUp.type = "password";
    }
})
document.querySelector('#reset  > form > span:nth-child(4)').addEventListener('click', () =>{
    if (RePassWordSignUp.type === "password") {
        document.querySelector('#reset  > form > span:nth-child(4) > i').classList.remove('fa-eye-slash');
        document.querySelector('#reset  > form > span:nth-child(4) > i').classList.add('fa-eye');
        RePassWordSignUp.type = "text";
    } else {
        document.querySelector('#reset  > form > span:nth-child(4) > i').classList.remove('fa-eye');
        document.querySelector('#reset  > form > span:nth-child(4) > i').classList.add('fa-eye-slash');
        RePassWordSignUp.type = "password";
    }
})
//check box
PassWordSignUp.addEventListener('input', () => {
    document.querySelector('#reset  > form > ul').classList.remove('hiden')

    if (checkupper.test(PassWordSignUp.value.trim()) == 1) {
        checkbox[0].classList.add('check');
        document.querySelector('#reset  > form > ul > li:nth-child(1) >  i').classList.remove('fa-x');
        document.querySelector('#reset  > form > ul > li:nth-child(1) >  i').classList.add('fa-check');
    } else {
        checkbox[0].classList.remove('check');
        document.querySelector('#reset  > form > ul > li:nth-child(1) >  i').classList.add('fa-x');
        document.querySelector('#reset  > form > ul > li:nth-child(1) >  i').classList.remove('fa-check');
    }

    if (checknum.test(PassWordSignUp.value.trim()) == 1) {
        checkbox[1].classList.add('check');
        document.querySelector('#reset  > form > ul > li:nth-child(2) >  i').classList.remove('fa-x');
        document.querySelector('#reset  > form > ul > li:nth-child(2) >  i').classList.add('fa-check');
    } else {
        checkbox[1].classList.remove('check');
        document.querySelector('#reset  > form > ul > li:nth-child(2) >  i').classList.add('fa-x');
        document.querySelector('#reset  > form > ul > li:nth-child(2) >  i').classList.remove('fa-check');
    }

    if (checklength.test(PassWordSignUp.value.trim()) == 1) {
        checkbox[2].classList.add('check');
        document.querySelector('#reset  > form > ul > li:nth-child(3) >  i').classList.remove('fa-x');
        document.querySelector('#reset  > form > ul > li:nth-child(3) >  i').classList.add('fa-check');
    } else {
        checkbox[2].classList.remove('check');
        document.querySelector('#reset  > form > ul > li:nth-child(3) >  i').classList.add('fa-x');
        document.querySelector('#reset  > form > ul > li:nth-child(3) >  i').classList.remove('fa-check');
    }
})
//check Re-Pass
RePassWordSignUp.addEventListener('input',()=>{
    RePassWordSignUp.value.trim() == PassWordSignUp.value.trim() ? checkbox[3].classList.add('hiden') : checkbox[3].classList.remove('hiden');
})