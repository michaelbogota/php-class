const form = document.getElementById("formulario");
const button = document.getElementById("submit");
const loader = document.getElementById("loader");
const success = document.getElementById("success");
const error = document.getElementById("error");
form.addEventListener("submit", (event) => {
    button.disabled = true;
    loader.style.display = "block";
    event.preventDefault();
    const data = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "https://php-test-0twc.onrender.com/");
    xhr.setRequestHeader("api-key", "9942f9ab-5568-44ce-b63c-2f77b9b7a1e7");
    xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onload = () => {
        button.disabled = false;
        if (xhr.status === 200) {
            console.log(xhr.responseText);
            success.style.display = "block";
        } else {
            console.error(xhr.responseText);
            error.style.display = "block";
        }
        setTimeout(() => {
            success.style.display = "none";
            error.style.display = "none";
        }, 5000);
    };
    xhr.send(data);
});
