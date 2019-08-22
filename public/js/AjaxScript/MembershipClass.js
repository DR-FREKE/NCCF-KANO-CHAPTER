class MembershipClass extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        var design = new DesignPattern();
        design.closeLoader();

        Swal.fire(res, "Thanks for registering", 'success');
        var inputClass = document.getElementsByClassName("input-style");

        for (var i = 0; i < inputClass.length; i++) {
            inputClass[i].value = "";
        }
    }

}

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var design = new DesignPattern();

    $('#regBtn').on('click', () => {

        var name = document.getElementById('name');
        var phone = document.getElementById('phone');
        var email = document.getElementById('email');
        var dob = document.getElementById('dob');
        var gender = document.getElementById('gender');
        var zone = document.getElementById('zone');
        var lga = document.getElementById('lga');
        // var duty = document.getElementById('duty');
        // var lang = document.getElementById('lang');


        if (name.value == "" || phone.value == "" || email.value == "" || dob.value == "" || gender.value == "" || zone.value == "" || lga.value == "") {
            Swal.fire('Registration Error', "Please complete all fields to continue", 'error');
        } else {
            var data = { membersData: [name.value, phone.value, email.value, dob.value, gender.value, zone.value, lga.value] };
            var membership = new MembershipClass("/nccfmember", "POST", data);
            membership.sendData();

            design.showLoader();
        }
    });
});