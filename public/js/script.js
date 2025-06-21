let reasonRadios = document.querySelectorAll('input[type="radio"][name="reason"]');
let otherReasonRadio = document.getElementById("other-reason-checkbox");
let otherReasonTextarea = document.getElementById("other-reason-textarea");


reasonRadios.forEach(radio => {
    radio.addEventListener("change", function() {
        if (otherReasonRadio.checked) {
            otherReasonTextarea.style.display = "block";
        } else {
            otherReasonTextarea.style.display = "none";
        }
    });
});

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

document.addEventListener('click', function(event) 
{
    // Checks if the user has clicked outside the search area
    if (!searchArea.contains(event.target)) 
    {
     // Hide live results
        liveResults.style.display = 'none';
    }
});

function showDeleteAccountDialogOrErrors() 
{

    let form = document.getElementById("delete-account-form");

    // Checks if the form is filled in fully and valid
    if(form.checkValidity()) 
    {
        document.getElementById("delete-account-dialog").showModal();
    }
    else 
    {
        // If the form is not valid, show validation errors
        form.reportValidity();
    }
    
}

function closeDeleteAccountDialog()
{
    document.getElementById("delete-account-dialog").close();
}

function onEnterDeleteAccountForm(event) 
{
    if (event.key === "Enter") 
    {
        // Prevent form submission
        event.preventDefault(); 

        // Show the delete account dialog or validation errors
        showDeleteAccountDialogOrErrors();
    }
}

function onHoverOrderButton()
{
    let orderButton = document.getElementById('order-details-order-button');
    if(orderButton.disabled)
    {
        orderButton.style.cursor = 'initial';
    }
    else
    {
        orderButton.style.backgroundColor = '#c39f86';
        orderButton.style.color = '#FFFFFF';
    }
}

function onHoverLeaveOrderButton()
{
    let orderButton = document.getElementById('order-details-order-button');

    if(!orderButton.disabled)
    {
        orderButton.style.backgroundColor = '#f2efe3';
        orderButton.style.color = '#000000';
    }
    
}

document.addEventListener('DOMContentLoaded', function()
{
    let succesMessageDiv = document.getElementById('alert-success');

    if(succesMessageDiv)
    {

        console.log("success message");

        setTimeout(() => {succesMessageDiv.classList.add('alert-success-faded')}, 3000);
    }
});