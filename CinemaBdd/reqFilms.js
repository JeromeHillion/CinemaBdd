// Exécute un appel AJAX GET
// Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès
function ajaxGet(url, callback) {
    let req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Appelle la fonction callback en lui passant la réponse de la requête
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(null);
}


ajaxGet("https://api.themoviedb.org/3/movie/popular?api_key=ddec886742429cd922ebad0010e96c2d&language=fr-FR&page=1", function (reponse) {
    let moviesReq = JSON.parse(reponse);
    const results = moviesReq.results;

    function listFilms(element) {

        let title = document.createElement("h1");
        title.innerHTML += element.title;

        let overview = document.createElement("p")
        overview.innerHTML += element.overview;

        let poster_path = new Image();
        poster_path.src = "https://image.tmdb.org/t/p/w300/" + element.poster_path + "";

        document.querySelector("#filmsSection").appendChild(title);
        document.querySelector("#filmsSection").appendChild(poster_path);
        document.querySelector("#filmsSection").appendChild(overview);

    }

    results.forEach(listFilms);
});


