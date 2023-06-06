/* ---------- Img Cargado ---------- */
/* CARGANDO IMAGEN LOGO 1B */

const logo1b = document.querySelector("#general-input-file-1b");
const imagelogo1b = document.querySelector("#imagelogo1b");

const logo3_1b = document.querySelector('.picker-image-1-1b');
const logo4_1b = document.querySelector('.picker-image-2-1b');
if(logo1b !== null){
	logo1b.addEventListener("change", () => {
		const archivos = logo1b.files;
		const primerArchivo = archivos[0];
		const objectURL = URL.createObjectURL(primerArchivo);
		imagelogo1b.src = objectURL;
		imagelogo1b.classList.add('previmg');
		if (!archivos || !archivos.length) {
			imagelogo1b.src = "";
			return;
		}
		else {
			logo3_1b.classList.add('ocultimg');
			logo4_1b.classList.add('ocultimg');
		}
	});
	if(imagelogo1b.src !== ""){
		logo3_1b.classList.add('ocultimg');
		logo4_1b.classList.add('ocultimg');
	}
}

/* CARGANDO IMAGEN LOGO 2N */

const logo2n = document.querySelector("#general-input-file-2n");
const imagelogo2n = document.querySelector("#imagelogo2n");

const logo3_2n = document.querySelector('.picker-image-1-2n');
const logo4_2n = document.querySelector('.picker-image-2-2n');
if(logo2n !== null){
	logo2n.addEventListener("change", () => {
		const archivos = logo2n.files;
		const primerArchivo = archivos[0];
		const objectURL = URL.createObjectURL(primerArchivo);
		imagelogo2n.src = objectURL;
		imagelogo2n.classList.add('previmg');
		if (!archivos || !archivos.length) {
			imagelogo2n.src = "";
			return;
		}
		else {
			logo3_2n.classList.add('ocultimg');
			logo4_2n.classList.add('ocultimg');
		}
	});
	if(imagelogo2n.src !== ""){
		logo3_2n.classList.add('ocultimg');
		logo4_2n.classList.add('ocultimg');
	}
}

/* CARGANDO IMAGEN ICONO */

const logoicon = document.querySelector("#general-input-file-icon");
const imagelogoicon = document.querySelector("#imageicon");

const logo3_icon = document.querySelector('.picker-image-1-icon');
const logo4_icon = document.querySelector('.picker-image-2-icon');
if(logoicon !== null){
	logoicon.addEventListener("change", () => {
		const archivos = logoicon.files;
		const primerArchivo = archivos[0];
		const objectURL = URL.createObjectURL(primerArchivo);
		imagelogoicon.src = objectURL;
		imagelogoicon.classList.add('previmg');
		if (!archivos || !archivos.length) {
			imagelogoicon.src = "";
			return;
		}
		else {
			logo3_icon.classList.add('ocultimg');
			logo4_icon.classList.add('ocultimg');
		}
	});
	if(imagelogoicon.src !== ""){
		logo3_icon.classList.add('ocultimg');
		logo4_icon.classList.add('ocultimg');
	}
}

/* LIMITADOR DE TEXTAREA */
let myText = document.querySelector("#my-text-mapa");
let result = document.querySelector("#result-mapa");
let limit = 500;
if(myText !== null){
	if(myText.value.length > 0){
		result.textContent = myText.value.length + "/" + limit;
	}else{
		result.textContent = 0 + "/" + limit;
	}
	myText.addEventListener("input", function() {
		let textLength = myText.value.length;
		result.textContent = textLength + "/" + limit;
		if(textLength > limit){
			myText.classList.add('error-field');
			result.classList.add('error-p');
		}else{
			myText.classList.remove('error-field');
			result.classList.remove('error-p');
		}
	})
}

/* LIMITADOR DE TITULO */
let myTitle = document.querySelector("#general-tab-title");
let result_title = document.querySelector("#result-titulo");
let limit_title = 20;
if(myTitle !== null){
	if(myTitle.value.length > 0){
		result_title.textContent = myTitle.value.length + "/" + limit_title;
	}else{
		result_title.textContent = 0 + "/" + limit_title;
	}
	myTitle.addEventListener("input", function() {
		let textLength = myTitle.value.length;
		result_title.textContent = textLength + "/" + limit_title;
		if(textLength > limit_title){
			myTitle.classList.add('error-field');
			result_title.classList.add('error-p');
		}else{
			myTitle.classList.remove('error-field');
			result_title.classList.remove('error-p');
		}
	})
}

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
