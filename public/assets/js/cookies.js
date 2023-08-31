const cookieBox = document.querySelector(".wrapper"),
buttons = document.querySelectorAll(".button");
const executeCodes = () => {
//if cookie contains codinglab it will be returned and below of this code will not run
if (document.cookie.includes("codinglab")) return;
cookieBox.classList.add("show");
buttons.forEach((button) => {
    button.addEventListener("click", () => {
        cookieBox.classList.remove("show");
        //if button has acceptBtn id
        if (button.id == "acceptBtn") {
            //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
            document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
        }
    });
});
};
//executeCodes function will be called on webpage load
window.addEventListener("load", executeCodes);

document.addEventListener("DOMContentLoaded", function() {
  // Get references to the link and modal
  const openModalLink = document.getElementById("openModalLink");
  const modal = document.getElementById("cookieconsent3");

  // Add a click event listener to the link
  openModalLink.addEventListener("click", function() {
      // Show the modal by adding the "show" class
      modal.classList.add("show");

      // Set aria-hidden attribute to false
      modal.setAttribute("aria-hidden", "false");

      // Prevent scrolling of the background content when modal is open
      document.body.style.overflow = "hidden";
  });

  // Function to close the modal
  function closeModal() {
      // Hide the modal by removing the "show" class
      modal.classList.remove("show");

      // Set aria-hidden attribute back to true
      modal.setAttribute("aria-hidden", "true");

      // Restore scrolling of the background content
      document.body.style.overflow = "auto";
  }

  // Close the modal when the "Accept necessary" button is clicked
  const acceptNecessaryButton = modal.querySelector(".btn-outline-primary");
  acceptNecessaryButton.addEventListener("click", closeModal);

  // Close the modal when the "Accept all" button is clicked
  const acceptAllButton = modal.querySelector(".btn-primary");
  acceptAllButton.addEventListener("click", closeModal);
});
