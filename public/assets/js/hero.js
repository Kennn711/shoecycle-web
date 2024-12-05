const slider = document.getElementById("slider");
const dots = document.querySelectorAll(".dot");
let currentIndex = 0;
const slides = slider.children;
const totalSlides = slides.length;

function updateSliderPosition() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    updateDots();
}

function updateDots() {
    dots.forEach((dot, index) => {
        dot.classList.remove("bg-green-800");
        dot.classList.add("bg-gray-300");
        if (index === currentIndex) {
            dot.classList.remove("bg-gray-300");
            dot.classList.add("bg-green-800");
        }
    });
}

function autoSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSliderPosition();
}
// Add click event to dots
dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
        currentIndex = index;
        updateSliderPosition();
    });
});
// Initialize
updateSliderPosition();
setInterval(autoSlide, 3000);
