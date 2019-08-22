class AjaxClass {

    constructor(url, methodType, data) {
        this.requestUrl = url;
        this.requestMethodType = methodType;
        this.requestData = data;
    }

    sendData() {
        $.ajax({
            url: this.requestUrl,
            type: this.requestMethodType,
            data: this.requestData,
            success: this.successFunc
        });
    }

    retrieveData() {
        $.ajax({
            url: this.requestUrl,
            type: this.requestMethodType,
            success: this.retrieveSuccess
        });
    }

    successFunc(res) {
        throw new Error("this is an abstract method and must be implemented");
    }

    retrieveSuccess(res) {
        throw new Error("this is an abstract method and must be implemented");
    }
}