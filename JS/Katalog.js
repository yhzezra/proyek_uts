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
