class SendSubMailClass extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        if (res[0] == "m" || res == "message sent") {
            alert("message sent successfully");
        }
    }

    retrieveSuccess(res) {
        var ul = document.getElementById("mSubscriber");
        ul.innerHTML = res;
        // SendSubMailClass.addClose();
    }

    static addClose() {
        var myNodelist = document.getElementsByClassName("listView");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var button = document.createElement("input");
            button.type = "checkbox";
            button.style.cssFloat = "left";
            // var txt = document.createTextNode("submit");
            // button.className = "close";
            // button.appendChild(txt);
            myNodelist[i].appendChild(button);
        }
    }

    sendToAll() {
        var sendAll = document.getElementById("mCheckAll");
        if (sendAll.checked) {
            return true;
        } else {
            return false;
        }
    }
}
window.addEventListener('load', () => {
    var textBox1 = document.getElementById("mSubTo");
    var textBox2 = document.getElementById("subject");
    var textBox3 = document.getElementById("textareaInput");
    var subscribeMail = new SendSubMailClass("/getSubscribers", "GET");
    setInterval(() => {
        subscribeMail.retrieveData();
        if (subscribeMail.sendToAll()) {
            textBox1.disabled = true;
        } else {
            textBox1.disabled = false;
        }
    }, 1000);
    $("#btnMail").on('click', function() {
        var sendMail;
        if (subscribeMail.sendToAll()) {
            sendMail = new SendSubMailClass("/getSubscribers", "POST", { checkbox: true, subject: textBox2.value, message: textBox3.value });
        } else {
            sendMail = new SendSubMailClass("/getSubscribers", "POST", { subscriber: textBox1.value, subject: textBox2.value, message: textBox3.value })
        }
        sendMail.sendData();
    })
})