const img = document.getElementById("imagenLicenciatura");
const defaultSrc = "https://placehold.co/600x400";
const defaultAlt = "Test Vocacional UCMA";

const imagenes = {
  "Administración": "https://placehold.co/600x400?text=Administración",
  "Contaduría": "https://placehold.co/600x400?text=Contaduría",
  "Derecho": "https://placehold.co/600x400?text=Derecho",
  "Psicología Clínica": "https://placehold.co/600x400?text=Psicología+Clínica",
  "Pedagogía": "https://placehold.co/600x400?text=Pedagogía",
  "Ingeniería en Sistemas": "https://placehold.co/600x400?text=Sistemas+Computacionales",
  "Filosofía": "https://placehold.co/600x400?text=Filosofía",
  "Ingeniería Industrial y Procesos Administrativos": "https://placehold.co/600x400?text=Ingeniería+Industrial+y+Procesos+Administrativos",
  "Sistemas Computacionales": "https://placehold.co/600x400?text=Sistemas+Computacionales",
  "Mercadotecnia Digital y Comercio Internacional": "https://placehold.co/600x400?text=Mercadotecnia+Digital+y+Comercio+Internacional",
  "Administración de Empresas": "https://placehold.co/600x400?text=Administración+de+Empresas",
  "Derecho Sabatino": "https://placehold.co/600x400?text=Derecho+Sabatino",
  "Mercadotecnia Sabatina": "https://placehold.co/600x400?text=Mercadotecnia+Sabatina",
  "Maestría en administración e inteligencia de negocios": "https://placehold.co/600x400?text=Maestría+en+administración+e+inteligencia+de+negocios",
  "Maestría en administración pública y gobierno": "https://placehold.co/600x400?text=Maestría+en+administración+pública+y+gobierno",
  "Maestría en administracion de tecnologías de la información": "https://placehold.co/600x400?text=Maestría+en+administración+de+tecnologías+de+la+información",
  "Maestría en educación y gestión de instituciones educativas": "https://placehold.co/600x400?text=Maestría+en+educación+y+gestión+de+instituciones+educativas",
  "Maestría en derecho procesal penal": "https://placehold.co/600x400?text=Maestría+en+derecho+procesal+penal",
  "Maestría en derecho procesal y juicios orales": "https://placehold.co/600x400?text=Maestría+en+derecho+procesal+y+juicios+orales"
};

function cambiarImagen(src, alt) {
  if (img.src.endsWith(src)) return;
  img.classList.add("fade-out");
  setTimeout(() => {
    img.src = src;
    img.alt = alt;
    img.classList.remove("fade-out");
  }, 200);
}

// Evento para cada enlace
document.querySelectorAll(".submenu-carreras a").forEach(enlace => {
  enlace.addEventListener("mouseenter", () => {
    const texto = enlace.textContent.trim();
    if (imagenes[texto]) {
      cambiarImagen(imagenes[texto], texto);
    }
  });
});

// Evento para restaurar al salir de cualquier grupo
document.querySelectorAll(".submenu-wrapper").forEach(wrapper => {
  wrapper.addEventListener("mouseleave", () => {
    cambiarImagen(defaultSrc, defaultAlt);
  });
});
