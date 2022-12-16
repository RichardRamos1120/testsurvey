<?php
//login logic
require ("../config.php");

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $usersLog = mysqli_fetch_assoc($result);

    if(!empty($usersLog)){
        $_SESSION['username'] = $usersLog["username"];
        header("Location: ../index.php");
    }
    else {
        header("Location: ../index.php");
        $_SESSION["loginAccess"] = true;
    }
}
else {
    header("Location: ../index.php");
}

//if result is wrong go back to the state of login visible





