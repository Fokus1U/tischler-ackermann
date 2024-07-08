document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch('send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        displayResponse(data, 'success');
        this.reset();
    })
    .catch(error => {
        displayResponse('Entschuldigung. Etwas ist schief gelaufen. Bitte versuchen Sie es erneut', 'error');
    });
});

function displayResponse(message, type) {
    const responseDiv = document.getElementById('response');
    responseDiv.innerText = message;
    responseDiv.className = type;
}
