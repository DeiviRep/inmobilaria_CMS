// Esperar a que se cargue completamente la página y sus recursos asociados
const validaEnlace = () => {
  const enlaces = document.querySelectorAll(".list-social-link");
  enlaces.forEach((enlace) => {
    const direccionHref = enlace.href;
    const acortaHref = direccionHref.split("/").slice(0, -1).join("/");
    if (acortaHref === "https://inmobiliariarialsa.com.mx") {
      enlace.parentNode.parentNode.style.cssText = 'display: none !important';
      enlace.style.display = 'none'
    }
  });
};
window.onload = () => {
  validaEnlace();
};
