
/** Movimiento de los botones superiores*/
document.getElementById("navbar").addEventListener("mouseover", myFunct);
document.getElementById("navbar").addEventListener("mouseout",ratonFuera);

var mnexp = document.getElementById("play-videos");
let boton__pagina_usuario = document.querySelector(".site-card__i");
function myFunct() {
mnexp.classList.add('plvileft');
console.log(boton__pagina_usuario);
boton__pagina_usuario.classList.add("boton__pagina_usuario");

}

function ratonFuera(){
  mnexp.classList.remove('plvileft');
  console.log(boton__pagina_usuario);
  boton__pagina_usuario.classList.remove("boton__pagina_usuario");



}









/* Script para modificar el alert*/


class Modificacion{

  constructor(){
    console.log("funciona?");

    this.elemento = document.querySelector(".mensaje_alert");
    this.Cambiando_texto();

  }

  Cambiando_texto(){


    if(this.elemento.innerHTML.trim() =="Modificacion"){
      let alert_title = document.querySelector(".info-alert .title");
      alert_title.innerHTML="información actualizada";
      let info_alert= document.querySelector(".info-alert");
      let message = document.createElement("div");
      message.classList.add("message");
      message.innerHTML="Los cambios se han publicado con éxito";
      info_alert.appendChild(message);
    }


  }


}


let objeto_modificacion_alert=new Modificacion();



/*Configuracion de Vue*/


Vue.config.devtools = true;

Vue.component("card", {
    template: `
<div class="card-wrap"
  @mousemove="handleMouseMove"
  @mouseenter="handleMouseEnter"
  @mouseleave="handleMouseLeave"
  ref="card">
  <div class="card"
    :style="cardStyle">
    <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>
    <div class="card-info">
      <slot name="header"></slot>
      <slot name="content"></slot>
    </div>
  </div>
</div>`,
    mounted() {
        this.width = this.$refs.card.offsetWidth;
        this.height = this.$refs.card.offsetHeight;
    },
    props: ["dataImage"],
    data: () => ({
        width: 0,
        height: 0,
        mouseX: 0,
        mouseY: 0,
        mouseLeaveDelay: null
    }),

    computed: {
        mousePX() {
            return this.mouseX / this.width;
        },
        mousePY() {
            return this.mouseY / this.height;
        },
        cardStyle() {
            const rX = this.mousePX * 30;
            const rY = this.mousePY * -30;
            return {
                transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
            };
        },
        cardBgTransform() {
            const tX = this.mousePX * -40;
            const tY = this.mousePY * -40;
            return {
                transform: `translateX(${tX}px) translateY(${tY}px)`
            };
        },
        cardBgImage() {
            return {
                backgroundImage: `url(${this.dataImage})`
            };
        }
    },

    methods: {
        handleMouseMove(e) {
            this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
            this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
        },
        handleMouseEnter() {
            clearTimeout(this.mouseLeaveDelay);
        },
        handleMouseLeave() {
            this.mouseLeaveDelay = setTimeout(() => {
                this.mouseX = 0;
                this.mouseY = 0;
            }, 1000);
        }
    }
});

const app = new Vue({
    el: "#app-2"
});




// Este es un script manejado para saber si el contenido de la card es un video o no

  console.log("hola");

  let figuras = document.querySelectorAll(".card__slider");

  figuras.forEach(function(valor){
    let primera_cadena = valor.style.backgroundImage.slice(5, -2);

    let extension = primera_cadena.substr(primera_cadena.length -3 );

    if(extension == "mp4"){

      let video = document.createElement("video");
      video.src= primera_cadena;

      video.classList.add("video__card");
      valor.appendChild(video);




    }



  });


  /// script para cerrar el alert
 	let alert= document.querySelector(".toast-alert");


 	let close2 = document.querySelector(".close-option");
 	close2.addEventListener("click", function(){
 		alert.classList.add("show2");


 	});



 	setTimeout(function(){

 		if(!alert.classList.contains("show2")){
 			alert.classList.add("show2");

 		}

 	}, 7000);
