// mouse location
document.addEventListener("DOMContentLoaded", function (event) {
	function OTPInput() {
		const inputs = document.querySelectorAll('#otp > *[id]');
		for (let i = 0; i < inputs.length; i++){
			inputs[i].addEventListener('keydown', function (event){
				if (event.key === "Backspace"){
					inputs[i].value = '';
					if(i !== 0) inputs[i - 1].focus();
				}else{
					if (i ==  inputs.length - 1 && inputs[i].value != ''){
						return true;
					}else if((event.which > 47 && event.which < 58)||(event.which > 95 && event.which < 106)){
						inputs[i].value = event.key;
						if(i != inputs.length - 1) inputs[i + 1].focus(); event.preventDefault();
					}
				}
			});
		}
	} OTPInput();
});
//
