function send() {
    var name = document.getElementById("fname").value;
    var LastName = document.getElementById("lname").value;
    var Email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var mobile = document.getElementById("mobile").value;
    var adress = document.getElementById("adress").value;


    form = new FormData();
    form.append("fname", name);
    form.append("lname", LastName);
    form.append("email", Email);
    form.append("password", password);
    form.append("mobile", mobile);
    form.append("adress", adress);


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