let prevScrollpos = window.scrollY;
const navbar = document.getElementById("navbar");

window.onscroll = function() {
  let currentScrollPos = window.scrollY;

  if (prevScrollpos > currentScrollPos) {
    navbar.style.top = "0";
  } else {
    navbar.style.top = `-${navbar.offsetHeight}px`;
  }

  prevScrollpos = currentScrollPos;
};
