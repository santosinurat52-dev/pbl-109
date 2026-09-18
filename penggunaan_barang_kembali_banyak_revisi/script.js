const form = document.querySelector("form");

form.addEventListener("submit", function(event) {
    const password = document.querySelector('input[name="password"]').value;
    const ulangiPassword = document.querySelector('input[name="ulangipassword"]').value;
    const error = document.getElementById("error");

    if (password !== ulangiPassword) {
        event.preventDefault();

        error.textContent = "Silahkan Ulangi Password Yang Sama";
        return;
    }
    
});
const params = new URLSearchParams(window.location.search);
const errorType = params.get("error");

const error = document.getElementById("error");

if (errorType === "emailnim") {
    error.textContent = "Email Atau NIM Salah!";
    error.style.display = "block";
}