var currentImg = 0;
showImg();

function showImg() {
    var i;
    var img_slider = document.getElementsByClassName("img_slider");

    for (i = 0; i < img_slider.length; i++) {
        img_slider[i].style.display = "none";
    }

    currentImg++;
    if (currentImg > img_slider.length) {
        currentImg = 1;
    }

    img_slider[currentImg - 1].style.display = "block";

    setTimeout(showImg, 5000);
}
//adding smooth scrolling
$(document).ready(function() {
    //when you click on any link it redirects to that page smoothly
    $(".navbar a, footer a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();

            // store the hash code
            var hash = this.hash;

            //now using jquery animate function to add smooth scroll
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1500, function() {
                window.location.hash = hash;
            });
        }
    });
});