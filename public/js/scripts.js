function pageRequest(url) {

    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("loadNewDoc").innerHTML = xmlhttp.responseText;
            //  alert(xmlhttp.responseText);
        }
    }

    xmlhttp.open("GET", url, true);
    xmlhttp.send();

}
// executive-louge
function confirmEdit() {
    Swal.fire({
        title: 'Are you sure you want to edit executives?',
        text: 'The names should only be changed after the hand over meeting on the GENCO platform',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, edit names',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.value) {
            pageRequest('executive-change-form.html');
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                'Cancelled', 'Editing cancelled', 'error'
            );
        }
    });
}

//executive-change-form
function editExcos() {
    Swal.fire({
        title: 'Confirmation Dialog',
        text: 'Are you sure you want to make the changes? Your changes will be displayed on the main site',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, edit',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.value) {
            edit_Excos_In_Db();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire('Cancelled', 'Changes Cancelled', 'error');
        }
    });
}

function edit_Excos_In_Db() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var president = document.getElementById("president").value;
    var genSec = document.getElementById("genSec").value;
    var ags = document.getElementById("ags").value;
    var sisCord = document.getElementById("sisCord").value;
    var tos = document.getElementById("tos").value;
    var bsSec = document.getElementById("bsSec").value;
    var prayerSec = document.getElementById("prayerSec").value;
    var dd = document.getElementById("dd").value;
    var md = document.getElementById("md").value;
    var finSec = document.getElementById("finSec").value;
    var treasurer = document.getElementById("treasurer").value;
    var evanSec = document.getElementById("evanSec").value;
    var publicitySec = document.getElementById("publicitySec").value;
    var admin = document.getElementById("admin").innerHTML;


    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("gg").innerHTML = xmlhttp.responseText;
        }

    }
    var param = "president=" + president + "&genSec=" + genSec + "&ags=" + ags + "&sisCord=" + sisCord + "&tos=" + tos + "&bsSec=" + bsSec + "&prayerSec=" + prayerSec + "&dd=" + dd + "&md=" + md + "&finSec=" + finSec + "&treasurer=" + treasurer + "&evanSec=" + evanSec + "&publicitySec=" + publicitySec + "&admin=" + admin;
    xmlhttp.open("POST", "excos-editor.php", true);
    xmlhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(param);

    Swal.fire('Success', 'Changes have been made successfully', 'success');

}

// Used in EDIT GENCO DELIGATES.HTML
function genco(url) {
    var xhtp;
    this.url = url;
    if (window.XMLHttpRequest) {
        xhtp = new XMLHttpRequest();
    } else {
        xhtp = new ActiveXObject("Microsoft.XMLHttp");
    }


    xhtp.onreadystatechange = function() {
        if (xhtp.readyState == 4 && xhtp.status == 200) {
            document.getElementById("displayPanel").innerHTML = xhtp.responseText;
        }
    }

    xhtp.open("GET", url, true);
    xhtp.send();

}

// used in enterNewDeligate.php

function isNewDeligate() {
    var name = document.getElementById("Name").value;
    var email = document.getElementById("Email").value;
    var phone = document.getElementById("Phone").value;
    var office = document.getElementById("Office").value;
    var zone = document.getElementById("Zone").value;
    if (name == "" || email == "" || phone == "" || office == "" || zone == "") {
        Swal.fire('Please complete all fields to continue', '', 'info');

    } else {
        addNewDeligate();

    }
}

function addNewDeligate() {

    var name = document.getElementById("Name").value;
    var email = document.getElementById("Email").value;
    var phone = document.getElementById("Phone").value;
    var office = document.getElementById("Office").value;
    var zone = document.getElementById("Zone").value;

    $.ajax({
        url: '/enterNewDeligate',
        type: 'POST',
        data: { Name: name, Email: email, Phone: phone, Office: office, Zone: zone },
        success: function(res) {

            alert(res);

            //on success clear field
            document.getElementById("Name").value = "";
            document.getElementById("Email").value = "";
            document.getElementById("Phone").value = "";
            document.getElementById("Office").value = "";
            document.getElementById("Zone").value = "";
        }
    })


}


// uSED IN ADD NEW ADMIN PAGE.html
function showDisabledMsg() {
    Swal.fire('Oops Sorry', 'You would need developer admin privilege to perform this operation. Please contact developers', 'info');
}

//Used in the genco page for posting updates
function isNewPost() {
    var gencoPost = document.getElementById("genco_post").value;
    if (gencoPost == "") {
        Swal.fire('Nothing to post', 'You have not written anything yet! please enter a write up and click send', 'error');
    } else {
        postToGenco();
    }
}

function postToGenco() {
    var newPost = document.getElementById("genco_post").value;
    $.ajax({
        url: "/gencoHandler",
        type: 'POST',
        data: { param: newPost },
        success: function(res) {
            Swal.fire('Success', res, 'success');
        }
    })
    document.getElementById("genco_post").value = "";
}

// Used in delete deligates.php
//function to search for record
function searchGencoDeligate() {
    var xhtp;
    if (window.XMLHttpRequest) {
        xhtp = new XMLHttpRequest();
    } else {
        xhtp = new ActiveXObject("Microsoft.XMLHttp");
    }

    var search = document.getElementById("zone").value;

    xhtp.onreadystatechange = function() {
        if (xhtp.readyState == 4 && xhtp.status == 200) {
            if (search == "") {
                Swal.fire('Error', 'You did not select a zone, please select a zone and click search', 'info') = xhtp.responseText;
            } else {
                Swal.fire("Saerch complete", "", "info");
                document.getElementById("displaySearchResult").innerHTML = xhtp.responseText;
            }
        }
    }
    var param = "zone=" + search;
    xhtp.open('POST', 'searchDeligateHandler.php', true);
    xhtp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhtp.send(param);

}
//function to confirm and delete record
function confirmDeleteDeligate() {
    Swal.fire({
        title: 'Search record found!',
        text: 'Are you sure you want to delete this record? Changes cannot be undone',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Delete record',
        cancelButtonText: 'No, Cancel'
    }).then((result) => {
        if (result.value) {
            alert("Glory");
        } else if (result.DismissReason === Swall.DismissReason.cancel) {
            Swal.fire('Cancelled', 'Changes Cancelled', 'error');
        }
    });
}
//function to clear genco delegates table
function eraseGencoTable() {
    Swal.fire({
        title: 'Confirmation Dialog',
        text: 'Are you sure you want to delete the entire GENCO deligates from the database? If you do this, you cannot undo it',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, Delete all',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.value) {
            eraseGencoDB();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire('Cancelled', 'Changes Cancelled', 'error');
        }
    });

}
window.addEventListener('load', function() {
    VerifyClick();
})

function VerifyClick() {
    var btnVerify = document.querySelectorAll('.btnVerify');

    btnVerify.forEach(function(element) {
        element.addEventListener('click', function() {
            alert("wassa");
        })
    })

    // btnVerify.forEach(function(element) {
    //     element.onclick = function() {
    //         var data_test = $(this).parent().attr('data-test');

    //         $.ajax({
    //             url: "/updateTestimony",
    //             type: "PUT",
    //             data: { truthVal: true, name: data_test },
    //             success: function(res) {
    //                 if (res == "Verified") {
    //                     alert("testimony verified");
    //                     element.innerHTML = "verified";
    //                 }
    //             }
    //         })
    //     }
    // }, this)
}
//erase entire table
function eraseGencoDB() {

    $.ajax({
        url: '/deleteDel',
        type: 'DELETE',
        success: function(res) {
            alert(res);
            //Swal.fire('Success', xhtp.responseText, 'success');
        }
    })

}


//Used in the new post page for daily Word post

//Checks to see if any content was written in the text area for the daily post
function isNewWord() {
    var dailyWord = document.getElementById("daily_post").value;

    if (dailyWord == "") {
        Swal.fire('Nothing to post', 'You did not write anything, please enter a write up and click post', 'error');
    } else {
        postWord();
    }
}

//Used in the new post page for daily Word post
function postWord() {
    var dailyWord = document.getElementById("daily_post").value;
    $.ajax({
        url: "/dailyPost",
        type: "POST",
        data: { dWord: dailyWord },
        success: function(res) {
            Swal.fire('Success', res, 'success');
        }
    })

    document.getElementById("daily_post").value = "";

}
//Used in nccf kano state unit
function displayMember(members) {

    this.members = members;
    switch (members) {
        case 'prayer':
            Swal.fire('Prayer Unit', 'Comprises of every member of the family house and led by the Prayer Secretary', 'info');
            break;
        case 'evangelism':
            Swal.fire('Evangelism Unit', 'Comprises of every member of NCCF Kano State Chapter and led by the Evangelism Secretary', 'info');
            break;
        case 'tos':
            Swal.fire('Transport & Organizing Unit', 'Led by the Transport & Org. Secretary and consist of the Asst. T.O.S and other interested members', 'info');
            break;
        case 'biblestudy':
            Swal.fire('Bible Study Unit', 'Led by the Bible Study Secretary and comprises of other interested members', 'info');
            break;
        case 'publicity':
            Swal.fire('Publicity Unit', 'Led by the Publicity Secretary and comprises of other interested members', 'info');
            break;
        case 'drama':
            Swal.fire('Drama Unit', 'Led by the Drama Director and comprises of other drama ministers', 'info');
            break;
        case 'choir':
            Swal.fire('Choir Unit', 'Led by the Music Director and comprises of other interested music ministers', 'info');
            break;
        case 'technical':
            Swal.fire('Technical Unit', 'Led by the Technical Director and consist of other interested technical inclined members', 'info');
            break;
        case 'library':
            Swal.fire('Library Unit', 'Led by the Librarian and comprises of other interested members', 'info');
            break;
        case 'ushering':
            Swal.fire('Ushering Unit', 'Led by the Chief Usher and comprises of other interested members', 'info');
            break;
        case 'kitchen':
            Swal.fire('Kitchen Unit', 'Led by the Sister\'s Cord. & Welfare Secretary and comprises of other interested members', 'info');
            break;
        case 'sceptre':
            Swal.fire('Sceptre Unit', 'Led by the Sceptre President and comprises of other funny interested characters', 'info');
            break;
        default:
            Swal.fire('Error', 'An error was encountered', 'error');
            break;
    }
}