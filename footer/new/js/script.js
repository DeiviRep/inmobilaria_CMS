//ACTUANDO AL CARGAR LA PAGINA
const miInputTelf = document.querySelector("#input_telf");
const miInputDerechos = document.querySelector("#input_derechos");
const miInputEmail = document.querySelector("#input_email");
const miInputHorarios = document.querySelector("#input_horarios");
const miInputDireccion = document.querySelector("#input_direccion");
const miParrafoTelf = document.querySelector(".num__telefono");
const miParrafoDerechos = document.querySelector(".num__derechos");
const miParrafoEmail = document.querySelector(".num__email");
const miParrafoHorarios = document.querySelector(".num__horarios");
const miParrafoDireccion = document.querySelector(".num__direccion");

const filtraRedSocial = () => {
  const redSocial = document.querySelectorAll("#redSocial");
  redSocial.forEach((input) => {
    if (input.value.trim() == "vacio") {
      input.value = "";
      input.classList.remove("active");
    }
  });
};
const limitInput = () => {
  console.log("paso1");
  miInputTelf.addEventListener("input", function () {
    console.log("paso2");
    const numCaracteres = this.value.length;
    miParrafoTelf.textContent = numCaracteres + "/13";
  });
  miInputHorarios.addEventListener("input", function () {
    const numCaracteres = this.value.length;
    miParrafoHorarios.textContent = numCaracteres + "/10";
  });
  miInputEmail.addEventListener("input", function () {
    const numCaracteres = this.value.length;
    miParrafoEmail.textContent = numCaracteres + "/35";
  });
  miInputDireccion.addEventListener("input", function () {
    const numCaracteres = this.value.length;
    miParrafoDireccion.textContent = numCaracteres + "/40";
  });
  miInputDerechos.addEventListener("input", function () {
    const numCaracteres = this.value.length;
    miParrafoDerechos.textContent = numCaracteres + "/20";
  });
};
actualizaLimitInput = () => {
  const numCaracteres0 = miInputTelf.value.length;
  miParrafoTelf.textContent = numCaracteres0 + "/13";
  const numCaracteres1 = miInputHorarios.value.length;
  miParrafoHorarios.textContent = numCaracteres1 + "/10";
  const numCaracteres2 = miInputEmail.value.length;
  miParrafoEmail.textContent = numCaracteres2 + "/35";
  const numCaracteres3 = miInputDireccion.value.length;
  miParrafoDireccion.textContent = numCaracteres3 + "/40";
  const numCaracteres4 = miInputDerechos.value.length;
  miParrafoDerechos.textContent = numCaracteres4 + "/20";
};

window.addEventListener("load", function () {
  console.log("Optimisando mi codigo");
  if (window.innerWidth <= 767) {
    // console.log("ESTA RESPONSIVE: " + window.innerWidth);
    const bloque = document.querySelector(".banner_gallery");
    bloque.style.display = `flex`;

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta5").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 312);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta6").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 624);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta7").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 936);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta8").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 1248);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 1560);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta2").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 1872);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta3").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 2184);
    });
    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta4").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 2496);
    });
  } else {
    // console.log("ESTA ANCHO: " + window.innerWidth);
    const bloque = document.querySelector(".banner_gallery");
    bloque.style.display = `flex`;
    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 312);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta2").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 624);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta3").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 936);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta4").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 1248);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta5").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 1560);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta6").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 1872);
    });

    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta7").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 2184);
    });
    $(document).ready(function () {
      setTimeout(function () {
        // Declaramos la capa  mediante una clase para ocultarlo
        $(".texta8").fadeIn(1500);
        // Transcurridos 5 segundos aparecera la capa midiv2
      }, 2496);
    });
  }
  filtraRedSocial();
  actualizaLimitInput();
  limitInput();
});
