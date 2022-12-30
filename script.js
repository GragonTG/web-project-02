function signUp() {

    var f = document.getElementById("fname");
    var l = document.getElementById("lname");
    var e = document.getElementById("email");
    var p = document.getElementById("password");
    var m = document.getElementById("mobile");
    var g = document.getElementById("gender");

    var form = new FormData();
    form.append("f", f.value);
    form.append("l", l.value);
    form.append("e", e.value);
    form.append("p", p.value);
    form.append("m", m.value);
    form.append("g", g.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "success") {
                document.getElementById("msg").innerHTML = text;
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgdiv").className = "d-block";
            } else {
                document.getElementById("msg").innerHTML = text;
                document.getElementById("msgdiv").className = "d-block";
            }


        }
    }

    r.open("POST", "signUpProcess.php", true);
    r.send(form);

}

function logIn() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    //var rememberme = document.getElementById("rememberme");

    var f = new FormData();
    f.append("e", email.value);
    f.append("p", password.value);
    //f.append("r", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "home.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "signInProcess.php", true);
    r.send(f);

}

var bm;
function verify() {

    var email = document.getElementById("email");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {

                alert("Verification code has sent to your Email. Please check your inbox");
                var m = document.getElementById("forgotPasswordModal");
                bm = new bootstrap.Modal(m);
                bm.show();

            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "verificationProcess.php?e=" + email.value, true);
    r.send();

}