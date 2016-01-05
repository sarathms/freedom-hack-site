<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/head.php';
?>

<body>


  <!-- Header -->
  <header class="jumbotron hero-spacer">
    <h1>
      Login
    </h1>
  </header>

  <!--  Content -->
  <div class="container">
    <form method="post" action="action/signin.php">
      <div class="item">
        <input class="form-control" type="text" name="username" id="username" placeholder="Username" required autofocus>
      </div>
      <div class="item">
        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
      </div>
      <div class="item">
        <button class="btn btn-primary" type="submit">Login</button>
      </div>
    </form>
  </div>
  <!-- /.container -->
  <?php
  include 'includes/js.php';
  ?>
</body>

</html>
