<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOTEL FES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/hLO.jfif">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>

<body>

    <header>
        <ol class="d-md-flex d-none  mb-0 ">
            <li class="p-2  flex-grow-1"> <i class="fas fa-envelope"> </i> Email :<a class="text-white" href="#">
            HOTEL.FES@gmail.com</a></li>
            <li class="p-2  mr-auto my-flex-item"> <i class="fas fa-phone"> </i>Téléphone :<a class="text-white"
                    href="#"> +2124747</a></li>
            <li class="p-2  my-flex-item"> <a href="#"><i class="fab fa-twitter"> </i></a></li>
            <li class="p-2  my-flex-item"> <a href="#"><i class="fab fa-facebook-f"> </i></a></li>
            <li class="p-2  my-flex-item"> <a href="#"><i class="fab fa-snapchat-ghost"> </i></a></li>
            <li class="p-2  my-flex-item "> <a href="#"><i class="fab fa-instagram"> </i></a></li>

        </ol>


        <div class="d-flex pt-1 pl-4 sticky-top">
            <i id="i1" class="fas fa-hotel"></i>
            <h1 id="h11a" class="fancy ">HOTEL FES</h1>
            <!--f594-->
            <script>
                const text = document.querySelector(".fancy");
                const strText = text.textContent;
                const splitText = strText.split("");
                text.textContent = "";
                for (let i = 0; i < splitText.length; i++) {
                    text.innerHTML += "<h3>" + splitText[i] + "</h3>";
                }
                let char = 0;
                let timer = setInterval(onTick, 50);
                function onTick() {
                    const h3 = text.querySelectorAll('h3')[char];
                    h3.classList.add('fade');
                    char++;
                    if (char == splitText.length) {
                        complete();
                        return;
                    }
                }
                function complete() {
                    clearInterval(timer);
                    timer = null;
                };
            </script>
        </div>


        <nav class="navbar navbar-expand-md navbar-dark  asidein sticky-top">

            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse tabs" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    <li id="dropdown" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " id="navarDropdown " role="button" data-toggle="dropdown"
                            href="#">
                            <div class="pads">
                                <div class="pad1">
                                    <audio class="sound" src="music/hotfes.mp3"></audio>
                                    HOTEL FES
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navarDropdown">

                            <div class="tab is-active">
                                <a class="dropdown-item " data-switcher data-tab="1">
                                    <div class="pads">
                                        <div class="pad2">
                                            <audio class="sound" src="music/missonsetva.mp3"></audio>
                                            MISSIONS ET VALEURS
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="dropdown-divider"> </div>
                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="2">
                                    <div class="pads">
                                        <div class="pad3">
                                            <audio class="sound" src="music/apropre.mp3"></audio>
                                        A PROPOS    
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" id="navarDropdown" role="button" data-toggle="dropdown"
                            href="#">
                            <div class="pads">
                                <div class="pad3">
                                    <audio class="sound" src="music/noscompast.mp3"></audio>
                                    NOS COMPOSATES
                                </div>
                            </div>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navarDropdown">
                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="3">
                                    <div class="pads">
                                        <div class="pad3">
                                            <audio class="sound" src="music/mQFES.mp3"></audio>
                                    MOSQUEE KARAOUIYINE FES        
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-divider"></div>
                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="4">
                                    <div class="pads">
                                        <div class="pad3">
                                            <audio class="sound" src="music/LARTGE.mp3"></audio>
                                            L’ART DÈS LE PLUS JEUNE ÂGE
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-divider"> </div>
                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="5">
                                    <div class="pads">
                                        <div class="pad3">
                                            <audio class="sound" src="music/bis.mp3"></audio>
                                            BUSINESS
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-divider"> </div>
                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="6">
                                    <div class="pads">
                                        <div class="pad3">
                                            <audio class="sound" src="music/Uemffes.mp3"></audio>
                                            UEMF
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <div class="dropdown-divider"> </div>

                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="7">
                                    <div class="pads">
                                        <div class="pad3">
                                         <audio class="sound" src="music/FesTairq.mp3"></audio>
                                        FES HOTEL HAY TAIRQ                   
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-divider"> </div>
                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="8">
                                    <div class="pads">
                                        <div class="pad3">
                                            <audio class="sound" src="music/RESIDENCES.mp3"></audio>
                                            RESIDENCE PRIVEE TROIS SAISONS
                                      </div>
                                    </div>
                                </a>
                            </div>

                            <div class="dropdown-divider"> </div>
                            <div class="tab">
                                <a class="dropdown-item" data-switcher data-tab="10">
                                    <div class="pads">
                                        <div class="pad3">
                                            <audio class="sound" src="music/FClinic.mp3"></audio>
                                            F CLINIC 
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <div class="tab">
                            <a class="nav-link" data-switcher data-tab="9">
                                <div class="pads">
                                    <div class="pad3">
                                        <audio class="sound" src="music/informations.mp3"></audio>
                              INFORMATIONS AU DETAIL            
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <div class="tab">
                            <a class="nav-link" data-switcher data-tab="11">
                                <div class="pads">
                                    <div class="pad3">
                                        <audio class="sound" src="music/Tychambres.mp3"></audio>
                                        TYPE DE CHAMBRES 
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item active">

                        <a class="nav-link" href="#">
                            <div class="pads">
                                <div class="pad3">
                                    <audio class="sound" src="music/NEWSLETER.mp3"></audio>
                                    NEWSLETTER
                                </div>
                            </div>
                        </a>
                    </li>
                <li class="nav-item active">
                        <a class="nav-link" href="index7.php">
                            <div class="pads">
                                <div class="pad3">
                                    <audio class="sound" src="music/Login.mp3"></audio>
                                    LOGIN
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item active">

                        <a class="nav-link" href="index1.php">
                            <div class="pads">
                                <div class="pad3">
                                    <audio class="sound" src="music/inscrire.mp3"></audio>
                                    INSCRIRE
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>

            </div>
        </nav>


        <main>
            <section class="pages">
                <div class="page is-active" data-page="1">
                    <div id="divf">
                        <H1 id="pf">F.H TARIQ</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / F.H TARIQ</h6>
                        </div>
                    </div>
                    <p id="pf">Vibrant, Exclusif, Urbain et Unique, L’hôtel Pestana F.H Tariq Fes disposera de 174 clés,
                        deux restaurants dont un en Rooftop, un centre d’affaires, un SPA avec salle de fitness et une
                        piscine.</p>

                    <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">FES</div>
                            <img id="imgf2" src="img/f1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">FES</div>
                            <img id="imgf2" src="img/f2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">FES</div>
                            <img id="imgf2" src="img/f3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">FES</div>
                            <img id="imgf2" src="img/f4.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">FES</div>
                            <img id="imgf2" src="img/f5.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">FES</div>
                            <img id="imgf2" src="img/f6.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <div class="row">
                            <div class="column">
                                <img id="imgf" class="demo cursor" src="img/f1.jpg" style="width:100%"
                                    onclick="currentSlide(1)" alt="Fes">
                            </div>
                            <div class="column">
                                <img id="imgf" class="demo cursor" src="img/f2.jpg" style="width:100%"
                                    onclick="currentSlide(2)" alt="Hôtels à Fès">
                            </div>
                            <div class="column">
                                <img id="imgf" class="demo cursor" src="img/f3.jpg" style="width:100%"
                                    onclick="currentSlide(3)" alt="Chambre d'hôtes">
                            </div>
                            <div class="column">
                                <img id="imgf" class="demo cursor" src="img/f4.jpg" style="width:100%"
                                    onclick="currentSlide(4)" alt=" Réception d'hôtes">
                            </div>
                            <div class="column">
                                <img id="imgf" class="demo cursor" src="img/f5.jpg" style="width:100%"
                                    onclick="currentSlide(5)" alt="Lieu de repos">
                            </div>
                            <div class="column">
                                <img id="imgf" class="demo cursor" src="img/f6.jpg" style="width:100%"
                                    onclick="currentSlide(6)" alt="Coin repas">
                            </div>
                        </div>
                    </div>

                    <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);

                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("demo");
                            var captionText = document.getElementById("caption");
                            if (n > slides.length) { slideIndex = 1 }
                            if (n < 1) { slideIndex = slides.length }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                            captionText.innerHTML = dots[slideIndex - 1].alt;
                        }
                    </script>
                </div>
                <div class="page" data-page="2">
                    <div id="divf">
                        <H1 id="pf">F.H TARIQ</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / F.H TARIQ</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgff" id="image" src="img/img1.jpg">
                            <script type="text/javascript">
                                let image = document.getElementById('image');
                                let images = ['img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg']
                                setInterval(function () {
                                    let random = Math.floor(Math.random() * 5);
                                    image.src = images[random]
                                }, 900);

                            </script>
                        </div>
                        <aside>
                            <p id="pff"><span id="spanff">F.M Tariq</span> est le nouveau quartier trendy de la ville
                                Fes,
                                passage obligé de ceux qui veulent
                                prendre le pouls de la ville et sentir ses tendances, découvrir les dernières créations
                                de
                                la mode et du
                                design, voir une expo, dîner dans un restaurant en vue, prolonger la soirée dans un
                                lounge
                                et vibrer au
                                rythme des animations permanentes.

                            <p id="pff">Tissant un lien entre les richesses patrimoniales et le Maroc moderne, F.H Tariq
                                propose une expérience
                                immersive et multi-sensorielle inédite. Que l’on souhaite y passer une heure ou une
                                journée,
                                le visiteur
                                trouvera toujours quelque chose à y faire qui nourrira l’âme par des moments de qualité,
                                d’authenticité et
                                de partage.</p>

                            <p id="pff"> Un cadre de vie privilégié, qui offre tout à la fois, l’émulation d’un lieu où
                                tout
                                se passe pourvu de tous
                                les services et le privilège d’évoluer dans un environnement calme et sécurisé.</p>
                            </p>
                        </aside>
                    </div>
                </div>
                <div class="page" data-page="3">
                    <div id="divf">
                        <H1 id="pf">Mosquée Karaouiyine Fes</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / Mosquée Karaouiyine Fes</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgff" id="imag" src="img/musq1.jpg">
                            <script type="text/javascript">
                                setInterval(function () {
                                    var imag = document.getElementById('imag');
                                    var image = ['img/musq1.jpg', 'img/musq2.jpg', 'img/musq3.jpg', 'img/musq4.jpg', 'img/musq5.jpg']

                                    var random = Math.floor(Math.random() * 5);
                                    imag.src = image[random]
                                }, 800);

                            </script>
                        </div>
                        <aside>

                            <h2 id="h11">Mosquée Karaouiyine Fes</h2>
                            <p id="ppff">
                                Réalisée en plusieurs étapes, la mosquée Karaouiyine fut d’abord fondée en 859 par
                                Fatima El Bint
                                Mohamed Ben Abdellah el-Fihri, une femme pieuse venue de Kairouan. Ce sanctuaire,
                                transformé en mosquée
                                en 933, se composa à l’origine d’une salle de prières, de quatre nefs parallèles au mur
                                de la Qibla et
                                d’une cour large dont le mur nord abrita le Minaret. Elle fut agrandie sous les Zénètes
                                en 956, quelques
                                annexes (bibliothèque, chambres de réclusion (khatoua), salles d’ablutions..) furent
                                annexées à la
                                bâtisse sous le règne des Almohades, Mérinides, Saâdiens et Alaouites. Elle a une
                                capacité de 20000
                                personnes.
                            </p>
                        </aside>
                    </div>
                </div>
                <div class="page" data-page="4">
                    <div id="divf">
                        <H1 id="pf">L’ART DÈS LE PLUS JEUNE ÂGE</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span>/ L’ART DÈS LE PLUS JEUNE ÂGE</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgff" id="ima" src="img/art2.jpg">
                            <script type="text/javascript">
                                setInterval(function () {
                                    var ima = document.getElementById('ima');
                                    var imag = ['img/art2.jpg', 'img/art3.jpg', 'img/art4.jpg', 'img/art5.jpg', 'img/art6.jpg']
                                    var random = Math.floor(Math.random() * 5);
                                    ima.src = imag[random]
                                }, 800);

                            </script>
                        </div>
                        <aside>
                            <img id="imga" src="img/mart1.jfif" alt="">
                            <h2 id="h11">L’ART DÈS LE PLUS JEUNE ÂGE </h2>
                            <p id="pf">
                                Parce qu’il n’y a pas d’âge pour être artiste, F.H Tariq a imaginé au cœur de son projet
                                un
                                espace
                                entièrement dédié à la créativité des enfants : le F Art Studio.</p>
                            <p id="pf"> Un lieu d’éveil culturel pour initier et développer le sens artistique de nos
                                bambins.</p>

                            <p id="pf"> F Art Studio est un lieu culturel et artistique qui accueillera les enfants à
                                partir
                                de 4 ans. Imaginé comme
                                une école d’art, F Art Studio sera le premier centre à FES à proposer des activités
                                pédagogiques pour
                                développer le sens artistique de chaque enfant qui sera encadré et supervisé par une
                                équipe
                                de professeurs
                                et formateurs de haut-niveau.</p>

                            <p id="pf">L’art, comme vecteur de communication et d’apprentissage. C’est tout le projet de
                                F.H
                                Tariq</p>

                            <p id="pf"> F Art Studio proposera des activités en tout genre pour favoriser l’expression
                                de
                                soi. À travers des cours
                                de Danse, Musique, Théâtre, Chant, Arts Plastiques, Robotique et pleins d’autres
                                ateliers
                                d’éveil, cet
                                immense studio accueillera les enfants et leurs parents durant toute l’année scolaire !
                            </p>


                        </aside>
                    </div>
                </div>
                <div class="page" data-page="5">
                    <div id="divf">
                        <H1 id="pf">BUSINESS</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / Business</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgbis" id="imagea" src="img/bis1.jpg">
                            <script type="text/javascript">
                                setInterval(function () {
                                    var imagea = document.getElementById('imagea');
                                    var imagesa = ['img/bis1.jpg', 'img/bis2.jpg', 'img/bis3.jpg']
                                    var random = Math.floor(Math.random() * 3);
                                    imagea.src = imagesa[random]
                                }, 800);

                            </script>
                        </div>
                        <aside>
                            <h2 id="h11">BUSINESS</h2>
                            <p id="pf">
                                F.H Tariq offrira une nouvelle génération de 4000 m2 de bureaux et d’espaces
                                ultra-modernes
                                à la pointe de la technologie.
                                Equipés de connexion haut débit, de WI-FI, de réseaux et d’infrastructures IT de
                                dernière
                                génération, ces espaces flexibles et modulaires offriront aux hommes d’affaires, le
                                respect
                                des nouvelles exigences modernes en terme d’espace de travail.</p>
                        </aside>
                    </div>
                </div>
                <div class="page" data-page="6">
                    <div>
                        <div id="divf">
                            <H1 id="pf">Université Euro Méditerranéenne de Fès</H1>
                            <div class="boxf">
                                <h6>ACTUALITÉS</h6>
                                <img id="imgf3" src="img/maroc.gif">
                                <h6 class="pushf"><span id="spanf">ACCUEIL</span> / UEMF</h6>
                            </div>
                        </div>
                        <div class="d-md-flex d-flex-column ">

                            <div>
                                <img class="imgff" id="imaga" src="img/UEMF1.jpg">
                                <script type="text/javascript">
                                    setInterval(function () {
                                        var imaga = document.getElementById('imaga');
                                        var imagea = ['img/UEMF1.jpg', 'img/UEMF2.jpg', 'img/UEMF3.jpg']
                                        var random = Math.floor(Math.random() * 3);
                                        imaga.src = imagea[random]
                                    }, 800);
                                </script>
                            </div>
                            <aside>
                                <img id="imga" src="img/UEMF7.png" alt="">
                                <h2 id="h11">Université Euro Méditerranéenne de Fès</h2>
                                <h1 id="hh1umf"> L'UEMF, où formation de haut niveau, diversité culturelle et vie
                                    estudiantine exceptionnelle convergent</h1>
                                <p id="pf"> Placée sous la Haute Présidence d’Honneur de SA MAJESTE Le ROI MOHAMMED VI,
                                    l'UEMF est une fondation d'utilité publique et à but non lucratif labélisée par
                                    l’Union
                                    pour la Méditerranée (UpM) avec l’appui de ses 43 pays membres. L'UEMF délivre des
                                    diplômes reconnus par l’Etat marocain et plusieurs de ses formations sont en double
                                    diplomation avec les meilleures universités euro-méditerranéennes.</p>

                            </aside>
                        </div>

                    </div>
                </div>
                <div class="page" data-page="7">
                    <div id="divf">
                        <H1 id="pf">Fes Hotel Hay Tairq</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / Fes Hotel Hay Tairq</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgff" id="imageb" src="img/imgs1.jpg">
                            <script type="text/javascript">
                                setInterval(function () {
                                    let imageb = document.getElementById('imageb');
                                    let imagesb = ['img/imgs1.jpg', 'img/imgs2.jpg', 'img/imgs3.jpg', 'img/imgs4.jpg', 'img/imgs5.jpg']
                                    let random = Math.floor(Math.random() * 5);
                                    imageb.src = imagesb[random]
                                }, 800);

                            </script>
                        </div>
                        <aside>
                            <p id="pf"><span id="sspan">F.M Tariq</span> est le nouveau coeur vibrant de Fes. Dédiée à
                                l’art
                                de vivre fasi, F.H Tariq est la première avenue privée ouverte au public. Longue de 500
                                m et
                                reliant le Four Seasons Hotel et les jardins et à l’Avenue Hay Tariq, F.H Tariq a été
                                dessinée par l’architecte Didier Lefort, le décorateur d’intérieur Igor Rebosio et le
                                paysagiste Patrice Marchal.</p>
                            <p id="pf">Nouvelle destination lifestyle,F.M Tariq, a été conçue autour d’un mix inédit
                                incluant hôtel, résidences, bureaux, commerces, restaurants, cafés, galeries d’art,
                                théâtre,
                                lieux d’exposition, clinique et grandes écoles. Avec plus d’une centaine de magasins
                                totalisant 18 000 m² de surface commerciale, le projet F.H Tariq rassemblera une
                                communauté
                                dynamique où se mêleront art, créativité, mode, beauté & gastronomie.</p>
                            <p id="pf">
                                Ce prestigieux projet dont l’investissement avoisine le milliard de dirhams est porté
                                par la
                                société de développement immobilier Downtown Hotel Corporation (DHC) qui s’est entourée
                                dans
                                chacun des domaines et pour chacune de ses composantes de professionnels de renom afin
                                de
                                développer un nouveau concept immobilier unique à Fes et au Maroc.
                            </p>
                            <p id="pf">F.H Tariq est le nouveau quartier unique, qui prend ses racines dans
                                l’authenticité
                                de Fes et respire selon les standards internationaux.
                            </p>
                            </p>
                        </aside>
                    </div>
                </div>
                <div class="page" data-page="8">
                    <div id="divf">
                        <H1 id="pf">THRE SEASONS PRIVATE RESIDENCES</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / THRE SEASONS PRIVATE RESIDENCES</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgff" id="imagec" src="img/im1.jpg">
                            <script type="text/javascript">
                                setInterval(function () {
                                    let imagec = document.getElementById('imagec');
                                    let imagesc = ['img/im1.jpg', 'img/im2.jpg', 'img/im3.jpg', 'img/im4.jpg', 'img/im5.jpg']
                                    let random = Math.floor(Math.random() * 5);
                                    imagec.src = imagesc[random]
                                }, 800);

                            </script>
                        </div>
                        <aside>
                            <p id="pff"> Considéré comme le leader mondial des biens immobiliers de luxe, Four Seasons
                                Private Residences
                                Fes sur F.H Tariq, offrira un nouveau style de vie à ses résidents : service d’hôtel de
                                luxe
                                au quotidien et
                                large éventail d’installations exclusives, telles qu’un fitness, salle de fête, salle de
                                projection, deux
                                piscines, club pour enfants, centre d’affaires et service de conciergerie intégral.</p>
                            <p id="pff"> Les résidents pourront jouir pleinement de leur adresse à Fes avec la certitude
                                d’avoir fait un
                                excellent investissement dans un lieu unique.</p>
                            <p id="pff">Depuis le début de leur commercialisation, 80% des appartements ont été vendus
                                en
                                l’espace de 12
                                mois seulement</p>

                            </footer>


                        </aside>
                    </div>
                </div>
                <div class="page" data-page="9">
                    <div id="divf">
                        <H1 id="pf">RETAIL FOOD ET BEVERAGE</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / RETAIL FOOD ET BEVERAGE</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgff" id="imaged" src="img/imgs1.jpg">
                            <script type="text/javascript">
                                setInterval(function () {
                                    let imaged = document.getElementById('imaged');
                                    let imagesd = ['img/imgs1.jpg', 'img/imgs2.jpg', 'img/imgs3.jpg', 'img/imgs4.jpg', 'img/imgs5.jpg']
                                    let random = Math.floor(Math.random() * 5);
                                    imaged.src = imagesd[random]
                                }, 800);

                            </script>
                        </div>
                        <aside>
                            <h2 id="h11">RETAIL FOOD ET BEVERAGE</h2>
                            <p id="pf">La gestion de l’ensemble des commerces a été confiée à AMS, Aswaq Management &
                                Services Africa, partenaire de F.M Tariq depuis la genèse de ce projet. L’objectif
                                principal
                                étant d’amplifier le dynamisme et l’attractivité globale de la ville tout en
                                préservant
                                les équilibres commerciaux du territoire Fes, l’implantation de nouvelles enseignes
                                permettra de faire émerger de nouveaux concepts commerciaux.</p>
                            <p id="pf">F.M Tariq sera en effet gérée et animée à travers un programme événementiel riche
                                et
                                une communication régulière afin de garantir le succès de cette nouvelle destination qui
                                prévoit d’accueillir plus de 6 millions de visiteurs dès la première année.</p>
                            <footer>
                                <p id="pf">
                                    CONTACT AMS AFRICA – EXCLUSIVE LEASING & MANAGING AGENT</p>
                                <p id="pf"> KENZA KAGHAT <span id="ssspan"> +212 (0) 6 56 51 05 51 –
                                        kkaghat@amsmorocco.com</span>
                                <p id="pf"> GHITA AMMOR <span id="ssspan">+ 212 (0) 6 21 49 95 66 –
                                        gammor@aswaqms.ae</span>
                                </p>

                            </footer>


                        </aside>
                    </div>
                </div>
                <div class="page" data-page="10">
                    <div id="divf">
                        <H1 id="pf">F Clinic</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / F Clinic</h6>
                        </div>
                    </div>
                    <div class="d-md-flex d-flex-column ">
                        <div>
                            <img class="imgclient" id="imagee" src="img/Clinic1.jpg">
                            <script type="text/javascript">
                                setInterval(function () {
                                    let imagee = document.getElementById('imagee');
                                    let imagese = ['img/Clinic1.jpg', 'img/Clinic2.jpg', 'img/Clinic3.jpg']
                                    let random = Math.floor(Math.random() * 3);
                                    imagee.src = imagese[random]
                                }, 800);

                            </script>
                        </div>
                        <aside>
                            <p id="pf2">
                                Les visiteurs et résidents de F.H Tariq pourront profiter d’un espace dédié au
                                bien-être.
                                F Clinic, centre de soins esthétiques médicalisés sera géré par des praticiens et
                                spécialistes internationalement reconnus qui offriront des traitements et soins
                                dernières
                                générations favorisant la relaxation, le rajeunissement et le bien-être.
                            </p>
                        </aside>
                    </div>
                </div>
                <div class="page" data-page="11">
                    <div id="divf">
                        <H1 id="pf">Type de chambres</H1>
                        <div class="boxf">
                            <h6>ACTUALITÉS</h6>
                            <img id="imgf3" src="img/maroc.gif">
                            <h6 class="pushf"><span id="spanf">ACCUEIL</span> / Type de chambres</h6>
                        </div>
                    </div>
                    <header>
                        <p id="pfp">Différents types de chambres d’hôtel existent pour satisfaire vos besoins et votre
                            budget. Voici comment vous pouvez choisir la chambre qui vous convient.</p>
                        <p id="pfp">Les chambres d’hôtel sont généralement classées selon le nombre de lits, la taille
                            et
                            les commodités offertes et les tarifs varient en conséquence. Il y a trois types de chambres
                            d’hôtel de base: les chambres régulières ou familiales et les suites. En outre, on retrouve
                            des
                            chambres communicantes, voisines et adjacentes.</p>
                   
                        </header>
                    <nav class="row navchamber">
                    <?php         
                    include "../dao/clietns.inc";
                         $donnees =  affispecials();
                          if (!is_null($donnees)){
                             foreach($donnees as $ligne){
                   ?> 
                           <div class="col-md-4 col-sm-6 col-xl-12">
                            <div><img id="imagef"  src="<?php echo $ligne["PHOTO"];?>">
                            </div>
                            <div>
                                <h2><?php echo $ligne["titre"] ;?></h2>
                                <p><?php echo $ligne["textt"] ;?></p>
                              
                                <section><i>LE PRIX</i>
                                    <span><?php echo $ligne["PRIX_LOC"];?>DH</span>
                                </section>
                            </div>
                            <div><button><a href="index1.php">INSCRIRE</a></button></div>
                        </div>       
                        <?php }}
                    ?>
                    </nav>
                </div>
                <div class="page" data-page="12">
                    <h1>bb</h1>
                </div>
                <div class="page" data-page="13">
                    <h1>bb</h1>
                </div>
                </div>

            </section>
        </main>

        <script>
            window.onload = () => {
                const tab_switchers = document.querySelectorAll('[data-switcher]');
                for (let i = 0; i < tab_switchers.length; i++) {
                    const tab_switcher = tab_switchers[i];
                    const page_id = tab_switcher.dataset.tab;
                    tab_switcher.addEventListener('click', () => {
                        document.querySelector('.tabs .tab.is-active').classList.remove('is-active');
                        tab_switcher.parentNode.classList.add('is-active');
                        SwitchPage(page_id);
                    });
                }
            }
            function SwitchPage(page_id) {
                console.log([page_id]);
                const current_page = document.querySelector('.pages .page.is-active');

                current_page.classList.remove('is-active');

                const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
                next_page.classList.add('is-active');
            }
        </script>

        <script>
         function initMap() {
                const uluru = { lat: 34.046501, lng: -5.00419 };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 4,
                    center: uluru,
                });
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }
        </script>
        <div id="map"></div>
        <script
 src="https://maps.googleapis.com/maps/api/js?AIzaSyAEuKrMgxVMCuBDTCFoW5tJPG0fIqn_ocY&callback=initMap&libraries=&v=weekly"
            async>
        </script>
        <nav class="d-md-flex d-flex-column  nav1">
            <div id="flexi">
                <i id="i2" class="fas fa-hotel"></i>
                <div id="flex-container">
                    <h2 class="fancy" id="h1">HOTEL</h2>
                    <h2 id="h22">FES</h2>
                </div>
            </div>
            <div class="ml-5">
                <h4 id="h44">Contactez-nous<h4>
                        <p>Telephone : <a href="#"> +2124747</a> </p>
                        <p>E-mail:  <a href="#">HOTEL.FES@gmail.com</a> </p>
            </div>
            <div>
                <h4 id="h44">SIMULER</h4>

                <form action="../dao/contact.php" method="POST">

                    <div id="flex-container">
                        <input type="text" name="name" id="name" placeholder="Votre Nom et pernom*">
                        <input type="email" name="mail" id="mail" placeholder="votre adresse Email*">
                        <input type="text" name="subject" id="subject" placeholder="Sujet*">
                        <textarea name="message" id="message" placeholder="Message.."></textarea>
                        <button>S'abonner !</button>
                    </div>
                </form>


            </div>
        </nav>



        <footer class="d-flex flex-sm-column">
            <h4>© Copyright 2020 - All Rights Reserved By Fes city.</h4>
            <ol class="push">
                <li> <a href="#"><i class="fab fa-twitter"> </i></a></li>
                <li> <a href="#"><i class="fab fa-facebook-f"> </i></a></li>
                <li> <a href="#"><i class="fab fa-snapchat-ghost"> </i></a></li>
                <li> <a href="#"><i class="fab fa-instagram"> </i></a></li>

            </ol>

        </footer>


    </header>
    <script>
        window.addEventListener('load', () => {
            const sounds = document.querySelectorAll('.sound');
            const pads = document.querySelectorAll('.pads div');
            pads.forEach((pad, index) => {
                pad.addEventListener('click', function () {
                    sounds[index].play();
                });
            });
        });
    </script>
    <a class="gotop" href="#"><i class="fas fa-arrow-up"></i></a>


</body>

</html>