<?php

// Create connection
$conn = new mysqli('localhost','id13459894_tech_sol','Sonu@123456789','id13459894_rohit');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstname, lastname FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr></td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>