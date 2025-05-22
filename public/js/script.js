function ProductAddedMessage(button)
{

    if(button.disabled)
    {
        button.style.cursor = 'not-allowed';
        return;
    }

    let originalButtonText = button.innerHTML;

    button.innerHTML = "Adding to Cart";

    setTimeout(() => {
        button.innerHTML = originalButtonText;

    }, 1000);

}