<?php
  require 'header.php';
 ?>
      <section class="main-container">
        <div class="main-wrapper">
          <h1>SignUp</h1>
          <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "emptyfields") {
                echo '<p>Fill in the fields!</p>';
              }
              else if ($_GET["error"] == "invaliduidmail") {
                echo '<p>Invalid username and e-mail!</p>';
              }
              else if ($_GET["error"] == "invaliduid") {
                echo '<p> Invalid username!</p>';
              }
              else if ($_GET["error"] == "invalidmail") {
                echo '<p> Invalid e-mail!</p>';
              }
              else if ($_GET["error"] == "passwordcheck") {
                echo '<p> Your password do not match!</p>';
              }
              else if ($_GET["error"] == "usertaken") {
                echo '<p> Username is already taken!</p>';
              }
            }
            else if (isset($_GET['signup'])) {
              if ($_GET['signup'] == "success") {
                echo '<p>SignUp Success!!!</p>';
              }
            }
           ?>
          <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Sign up</button>
          </form>
        </div>
      </section>
<?php
  require 'footer.php';
 ?>
