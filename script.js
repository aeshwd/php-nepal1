let form = document.getElementById("form");
let statusTxt = document.querySelector(".button span");

form.onsubmit = (e) => {
    e.preventDefault(); // Prevent form submission

    statusTxt.style.display = "block"; // Show status text
    statusTxt.style.color = "#000"; // Reset status text color to default

    let xhr = new XMLHttpRequest(); // Create a new XMLHttpRequest object
    xhr.open("POST", "message.php", true); // Initialize POST request to message.php
    xhr.onload = () => {
        if (xhr.readyState === 4 && xhr.status === 200) { // Check if the request is successful
            let response = xhr.responseText; // Store the response text

            // Check for error messages in the response
            if (
                response.includes("Email and message fields are required!") ||
                response.includes("Enter a valid email address!") ||
                response.includes("Sorry, failed to send your message.")
            ) {
                statusTxt.style.color = "red"; // Change status text color to red for errors
            } else {
                form.reset(); // Reset the form if the message is sent successfully
                setTimeout(() => {
                    statusTxt.style.display = "none"; // Hide the status text after 3 seconds
                }, 3000);
            }

            statusTxt.innerText = response; // Update status text with the response
        }
    };

    // Send form data using FormData object
    let formData = new FormData(form); // Pass the form element to FormData
    xhr.send(formData); // Send the form data to the server
};
