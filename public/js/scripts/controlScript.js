function requestPage(url){
    
    this.url = url;
    var xhtm;
    if(window.XMLHttpRequest){
        xhtm = new XMLHttpRequest();
    }else{
        xhtm = new ActiveXObject("Microsoft.XMLHttp");
    }

    xhtm.onreadystatechange = function(){
        if(xhtm.readyState == 4 && xhtm.status ==200){
            document.getElementById("displayArea").innerHTML = xhtm.responseText;
        }
    }

    xhtm.open("POST",url,true);
    xhtm.send();
}


function eventHandler(url){
    this.url = url;
    var http;
    if(window.XMLHttpRequest){
        http = new XMLHttpRequest();
    }else{
        http = new ActiveXObject("Microsoft.XMLHttp");
    }

    var name = document.getElementById("name").value;

    if(name == ""){
        Swal.fire('Error','No name was entered','error');
    }else{
        http.onreadystatechange = function(){
            if(http.readyState == 4 && http.status == 200){
                Swal.fire('Successful','Name has been added to the list','success');
            }
        }

        var param = "name="+name;
        http.open("POST",url,true);
        http.setRequestHeader("content-type","application/x-www-form-urlencoded");
        http.send(param);

        document.getElementById("name").value = "";

    }    
}


function verifier(){
    this.url = url;
    var http;
    if(window.XMLHttpRequest){
        http = new XMLHttpRequest();
    }else{
        http = new ActiveXObject("Microsoft.XMLHttp");
    }

    var name = document.getElementById("vname").value;

    if(name == ""){
        Swal.fire('Error','You did not type a key word to search','error');
    }else{
        http.onreadystatechange = function(){
            if(http.readyState == 4 && http.status == 200){
                var response = http.responseText;
                Swal.fire(response,'','success');
            }
        }

        var param = "vname="+name;
        http.open("POST","verificationHandler.php",true);
        http.setRequestHeader("content-type","application/x-www-form-urlencoded");
        http.send(param);

        document.getElementById("vname").value = "";

    }    
}