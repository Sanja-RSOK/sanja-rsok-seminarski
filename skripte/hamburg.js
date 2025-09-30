const hamburgerr = document.querySelector('.hamburger');
const navigacijameni = document.querySelector('.bloker');

hamburgerr.addEventListener('click', function() {
  navigacijameni.classList.toggle('aktivno');
});