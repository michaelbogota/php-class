const form = document.getElementById("formulario");
form.addEventListener("submit", (event) => {
    event.preventDefault();
    const data = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "archivo.php");
    xhr.onload = () => {
        if (xhr.status === 200) {
            console.log(xhr.responseText);
        } else {
            console.error(xhr.responseText);
        }
    };
    xhr.send(data);
});
