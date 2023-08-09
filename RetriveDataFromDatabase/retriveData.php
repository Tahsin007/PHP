<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rafidsirform";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the "users" table
$sql = "SELECT first_name, last_name, department, subject FROM student ";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
</head>
<body>
    <h1>User Data</h1>
    
    <table border="1">
        <tr>
            <th>first_name</th>
            <th>last_name</th>
            <th>department</th>
            <th>subject</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }
        ?>
    </table>
    
    <?php
    $conn->close();
    ?>
</body>
</html>
