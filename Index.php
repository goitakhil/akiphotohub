<?php
  include_once 'header.php';
 ?>
    <main>
      <div class="main-wrapper">
        <section>
          <?php
            if (isset($_SESSION['userId'])) {
              echo "Click the Main Page link below to reach my page.<br>";
              echo '<a href="webDev/index.php">Main</a>';
            }
            else {
              echo '<p>You are logged out!</p>';
            }
           ?>
        </section>
      </div>
    </main>
<?php
  include_once 'footer.php';
 ?>
