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