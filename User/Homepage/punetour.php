<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* scroll to top */
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
    }

    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
  </script>
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../Enquire/content.css" type="text/css" />
</head>

<body>
  
<?php
  require_once "../Database/functions.php";
  ?>
  <form action="" method="POST">
    <div class="navbar">
      <!-- Invisible buttons-disabled hover -->
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>

      <a href="../homepage.php" style="
            position: relative;
            overflow: hidden;
            padding: 0%;
            height: 55px;
            width: 200px;
            background-image: url(../Images/logo813.jpg);
            background-size: cover;
            align-items: center;
            background-repeat: no-repeat;
          "></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="#news" class="hover-underline-animation">News</a>
      <a href="../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fas fa-user-alt"></i>
          <?php
           echo getSessionVar('name');  ?>
          </b>
        </button>
        <div class="dropdown-content">
          <a href="../Homepage/Profile/profile.php">Profile</a>
          <a href="../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&nbsp;
      </div>
    </div>

    <div id="body">
      <img src="../Images/pune1.jpg" class="stretch" alt="" />
    </div>
    <div class="text">
      <input type="hidden" name="destination" value="Shaniwarwada">
      PUNE FULL TOUR
    </div>

    <div class="mainbox">
    <span class="boxcontent"><h1>Pune, Maharashtra</h1></span><br>
      <span class="boxcontent"><img src="../Images/agakhan.jpg" class="imgclass">Pune is a city located in the western Indian state of Maharashtra. It is the second-largest city in the state and is known as the "Oxford of the East" due to the presence of several reputed educational institutions.
Historically, Pune was the seat of the Peshwas, who were the prime ministers of the Maratha Empire. The city played a significant role in the Indian independence movement, and many prominent freedom fighters such as Mahatma Gandhi, Jawaharlal Nehru, and Subhash Chandra Bose had links to the city.
Today, Pune is a bustling metropolis that is known for its vibrant culture, food, and nightlife. The city has a rich history and is home to several museums, forts, and other historical landmarks. Additionally, Pune is surrounded by beautiful hills and valleys, making it a popular destination for trekkers and nature lovers.</span>
    </div>

            <div class="boxbtm">
        <p><img class="btmimg" src="../Images/logo813" alt="">
      <ul style="list-style-type:none;margin-left:40vh">
        <li><h3 style="color:orangered;">General</h3></li>
        <li><a href="../Homepage/Pune/pune.php" style="text-decoration:none;color: black;">Pune</a></li>
        <li><a href="../Homepage/Mumbai/mumbai.php" style="text-decoration:none;color: black;" >Mumbai</a></li>
        <li><a href="../Homepage/Delhi/delhi.php" style="text-decoration:none;color: black;" >Delhi</a></li>
        <li><a href="../Homepage/aboutus.php" style="text-decoration:none;color: black;" >About Us</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:60vh">
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
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up'></i></button>
  </form>
  <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>
