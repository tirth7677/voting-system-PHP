<?php 
include("./connect.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$role = $_POST['role'];

if($password == $cpassword){
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect,"INSERT INTO user (name,mobile,password,address,photo,role,status,votes) VALUES ('$name','$mobile','$password','$address','$image','$role',0,0)");
    if($insert){
        echo '<script>
        alert("Registration Successfull");
        window.location.href="../";
        </script>
        ';
    }
    else{
        echo '<script>
        alert("Registration Failed");
        window.location.href="../routes/register.php";
        </script>
        ';
    }
}
else{
    echo '<script>
        alert("Password and Confirm Password are not same");
        window.location.href="../routes/register.php";
        </script>
        ';
}
?>