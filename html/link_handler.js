$(document).ready(function() { history.replaceState({link:"home"},null,"?content=home"); });

var xmlhttp;
if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
}
else {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

window.onpopstate = function (event) {
    $("#"+event.state.link).click();
};

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        $("#content").fadeOut(150);
        window.setTimeout(function() {
            document.getElementById("content").innerHTML = xmlhttp.responseText;
            try { eval(document.getElementById("hide").innerHTML); }
            catch (err) {}
        }, 150);
        $("#content").fadeIn(150);
    }
};

$("body").on("click","#home",function(e) {
    e.preventDefault();

    if (history.state.link !== "home") {
        history.pushState({link:"home"},null,"index.php?content=home");
    }
    
    xmlhttp.open("GET","./html/home.html",true);
    xmlhttp.send();
});

$("body").on("click","#churches",function(e) {
    e.preventDefault();

    if (history.state.link !== "churches") {
        history.pushState({link:"churches"},null,"index.php?content=churches");
    }
    
    xmlhttp.open("GET","./html/churches.html",true);
    xmlhttp.send();
});

$("body").on("click","#issues",function(e) {
    e.preventDefault();

    if (history.state.link !== "issues") {
        history.pushState({link:"issues"},null,"index.php?content=issues");
    }
    xmlhttp.open("GET","./html/issues.html",true);
    xmlhttp.send();
});

$("body").on("click","#people",function(e) {
    e.preventDefault();
    
    if (history.state.link !== "people") {
        history.pushState({link:"people"},null,"index.php?content=people");
    }
    xmlhttp.open("GET","./html/people.html",true);
    xmlhttp.send();
});

$("body").on("click","#contact",function(e) {
    e.preventDefault();

    if (history.state.link !== "contact") {
        history.pushState({link:"contact"},null,"index.php?content=contact");
    }
    
    xmlhttp.open("GET","./html/contact.html",true);
    xmlhttp.send();
});

$("body").on("click","#colson",function(e) {
    e.preventDefault();

    if (history.state.link !== "colson") {
        history.pushState({link:"colson"},null,"index.php?content=colson");
    }
    
    xmlhttp.open("GET","./html/colson.html",true);
    xmlhttp.send();
});

$("body").on("click","#message",function(e) {
    e.preventDefault();

    if (history.state.link !== "message") {
        history.pushState({link:"message"},null,"index.php?content=message");
    }
    
    xmlhttp.open("GET","./html/message.html",true);
    xmlhttp.send();
});