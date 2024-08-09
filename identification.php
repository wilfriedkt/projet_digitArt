<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification</title>
    <!-- <base href="http://localhost/DigitalBillet/Billet/">-->
    <link rel="stylesheet" href="identification.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="vendors/dropzone/dropzone.css" rel="stylesheet" />
    <script src="vendors/dropzone/dropzone-min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <div class="fondBlue">
            <div class="fondBlanc">
                <div class="step">
                    <div class="toutstep">
                        <div class="etape text ">
                            <span class="colorStepDone colorStepEditing" id="identification">IDENTIFICATION</span>
                            <span class="" id="identification2">INFORMATIONS PERSONNELLES</span>
                            <span  id="identification3">INFORMATIONS SUR L'ACTIVITE</span>
                        </div>
                        <div class="trait">
                            <div class="cercle done editing"></div>
                            <div class="cercle  "></div>
                            <div class="cercle"></div>
                        
                        </div>
                    </div>
                </div>
               
                <div class="chp-oblig"><p>Les champs marqués <span>*</span> sont obligatoire</p></div>
                <form action="" method="post" class="contenu">  <!-- LE FORMULAIRE COMMENCE ICI-->
                    <div class="text" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                            <label>Civilité <span >*</span></label>
                            <select class="form-select" id="uniqueselectt" style="  border: 1px solid #022D54B7;background: #FFFFFF 0% 0% no-repeat padding-box;"> 
                                
                                <option value="Anniversaires">Choisissez une option</option>
                                <option value="Ateliers">Ateliers</option>
                                <option value="Ballets">Ballets</option>

                            </select>
                    </div>
                    
                    <div class="container2 ">
                                <div class="text">
                                    <label for="">Nom et prénom <span style="color: orange;">*</span></label><input class="form-select" type="text"  style="  border: 1px solid #022D54B7;background: #FFFFFF 0% 0% no-repeat padding-box;" placeholder="Votre nom et prénom">
                                </div>
                                <div class="text">
                                    <label for="">Date de naissance <span style="color: orange;">*</span></label><input class="form-select" type="date" style="  border: 1px solid #022D54B7;background: #FFFFFF" name="DateDebutEvent" ><!-- UN INPUT ICI-->
                                </div>
                    </div>
                    
                    <div class="container2">
                                <div class="text">
                                    <label >Ville de résidence <span style="color: orange;">*</span></label>
                                    <select class="form-select " id="d" style="  border: 1px solid #022D54B7;background: #FFFFFF 0% 0% no-repeat padding-box;" name="TypeEvent" >  <!-- UN INPUT ICI-->
                                        
                                        <option value="Anniversaires">Anniversaires</option>
                                        <option value="Ateliers">Ateliers</option>
                                        <option value="Ballets">Ballets</option>

                                    </select>
                                </div>
                                <div  class="text">
                                    <label >Pays d'origine</label>
                                    <select class="form-select" id="d" style="  border: 1px solid #022D54B7;background: #FFFFFF 0% 0% no-repeat padding-box;" name="TypeEvent" aria-label="Votre pays d'origine">  <!-- UN INPUT ICI-->  
                                        <option value="Anniversaires">Anniversaires</option>
                                        <option value="Ateliers">Ateliers</option>
                                        <option value="Ballets">Ballets</option>

                                    </select>
                                    
                                </div>
                    </div>



                    <div class="container2">
                                <div class="text">
                                    <label for="country-code">N° Téléphone <span style="color: orange;">*</span></label>
                                    
                                    <div class="form-group" style="width:100% ;">
                                        <div class="phone-input" style="width:100%; border: 1px solid #022D54B7;height:2.5em;display: flex; flex-direction:row;background-color: #ffFFFF;">
                                            <select id="telId" >
                                                <option value="+225">+225</option>
                                                <option value="+33">+33 </option>
                                                <option value="+44">+44</option>
                                            </select>
                                            <input type="text" id="country-code"  class="form-group-input" placeholder="Numéro de téléphone"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                <label >2ième Téléphone </label>
                                <select class="form-select" id="d" style="  border: 1px solid #022D54B7;background-color: #FFFFFF" name="TypeEvent" aria-label="Default select example">  <!-- UN INPUT ICI-->  
                                    <option value="Anniversaires">Anniversaires</option>
                                    <option value="Ateliers">Ateliers</option>
                                    <option value="Ballets">Ballets</option>

                                </select>
                                    
                                </div>
                    </div>
                   
                    <div class="file-input-u text" >
                        <label for="file-input">Téléchargez une photo ici</label>
                        <div class="file-input-container" >
                            <input type="file" id="file-input"  />
                            <label for="file-input" id="ho" >
                            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#022D54"><path d="M251-160q-88 0-149.5-61.5T40-371q0-79 50.5-137.5T217-579q15-84 82-148.5T451-792q24 0 42 13.5t18 36.5v294l83-83 43 43-156 156-156-156 43-43 83 83v-289q-86 11-135 75.5T267-522h-19q-61 0-104.5 43T100-371q0 65 45 108t106 43h500q45 0 77-32t32-77q0-45-32-77t-77-32h-63v-84q0-68-33-117.5T570-718v-65q81 29 129.5 101T748-522v24q72-2 122 46t50 123q0 69-50 119t-119 50H251Zm229-347Z"/></svg>                                <span class="file-name"></span>
                            </label>
                        </div>
                    </div>
                    <div class="boutons">
                        <button type="button">Précédent</button>
                        <button type="button" id="annulerform">Annuler</button>
                        <button type="submit">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>


<!--Script pour le input de type file-->
<script>
    document.getElementById('file-input').addEventListener('change', function() {
    const fileName = this.files[0].name;
    const fileNameElement = this.nextElementSibling.querySelector('.file-name');
    fileNameElement.textContent = fileName;
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>