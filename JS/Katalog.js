<<<<<<< HEAD
const btn = document.getElementById("katalogBtn");
const popup = document.getElementById("popupKatalog");

btn.addEventListener("click", function(e) {
  e.preventDefault();
  popup.classList.toggle("show");
});



document.addEventListener("click", function(e) {
  if (!popup.contains(e.target) && e.target !== btn) {
    popup.classList.remove("show");
  }
});
=======
const btn = document.getElementById("katalogBtn");
const popup = document.getElementById("popupKatalog");

btn.addEventListener("click", function(e) {
  e.preventDefault();
  popup.classList.toggle("show");
});



document.addEventListener("click", function(e) {
  if (!popup.contains(e.target) && e.target !== btn) {
    popup.classList.remove("show");
  }
});
>>>>>>> d3b3d1e4415bef11bd794b6d821302a9dc4f1a38
