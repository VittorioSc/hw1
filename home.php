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
        <title>Homework 1-Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <script src="spotify.js" defer="true"></script>
        <link href="home.css" rel="stylesheet" type="text/css" />
        <link href="common_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM Plex Sans">
        <script src="mobile.js" defer="true"></script>
        <script src="home.js" defer="true"></script>
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
            <div id ="flex-button">
                <a class = "links" href = "shop.php">Shop</a>
            </div>
            <div id ="flex-button">
                <a class = "links" href = "profile.php">Profile</a>
            </div>
            <div id ="flex-button">
                <a class = "links" href = "logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <header>
        <h1 id = "site"> 
            <p class = "parentesi">(</p>
             <p id = "un">un</p>
             <p class = "parentesi">)</p>
            Real Music
        </h1>
         <p id = "sottotitolo">Listen it. Love it. Feel it.</p> 
        
    </header>
    <section>
        <p id = "block-title">Discover our Guitar's Wiki</p>
        <div id = "blocco-chitarre">
        <div class = "guitars">
            <h1 class = "guitar-name">Hollow Bodies</h1>
            <a href="hollow-body.php"><img src = "imageshw1/hollow-body.png" class="guitar-img"></a>
        </div>
        <div class = "guitars">
            <h1 class = "guitar-name">Semi-Hollow</h1>
            <a href ="semi-hollow-body.php"><img src = "imageshw1/semi-hollow-body.png" class="guitar-img"></a>
        </div>
        <div class = "guitars">
            <h1 class = "guitar-name">Solid bodies</h1>
            <a href ="electric.php"><img src = "imageshw1/electric.png" class="guitar-img"></a>
        </div>
        <div class = "guitars">
            <h1 class = "guitar-name">Acoustics</h1>
            <a href = "acoustic.php"><img src = "imageshw1/acoustic.png" class="guitar-img"></a>
        </div>
        </div>
        <div class = "block-container">
        
        </div>
    </section>
    <div class = "barra-oriz"></div>
    <section id='chitarre'>
                <div class='title-g'>
                    <h1>View all guitars divided by category...</h1>
                    <div id = "cat">
                        <h2 class='type selected' data-type="Hollow">Hollow</h2>
                        <h2 class='type' data-type="SemiHollow">Semi Hollow</h2>
                        <h2 class='type' data-type="electric">Solid Body</h2>
                        <h2 class='type' data-type="acoustic">Acoustic</h2>
                    </div>
                </div>
                <div class='galleria'>

                </div>
                <div class='search_guitar'>
                <h1>...or search by yourself in our complete archive!</h1>
                <input type="text" onkeyup="searchGuitar()" placeholder="Type here..." id = "search-box">
                <div class='search'>

                </div>
                </div>
            </section>
    <div class = "barra-oriz"></div>
            <form id="form_musica">
                <img src = "imageshw1/Spotify-logo.png", id = "logo">
                <h2>Search all your music on Spotify!</h2>
                <div>
                    <input type='text'  onkeyup = "search()"placeholder="Type here" id='album'  >
                    <input type='submit' id='submit' value = "">
             
                </div>    
                <div class="flex-container">
            </div>   
            </form>
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
  <?php mysqli_close($conn); ?>