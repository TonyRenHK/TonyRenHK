document.documentElement.style.height = window.innerHeight + 'px';

document.ontouch=function(){ return true; }

document.body.addEventListener('touchmove', function(e) {
    e.stopPropagation();
    e.preventDefault();
});

function hasClass(obj, className) {
    return obj.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(obj, className) {
    if (!this.hasClass(obj, className)) obj.className += " " + className;
}

function removeClass(obj, className) {
    if (hasClass(obj, className)) {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        obj.className = obj.className.replace(reg, ' ');
    }
}

var XMLHttpReq;
function createXMLHttpRequest() {
    try {
        XMLHttpReq = new ActiveXObject("Msxml2.XMLHTTP");//IE高版本创建XMLHTTP
    }
    catch(e) {
        try {
            XMLHttpReq = new ActiveXObject("Microsoft.XMLHTTP");//IE低版本创建XMLHTTP
        }
        catch(e) {
            XMLHttpReq = new XMLHttpRequest();//兼容非IE浏览器，直接创建XMLHTTP对象
        }
    }
}
function sendAjaxRequest(url,data) {
    createXMLHttpRequest();//创建XMLHttpRequest对象  
    XMLHttpReq.open("post", url, true);
    XMLHttpReq.onreadystatechange = processResponse; //指定响应函数
    XMLHttpReq.send(data);
}
//回调函数  
function processResponse() {
    if (XMLHttpReq.readyState == 4) {
        if (XMLHttpReq.status == 200) {
            //...
            console.log("ajax function");
        }
    }
}