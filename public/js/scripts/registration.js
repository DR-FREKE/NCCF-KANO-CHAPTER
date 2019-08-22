function register() {

    var xhtm;
    if (window.XMLHttpRequest) {
        xhtm = new XMLHttpRequest();
    } else {
        xhtm = new ActiveXObject("Microsoft.XMLHttp");
    }

    var name = document.getElementById('name').value;
    var gender = document.getElementById('gender').value;
    var phone = document.getElementById('phone').value;
    var zone = document.getElementById('zone').value;
    var lga = document.getElementById('lga').value;
    var duty = document.getElementById('duty').value;
    var duty = document.getElementById('lang').value;


    if (name == "" || gender == "" || phone == "" || zone == "" || lga == "" || duty == "" || lang == "") {
        Swal.fire('Registration Error', "Please complete all fields to continue", 'error');
    } else {

        xhtm.onreadystatechange = function() {
            if (xhtm.readyState == 4 && xhtm.status == 200) {
                Swal.fire('Registration Successful!', xhtm.reponseText, 'success');
            }
        }
        var param = "name=" + name + "&gender=" + gender + "&phone=" + phone + "&zone=" + zone + "&lga=" + lga + "&duty=" + duty + "&lang=" + lang;

        xhtm.open("POST", "registrationHandler.php", true);
        xhtm.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        xhtm.send(param);

        document.getElementById('name').value = "";
        document.getElementById('gender').value = "";
        document.getElementById('phone').value = "";
        document.getElementById('zone').value = "";
        document.getElementById('lga').value = "";
        document.getElementById('duty').value = "";
        document.getElementById('lang').value = "";

    }
}