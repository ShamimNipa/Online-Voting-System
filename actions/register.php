<?php
include("connect.php");
$username = mysqli_real_escape_string($con, $_POST['username']);
$mobile =  mysqli_real_escape_string($con, $_POST['mobile']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
$image = mysqli_real_escape_string($con, $_FILES['photo']['name']);
$tmp_name = mysqli_real_escape_string($con, $_FILES['photo']['tmp_name']);
$std = $_POST['std'];
if ($password == $cpassword) {
    $sql = "insert into userdata(username,mobile,password,photo,standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)";
    move_uploaded_file($tmp_name, "../uploads/$image");
} else {

    echo '<script>alert("Password does not match");
    window.location="../partials/registration.php";
    </script>';
}
$result = mysqli_query($con, $sql);

if ($result) {
    echo '<script>alert("Registration Successful");
    window.location="../";
    </script>';
} else {
    die(mysqli_error($conn));
}