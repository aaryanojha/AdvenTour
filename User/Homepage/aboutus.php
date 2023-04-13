<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Quicksand&display=swap");
      body {
        font-family: "Quicksand", sans-serif;
      }
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
        position: absolute;
        left: 10%;
        font-family: "Quicksand", sans-serif;
      }
      .card2 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
        position: absolute;
        right: 10%;
        font-family: "Quicksand", sans-serif;
      }

      .title {
        color: grey;
        font-size: 18px;
      }

      button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }

      a {
        text-decoration: none;
        font-size: 22px;
        color: black;
      }

      button:hover,
      a:hover {
        opacity: 0.7;
      }
      .about-section {
        padding: 60px;
        text-align: center;
        background-color: #5d5647;
        color: white;
      }
      .text {
        position: absolute;
        bottom: 0%;
        font-size: xx-large;
      }
      /* NavBar */
      .navbar {
    overflow: hidden;
    background-color: #ffffff;
    zoom: 90%;
    padding-bottom: 0.25vh;
  }
  
  .navbar a {
    float: left;
    font-size: 2.5vh;
    font-weight: bold;
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
    font-family: 'Quicksand', sans-serif;
  }
  
  .dropdown {
    float: right;
    overflow: hidden;
  }
  
  .dropdown .dropbtn {
    font-size: 2.5vh;
    font-weight: bold; 
    border: none;
    outline: none;
    color: rgb(0, 0, 0);
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: rgb(255, 0, 0);
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  .disabled {
    pointer-events: none;
    opacity: 0.3;
}
    </style>
  </head>
  <body>
    
  <?php
  require_once "../Database/functions.php";
  ?>
  
  <form action="">
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
          background-image: url(../Images/logo813.jpg);
          background-size: cover;
          align-items: center;
          background-repeat: no-repeat;"
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
    <div class="about-section">
      <h1>About Us</h1>
      <p>Made By Aaryan And Pranav, SY BBA(CA), ICCS.</p>
      <p>
        AdvenTour is a travel/tourism website made for user to easily find and
        book new locations to explore.
      </p>
    </div>

    <h2 style="text-align: center">OUR TEAM</h2>

    <div class="card">
      <img src="../Images/man.jpg" alt="John" style="width: 100%" />
      <h2>Aaryan Ojha</h2>
      <p class="title">CEO & Founder, Designer</p>
      <p>ICCS</p>
      <div style="margin: 24px 0">
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      <p><button>Contact</button></p>
    </div>

    <div class="card2">
      <img src="../Images/pranav.jpg" alt="John" style="width: 100%" />
      <h2>Pranav Malwatkar</h2>
      <p class="title">CEO & Founder, Designer</p>
      <p>ICCS</p>
      <div style="margin: 24px 0">
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/pranav-malwatkar-9834b1239"
          ><i class="fa fa-linkedin"></i
        ></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
      </div>
      <p><button>Contact</button></p>
    </div>

    <div style="text-align: center">AdvenTour ko banaya hai</div>
    </form>
  </body>
</html>
