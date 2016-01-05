<?php
session_start();
$login_check = $_SESSION['login_check'];
if ($login_check == 1) {
  $conn = mysqli_connect('568c08b22d52718c38000026-saky.rhcloud.com', 'admintamZKi7', 'Lfw4IMZKZSQc', 'freedomhack');
  $registrations = mysqli_query($conn, "SELECT * FROM registrations ORDER BY ID");
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <?php
  include 'includes/head.php';
  ?>

  <body>


    <!-- Header -->
    <header class="jumbotron hero-spacer">
      <p>
        Hello!
      </p>
      <p>
        <a href="logout.php">Logout</a>
      </p>
    </header>

    <!--  Content -->
    <div class="container">
      <table class="table">
        <thead>
          <th>
            ID
          </th>
          <th>
            Name
          </th>
          <th>
            Email ID
          </th>
          <th>
            Phone Number
          </th>
          <th>
            Team Name
          </th>
          <th>
            Github Handle
          </th>
          <th>
            Problem Statement
          </th>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_object($registrations)) {
            ?>
            <tr>

              <td>
                <?=$row->ID ?>
              </td>
              <td>
                <?=$row->Name ?>
              </td>
              <td>
                <?=$row->Email ?>
              </td>
              <td>
                <?=$row->Phone ?>
              </td>
              <td>
                <?=$row->Team ?>
              </td>
              <td>
                <?=$row->Github ?>
              </td>
              <td>
                <?php
                $option = $row->Problem;
                switch($option) {
                  case 1: echo "Communication app via mesh network";
                  break;
                  case 2: echo "Mobile app for citizen whistle-blowing";
                  break;
                  case 3: echo "Features for federated social networks";
                  break;
                  case 4: echo "Mobile app for Discourse";
                  break;
                  case 5: echo "Improvements to Tor and its plugins";
                  break;
                  case 6: echo "Improvements to Diaspora/Kontalk/XMPP";
                  break;
                  case 7: echo "Improvements to Freedom Box";
                  break;
                  case 8: echo $row->Other;

                }
                ?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
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
    <?php
  }
  else {
    header('Location: signin.php');
  }
  ?>
