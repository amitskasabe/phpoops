<?php

include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$insert = "INSERT INTO users (username , password , role) VALUES ('$username' , '$password' , 1) ";


$select = "select * from users where username = '$username' AND password = '$password'";
$exe = mysqli_query($connection, $select);

if (mysqli_num_rows($exe) > 0) {
    echo 2;
} else {
    $fire = mysqli_query($connection, $insert);
    if ($fire) {
        echo 1;
    } else {
        echo 0;
    }
}


?>