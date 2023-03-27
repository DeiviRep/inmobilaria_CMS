//ACTUANDO AL ANCHEAR LA PAGINA
// window.addEventListener("resize", function () {
// 	console.log("CONDICION");
// 	if (window.innerWidth <= 767) {
// 	  console.log("ESTA RESPONSIVE: " + window.innerWidth);
// 	  $(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".banner_gallery").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},0);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta5").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},312);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta6").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},624);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta7").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},936);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta8").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},1248);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},1560);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta2").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},1872);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta3").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},2184);
// 	});
// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta4").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},2496);
// 	});
// 	} else {
// 	  console.log("ESTA ANCHO: " + window.innerWidth);
// 	  $(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".banner_gallery").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},0);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},312);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta2").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},624);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta3").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},936);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta4").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},1248);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta5").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},1560);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta6").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},1872);
// 	});

// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta7").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},2184);
// 	});
// 	$(document).ready(function() {
// 		setTimeout(function() {
// 			// Declaramos la capa  mediante una clase para ocultarlo
// 			$(".texta8").fadeIn(1500);
// 			// Transcurridos 5 segundos aparecera la capa midiv2
// 		},2496);
// 	});
// 	}
//   });

//ACTUANDO AL CARGAR LA PAGINA
window.addEventListener("load", function () {
  console.log("2CONDICION");
  if (window.innerWidth <= 767) {
    console.log("ESTA RESPONSIVE: " + window.innerWidth);
    const bloque = document.querySelector(".banner_gallery");
    bloque.style.display = `flex`
    //   $(document).ready(function() {
    // 	setTimeout(function() {
    // 		// Declaramos la capa  mediante una clase para ocultarlo
    // 		$(".banner_gallery").fadeIn(1500);
    // 		// Transcurridos 5 segundos aparecera la capa midiv2
    // 	},0);
    // });

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
    console.log("ESTA ANCHO: " + window.innerWidth);
	const bloque = document.querySelector(".banner_gallery");
    bloque.style.display = `flex`
    // $(document).ready(function () {
    //   setTimeout(function () {
    //     // Declaramos la capa  mediante una clase para ocultarlo
    //     $(".banner_gallery").fadeIn(1500);
    //     // Transcurridos 5 segundos aparecera la capa midiv2
    //   }, 0);
    // });

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
});
