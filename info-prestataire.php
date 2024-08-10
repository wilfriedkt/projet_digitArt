<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau de bord</title>
    <link rel="stylesheet" href="test-resp.css">
</head>
<body>
<?php require "nav-responsive-connect-user.php"; ?>
    <div class="containernum1">
                <p class="p1">Tableau de bord</p>
                <div class="contenernum1-divInterieur">
                    <p>Mode visiteur/Mode prestataire</p>
                </div>
    </div>
<div class="grandediv">
    <div class="grande-div-gauche">
        <div class="containernum2">
            <div class="con">
                <div><img src="./images/Groupe 252.png" alt=""></div>
                <p>Mes activités</p>
            </div>
            <div class="con">
                <div><img src="./images/Groupe -12.png" alt=""></div>
                <p>Mes informations</p>
            </div>
            <div class="con">
                <div><img src="./images/Groupe 254.png" alt=""></div>
                <p>Mes publications</p>
            </div>
            <div class="con">
                <div><img src="./images/Groupe 256.png" alt=""></div>
                <p>Mes favoris</p>
            </div>
        </div>
    </div>
    <div class="grande-div-droite">
        <div class="content1">
            <p>IDENTIFICATION</p>
            <hr>
        </div>
        <div class="gdd2">
            <div class="gdd2-child">
                <img src="./images/Fichier 4.png" alt="">
                <div class="gdd2info">
                    <div class="nom">
                        <p>M. Kouman Adjoum Natan</p>
                    </div>
                    <div><p>Age</p></div>
                    <div><p>Ville de résidence</p></div>
                    <div><p>Pays d'origine</p></div>
                    <div><p>(+225) <span style="font-weight: 600;">00 00 00 00 / 00 00 00 00</span></p></div>
                </div>
            </div>
            <div class="gdd2-child2">
                <div class="nom">
                    <p>INFORMATIONS PERSONNELLES</p>
                    <hr>
                </div>
                <p class="elm">Statut professionnel</p>
                <p class="elm">Métier</p>
                <p class="elm">Expérience</p>
                <p class="elm" style="font-weight:600;">WhatsApp</p>
            </div>
            <div class="gdd2-child3">
                <div class="nom">
                    <p>INFORMATIONS SUR L'ACTIVITE</p>
                    <hr>
                </div>
                <div class="elm">
                    <p>Nombre d'employés</p>
                    <p>Villes de l'activité</p>
                    <p>Point GPS</p>
                    <p>Latitude (x.y°)</p>
                    <p>Longitude (x.y°)</p>
                </div>
                <div class="geolocalisation">
                    <img src="./images/Fichier 5.png"alt="">
                    <button class="update-button">Faire une mise à jour</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>