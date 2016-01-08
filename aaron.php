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
    <div class="aaron">
      <img src="images/aaron.png">
    </div>
    <div class="content">
      <h1>Who Was Aaron Swartz?</h1></div>
    </header>

    <!-- Content -->
    <div class="container">
      <div class="about-aaron">

        <p><a href="https://en.wikipedia.org/wiki/Aaron_Swartz" target="_blank"> Aaron Swartz </a> was a free software hacker, Internet activist and liked to consider himself a political entrepreneur. He was a key contributor to many notable projects from a very young age. At the age of 14, he was part of a committee that created the RSS web feed format, a standard used heavily on the Internet. He was one of the early developers and founding members of Creative Commons, the license used by billions of creative works, including Wikipedia articles. Beyond this, he was instrumental in the development of the Markdown format and development of the web.py framework. The portfolio of projects he worked on is unimaginably impressive and has a profound social impact.</a></p>

        <p>Aaron also contributed to the development of the popular news sharing website Reddit, after his site Infogami merged with Reddit. Although he made millions and a well paying job from the sale of Reddit to bigger corporation, he couldn't survive in the hostile corporate environment, <a href="http://www.aaronsw.com/weblog/everybodysays" target="_blank"> neither did he let the money change his motivations and led a simple life.</a></p>

        <p>Aaron spearheaded in the landmark campaign against SOPA (Stop Online Piracy Act), claiming this bill could potentially shut down entire websites and could stop Americans from communicating with each other. As a result of the campaign, <a href="http://www.democracynow.org/2013/1/14/freedom_to_connect_aaron_swartz_1986" target="_blank">the US Congress ended up shelving the bill indefinitely.</a></p>

        <p>Aaron committed suicide on January 11th, 2013, after being charged for data theft. The prosecution was described as "the product of a criminal-justice system rife with intimidation and prosecutorial overreach" by his family and many others.</p>

        <p>Aaron's life and his contributions to the world have been captured in the heart-melting, yet <a href="https://archive.org/details/TheInternetsOwnBoyTheStoryOfAaronSwartz" target="_blank"> inspiring documentary "The Internet's Own Boy"</a>, which is released in his memory under the Attribution-NonCommercial-ShareAlike 4.0 International License.</p>
      </div>
      <div class="github-profile-container row well">
        <p>
          <h3 class="text-center"> Here are some of Aaron's important projects he left behind for us.</h3>
        </p>
        <div class="github-card col-md-6">
          <div data-theme="default" data-height="" data-width="400" data-github="aaronsw/https-everywhere" class="github-card">
          </div>
          <script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
        </div>
        <div class="github-card col-md-6">
          <div data-theme="default" data-height="" data-width="400" data-github="aaronsw/tor2web" class="github-card">
          </div>
          <script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
        </div>
      </div>
      <div class="video-container">
        <p>
          <div class="video-wrapper">
            <iframe src="https://archive.org/embed/TheInternetsOwnBoyTheStoryOfAaronSwartz" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe>
          </div>
        </p>
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
