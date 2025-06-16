function ProductAddedMessage(button)
{

    let originalButtonText = button.innerHTML;

    button.innerHTML = "Adding to Cart";

    setTimeout(() => {
        button.innerHTML = originalButtonText;

    }, 1000);

}
document.addEventListener('DOMContentLoaded', function () {
        const icon = document.getElementById('show-search');
        const container = document.getElementById('search-form-container');
        const input = document.getElementById('search-input');

        icon.addEventListener('click', function (e) {
            e.preventDefault();
            container.style.display = 'block';
            input.focus();
        });
    });




let liveResults = document.getElementById('live-results');
let searchArea = document.getElementById('zoekbalk');

document.addEventListener('click', function(event) {
    // Check if the clicked element is outside the live results container
    if (!searchArea.contains(event.target)) {
     // Hide live results
        liveResults.style.display = 'none';
    }
});

// Check if the click was outside the live results container

    
