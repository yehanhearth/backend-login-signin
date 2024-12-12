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

function  upload(){
    var proType=document.getElementById("pName");
    var qty=document.getElementById("qty");
    var prodisc=document.getElementById("disc");
    var price=document.getElementById("price");

    var form=new FormData();
    form.append("name",proType.value);
    form.append("qty",qty.value);
    form.append("disc",prodisc.value);
    form.append("price",price.value);

    var request=new XMLHttpRequest();
    request.onreadystatechange=function () {
        if (request.status==200 && request.readyState==4) {
            alert(request.responseText);
        }
    }
    request.open("POST","prupload.php",true);
    request.send(form);
}