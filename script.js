// const prevBtn = document.querySelector(".prev");
// const nextBtn = document.querySelector(".next");
// const slides = document.querySelectorAll(".slide");
// let currentIndex = 0;

// // Go to the previous slide
// function prevSlide() {
//   if (currentIndex === 0) {
//     currentIndex = slides.length - 1;
//   } else {
//     currentIndex--;
//   }
//   updateSlide();
// }

// // Go to the next slide
// function nextSlide() {
//   if (currentIndex === slides.length - 1) {
//     currentIndex = 0;
//   } else {
//     currentIndex++;
//   }
//   updateSlide();
// }

// // Update the current slide
// function updateSlide() {
//   const width = slides[0].offsetWidth;
//   const slidePosition = -(width * currentIndex);
//   document.querySelector(
//     ".slides"
//   ).style.transform = `translateX(${slidePosition}px)`;
// }

// // Set up event listeners for the buttons
// prevBtn.addEventListener("click", prevSlide);
