// Select the navigation menu and login button elements
const menu = document.querySelector(".nav");
const login = document.querySelector(".login");

// Add a click event listener to the document
document.addEventListener("click", (e) => {
  // If the target of the click event matches the navigation button
  if (e.target.matches(".btn_nav")) {
    // Toggle the "menu--show" class on the navigation menu
    menu.classList.toggle("menu--show");
    // Remove the "login--show" class from the login button
    login.classList.remove("login--show");
  }
  // If the target of the click event matches the login button
  if (e.target.matches(".btn_login")) {
    // Toggle the "login--show" class on the login button
    login.classList.toggle("login--show");
    // Remove the "menu--show" class from the navigation menu
    menu.classList.remove("menu--show");
  }
});

// Initialize the slide counter
let slideCounter = 0;

// Define the slide function
function slide() {
  // Get the images and buttons elements by class name
  const images = document.getElementsByClassName("img");
  const buttons = document.getElementsByClassName("button");

  // Hide all images
  for (let i = 0; i < images.length; i++) {
    images[i].style = "display:none";
  }
  // Remove the "active" class from all buttons
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].className = buttons[i].className.replace(" active", "");
  }

  // Increment the slide counter
  slideCounter++;
  // If the slide counter is greater than the number of images
  if (slideCounter > images.length) {
    // Reset the slide counter to 1
    slideCounter = 1;
  }

  // Display the current image
  images[slideCounter - 1].style = "display:block";
  // Add the "active" class to the current button
  buttons[slideCounter - 1].className += " active";

  // Call the slide function again after 3 seconds
  setTimeout(slide, 3000);
}

// Call the slide function to start the slideshow
slide();

// Select all images in the gallery
const images = document.querySelectorAll("#gallery img");

// Add a click event listener to each image
images.forEach(img => {
    img.addEventListener("click", function() {
        // Open the image in a new tab when clicked
        window.open(this.src, "_blank");
    });
});
