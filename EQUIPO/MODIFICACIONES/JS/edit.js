let inputs = document.querySelectorAll(".inpute");
console.log(inputs);

let labels = document.querySelectorAll(".bel");

labels.forEach(function(valor){


  valor.classList.remove("bel");
  valor.classList.add("label__activado");



});





inputs.forEach(function(valor){












  valor.addEventListener("change", function(evento){

    let texto = evento.target.value;
    let label = evento.target.nextSibling.nextElementSibling;

    if(texto != ""){



      if(!label.classList.contains("label__activado")){
        label.classList.remove("bel");

        label.classList.add("label__activado");
      }

    } else {

                     if(label.classList.contains("label__activado")){
                       label.classList.remove("label__activado");
                       label.classList.add("bel");

                     }
    }







  });




});





/* script que permite colocar el preview si la card seleccionada es un video, y tambien
es capaz de crear una miniatura de los nuevos videos que el usuario pueda seleccionar
*/

 let valor_previsualizado = document.querySelector("#imagenPrevisualizacion");
 let label = document.querySelector(".label");
 let input = document.querySelector("#input-file");

 let extension = valor_previsualizado.src.substr(valor_previsualizado.src.length -3);
 /////
 if(extension=="mp4"){
   let video = document.createElement("video");
   video.src=valor_previsualizado.src;
   video.classList.add("video__card");
   label.appendChild(video);
   valor_previsualizado.style.display="none";


 }


 input.addEventListener("change" , function(){
   let extension = this.files[0].name.substr(this.files[0].name.length - 3);
   if(extension== "mp4"){
     let imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");
     imagenPrevisualizacion.style.display="none";


     let video_verificacion = document.querySelector(".video__card");
     if(video_verificacion){
       video_verificacion.style.display="block";
       video_verificacion.src = URL.createObjectURL(this.files[0]);
     } else {

       let video = document.createElement("video");
       video.crossOrigin = "anonymous"
       video.classList.add("video__card");
       video.src = URL.createObjectURL(this.files[0]);

      label.appendChild(video);

     }

   } else {
     let imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

     imagenPrevisualizacion.style.display="block";

     let video_verificacion = document.querySelector(".video__card");
     if(video_verificacion){

       video_verificacion.style.display="none";

     }


   }

    let video = document.createElement("video");

 });









 const $seleccionArchivos = document.querySelector("#input-file"),
 $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

 const logo3 = document.querySelector('.logo3');
 const logo4 = document.querySelector('.logo4');

 $seleccionArchivos.addEventListener("change", () => {
 const archivos = $seleccionArchivos.files;
 const primerArchivo = archivos[0];
 const objectURL = URL.createObjectURL(primerArchivo);
 $imagenPrevisualizacion.src = objectURL;
 $imagenPrevisualizacion.classList.add('previmg');

 if (!archivos || !archivos.length) {
 $imagenPrevisualizacion.src = "";
 return;
 }
 else {
  logo3.classList.add('ocultimg');
  logo4.classList.add('ocultimg');
    }
 });

 const $imp = document.querySelector("#imp").value;
 const $xm = document.querySelector("#xm");


 imp.addEventListener("change", () => {
 const archivosx = $imp.length;

 if (archivosx == 0) {
 xm.classList.add('perm');
 imp.classList.add('marc');
 return;
 }
 else {
  xm.classList.add('perm');
  imp.classList.add('marc');
    }

 });
