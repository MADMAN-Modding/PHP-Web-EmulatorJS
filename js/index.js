function gb() {    
    node = document.getElementById('gb');
    node.insertAdjacentHTML("beforeend", '<a id="gb-link" href="">The Addams Family</a> ');

    document.getElementById("gb-link").href = "game.html?rom=Addams-Family,-The-(USA).gb&console=gb";

}

gb();