<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $MobileNo = $_POST['MobileNo'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $conn = new mysqli('localhost','id13459894_tech_sol','Sonu@123456789','id13459894_rohit');
    if($conn ->connect_error){
        die("connection failed :". $conn->connect_error);
    }
    else{
        $stmt = $conn ->prepare("insert into customers(firstname,lastname,MobileNo,email,country,subject) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss",$firstname, $lastname, $MobileNo, $email, $country, $subject);
        $execval = $stmt ->execute();
        echo $execval;
        
        echo "Thank you we'll get back to you soon....";
        echo '<a href="other.php">Click here to know our customers</a>';
        
        $stmt->close();
        $conn->close();
    }
?>





