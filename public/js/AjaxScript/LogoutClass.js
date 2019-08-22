class LogoutClass extends AjaxClass {

    constructor(url, methodType, data) {
        super(url, methodType, data);
    }

    successFunc(res) {
        if (res.msg1 == true) {
            window.location = "/";
        } else {
            //Login.errorAnimation();
        }
        // alert(res.msg1);
    }
}