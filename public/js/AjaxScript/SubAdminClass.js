class SubAdminClass {

    getAdminData(slideInputs) {
        this.mArray = [];
        var slideInputsArray = Array.from(slideInputs);
        for (var i = 0; i < slideInputsArray.length; i++) {
            this.mArray.push(slideInputsArray[i].value);
        }

        // for (var x = 0; x < this.mArray.length; x++) {
        //     alert(this.mArray[x]);
        // }

        var admindataclass = new AdminDataClass("/addSubAdmin", "POST", { items: this.mArray });
        admindataclass.sendData();
    }
}