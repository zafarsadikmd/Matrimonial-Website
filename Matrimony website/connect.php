<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $troom = $_POST['troom'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $pan = $_POST['pan'];
    $panCardDocument= uploadFile('panCardDocument');
    
    $con = new mysqli('localhost', 'root', '', 'Matrimony');
    if ($con) {
        // Using prepared statement to prevent SQL injection
        $sql = "INSERT INTO matri12 (troom, name, mobile, pan) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("ssss", $troom, $name, $mobile, $pan);
        
            if ($stmt->execute()) {
                echo "Data inserted successfully";
            } else {
                die($stmt->error);
            }
            
            $stmt->close();
        } else {
            die($con->error);
        }
        
        $con->close();
    } else {
        die(mysqli_connect_error());
    }
}
?>
