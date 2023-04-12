<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <p><img class="btmimg" src="../Images/logo811.jpg" alt="">
      <ul style="list-style-type:none;margin-left:20vh">
        <li><h3 style="color:orangered;">General</h3></li>
        <li><a href="../Homepage/Pune/pune.php" style="text-decoration:none;color: black;">Pune</a></li>
        <li><a href="../Homepage/Mumbai/mumbai.php" style="text-decoration:none;color: black;" >Mumbai</a></li>
        <li><a href="../Homepage/Delhi/delhi.php" style="text-decoration:none;color: black;" >Delhi</a></li>
        <li><a href="../Homepage/aboutus.html" style="text-decoration:none;color: black;" >About Us</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:50vh">
        <li><h3 style="color:orangered;">Community</h3></li>
        <li><a href="" style="text-decoration:none;color: black;" >News</a></li>
        <li><a href="" style="text-decoration:none;color: black;" >Travel Advice</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:10vh">
        <li><h3 style="color:orangered;">Legal</h3></li>
        <li><a href="" style="text-decoration:none;color: black;" >Terms & Conditions</a></li>
        <li><a href=""style="text-decoration:none;color: black;" >Booking Terms</a></li>
        <li><a href="" style="text-decoration:none;color: black;" >Privacy Policy</a></li>
      </ul>
    </p>
    
        <hr>
        <p style="text-align: center;font-size:2vh">
          2023 Adventour.com All rights reserved.<br />
          The content and images used on this site are copyright protected and
          copyrights vests with the respective owners. The usage of the content
          and images on this website is intended to promote the works and no
          endorsement of the artist shall be implied. Unauthorized use is
          prohibited and punishable by law.
        </p><hr width="20%">
        <p style="text-align:center"> 
                <a href=""><i class='fab fa-instagram'></i></a>
                <a href=""><i class='fab fa-linkedin-in'></i></a>
                <a href=""><i class='fab fa-twitter'></i></a><br>
                <br>Powered by <a href="../../AdvenTour.html" target="_blank">AdvenTour.in</a></p>
              
        <br>
      </div>
    </form>
  </body>
</html>
