<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/head.php';
?>

<body>

  <?php
  include 'includes/nav.php';
  ?>

  <!-- Header for the page -->
  <header class="jumbotron hero-spacer">
    <h1>Register</h1>
    <p>Register for Freedom Hack 2016 using the form below!</p>
  </header>

  <!-- Page Content -->
  <div class="container">
    <form method="post" action="action/register.php">
      <div class="item">
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name *" required autofocus>
      </div>
      <div class="item">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address *" required>
      </div>
      <div class="item">
        <input type="text" class="form-control" name="github" id="github" placeholder="Enter your Github handle">
      </div>
      <div class="item">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number *" required>
      </div>
      <div class="item">
        <input type="text" class="form-control" name="team" id="team" placeholder="Enter your team name">
      </div>
      <div class="item">
        <select class="form-control" name="problem">
          <option value="1">Communication app via mesh network</option>
          <option value="2">Mobile app for citizen whistle-blowing</option>
          <option value="3">Features for federated social networks</option>
          <option value="4">Mobile app for Discourse</option>
          <option value="5">Improvements to Tor and its plugins</option>
          <option value="6">Improvements to Diaspora/Kontalk/XMPP</option>
          <option value="7">Improvements to Freedom Box</option>
          <option value="8">Other</option>
        </select>
      </div>
      <div class="item">
        <input type="text" class="form-control" name="other" id="other" placeholder="If 'Other', enter your problem statement">
      </div>
      <div class="item">
        <label for="other">Please confirm any other problem statements with the hack master.</label>
      </div>
      <div class="item">
        <button type="submit" class="btn btn-primary">Register!</button>
      </div>
    </form>
  </div>
  <!-- /.container -->
  <?php
  include 'includes/footer.php';
  ?>
  <?php
  include 'includes/js.php';
  ?>
</body>

</html>
