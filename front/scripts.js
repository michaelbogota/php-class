const form = document.getElementById("formulario");
form.addEventListener("submit", (event) => {
    event.preventDefault();
    const data = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "https://php-test-0twc.onrender.com/");
    xhr.setRequestHeader("api-key", "9942f9ab-5568-44ce-b63c-2f77b9b7a1e7");
    xhr.onload = () => {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
        } else {
            console.error(xhr.responseText);
        }
    };
    xhr.send(data);
});
