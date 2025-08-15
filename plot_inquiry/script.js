document.getElementById("inquiryForm").addEventListener("submit", function(event) {
    let phone = document.querySelector('input[name="phone"]').value;
    if (phone.length !== 10) {
        alert("Phone number must be 10 digits.");
        event.preventDefault();
    }
});
