function anchoPantalla() {
  const anchoPantalla = window.innerWidth;
  console.log("Ancho de la pantalla:", anchoPantalla, "px");
  return anchoPantalla;
}
function contarTargets() {
  const contenedor = document.querySelectorAll(".target-contenido");
  const cantidadTargets = contenedor.length;
  contenedor.forEach((target) => {
    target.classList.remove("estilo-ultimo-target");
  });
  anchoPantalla();
  if (cantidadTargets % 2 === 0 || cantidadTargets % 5 === 0) {
    const ultimoTarget = contenedor[cantidadTargets - 1];
    ultimoTarget.classList.add("estilo-ultimo-target");
  }
}

window.addEventListener("load", contarTargets);
window.addEventListener("resize", anchoPantalla);
