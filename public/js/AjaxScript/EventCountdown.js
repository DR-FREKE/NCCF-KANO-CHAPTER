var eventList = [];
// setInterval(function() {
// eventList.splice(0, res.msg.length);
$.ajax({
    url: "/userEvent",
    type: "GET",
    success: function(res) {

        for (var i = 0; i < res.msg.length; i++) {
            eventList.push(res.msg[i]);
        }

        // for (var x = 0; x < eventList.length; x++) {
        //     alert(eventList[x].title);
        // }

    }
});
// }, 1)

var timerCountdown = 0

function countdown() {
    var mDate = eventList;
    var params = mDate[timerCountdown].eventStart_day + " " + mDate[timerCountdown].start_hours + ":" + mDate[timerCountdown].start_minutes + ":00";

    var proposedDate = new Date(params).getTime();
    // alert();
    var difference;
    var difference2;
    var lastDate = new Date(mDate[mDate.length - 1].eventStart_day + " " + mDate[mDate.length - 1].start_hours + ":" + mDate[mDate.length - 1].start_minutes + ":00").getTime();
    var currentDate = new Date().getTime();

    difference = proposedDate - currentDate;
    difference2 = lastDate - currentDate;

    var day = Math.floor(difference / (1000 * 60 * 60 * 24));
    var hour = Math.floor(difference % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    var min = Math.floor(difference % (1000 * 60 * 60) / (1000 * 60));
    var sec = Math.floor(difference % (1000 * 60) / (1000));
    var dayWord;

    if (difference <= 0) {
        timerCountdown++;
        mDate.splice(0, 0);
        $.ajax({
            url: "/userEvent",
            type: "DELETE",
            data: { mData: mDate[timerCountdown - 1].title },
            success: function(res) {
                // alert(res.msg);
            }
        });
    }
    if (difference2 > 0) {

        document.getElementById("event").style.visibility = "visible";
        document.getElementById("title").innerHTML = "<strong>" + mDate[timerCountdown].title + "</strong>";
        document.getElementById("description").innerHTML = mDate[timerCountdown].description;
        document.getElementById("mDays").innerHTML = day + "day(s) :";
        document.getElementById("mHours").innerHTML = hour + "hr(s) :";
        document.getElementById("minute").innerHTML = min + "mins :";
        document.getElementById("mSec").innerHTML = sec + "sec";
    } else if (difference2 < 0) {
        document.getElementById("arrow-down").style.visibility = "visible";
        document.getElementById("event").style.visibility = "hidden";
        document.getElementById("impact").style.marginTop = 0;
    }

    // switch
}
setInterval(countdown, 1);

class DisplayEvent extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    retrieveSuccess(res) {
        var mEventBox = document.getElementsByClassName("mEventBox");
        var displayDate = document.getElementsByClassName("date");
        var displayTitle = document.getElementsByClassName("eventTitle");
        var displayDes = document.getElementsByClassName("eventDes");

        for (var i = 0; i < res.msg.length; i++) {
            if (res.msg.length > 0) {
                mEventBox[i].style.visibility = "visible";
                displayDate[i].innerHTML = res.msg[i].eventStart_day;
                displayTitle[i].innerHTML = res.msg[i].title;
                displayDes[i].innerHTML = res.msg[i].description;

            }
            if (res.msg.length < 1) {
                alert("wassa");
            }
            // eventList.push(res.msg[i]);
        }
    }
}
let userEvent = new DisplayEvent("/userEvent", "GET");
userEvent.retrieveData();
$(document).scroll(function() {
    let userEvent = new DisplayEvent("/userEvent", "GET");
    userEvent.retrieveData();
})

window.addEventListener('load', function() {
    setInterval(function() {
        displayEvent();
    }, 1)
}, false)