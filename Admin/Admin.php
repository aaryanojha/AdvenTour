<?php
session_start(); // Start the session to access user information

// Check if user is logged in and is an admin
if ($_SESSION['isAdmin'] == 1) {
    // Connect to the database
    require_once('../Database/functions.php');

    $conn = DBConnect();

    // Query to retrieve all enquiries submitted by the specified user
    $sql = "SELECT * FROM enquiries";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Display the results in an HTML formatted table
        echo "<table>";
        echo "<tr><th>Enquiry ID</th><th>Subject</th><th>Message</th><th>Submitted By</th><th>Date Submitted</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['enquiryId'] . "</td>";
            echo "<td>" . $row['subject'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "<td>" . $row['submittedBy'] . "</td>";
            echo "<td>" . $row['dateSubmitted'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No enquiries found for this user.";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // If user is not an admin, redirect to login page
    header("Location: login.php");
    exit();
}
?>