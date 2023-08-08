<?php
// Establishing a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rafidsirform";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department = $_POST['department'];
    $subject = $_POST['subject'];

    // SQL query to insert form data into the database
    $sql = "INSERT INTO student (first_name, last_name, department, subject) 
            VALUES ('$first_name', '$last_name', '$department', '$subject')";

    if ($conn->query($sql) === true) {
        echo "Form data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
