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

