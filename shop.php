<?php 
    require_once 'dbconfig.php';
    session_start();

    if(isset($_SESSION['session_user_id'])) {
        $userid = $_SESSION['session_user_id'];
    }
    else{
        header("Location: login.php");
        exit;
    }
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $userid = mysqli_real_escape_string($conn, $userid);
    $query = "SELECT * FROM users WHERE id = $userid";
    $res = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($res);
?>

<html>
<head>
        <title>(UN)Real Music - Shop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <link href="shop-style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM Plex Sans">
        <script src="mobile.js" defer="true"></script>
        <script src="shop.js" defer="true"></script>
    </head>
    <body>
    <nav>
    <div id = "menu">
    <button id="open-btn">
        <div></div>
        <div></div>
        <div></div>
    </button>

    <!--Modal & Modal Background-->
    <div id="modal-container">
        <div id="modal">
            <a href = "home.php">Home</a>
            <a href = "history.php">About</a>
            <a href = "https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZZPzQpTbwkRwhhwcggPTwJZRWhqzRRjtCZdpkXKhgRxrbCRDGFDTrDFvXWHpttbRLXWpL">Contact</a>
            <a href = "shop.php">Shop</a>
            <a href = "profile.php">Profile</a>
            <a href = "index.php">Logout</a>
            <div id="close-btn">&times;</div>
        </div>
    </div>
        </div>
        <div id ="flex-container">
            <span class ="flex-item">
                <a class = "links" href = "home.php">Home</a>
            </span>
            <span class ="flex-item">
                <a class = "links" href = "history.php">About</a>
            </span>
            <span class ="flex-item">
                <a class = "links" href = "https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZZPzQpTbwkRwhhwcggPTwJZRWhqzRRjtCZdpkXKhgRxrbCRDGFDTrDFvXWHpttbRLXWpL">Contact</a>
            </span>
            <div id = "barra">
            </div>
            <div class ="flex-button">
                <a class = "links" href = "shop.php">Shop</a>
            </div>
            <div class ="flex-button">
                <a class = "links" href = "profile.php">Profile</a>
            </div>
            <div class ="flex-button">
                <a class = "links" href = "logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <header>
        <div id = "index-box">
        <p><a class = "index" href = "home.php">Home</a></p>
        <p>/</p>
        <p>Shop</p>
        <p>/</p>
        <p>Accessories</p>
        </div>
        <img id = "background" src = "imageshw1/hollow-body-background.png">
    </header>
    <section>
        <h1>Here you can see samples of all the products we can customize for you. For information about buying, shipping and for create your own style contact us!</h1>
        <section id = "fullmerch">

      </section>
      <div id = "barra-f">Gallery</div>
      <section id = "search">
        </section>
</section>       
      <footer>
        <div id = "blocco-social">
            <div id = "nome-sito-piccolo">(un)Real Music</div>
             <div id = "loghi"> 
                <a href="https://www.facebook.com/profile.php?id=100092646932449"><img src = "imageshw1/logo-facebook.png" class="social"></a>
                <a href="https://www.instagram.com/unreal__music/"><img src = "imageshw1/logo-instagram.png" class="social"></a>
                <a href="https://twitter.com/UNRealMusic2"><img src = "imageshw1/logo-twitter.png" class="social"></a>
                <a href="https://www.youtube.com/channel/UCbcoSwKy3T1KuYsJtDpZpvg"><img src = "imageshw1/logo-youtube.png" class="social"></a>
             </div>
        </div>
        <div class = barra-f></div>
         <div id = "blocco-informazioni">
            <div class = "colonne">
                <h1 class = "colonne-titolo">Contact</h1>
                <p class = "colonne-descrizione">
                    Unreal Music, Italy<br><br>
                    22 Vincenzo Saitta street<br><br>
                    3rd Floor<br><br>
                    Bronte, CT 95034<br><br></p>
                <a id = "email" href = https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZZPzQpTbwkRwhhwcggPTwJZRWhqzRRjtCZdpkXKhgRxrbCRDGFDTrDFvXWHpttbRLXWpL> Email: scarfvit@gmail.com</a>
            </div>
            <div class = "colonne">
                <h1 class = "colonne-titolo">Guitars</h1>
                <p class = "colonne-descrizione">
                    <a class = "link-footer" href = "hollow-body.php">Hollow Bodies<br><br></a>
                    <a class = "link-footer" href = "semi-hollow-body.php">Semi-Hollows<br><br></a>
                    <a class = "link-footer" href = "electric.php">Solid Bodies<br><br></a>
                    <a class = "link-footer" href = "acoustic.php">Acoustic<br><br></a>
            </div>
            <div class = "colonne">
                <h1 class = "colonne-titolo">Shop</h1>
                <p class = "colonne-descrizione">
                    <a class = "link-footer" href = "shop.php">Accessories<br><br></a>
                </p>
            </div>
            <div class = "colonne">
                <h1 class = "colonne-titolo">Support</h1>
                <p class = "colonne-descrizione">
                    <a class = "link-footer" href = "signup.php">Registration<br><br></a>
                    <a class = "link-footer" href = "login.php">Login<br><br></a>
            </div>
            <img src = "imageshw1/guitarrist.png" id="guitarrist">
         </div>
        <div class = barra-f></div>
        <div id = "blocco-parole-f">
        <p class = "parole-f">DIEEI, 2023</p>
        <p class = "parole-f">Powered By Vittorio Scarfalloto 1000015817</p>
        </div>
    </footer>
 </body>
</html>