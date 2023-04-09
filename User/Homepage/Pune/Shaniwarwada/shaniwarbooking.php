<?php
session_start();
if(isset($_POST['check']))
{
    $children = $_POST['children'];
    $adults = $_POST['adults'];

    $query = "INSERT INTO destination (Children,Adult) VALUES ('$children','$adults')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: shaniwarwada.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: shaniwarwada.php");
    }
}
?>