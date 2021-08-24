<?php require 'includes/common.php';
$email= mysqli_real_escape_string($con, $_POST['email']);
$password= md5(mysqli_real_escape_string($con, $_POST['password']));
$sql_query="select * from users where email='$email' and password='$password'";
$result=mysqli_query($con, $sql_query);
if(mysqli_num_rows($result)==0){
    echo 'No user found';
}
else{
    $row=mysqli_fetch_array($result);
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']= $row['id'];
    echo $row['id'];
    header('location:products.php');
    
}


 
