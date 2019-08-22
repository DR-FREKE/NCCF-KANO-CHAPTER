class ContactClass extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        var design = new DesignPattern();
        design.closeLoader();

        // alert(res);
        DesignPattern.modal(res, "genDisplay");

        var sub_email = document.getElementById("email-form3-10");
        sub_email.value = "";

        var inputVal = document.getElementsByClassName('inputVal');
        for (var i = 0; i < inputVal.length; i++) {
            inputVal[i].value = "";
        }
    }
}

window.onload = function() {

    var design = new DesignPattern();

    var contactArray = [];
    var btnSub = document.getElementById("btnSub");
    btnSub.addEventListener('click', () => {
        var sub_email = document.getElementById("email-form3-10");
        if (sub_email.value == "") {
            alert("...");
        } else {
            var subscribe = new ContactClass("/contact-us", "POST", { subEmail: sub_email.value });
            subscribe.sendData();

            design.showLoader("auto");
        }


    });

    $('#btnCon').on('click', () => {
        var inputVal = document.getElementsByClassName('inputVal');
        for (var i = 0; i < inputVal.length; i++) {
            contactArray.push(inputVal[i].value);
        }
        var contact = new ContactClass("/contact", "POST", { inputItem: contactArray });
        contact.sendData();

        design.showLoader("auto");
    })
}