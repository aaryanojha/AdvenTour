<?php 


$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "admin";

 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['submit'])){
  $adults = $_POST['adults'];
  $children = $_POST['children'];

  if(!empty($adults)&& !empty($children)){
      $query = "INSERT INTO bookdetails (adults,children) VALUES('$adults','$children')";
      $result = $conn->query($query);
      if($result){
        echo "<script>
        alert('Added to My Bookings!');
        window.location.href='../Homepage/Pune/Shaniwarwada/shaniwarwada.php'; </script>";
      } else {
        echo "<script>
    alert('Invalid Input');
    window.location.href='../Homepage/Pune/Shaniwarwada/shaniwarwada.php';
    </script>";
      } 
    }
  }

?>