class Testimony extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        var design = new DesignPattern();
        design.closeLoader();

        // alert(res);
        DesignPattern.modal(res, "genDisplay");

        var testimony_input = document.getElementsByClassName("testimony-input");
        for (var x = 0; x < testimony_input.length; x++) {
            testimony_input[x].value = "";
        }
    }

    retrieveSuccess(res) {
        var name = document.getElementsByClassName('name');
        var testimonyMsg = document.getElementsByClassName('message');
        var response = JSON.parse(res);
        for (var i = response.length; i > 0; i--) {
            if (response.length > 0) {
                name[response.length - i].innerText = response[i - 1].Name;
                testimonyMsg[response.length - i].innerText = response[i - 1].Messages;
            }
        }
        // alert(response);
    }
}

$(document).ready(function() {
    var design = new DesignPattern();

    $('#sndTest').on('click', () => {
        var testifier = $('#name-header15-1x');
        var userPhone = $('#phone-header15-1x');
        var testimonyWord = $('#message-header15-1x');

        if (testifier.val() == "" || userPhone.val() == "" || testimonyWord.val() == "") {
            //do something
        } else {
            var data = { testName: testifier.val(), word: testimonyWord.val() }
            var testimony = new Testimony("/testimony", "POST", data);
            testimony.sendData();

            design.showLoader();
        }
    });
    $('#sendPrayer').on('click', () => {
        var requester = $('#name-header15-w');
        var prayerPhone = $('#phone-header15-w');
        var prayer = $('#message-header15-w');

        if (requester.val() == "" || prayerPhone.val() == "" || prayer.val() == "") {


        } else {
            var data = { requester: requester.val(), prayer: prayer.val() }

            var prayer = new Testimony("/prayer", "POST", data);
            prayer.sendData();

            design.showLoader();
        }


    });

    var viewTestimony = new Testimony("/viewmemberTestimony", "GET");
    setInterval(() => {
        viewTestimony.retrieveData();
    }, 1000);
});