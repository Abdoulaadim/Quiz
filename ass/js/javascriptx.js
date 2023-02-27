function check() {

    var choixradio1 = document.getElementById("choixradio1");
    var choix1 = document.getElementById("choix1").value;
    var choixradio2 = document.getElementById("choixradio2");
    var choix2 = document.getElementById("choix2").value;
    var choixradio3 = document.getElementById("choixradio3");
    var choix3 = document.getElementById("choix3").value;
    var choixradio4 = document.getElementById("choixradio4");
    var choix4 = document.getElementById("choix4").value;

    if (choixradio1.checked) {
        document.getElementById("reponse").value = choix1;
        choixradio1.style.border = "thick solid #00FF00"
    } else if (choixradio2.checked) {
        document.getElementById("reponse").value = choix2;
        choixradio2.style.border = "thick solid #00FF00"
    } else if (choixradio3.checked) {
        document.getElementById("reponse").value = choix3;
        choixradio3.style.border = "thick solid #00FF00"
    } else if (choixradio4.checked) {
        document.getElementById("reponse").value = choix4;
        choixradio4.style.border = "thick solid #00FF00"
    }
}