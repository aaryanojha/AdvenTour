<html>
  <head>
    <link rel="stylesheet" href="../Homepage/homepage.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
   
  <?php
  require_once "../Database/functions.php";
  ?>
    <form>
      <div class="navbar">
        <!-- Invisible buttons-disabled hover -->
        <!-- <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
    <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a> -->

        <a
          href="../Homepage/homepage.php"
          style="
            position: relative;
            overflow: hidden;
            padding: 0%;
            height: 55px;
            width: 200px;
            background-image: url(../Images/logo811.jpg);
            background-size: cover;
            align-items: center;
            background-repeat: no-repeat;
          "
          ><img src=""
        /></a>
        <a
          href="http://"
          target="_blank"
          rel="noopener noreferrer"
          class="disabled"
        ></a>
        <a href="#news" class="hover-underline-animation">News</a>
        <a href="../Homepage/aboutus.html" class="hover-underline-animation">About Us</a>
        <a href="../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
        <div class="dropdown">
          <button class="dropbtn">
            <i class="fas fa-user-alt"></i>
            <?php echo getSessionVar('name'); ?>
    
          </button>
          <div class="dropdown-content">
            <!-- <a href="../../Homepage/Profile/profile.php">Profile</a> -->
            <a href="./Profile/profile.php">Profile</a>
            <a href="../Login/login.html">Sign Out</a>
          </div>
          &emsp;&emsp;&emsp;&emsp;&nbsp;
        </div>
      </div>

      <!-- <p class="marquee" style="top:30%; font-size:300%;left:40%">Get Ready To</p> -->
      <marquee class="marquee"   behavior=scroll
  direction= up scrollamount=5 height=120vh scrolldelay=1>Travel ,Explore, Discover<p>AdvenTour!</p>  </marquee>

      <button class="button-86" role="button" formaction="./Pune/pune.php">
        Pune
      </button>
      <button class="button-87" role="button" formaction="./Mumbai/mumbai.php">
        Mumbai
      </button>
      <button class="button-88" role="button" formaction="./Delhi/delhi.php">
        Delhi
      </button>

      <div class="escapes__content">
        <span class="escapes__title">Find The Perfect Escape</span>
        <span class="escapes__caption">Discover your ideal Experience</span>
      </div>
      <div class="boxbtm">
        About Us:
        <p style="text-align: center">
          2023 Adventour.com All rights reserved.<br />
          The content and images used on this site are copyright protected and
          copyrights vests with the respective owners. The usage of the content
          and images on this website is intended to promote the works and no
          endorsement of the artist shall be implied. Unauthorized use is
          prohibited and punishable by law.
        </p>
      </div>
    </form>
  </body>
</html>
