$(document).ready(function() {

    var eventArray = [];
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //add events and create instances of the login class
    $('#btnLogin').on('click', () => {

        email = $("input[name=email]");
        password = $("input[name=password]");

        data = { email: email.val(), password: password.val() };

        let mLogin = new Login("/admin", "POST", data);
        mLogin.sendData();
    });
    $('#btnLogout').on('click', (e) => {
        e.preventDefault();

        var logout = new LogoutClass("/mLogout", "POST", { data: true });
        logout.sendData();
        // alert("wassa")
    })

    //sending blog post
    $('#btnBlog').on('click', () => {
        Data = $('#mytextarea').val()
        nameofFile = $('#name_of_file').val();
        mFile = nameofFile.replace(/ /g, '');
        //mData = bData.getElementsByTagName('P').innerHTML;
        blogData = { text: Data, file_name: mFile };
        if (nameofFile != "") {
            let blogpost = new BlogPost("/addblog", "POST", blogData);
            blogpost.sendData();
        } else {
            alert("enter a file name");
        }

    });

    //adding nccf events
    $('#btnmEvent').on('click', () => {
        var eventData = document.getElementsByClassName('eventInput');
        var textArea = document.getElementById('textareaInput');
        eventInput = Array.from(eventData);

        eventArray.splice(0, eventInput.length);

        for (var i = 0; i < eventInput.length; i++) {
            eventArray.push(eventInput[i].value);
        }

        let event = new EventClass("/addevent", "POST", { eventDatas: eventArray, textarea: textArea.value });
        event.sendData();
    });

    let myEvent = new EventClass("/getevent", "GET");
    myEvent.retrieveData();
});