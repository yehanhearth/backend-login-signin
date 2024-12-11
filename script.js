function send() {
    var name = document.getElementById("fname").value;

    form = new FormData();
    form.append("fname", name);


    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                alert(request.responseText); // Success response
            } else {
                alert("An error occurred: " + request.statusText); // Error response
            }
        }
    }

    request.open("POST", "uRegister.php", true);
    request.send(form);
}