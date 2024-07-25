import "./bootstrap";

// Function to load page content
function loadPageContent(url) {
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then((html) => {
            // Update the container with the loaded HTML
            document.getElementById("app").innerHTML = html;
        })
        .catch((error) => {
            console.error("Error loading page:", error);
        });
}

// Function to handle navigation
function handleNavigation(event) {
    event.preventDefault();
    const url = event.target.href;

    // Update the browser history
    window.history.pushState({}, "", url);

    // Load the page content
    loadPageContent(url);
}

// Attach event listeners to links for navigation
document.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", handleNavigation);
});

// Function to load initial page content
function init() {
    // Load page content based on the current URL
    loadPageContent(window.location.href);
}

// Initialize the page
init();
