<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharma net</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,400i,700|Titillium+Web:600" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- jQuery CDN -->
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- JS file -->
    <script src="EA_search/jquery.easy-autocomplete.min.js"></script>
    <!-- CSS file -->
    <link rel="stylesheet" href="EA_search/easy-autocomplete.min.css">
    <!-- Additional CSS Themes file - not required-->
    <link rel="stylesheet" href="EA_search/easy-autocomplete.themes.min.css">
    <script type="text/javascript"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <?php
    include('info.php');
    ?>
    <script type="text/javascript" src="<?='https://maps.googleapis.com/maps/api/js?key='.$key.'&libraries=places'?>"></script>

</head>

<body class="is-boxed">
    <div class="body-wrap boxed-container">
        <div class="button-group">
            <div class="menu">
                <a href="#home" class="active" id="navbutton" title="Home"><svg aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="clinic-medical" id="svgnav"  class="svg-inline--fa fa-clinic-medical fa-w-18" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M288 115L69.47 307.71c-1.62 1.46-3.69 2.14-5.47 3.35V496a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V311.1c-1.7-1.16-3.72-1.82-5.26-3.2zm96 261a8 8 0 0 1-8 8h-56v56a8 8 0 0 1-8 8h-48a8 8 0 0 1-8-8v-56h-56a8 8 0 0 1-8-8v-48a8 8 0 0 1 8-8h56v-56a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v56h56a8 8 0 0 1 8 8zm186.69-139.72l-255.94-226a39.85 39.85 0 0 0-53.45 0l-256 226a16 16 0 0 0-1.21 22.6L25.5 282.7a16 16 0 0 0 22.6 1.21L277.42 81.63a16 16 0 0 1 21.17 0L527.91 283.9a16 16 0 0 0 22.6-1.21l21.4-23.82a16 16 0 0 0-1.22-22.59z"></path>
                    </svg></a>
            </div>
            <div class="menu">
                <a href="#geolocalisation" id="navbutton" title="Géolocalisation"><svg aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="map-marked-alt" id="svgnav" class="svg-inline--fa fa-map-marked-alt fa-w-18" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path>
                    </svg></a>
            </div>
            <div class="menu">
                <a href="#info" id="navbutton" title="Informations"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle"
                        id="svgnav" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                    </svg></a>
            </div>

        </div>
        <!-- <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                
                </div>
            </div>
        </header> -->
        <main>
            <section class="hero text-center" id="home">
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title mt-0 is-revealing"><img src="public/images/pharmanetlogo1.svg" class="logo"></h1>
                        <p class="hero-paragraph is-revealing">Besoin d'une information sur un medicament ?<br>Ne
                            perdez plus votre temps. <br> Faites vos recherches en toute simplicité !</p>
                        <div class="hero-cta is-revealing">
                        <input id="provider-json" class="champ" style="margin-left:10px; margin-right:15px; margin-bottom:15px; height:60px; width:100%;"
                                type="text" value="" />
                                <div class="reponse" style="display: none;" >
                                <div id="nom" class="titre"></div><br>
                                <div id="prescription" class="rep"></div><br>
                                <div class="format-left titre" id="prix_titre"></div><div id="prix" class="format-right rep"></div>
                                <br>
                                <td><div id="taux_titre" class="format-left titre"></div>
                                <div id="taux" class="format-right rep"></div><br><br>
                                <!--<div id="IR_titre" class="format-left titre" ></div>
                                <div id="indicremboursement" class="format-right rep"></div><br><br>-->
                                <div id="gene_titre" class="format titre"></div>
                                <div id="generique" class="format rep"></div>
                                
                            </div>
                        </div>

                    </div>
                </div>
                <div class="containers">
                    <img src="public/images/feuille.png" class="feuille">
                </div>

            </section>

            <section class="hero text-center" id="geolocalisation">
                <div class="container-sm">
                    <i class="fas fa-map-marked-alt markedpage" id="logopage"></i>
                    <h3>Localiser les pharmacies autour de vous !</h3>
                    <h5>Pour plus d'efficacité nous vous conseillons de paramétrer votre position sur haute précision dans les paramètres de localisation de votre appareil.  </h5>
                    <button id="loc-bt">Activer la géolocalisation</button>
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85999.70351495885!2d6.829584885290534!3d47.65546238480941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1549457707571"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>



                </div>
            </section>

            <section class="features section text-center " id="info">
                <div class="container-sm">
                    <i class="fas fa-info-circle infologo" id="logopage"></i>
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="public/images/teamwork.svg" style="width:20%;">
                                    </div>
                                    <h3 class="feature-title mt-24">A propos</h3>
                                    <p class="text-sm">Projet réalisé par une équipe jeune et motivée afin de dynamiser
                                        la recherche d'information sur les médicaments commercialisés en France. Vous
                                        pourrez aussi rechercher et géolocaliser les pharmacies autour de vous. </p>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="public/images/bubble-chat.svg" style="width:20%;">
                                    </div>
                                    <h3 class="feature-title mt-24">Infos</h3>
                                    <p class="text-sm">Avis à nos chers utilisateurs :<br> Pharma_Net décline toute
                                        responsabilité en cas de mauvaise utilisation médicamenteuse, Veuillez
                                        contacter votre médecin ou votre pharmacien pour tout avis médical. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <footer class="site-footer">

            <div class="container">
                <div class="site-footer-inner has-top-divider">

                    <div class="footer-copyright">&copy; 2019 Pharma net, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>


    <script src="search.js"></script>
    <script src="map.js"></script>
</body>

</html>