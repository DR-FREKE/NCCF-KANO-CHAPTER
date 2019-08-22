class EventClass extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        var inputval = document.getElementById("mTitle");
        var listItem = document.getElementsByClassName("listView");
        if (res.msg == "entered!") {
            alert("event registered");

            EventClass.eventListItem(inputval.value);
            EventClass.addClose();
            EventClass.deleteItems();

        } else {
            alert("event already exist");
        }
        //alert(res.msg);
    }

    retrieveSuccess(res) {
        setTimeout(() => {
            for (var i = 0; i < res.msg.length; i++) {
                EventClass.eventListItem(res.msg[i].title);
            }
            EventClass.addClose();
            EventClass.deleteItems();
        }, 2000);
    }

    // static errorAnimation() {
    //     alert("invalid user");
    // }
    static eventListItem(result) {
        var li = document.createElement("li");
        var textNode = document.createTextNode(result);
        li.className = "listView";
        li.appendChild(textNode);

        if (result === "") {
            alert("empty!");
        } else {
            document.getElementById("myEvent").appendChild(li);
        }
    }

    static addClose() {
        var myNodelist = document.getElementsByClassName("listView");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var button = document.createElement("button");
            var txt = document.createTextNode("end event");
            button.className = "btnClose";
            button.appendChild(txt);
            myNodelist[i].appendChild(button);
        }
    }

    static deleteItems() {
        var close = document.getElementsByClassName("btnClose");
        var myNodelist = document.getElementsByClassName("listView");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }
    }
}