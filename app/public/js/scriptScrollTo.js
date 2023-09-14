"use strict";

// faire un fetch pour pouvoir stopper le scroll devant les lignes textuel non lue
window.addEventListener("load", () => {
    setTimeout(() => {
        window.scrollTo(0, document.body.scrollHeight);
    }, 100);
});

// si l'écran est a une certaine hauteur, créé une div clickable qui renvoie en bas avec du texte a l'intérieur

document.addEventListener('scroll', () => {
    let itsUp = document.getElementById("up");
    if (document.body.scrollHeight - 2000 >= window.scrollY) {
        if (itsUp) {
            itsUp.addEventListener("click", function () {
                window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
            });
        } else {
            let alerte = document.createElement("div");
            alerte.setAttribute("id", "up");
            let messAlerte = document.createElement("p");
            messAlerte.textContent = "Tu observes d'ancien message, clique ici pour revenir au message récent"
            document.querySelector("main").appendChild(alerte);
            alerte.appendChild(messAlerte);
        }
    } else {
        itsUp.remove();
    }
});

