import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Get the reference to the body element
var body = document.body;

// Your new HTML content
var newContent =
    "<h1>New Content</h1><p>This is the new content that will replace the old one.</p>";

// Set the inner HTML of the body element to the new content
body.innerHTML = newContent;
