<?php
if(isset($_POST['fine'])){
    $name=$_POST['name'];
    $Mobile=$_POST['mobile'];
    $Pan=$_POST['pan'];
    
$con=new mysqli('localhost','root','','Matrimony');
if($con){

    //echo "connection successfully";
    $sql="insert into Matri (name,mobile,Pan)values('$name','$mobile','$pan')";
    $result=mysqli_query($con,$sql);
    if($result){
    echo "Data inserted sucessfully";
    }
else{
    die(mysqli_error($con));
}
}
else{
    die(mysqli_error($con));
}
}
?>