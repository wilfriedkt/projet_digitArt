<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjouterProduit</title>
    <link rel="stylesheet" href="ajouterProduit.css">
</head>
<body>

    <div class="container">
        <div class="formulaire-container">
            <h2 id="titre">Ajouter une Nouvelle Annonce</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titre-produit">Titre du Produit :</label>
                    <input type="text" id="titre-produit" name="titre-produit" required>
                </div>
                <div class="form-group-inline">
                    <div class="form-group">
                        <label for="categorie-produit">Catégorie du Produit :</label>
                        <select id="categorie-produit" name="categorie-produit" onchange="afficherChampAutre('categorie-produit', 'autre-categorie')">
                            <option value="">Sélectionner une Catégorie</option>
                            <option value="autre">Autre</option>
                            <option value="electronique">Électronique</option>
                            <option value="vetements">Vêtements</option>
                        </select>
                        <input type="text" id="autre-categorie" name="autre-categorie" placeholder="Veuillez spécifier" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="marque-produit">Marque du Produit :</label>
                        <select id="marque-produit" name="marque-produit" onchange="afficherChampAutre('marque-produit', 'autre-marque')">
                            <option value="">Sélectionner une Marque</option>
                            <option value="autre">Autre</option>
                            <option value="marque1">Marque 1</option>
                            <option value="marque2">Marque 2</option>
                        </select>
                        <input type="text" id="autre-marque" name="autre-marque" placeholder="Veuillez spécifier" style="display: none;">
                    </div>
                </div>
                <div class="form-group" style="display: flex; justify-content: space-between;">
                    <div style="width: 48%;">
                        <label for="prix-produit">Prix du Produit :</label>
                        <input type="text" id="prix-produit" name="prix-produit" required>
                    </div>
                    <div style="width: 48%;">
                        <label for="mots-cles-produit">Mots-clés du Produit :</label>
                        <input type="text" id="mots-cles-produit" name="mots-cles-produit" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description-produit">Description du Produit :</label>
                    <textarea id="description-produit" name="description-produit"></textarea>
                </div>
                <div class="image-container">
                    <div class="upload-image">
                        <label for="image-produit-1">
                            <img id="aperçu-1" src="" alt="Aperçu de l'image 1">
                            <span>Choisir la Première Image</span>
                        </label>
                        <input type="file" id="image-produit-1" name="image-produit-1" accept="image/*" onchange="apercevoirImage('image-produit-1', 'aperçu-1')">
                    </div>
                    <div class="upload-image">
                        <label for="image-produit-2">
                            <img id="aperçu-2" src="" alt="Aperçu de l'image 2">
                            <span>Choisir la Deuxième Image</span>
                        </label>
                        <input type="file" id="image-produit-2" name="image-produit-2" accept="image/*" onchange="apercevoirImage('image-produit-2', 'aperçu-2')">
                    </div>
                </div>
                <div class="form-group-buttons">
                    <button class="btn-annuler" type="reset">Annuler</button>
                    <button id="btn-ajouter" type="submit" name="ajouter-produit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function animerBouton() {
            const bouton = document.getElementById('btn-ajouter');
            let echelle = 1;
            let grandir = true;

            setInterval(() => {
                if (grandir) {
                    echelle += 0.01;
                    if (echelle >= 1.1) grandir = false;
                } else {
                    echelle -= 0.01;
                    if (echelle <= 1) grandir = true;
                }
                bouton.style.transform = `scale(${echelle})`;
            }, 30);
        }

        function apercevoirImage(idFichier, idApercu) {
            const inputFichier = document.getElementById(idFichier);
            const apercu = document.getElementById(idApercu);
            const fichier = inputFichier.files[0];

            if (fichier) {
                const lecteur = new FileReader();
                lecteur.onload = function(e) {
                    apercu.src = e.target.result;
                };
                lecteur.readAsDataURL(fichier);
            } else {
                apercu.src = '';
            }
        }

        function afficherChampAutre(idSelect, idChampAutre) {
            const select = document.getElementById(idSelect);
            const champAutre = document.getElementById(idChampAutre);
            champAutre.style.display = select.value === 'autre' ? 'block' : 'none';
        }

        animerBouton();
    </script>

</body>
</html>
