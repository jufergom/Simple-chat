function ajax() {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200) {
            document.getElementById('chat').innerHTML = request.responseText;
        }
    }
    request.open('GET', 'chat.php', true);
    request.send();
}

//para que se refresque la pagina cada segundo 
setInterval(function(){ajax();}, 1000);