<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/head.php';
?>

<body>

  <?php
  include 'includes/nav.php';
  ?>

  <!-- Jumbotron Header -->
  <header class="jumbotron hero-spacer">
    <div class="aaron">
      <img src="images/aaron.png">
    </div>
    <div class="content">
      <h1>FreedomHack 2016</h1>
      <p>A Hackathon in the memory of Aaron Swartz</p>
      <p><a href="register" class="btn btn-default btn-lg">Register</a>
      </p>
      <!--<p class=""style="float: right; margin-top: -40px;"><a href="http://fsmk.org" target="_blank"><img style="float: right;" src="images/fsmklogo-white.png" width=5%></a><a href="http://hackerearth.com" target="_blank"><img style="float: right;" src="images/he-logo.png" width=5%></a></p>-->
    </div>
  </header>

  <!--<hr>-->
  <!-- Page Content -->
  <div class="container">

    <!-- Information snippets -->
    <div class="row text-center">

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <div class="caption">
            <h3>Register</h3>
            <p>Interested in signing up? Register for FreedomHack 2016 now!</p>
            <p>
              <a href="register" class="btn btn-primary">Register</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <div class="caption">
            <h3>Schedule</h3>
            <p>You can find the schedule for the hackathon here.</p>
            <p>
              <a href="schedule" class="btn btn-default">Schedule</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <div class="caption">
            <h3>Where?</h3>
            <p>FreedomHack 2016 will be held at the offices of HackerEarth, which is located in Bangalore, Koramangala.</p>
            <p>
              <a href="http://www.openstreetmap.org/node/1950357103" class="btn btn-success" target="_blank">Locate on OpenStreetMap</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
          <div class="caption">
            <h3>When?</h3>
            <p>FreedomHack 2016 will kick off on 9th January, 2016 and end about 24 hours later, on 10th January.</p>
            <p><a href="about" class="btn btn-primary">Contact us for more details</a>
            </p>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

    <div class="row text-center">
      <div class="video-wrapper-home">
        <h2>Learn more about Aaron Swartz</h2>
        <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube-nocookie.com/embed/RvsxnOg0bJY' frameborder='0' allowfullscreen></iframe></div>
        <b>Read more about Aaron Swartz <a href="who-was-aaron-swartz">here</a>.</b>
      </div>
      <div class="twitter-feed">
        <a class="twitter-timeline"  href="https://twitter.com/hashtag/ForkTheInternet" data-widget-id="684933373840637952">#ForkTheInternet Tweets</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>

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
