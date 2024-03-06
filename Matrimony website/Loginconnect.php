<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $con = new mysqli('localhost', 'root', '', 'Matrimony');
    if ($con) {
        // Using prepared statement to prevent SQL injection
        $sql = "INSERT INTO matrilogin (username, password) VALUES (?, ?)";
        $stmt = $con->prepare($sql);
        
        // Bind parameters
        $stmt->bind_param("ss", $username, $password);
       
        if ($stmt->execute()) {
            echo "Data inserted successfully";
        } else {
            die($stmt->error);
        }
        
        $stmt->close();
        $con->close();
    } else {
        die(mysqli_connect_error());
    }
}
?>

