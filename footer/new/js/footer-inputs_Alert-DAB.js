// /* LIMITADOR DE TEXTAREA */
// let myText = document.querySelector("#my-text-mapa");
// let result = document.querySelector("#result-mapa");
// let limit = 500;
// if(myText !== null){
// 	if(myText.value.length > 0){
// 		result.textContent = myText.value.length + "/" + limit;
// 	}else{
// 		result.textContent = 0 + "/" + limit;
// 	}
// 	myText.addEventListener("input", function() {
// 		let textLength = myText.value.length;
// 		result.textContent = textLength + "/" + limit;
// 		if(textLength > limit){
// 			myText.classList.add('error-field');
// 			result.classList.add('error-p');
// 		}else{
// 			myText.classList.remove('error-field');
// 			result.classList.remove('error-p');
// 		}
// 	})
// }

// /* LIMITADOR DE TITULO */
// let myTitle = document.querySelector("#general-tab-title");
// let result_title = document.querySelector("#result-titulo");
// let limit_title = 20;
// if(myTitle !== null){
// 	if(myTitle.value.length > 0){
// 		result_title.textContent = myTitle.value.length + "/" + limit_title;
// 	}else{
// 		result_title.textContent = 0 + "/" + limit_title;
// 	}
// 	myTitle.addEventListener("input", function() {
// 		let textLength = myTitle.value.length;
// 		result_title.textContent = textLength + "/" + limit_title;
// 		if(textLength > limit_title){
// 			myTitle.classList.add('error-field');
// 			result_title.classList.add('error-p');
// 		}else{
// 			myTitle.classList.remove('error-field');
// 			result_title.classList.remove('error-p');
// 		}
// 	})
// }

/* ACTIVADOR INPUTS */
const inputs = document.querySelectorAll('.input__field');
toggle_btn = document.querySelectorAll('.toggle');

inputs.forEach((input) => {
	if(input.value != ''){
		input.classList.add('active');
	}
	input.addEventListener('focus', () => {
		input.classList.add('active');
	});
	input.addEventListener('blur', () => {
	if (input.value != '') return;
		input.classList.remove('active');
	});
});

/* ALERTA FORMULARIO */
let x = document.querySelector(".toast-alert");

setTimeout(function(){
	window.onload = x.classList.add('ocultar-alert');
}, 6000);

document.getElementById("close-alert-button").onclick = function() {myFunction3()};
function myFunction3() {
	setTimeout(function(){
	x.classList.add('ocultar-alert');
	}, 500);
}
