const navbar = document.querySelector('.navbar');
  let lastScroll = window.scrollY;
  let timeout;

  window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll > lastScroll) {
      navbar.classList.add('navbar-hidden');
    } else {
      navbar.classList.remove('navbar-hidden');
    }

    lastScroll = currentScroll;

    clearTimeout(timeout);
    timeout = setTimeout(() => {
      navbar.classList.remove('navbar-hidden');
    }, 1500);
  });

  document.querySelector('.btn-hover-parent').addEventListener('click', function (e) {
    if (window.innerWidth < 992) {
      e.preventDefault();
      const submenu = document.getElementById("submenuLicenciaturas");
      submenu.classList.toggle("visible-mobile");

      if (submenu.classList.contains("visible-mobile")) {
        submenu.style.maxHeight = "500px";
        submenu.style.opacity = "1";
        submenu.style.visibility = "visible";
      } else {
        submenu.style.maxHeight = "0";
        submenu.style.opacity = "0";
        submenu.style.visibility = "hidden";
      }
    }
  });