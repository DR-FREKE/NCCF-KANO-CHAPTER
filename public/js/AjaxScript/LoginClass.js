class Login extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        if (res.msg == 'good') {
            window.location = "/admin";
        } else {
            Login.errorAnimation();
        }
    }

    static errorAnimation() {
        alert("invalid user");
    }
}