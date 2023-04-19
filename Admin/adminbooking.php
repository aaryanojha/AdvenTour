<html>
  <head>
  <link rel="stylesheet" href="admin.css">
  </head>
  <body>
    <form>
    <?php
    //Connect to the MySQL database
    require_once('function.php');
    $conn = DBConnect1();
    $result = display_data1("email");
    ?>
  

    </div><nav class="main-menu">
            <ul>
                <li>
                    <a href="admin.html">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                          Home
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="destination.php">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Destinations
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="adminenquiry.php">
                       <i class="fa fa-comments fa-2x"></i>
                        <span class="nav-text">
                            Enquiries
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="userdetails.php">
                       <i class="fa fa-user fa-2x"></i>
                        <span class="nav-text">
                            User Details
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="adminbooking.php">
                        <i class="fa fa-plane fa-2x"></i>
                        <span class="nav-text">
                            Booking Details
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="../User/Login/login.html">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
        
 
    
 <table border="3" width="80%" align="center" >
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
       <?php  $a = ($row['price'] * $row['adults']) + (($row['price']*$row['children']) / 2); ?>
       <?php echo $a?>

     </td>
   </tr>
   <?php
   }
   ?>
</table>
<?php
?>
 </body>
    </html>
   