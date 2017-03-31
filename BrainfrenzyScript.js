function changeBackground(){
    var colorList= ["#CCCCFF","#CCFFCC","#FFCCCC","#CCFFFF","#FFCCFF","#ED8957","#DDDDDD","#BDCFEB"];
    var rdmColor= colorList[Math.floor(Math.random()*colorList.length)];
    $("body").animate({backgroundColor: rdmColor});
}
window.onload = changeBackground;

function getQuestion() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            var iframe = document.createElement('iframe');
            iframe.srcdoc = this.responseText;
            iframe.src = "data:text/html;charset=utf-8,";
            iframe.width = "400px";
            iframe.height = "600px";
            iframe.frameBorder = 0;
            iframe.scrolling = "auto";
            iframe.className += "well";
            document.getElementById("content").appendChild(iframe);
        }
    }
    xmlhttp.open("GET","page2.php");
    xmlhttp.send();
}