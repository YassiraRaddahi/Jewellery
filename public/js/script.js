function ProductAddedMessage(button)
{

    let originalButtonText = button.innerHTML;

    button.innerHTML = "Adding to Cart";

    setTimeout(() => {
        button.innerHTML = originalButtonText;

    }, 1000);

}
// document.addEventListener('DOMContentLoaded', function () {
//         const icon = document.getElementById('show-search');
//         const container = document.getElementById('search-form-container');
//         const input = document.getElementById('search-input');

//         icon.addEventListener('click', function (e) {
//             e.preventDefault();
//             container.style.display = 'block';
//             input.focus();
//         });
//     });



function disappearLiveResults(event) 
{
    let liveResults = document.getElementById('live-results');

    // Check if the click was outside the live results container
    if (event.target.id === 'live-results') {
        liveResults.style.display = 'block';
    } 
    else if (event.target.id === 'search-input') 
    {
         liveResults.style.display = 'none';
    }

    
}