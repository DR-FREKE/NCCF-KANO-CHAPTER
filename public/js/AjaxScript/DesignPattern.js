class DesignPattern {

    static modal(res, responseId) {
        var modal = $('#myModal');
        $('#' + responseId).html(res);

        modal.css('display', 'block');
    }

    snackBar() {

    }

    closeall() {
        var modal = $('#myModal');

        modal.css('display', 'none');
    }

    showLoader(margin) {
        var loader = $('#loader');
        loader.css({ 'display': 'block', 'margin': margin });
    }

    closeLoader() {
        var loader = $('#loader');

        loader.css('display', 'none');
    }
}