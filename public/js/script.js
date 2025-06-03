function ProductAddedMessage(button)
{

    let originalButtonText = button.innerHTML;

    button.innerHTML = "Adding to Cart";

    setTimeout(() => {
        button.innerHTML = originalButtonText;

    }, 1000);

}

function SearchProducts() {
    let searchInput = document.getElementById("searchInput").value;
    let searchResults = document.getElementById("searchResults");

    
}