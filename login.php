<?php
    require_once 'dbconfig.php';

    session_start();

    if(isset($_SESSION['session_user_id'])){
        header('Location: home.php');
        exit;
    }

    if (!empty($_POST["username"]) && !empty($_POST["password"]) )
    {
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_connect_error());
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        $query = "SELECT id, username, password FROM users WHERE username = '$username'";
        
        $res = mysqli_query($conn, $query) or die(mysqli_connect_error());;
        if (mysqli_num_rows($res) > 0) {
            
            $row = mysqli_fetch_assoc($res);
            if (password_verify($_POST['password'], $row['password'])) {
                $_SESSION["session_username"] = $row['username'];
                $_SESSION["session_user_id"] = $row['id'];
                header("Location: home.php");
                mysqli_close($conn);
                exit;
            }
        }
        $error = "Username e/o password errati.";
    }
    else if (isset($_POST["username"]) || isset($_POST["password"])) {
        $error = "Inserisci username e password.";
    }
?>

<html>
    <head>
        <link rel='stylesheet' href='signup.css'>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM Plex Sans">
        <title>UN Real Music-Login</title>
    </head>
    <body>
        <section>
          <div class = "blocco">
            <h1>Welcome</h1>
            <?php
                if (isset($error)) {
                    echo "<span class='error'>$error</span>";
                }     
            ?>
             <form name = 'login' method = 'post'>
                <div class="username">
                    <div><label for='username'>Username</label></div>
                    <div><input type='text' name='username'></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                </div>
                <div>
                    <input type='submit' value="Log in">
                </div>
            </form>
          <a href="signup.php">Register now</a>
          </div>
      </section>
    </body>
</html>