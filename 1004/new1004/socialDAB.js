// Esperar a que se cargue completamente la página y sus recursos asociados
const validaEnlace = () => {
  const enlaces = document.querySelectorAll(".list-social-link");
  enlaces.forEach((enlace) => {
    const urlHref = enlace.href;
    if (urlHref.indexOf("vacio") !== -1) {
      enlace.parentNode.parentNode.style.cssText = 'display: none !important';
      enlace.style.display = 'none';
    }
  });
};
window.onload = () => {
  validaEnlace();
};
