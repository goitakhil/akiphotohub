<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <header>
      <nav>
        <!-- <a href="#">
          <img src="mylogo.png" alt="logo">
        </a> -->
          <div class="nav-login">
            <?php
              if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                  </form>';
              }
              else {
                echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                  </form>
                    <a href="signup.php">SignUp</a>';
              }
             ?>
          </div>
      </nav>
    </header>
