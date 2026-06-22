document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from refreshing the page

    // Get input values
    let studentId = document.getElementById('student_id').value.trim();
    let fullName = document.getElementById('full_name').value.trim();
    let email = document.getElementById('email').value.trim();
    let address = document.getElementById('address').value.trim();
    let msgBox = document.getElementById('message-box');

    // 1. JavaScript Form Validation (Checking empty fields)
    if (studentId === "" || fullName === "" || email === "" || address === "") {
        msgBox.textContent = "Please fill out all fields correctly!";
        msgBox.className = "error-msg";
        msgBox.style.display = "block";
        return;
    }

    // 2. Prepare Form Data
    let formData = new FormData(this);

    // 3. Send data using Fetch API to submit.php
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        msgBox.style.display = "block";
        
        // Check if the response from PHP contains the word "successfully"
        if (data.includes("successfully")) {
            msgBox.textContent = data;
            msgBox.className = "success-msg";
            document.getElementById('registrationForm').reset(); // Clear the form
        } else {
            msgBox.textContent = data;
            msgBox.className = "error-msg";
        }
    })
    .catch(error => {
        msgBox.textContent = "A technical error occurred! Please try again.";
        msgBox.className = "error-msg";
        msgBox.style.display = "block";
    });
});