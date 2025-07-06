<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/HomePage.css?v=<?php echo filemtime('css/HomePage.css'); ?>" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title> Accueil | Les Actus De Nico</title>
    <meta name="description"
        content="Les Actus De Nico - Votre nouvelle source d'informations avec un regard particulier sur le monde du handicap" />
    <meta name="keywords" content="handicap, inclusion, sensibilisation, numérique" />
    <meta name="author" content="Nicolas Sarter" />
</head>


<body>
    <div class="scrolling-text">
        <span>NEW ! Le site est désormais optimisé pour une meilleure expérience utilisateur sur mobile.</span>
    </div>

    <ul class="nav-menu">
        <button class="nav-Togle-btn" onclick="toggleNav()">☰</button>
        <div class="navbar-image">
            <img src="./logoNDS.png" alt="" />
        </div>
        <div class="nav-content" aria-labelledby="Barre de navigation">
            <li>
                <a class="active" href="lesactusdenico.info">Accueil</a>
            </li>
            <li>
                <a href="https://podcasts.lesactusdenico.info">podcasts</a>
            </li>
            <li>
                <a href="https://nicodigitalsstudio.com/">Nico Digitals Studio</a>
            </li>
            <li>
                <a href="./contact.html">Contact</a>
            </li>

        </div>
        <div class="Restricted">
            <input id="input-restricted" type="text" placeholder="Mot de passe" /><br />
            <a href="RestrictedAccess.html" style="text-decoration: none">
                <button id="go-to-restrcted" disabled>Connectez vous</button>
            </a>
        </div>
    </ul>


    <div class="homepage-logo">
        <img id="logo" src="./logoNDS.png" alt="" />
    </div>



    <h1 class="main-title">Les Actus De Nico</h1>

    <p class="secondary-title">Votre nouvelle source d'informations avec un regard particulier sur le monde du handicap
    </p>

    <section class="sec-faq" id="no0">
        <div class="content-container">
            <h1>Qui suis-je ?</h1>
            <p>
                ♿️ Je suis Nicolas Sarter, futur communicant, étudiant en première année de Licence
                Information-Communication à l'Université de Lorraine, je suis passionné par les nouvelles technologies,
                notamment le web, le design et la réalisation vidéo. Actuellement, je m'investis dans la création de
                contenus visant à sensibiliser le grand public aux enjeux du #handicap, convaincu que le numérique est
                un vecteur d'inclusion.
            </p>
        </div>
        <button id="scrollIntoView"
            onclick="document.getElementById('projets-section').scrollIntoView({ behavior: 'smooth' });">
            Découvrir mes projets
        </button>
    </section>

    <section class="sec-faq" id="no1">
        <div class="content-container">
            <h1>Quel est mon objectif ?</h1>
            <p>
                Mon objectif est double : m'initier au journalisme tout en contribuant à une meilleure compréhension et
                inclusion du handicap dans notre société.

            </p>
        </div>
    </section>

    <section class="sec-faq" id="no2">
        <h1>Quel est mon parcours ?</h1>
        <p>Je suis actuellement étudiant en L1 information comunication au <a
                href="https://maps.app.goo.gl/chPauQmu6zW7ck116">Campus Lettres et Sciences Humaines de Nancy -
                Université de Lorraine</a> </p>
    </section>

    <section class="sec-faq" id="no3">
        <div class="content-container">
            <h1>A propos de moi</h1>
            <p>
                Je suis aussi un autodidacte, j'ai appris à coder certains langages en
                regardant des vidéos sur internet. Merci FreeCodeCamp J'ai aussi
                appris à utiliser des logiciels de montage vidéo et de création
                d'images.
            </p>
        </div>
    </section>

    <section class="sec-faq" id="no4">
        <div class="content-container">
            <h1>Me soutenir, c'est important</h1>
            <p>
                Si vous souhaitez me soutenir, vous pouvez le faire en cliquant sur
                les boutons ci-dessous. Vous pouvez aussi me contacter pour me
                proposer des projets ou des collaborations.
            </p>
        </div>

        <!-- Ajout d'un bouton pour faire défiler la page jusqu'à l'élément avec l'ID "donane" -->
        <button id="scrollIntoView"
            onclick="document.getElementById('donate-section').scrollIntoView({ behavior: 'smooth' });">
            Soutenir mon travail
        </button>
    </section>

    <section id="linkedin-posts" class="sec-faq">
    </section>
    <h1 class="main-title">Mes derniers posts <span id="Linked">Linked</span><span id="In">In</span></h1>
    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        <!-- LinkedIn post embed 1 -->
        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:<?php
            $lines = file('embed_linkedin.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            echo isset($lines[0]) ? trim($lines[0]) : '';
        ?>?collapsed=1" height="263" width="504" frameborder="0" allowfullscreen="" title="Post intégré"
            style="margin-bottom: 20px;"></iframe>

        <!-- LinkedIn post embed 2 -->
        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:<?php
            $lines = file('embed_linkedin.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            echo isset($lines[1]) ? trim($lines[1]) : '';
          ?>?collapsed=1" height="263" width="504" frameborder="0" allowfullscreen="" title="Post intégré"
            style="margin-bottom: 20px;"></iframe>

        <!-- LinkedIn post embed 3 -->
        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:<?php
            $lines = file('embed_linkedin.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            echo isset($lines[2]) ? trim($lines[2]) : '';
        ?>?collapsed=1" height="263" width="504" frameborder="0" allowfullscreen="" title="Post intégré"
            style="margin-bottom: 20px;"></iframe>
    </div>
    <p style="text-align:center; margin-top: 10px;">
        <a href="https://www.linkedin.com/in/nsarter/" target="_blank" rel="noopener">Voir tous mes posts sur
            LinkedIn</a>
    </p>
    </section>

    <section id="instagram-posts" class="sec-faq">
        <h1 class="main-title">Mes derniers posts <span style="color:#E1306C;">Instagram</span></h1>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
            <?php
        $insta_lines = file('embed_instagram.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        for ($i = 0; $i < 4; $i++) {
            if (isset($insta_lines[$i]) && !empty(trim($insta_lines[$i]))) {
                $post_code = trim($insta_lines[$i]);
                echo '<iframe src="https://www.instagram.com/p/' . $post_code . '/embed" height="440" frameborder="0" scrolling="no" allowtransparency="true" style="width:48%; max-width:340px; min-width:280px; margin-bottom:20px; flex:1 1 48%;"></iframe>';
            }
        }
        ?>
        </div>

        <!-- Script Instagram officiel -->
        <p style="text-align:center; margin-top: 10px;">
            <a href="https://www.instagram.com/lesactusdenico/" target="_blank" rel="noopener">Voir tous mes posts sur
                Instagram</a>
            </p>
        </section>
        
        
        <section id="projets-section">
            
            <h1 class="main-title">Mes travaux dans le domaine de l'IC</h1>
            
            <div class="btn-grid" id="projets">
                <a href="" style="text-decoration: none">
                    <button class="">On Vous En Parle</button>
                </a>
            </div>
        </section>
        
        
        
        <h1 class="main-title">J'apporte mon soutien à : </h1>
        <div class="handijojoText-div">
            <p id="handijojo-text">HandiJojo</p>
            <p>
                Depuis un grave accident, je suis lourdement handicapé. Je vis en
                Moselle. Je retrouve le goût à la vie grâce à de nombreuses activités
                que je souhaite vous faire découvrir
            </p>
        </div>
        
        <div class="btn-grid" id="parterners">
            <a href="https://www.youtube.com/channel/UC-GiuOvF_TdfICy2JzCfliw" style="text-decoration: none">
                <button id="handijojo-youtube" class="handijojo-youtube-button">
                    <img id="handijojo-logo-youtube" class="company-logo" src="./img/youtube_logo.jpeg"
                    alt="HandiJojo Logo" />
                    <span id="span-handijojo-youtube" class="donate-span">Clique Ici pour découvrir la chaine</span>
                </button>
            </a>
            
            <a href="https://www.instagram.com/handi.jojo?utm_source=qr" style="text-decoration: none">
                <button id="handijojo-instagram" class="handijojo-instagram-button">
                    <img id="handijojo-logo-instagram" class="company-logo" src="./img/Instagram_icon.png"
                    alt="HandiJojo Logo" />
                    <span id="span-handijojo-instagram" class="donate-span">Clique Ici pour découvrir le site</span>
                </button>
            </a>
            
            <a href="https://www.tiktok.com/@handijojo?lang=fr" style="text-decoration: none">
                <button id="handijojo-tiktok" class="handijojo-tiktok-button">
                    <img id="handijojo-logo-tiktok" class="company-logo" src="./img/tiktok-icon-free-png.webp"
                    alt="HandiJojo Logo" />
                    <span id="span-handijojo-tiktok" class="donate-span">Clique Ici pour découvrir le tiktok</span>
                </button>
            </a>
            <a href="https://www.facebook.com/people/HandiJojo/61559819096907/?mibextid=kFxxJD"
            style="text-decoration: none">
            <button id="handijojo-facebook" class="handijojo-facebook-button">
                <img id="handijojo-logo-facebook" class="company-logo" src="./img/Facebook_Logo_2023.png"
                alt="HandiJojo Logo" />
                <span id="span-handijojo-facebook" class="donate-span">Clique Ici pour découvrir la page</span>
            </button>
        </a>
    </div>
    
    <section id="donate-section">
        <h1 class="main-title">Me soutenir</h1>
        
        <div class="btn-grid" id="donate">
            <a href="https://hostinger.fr?REFERRALCODE=1NICOLAS267" style="text-decoration: none">
                <button id="hostinger" class="hostinger-button">
                    <img id="hostinger-logo" class="company-logo" src="./img/hostinger-logo.svg" alt="Hostinger Logo" />
                    <span id="span-hostinger" class="donate-span">Clique Ici pour recevoir 20% de réduction</span>
                </button>
            </a>
            
            <a href="https://www.ebuyclub.com/inscription?parrain=sarternicolas" style="text-decoration: none">
                <button id="ebuyclub" class="ebuyclub-button">
                    <img id="ebuyclub-logo" class="company-logo" src="./img/ebuycub_logo.svg" alt="Ebuyclub Logo" />
                    <span id="span-ebuyclub" class="donate-span">Clique Ici pour recevoir 5€</span>
                </button>
            </a>
            
            <a href="joinhoney.com/ref/a0faysg" style="text-decoration: none">
                <button id="honey" class="honey-button">
                    <img id="honey-logo" class="company-logo" src="./img/honey-logo.svg" alt="Honey Logo" />
                    <span id="span-honey" class="donate-span">Clique Ici pour recevoir 5€</span>
                </button>
            </a>
            
            <a href="https://www.moovance.fr/" style="text-decoration: none">
                <button id="moovance" class="moovance-button">
                    <img id="moovance-logo" class="company-logo" src="./img/logo-moovance.png" alt="Moovance Logo" />
                    <span id="span-moovance" class="donate-span">Utilise le code sarte#17605 Pour gagner 6 mooves</span>
                </button>
            </a>
            
            <a href="https://dictanote.co/voicein/install/?r=646920" style="text-decoration: none">
                <button id="dictanote" class="dictanote-button">
                    <img id="dictanote-logo" class="company-logo" src="./img/icon-voicein144.png"
                    alt="Dictanote Logo" />
                    <span id="span-dictanote" class="donate-span">Clique ici pour améliorer ta productivité</span>
                </button>
            </a>
            
            <a href="https://fr.tipeee.com/" style="text-decoration: none">
                <button id="tipeee" class="tipeee-button">
                    <img id="tipeee-logo" class="company-logo" src="./img/tipeee-logo-white.svg" alt="Tipeee Logo" />
                    <span id="span-tipeee" class="donate-span">Clique Ici pour me soutenir</span>
                </button>
            </a>
        </div>
    </section>
    <h1 class="main-title">Un site créé par </h1>
    
    <div class="btn-grid" id="donate">
        <a href="https://nicodigitalsstudio.com/" style="text-decoration: none">
            <button id="babylon" class="babylon-button">
                <img id="babylon-logo" class="company-logo" src="" alt="Babylon Logo" />
                <span id="span-babylon" class="donate-span">Clique Ici pour découvrir le site</span>
            </button>
        </a>
    </div>
    
    <section class="sec-faq" id="no6">
        <h1 class="main-title" id="sc-title">Suivez moi sur :</h1>
        <div class="social-media">
            <a href="https://bento.me/nicolassarter" class="fab fa-bento">
                <img src="./img/bento me icon.png" alt="" width="20px" height="20px" />
            </a>
            <a href="mailto:contact@nicodigitalsstudio.com" class="fab fa-rocketchat"></a>
            <a href="https://linkedin.com/nsarter/" class="fab fa-linkedin"></a>
            <a href="https://www.instagram.com/lesactusdenico/" class="fab fa-instagram"></a>
            <a href="https://piaille.fr/@sarter_nicolas" class="fab fa-mastodon"></a>
            <!-- <a href="discordapp.com/users/689827486204297227" class="fab fa-discord"></a>
            <a href="https://facebook.com" class="fab fa-facebook"></a>
            <a href="https://twitter.com" class="fab fa-twitter"></a>
            <a href="https://youtube.com" class="fab fa-youtube"></a> -->
        </div>
    </section>
    
    <footer>
        <p>© 2025 Les Actus de Nico </p>
        <div class="links">
            <a href="lesactusdenico.info">Accueil | </a>
            <a href="https://podcasts.lesactusdenico.info">Podcasts | </a>
            <a href="https://nicodigitalsstudio.com/">Nico Digitals Studio | </a>
            <a href="./contact.html">Contact | </a>
            <a href="./plan_du_site.html">Plan du site</a>
            
        </div>
    </footer>
    
    <script src="./js/script.js"></script>
    <script async src="//www.instagram.com/embed.js"></script>
</body>

</html>