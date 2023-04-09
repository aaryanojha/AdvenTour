<?php
if (isset($_POST['book'])) {
  // Check if the email already exists in the database
  $adults = $_POST['adults'];
  $children = $_POST['children'];
  $destination = $_POST['destination'];
  $price = $_POST['price'];

  if (
    !empty($adults) && !empty($children)
  ) {
    require_once "../Database/functions.php";
    $email = GetSessionVar('email');
    $conn = DBConnect();
 
    $INSERT = "INSERT INTO order(email, destination, price, adult, children) VALUES (?,?,?,?,?)";
    // $INSERT = "select * from order";
    $stmt = $conn->prepare($INSERT);
    $rnum = $stmt->num_rows;
    // var_dump($rnum);
    if ($rnum == 0) {

    $stmt->bind_param("ssiii", $email, $destination, $price, $adults, $children);
    // $stmt->bind_param("s", $email);
    $stmt->execute();
    echo "<script>
    alert('Account Created Successfully!');
    window.location.href='../Homepage/Pune/Shaniwarwada/shaniwarwada.php'; </script>";
    $stmt->close();
    $conn->close();

  } }else {
    echo "<script>
    alert('Invalid Input');
    window.location.href='../Homepage/Pune/Shaniwarwada/shaniwarwada.php';
    </script>";
  }
}
?>