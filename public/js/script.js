function ProductAddedMessage(button)
{

    let originalButtonText = button.innerHTML;

    button.innerHTML = "Adding to Cart";

    setTimeout(() => {
        button.innerHTML = originalButtonText;

    }, 1000);

}

function searchFocus() {
        
    const searchField = document.querySelector('.search-field');
    if (searchField) {
        searchField.focus();
    }

}