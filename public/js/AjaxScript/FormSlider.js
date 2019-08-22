window.addEventListener('load', () => {
    slide = document.querySelectorAll(".mySlides");
    var currentSlide = 0;
    var btnNext = document.getElementById("btnNext");
    var btnPrev = document.getElementById("mBtnBox1");
    showSlides(currentSlide);

    function showSlides(n) {
        slide[n].style.display = "grid";
        if (n == 0) {
            btnPrev.style.display = "none";
        } else {
            btnPrev.style.display = "grid";
        }
        if (n == (slide.length - 1)) {
            btnNext.innerHTML = "SUBMIT";
        } else {
            btnNext.innerHTML = "NEXT";
        }

    }

    function plusSlide(n) {
        if (n == 1 && validateForm()) return true;
        slide[currentSlide].style.display = "none";
        //emptySlide();
        currentSlide += n;

        if (currentSlide >= (slide.length)) {
            var slideInputs = document.getElementsByTagName('input');
            let mAdmin = new SubAdminClass();
            mAdmin.getAdminData(slideInputs);
            emptySlide();

            // currentSlide = 0;
        }
        showSlides(currentSlide);
    }

    function emptySlide() {
        currentSlide = 0;
        var slideInputs = document.getElementsByClassName("inputData");
        // slideInputs[0].value = "wassa";
        [].slice.call(slideInputs).forEach(function(e) {
            e.value = "";

        })
    }
    btnNext.onclick = function() {
        plusSlide(1);
    }
    btnPrev.onclick = function() {
        plusSlide(-1);
    }

    var block = document.getElementsByClassName("remove");
    for (var x = 0; x < block.length; x++) {
        block[x].onclick = function() {
            // var admin = $(this).parent().attr('data-delete');

            // admindataclass = new AdminDataClass("/addSubAdmin", "DELETE", { items: admin });
            // admindataclass.sendData();

            var removeAdmin = this.parentElement;
            var tr = removeAdmin.parentElement;
            if (this.innerHTML == "Block") {
                this.innerHTML = "unblock";
                $(tr).children("#mStatus").html("InActive");
            } else {
                this.innerHTML = "Block";
                $(tr).children("#mStatus").html("Active");
            }

            // tr.style.display = "none";
        }
    }

    function validateForm() {
        var y, empty;
        y = slide[currentSlide].getElementsByTagName("input");
        [].slice.call(y).forEach(function(el) {
            if (el.value == '') {
                empty = true;
            }
        }, this);
        if (empty) {
            btnNext.disabled = true;
            // btnNext.style.backgroundColor = "#bbbbbb";
            // btnNext.style.border = "1px solid #bbbbbb";
        } else {
            btnNext.disabled = false;
            // btnNext.style.backgroundColor = "#fff";
            // btnNext.style.border = "1px solid #255";
        }
        return empty;
    }
    setInterval(validateForm, 100);
})