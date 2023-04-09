<?php
if (isset($_POST['register'])) {
  // Check if the email already exists in the database

  $UserName = $_POST['uname'];
  $Email = $_POST['email'];
  $Password = $_POST['pass'];
  $question1 = $_POST['q1'];
  $question2 = $_POST['q2'];
  $IsAdmin = 0;

  //Connect to the MySQL database
  require_once('../Database/functions.php');
  $conn = DBConnect();

  if (
    !empty($UserName) && !empty($Email) && !empty($Password) && !empty($question1) && !empty($question2)
  ) {
    if (mysqli_connect_error()) {
      die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
    } else {
      $SELECT = "SELECT Email From users Where Email=? Limit 1";
      $INSERT = "INSERT Into users(UserName,Email,Password,question1,question2,IsAdmin) values(?,?,?,?,?,?)";

      //prepare statement
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s", $Email);
      $stmt->execute();
      $stmt->bind_result($Email);
      $stmt->store_result();

      $rnum = $stmt->num_rows;
      // var_dump($rnum);
      if ($rnum == 0) {

        // Start the session
        session_start();
        // Create a session object
        $sessionObject = new stdClass();
        $sessionObject->name = $UserName;
        $sessionObject->email = $Email;

        // Save the session object
        $_SESSION['mySessionObject'] = $sessionObject;
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        // var_dump($stmt);

        $stmt->bind_param("sssssi", $UserName, $Email, $Password, $question1, $question2, $IsAdmin);
        $stmt->execute();


        echo "<script>
        alert('Account Created Successfully!');
        window.location.href='../Homepage/homepage.php';        </script>";
      } else {
        echo "<script>
        alert('Someone already registered using this email.');
        window.location.href='../Login/signup.html';
        </script>";
      }
      $stmt->close();
      $conn->close();
    }
  } else {
    echo "<script>
    alert('Invalid Input');
    window.location.href='../Login/signup.html';
    </script>";
  }
}
?>