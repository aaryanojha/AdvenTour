<?php
// Check if the login form was submitted
if (isset($_POST["login"])) {
    // Get the username and password from the form
    $UserName = $_POST["u"];
    $Password = $_POST["p"];

    // Connect to the database
    require_once "../Database/functions.php";

    $conn = DBConnect();
    if (!empty($UserName) && !empty($Password)) {
        // // Query the database to check if the user exists
        $query = "SELECT * FROM users WHERE UserName='$UserName' AND Password='$Password'";

        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $IsAdmin = $row["IsAdmin"];

            // Start the session
            session_start();

            // Create a session object
            $sessionObject = new stdClass();
            $sessionObject->name = $UserName;
            $sessionObject->email = $row["Email"];
            $sessionObject->isAdmin = $isAdmin;
            $sessionObject->pwd = $Password;

            // Save the session object
            $_SESSION["mySessionObject"] = $sessionObject;

            if ($IsAdmin) {
                header("Location:Admin.php"); // Redirect to dashboard page
            } else {
                header("Location:../Homepage/homepage.php"); // Redirect to dashboard page
            }
        } else {
            // User doesn't exist or wrong password
            echo "<script> alert('Invalid Username or Password !');
            window.location.href='../Login/login.html';
            </script>";
        }
    } else {
        echo "<script> alert('Invalid input !');
        window.location.href='../Login/login.html';
        </script>";
    }
}
?>
