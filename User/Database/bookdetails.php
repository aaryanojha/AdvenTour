<?php
//Connect to the MySQL database
require_once('../Database/functions.php');

$conn = DBConnect();
if (isset($_POST['submit'])) {
  $adults = $_POST['adults'];
  $children = $_POST['children'];
  $destination = $_POST['destination'];
  $price = $_POST['price'];
  $email = getSessionVar('email');
  if (!empty($destination) && !empty($adults) && !empty($children)&& !empty($price)&& !empty($email)) {
   
    $query = "INSERT INTO bookdetails (email,destination,adults,children,price) VALUES('$email','$destination','$adults','$children','$price')";
    $result = $conn->query($query);
    if ($result) {
      echo "<script>
        alert('Added to My Bookings!');
        window.location.href='../Homepage/Pune/Shaniwarwada/shaniwarwada.php'; </script>";
    } else {
      echo "<script>
    alert('Invalid Input');
    window.location.href='../Homepage/Pune/Shaniwarwada/shaniwarwada.php';
    </script>";
    }
  }else {
    echo "<script>
  alert('Invalid Input');
  window.location.href='../Homepage/Pune/Shaniwarwada/shaniwarwada.php';
  </script>";
  }
}

?>