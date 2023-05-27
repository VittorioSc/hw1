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
    <meta charset="utf-8">
    <title>Quiz: What Kind of Guitarist Are You?</title>
    <link href="https://fonts.googleapis.com/css?family=Pangolin:400,700|Proxima+Nova" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM Plex Sans">
    <link rel="stylesheet" href="stylequiz.css"/>
    <script src="constants.js" defer="true"></script>
    <script src="scriptquiz.js" defer="true"></script>
    <script src="mobile.js" defer="true"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <article>
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
        <div id = "index-box">
        <p><a class = "index" href = "home.php">Home</a></p>
        <p>/</p>
        <p>Quiz</p>
        </div>
        <img id = "background" src = "imageshw1/hollow-body-background.png">
    </header>

      <h1 id = "presentation">What Guitarist Are You?</h1>
     <section id = "quiz">
      <section class="question-name">
        <h1>Which guitarist represents you most?</h1>
      </section>

      <section class="choice-grid">
        <div data-choice-id="blep" data-question-id="one">
          <img src="images/1_1.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="happy" data-question-id="one">
          <img src="./images/1_2.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="sleeping" data-question-id="one">
          <img src="./images/1_3.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="dopey" data-question-id="one">
          <img src="./images/1_4.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="burger" data-question-id="one">
          <img src="./images/1_5.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="cart" data-question-id="one">
          <img src="./images/1_6.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="nerd" data-question-id="one">
          <img src="./images/1_7.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="shy" data-question-id="one">
          <img src="./images/1_8.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="sleepy" data-question-id="one">
          <img src="./images/1_9.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>
      </section>

      <section class="question-name">
        <h1>What guitar would you like or own?</h1>
      </section>

      <section class="choice-grid">
        <div data-choice-id="blep" data-question-id="two">
          <img src="images/2_1.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="happy" data-question-id="two">
          <img src="./images/2_2.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="sleeping" data-question-id="two">
          <img src="./images/2_3.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="dopey" data-question-id="two">
          <img src="./images/2_4.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="burger" data-question-id="two">
          <img src="./images/2_5.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="cart" data-question-id="two">
          <img src="./images/2_6.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="nerd" data-question-id="two">
          <img src="./images/2_7.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="shy" data-question-id="two">
          <img src="./images/2_8.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="sleepy" data-question-id="two">
          <img src="./images/2_9.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>
      </section>

      <section class="question-name">
        <h1>Choose your favorite album</h1>
      </section>

      <section class="choice-grid">
        <div data-choice-id="blep" data-question-id="three">
          <img src="images/3_1.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="happy" data-question-id="three">
          <img src="./images/3_2.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="sleeping" data-question-id="three">
          <img src="./images/3_3.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="dopey" data-question-id="three">
          <img src="./images/3_4.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="burger" data-question-id="three">
          <img src="./images/3_5.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="cart" data-question-id="three">
          <img src="./images/3_6.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="nerd" data-question-id="three">
          <img src="./images/3_7.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="shy" data-question-id="three">
          <img src="./images/3_8.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>

        <div data-choice-id="sleepy" data-question-id="three">
          <img src="./images/3_9.jpg"/>
          <img class="checkbox" src="images/unchecked.png"/>
        </div>
      </section>
  </section>
      <div id="result" class="hidden">
        <h1></h1>
        <p id = "space"></p>
        <div id= "button" >Restart</div>
      </div>
     
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
