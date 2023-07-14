const myModal = new bootstrap.Modal('#welcome-modal');

window.addEventListener('DOMContentLoaded', () => {
myModal.show();

document.addEventListener("DOMContentLoaded", function() {
        const playButton = document.querySelector(".play-button");
        const card = document.querySelector(".carousel-caption .card");

        playButton.addEventListener("click", function() {
          card.classList.toggle("active");

});
