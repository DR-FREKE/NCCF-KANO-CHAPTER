

function verify(){
    alert("Hi");
    var xhtm;
    if(window.XMLHttpRequest){
        xhtm = new XMLHttpRequest();
    }else{
        xhtm = new ActiveXObject("Microsoft.XMLHttp");
    }

    xhtm.onreadystatechange = function(){
        if(xhtm.readyState == 4 && xhtm.status == 200){

        }
    }
    var searchId = document.getElementById("verify").value;

    xhtm.open("POST","verification.php",true);
    xhtm.send();
}