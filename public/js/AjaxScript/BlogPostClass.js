class BlogPost extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        // if (res.msg == 'good') {
        //     window.location = "/admin";
        // } else {
        //     Login.errorAnimation();
        // }
        alert(res.msg);
    }

    // static errorAnimation() {
    //     alert("invalid user");
    // }
}