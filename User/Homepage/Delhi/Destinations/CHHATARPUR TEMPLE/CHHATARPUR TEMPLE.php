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
  <link rel="stylesheet" href="../../../../Enquire/content.css" type="text/css" />
</head>

<body>
  <?php
  require_once "../../../../Database/functions.php";
  ?>
  <form action="../../../../Database/bookdetails.php" method="POST">
    <div class="navbar">
      <!-- Invisible buttons-disabled hover -->
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>

      <a href="../../../homepage.php" style="
            position: relative;
            overflow: hidden;
            padding: 0%;
            height: 55px;
            width: 200px;
            background-image: url(../../../../Images/logo813.jpg);
            background-size: cover;
            align-items: center;
            background-repeat: no-repeat;
          "></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="https://timesofindia.indiatimes.com/travel/travel-news" class="hover-underline-animation">News</a>
      <a href="../../../aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../../../../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fas fa-user-alt"></i>
          <b>
            <?php echo getSessionVar('name'); ?>
          </b>
        </button>
        <div class="dropdown-content">
          <a href="../../../Profile/profile.php">Profile</a>
          <a href="../../../../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&nbsp;
      </div>
    </div>

    <div id="body">
      <img src="../../../../Images/delhi1.jpg" class="stretch" alt="" />
    </div>
    <div class="text">
      <input type="hidden" name="destination" value="CHHATARPUR TEMPLE">
      CHHATARPUR TEMPLE
    </div>

    <div class="box" style="font-family: 'Alata'; font-size: 22px; color: #ff571b; text-decoration: none">

      <b style="font-size: 50; font-family: fantasy"></b>Tour destination : CHHATARPUR TEMPLE
      <hr style="border: 2px solid darkgrey" />


      <p style="color:black"><b>CHHATARPUR TEMPLE</b> Chhatarpur Temple is a Hindu temple located in Chhatarpur,
        a neighborhood in the southern part of Delhi. The temple complex
        is dedicated to Goddess Katyayani, a form of Goddess Durga. It is one of the largest temple complexes in India,
        covering an area of 70 acres. </p>

      <b style="font-size: 50; font-family: fantasy"></b>Travel Details :
      <hr style="border: 2px solid darkgrey" />
      <ul style="color:black">
        <li>The temple complex has several shrines, including ones dedicated to Lord Rama, Lord Ganesha, and Lord Shiva.
        </li>
        <li>The main temple is dedicated to Goddess Katyayani and is made of marble.
          The temple is surrounded by beautiful gardens and water bodies.</li>
        <li>Address: Chhatarpur Mandir Rd, Block A1, Chhatarpur Extension, Chhatarpur, New Delhi, Delhi 110074</li>
        <li>The temple complex is spread over 60 acres of land and includes several shrines, gardens, and water bodies.
        </li>
        <li>The main shrine is dedicated to Goddess Katyayani and is adorned with intricate carvings and sculptures.
        </li>
        <li>The temple also has separate shrines for other deities such as Lord Shiva, Lord Ganesha, and Lord Hanuman.
        </li>
        <li>The complex includes a meditation hall, a prayer hall, and a yagyashala.</li>
        <li>The temple hosts several festivals and events throughout the year, including Navratri and Diwali.</li>
        <li>The temple is located in South Delhi and is easily accessible by road. It is about 15 km from the Indira
          Gandhi
          International Airport and 20 km from the New Delhi Railway Station. </li>
        <li>Taxis, buses, and metro trains are available for reaching the temple.
          The nearest metro station is Chhatarpur Metro Station, which is on the Yellow Line of the Delhi Metro.</li>
      </ul>
    </div>

    <div class="box2" style="font-family: 'Alata'; font-size: 22px; color: #ff571b; text-decoration: none">
      <h4>About the Tour:</h4>
      <hr style="border: 2px solid darkgrey" />
      <ul style="color:black">
        <li><b>Weather :The weather in Delhi can vary depending on the time of year, but the average temperature in May
            is around </b>38° C.</li><br>
        <li><b>Timings :</b> The temple is open from 6:00 AM to 10:00 PM every day.</li><br>
        <li><b>Visiting hours:</b> 8:00 AM - 6:30 PM every day</li><br>
        <li><b>Time Required :</b> It can take anywhere from 1-3 hours to explore the temple complex and take in its
          beautiful surroundings.</li><br>
        <li><b>Entry Fee :</b>There is no entry fee to visit the temple.</li><br>
        <li><b>Light and sound show:</b> INR 25,</li><br>
        <li><b>Foreigners:</b> INR 125</li><br>
      </ul>

      <h4>Packages:</h4>
      <input type="hidden" name="price" value="1000">
      <hr style="border: 2px solid darkgrey" />
      <br>
      <b style="color:black;font-size:110%">CHHATARPUR TEMPLE, Pune :</b>
      <i style="font-size:50px" class="fa" name="price">1000</i>
      <br><br>

      <select name="adults">
        <option value="">Adults</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
      <select name="children">
        <option value="">Children</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
      <input type="hidden" name="redirectTo"
        value="Homepage/Delhi/Destinations/CHHATARPUR TEMPLE/CHHATARPUR TEMPLE.php" />

  </form>

  <p><button class="btn1" formaction="../../../../Payment/payment.php"><b>Book Now!</b></button>
    <input type="submit" value="Add to Bookings" style="margin-left:10vh" class="btn1" name="submit">
  </p>
  <br>
  <p style="color:black">*Note: Children are only from age 0-12*</p>

  <div class="boxbtm">
    <p><img class="btmimg" src="../Images/logo813.jpg" alt="">
    <ul style="list-style-type:none;margin-left:40vh">
      <li>
        <h3 style="color:orangered;">General</h3>
      </li>
      <li><a href="../Homepage/Pune/pune.php" style="text-decoration:none;color: black;">Pune</a></li>
      <li><a href="../Homepage/Mumbai/mumbai.php" style="text-decoration:none;color: black;">Mumbai</a></li>
      <li><a href="../Homepage/Delhi/delhi.php" style="text-decoration:none;color: black;">Delhi</a></li>
      <li><a href="../Homepage/aboutus.php" style="text-decoration:none;color: black;">About Us</a></li>
    </ul>
    <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:60vh">
      <li>
        <h3 style="color:orangered;">Community</h3>
      </li>
      <li><a href="" style="text-decoration:none;color: black;">News</a></li>
      <li><a href="" style="text-decoration:none;color: black;">Travel Advice</a></li>
    </ul>
    <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:10vh">
      <li>
        <h3 style="color:orangered;">Legal</h3>
      </li>
      <li><a href="" style="text-decoration:none;color: black;">Terms & Conditions</a></li>
      <li><a href="" style="text-decoration:none;color: black;">Booking Terms</a></li>
      <li><a href="" style="text-decoration:none;color: black;">Privacy Policy</a></li>
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
    </p>
    <hr width="20%">
    <p style="text-align:center">
      <a href=""><i class='fab fa-instagram'></i></a>
      <a href=""><i class='fab fa-linkedin-in'></i></a>
      <a href=""><i class='fab fa-twitter'></i></a><br>
      <br>Powered by <a href="../../AdvenTour.html" target="_blank">AdvenTour.in</a>
    </p>

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
      event.preventDefault();
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>