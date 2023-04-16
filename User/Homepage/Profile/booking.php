<html>

<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>

  </script>
  <link rel="stylesheet" href="../../Homepage/Profile/booking.css" type="text/css" />
</head>
<form action="">

  <body>
    <?php
    session_start();
    $retrievedSessionObject = $_SESSION['mySessionObject'];

    //Connect to the MySQL database
    require_once('../../Database/functions.php');
    $conn = DBConnect();
    $result = display_data();
    ?>

    <div class="navbar">
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>

      <a href="../../Homepage/homepage.php" style="position: relative;
        overflow: hidden; 
        padding: 0%; 
        height: 55px;
        width: 200px;
        background-image: url(../../Images/logo813.jpg);
        background-size:cover;
        align-items: center;
        background-repeat: no-repeat;"></a>
      <a href="#news" class="hover-underline-animation">News</a>
      <a href="../../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">Hi <b>
            <?php
            echo $retrievedSessionObject->name ?>
          </b></button>
        <div class="dropdown-content">
          <a href="../../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      </div>
    </div>

    <div class="box">
      <div class="circle">
        <img src="../../Images/beach.jpg"></img>
      </div>
      <h2 style="
    font-weight: 500;
    position:absolute;
    top: 33%;left: 25%;
    ">&ensp; <?php
    echo $retrievedSessionObject->name ?>
      </h2>
      <a href="../../Homepage/Profile/profile.php" class="text" style="color: blue;">My profile</a>
      <a href="booking.php" class="text" style="top:70%;color: blue;">My Bookings</a>
    </div>

    <div class="col-25">
      <div class="container">
        <h3>Bookings:<span class="price" style="color:black"> <i class="fa fa-plane"></i></span></h3>


        <table border="2" width="90%">
          <tr>
            <th>Email</th>
            <th>Destination</th>
            <th>Adults</th>
            <th>Children</th>
            <th>Price</th>
            <th>Total</th>
          </tr>

          <tr>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <td>
                <?php echo $row['email']; ?>
              </td>
              <td>
                <?php echo $row['destination']; ?>
              </td>
              <td>
                <?php echo $row['adults']; ?>
              </td>
              <td>
                <?php echo $row['children']; ?>
              </td>
              <td>
                <?php echo $row['price']; ?>
              </td>
              <td>
                <?php echo $row['Total']=($row['price']*$row['adults'])+($row['price']/2); ?>
              </td>
            </tr>
            <?php
            }
            ?>
        </table>
      </div>
    </div>
<div> <p><button class="btn1" formaction="../../Payment/payment.php"><b>Book Now!</b></button></div>
  </body>
</form>

</html>