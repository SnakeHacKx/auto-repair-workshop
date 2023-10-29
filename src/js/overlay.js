const openButton = document.getElementById("open-overlay");
const closeButton = document.getElementById("close-overlay");
const overlay = document.getElementById("overlay");

openButton.addEventListener("click", () => {
  overlay.classList.remove("hidden");
  overlay.classList.remove("bounceOut");
  overlay.classList.add("bounceIn");
});

closeButton.addEventListener("click", () => {
  overlay.classList.add("hidden");
  overlay.classList.remove("bounceIn");
  overlay.classList.add("bounceOut");
});

overlay.addEventListener("click", (e) => {
  if (e.target === overlay) {
    overlay.classList.add("hidden");
    overlay.classList.remove("bounceIn");
    overlay.classList.add("bounceOut");
  }
});
