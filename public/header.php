
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<!--trigger when login form is visible, hide when login form is not visible-->
<div class="darken <?php if(isset($_SESSION["loginAccess"])) {echo "not-Hide";} else echo "hide" ?>" id="darken">

</div>
<header class="main-header">
    <button class="hamburger-menu" type="button">
        <span class="hamburger-menu__span">&nbsp;</span>
        <span class="hamburger-menu__span">&nbsp;</span>
        <span class="hamburger-menu__span">&nbsp;</span>
    </button>
    <?php
        if(isset($_SESSION["username"])){
            $username = $_SESSION["username"];
        }
        if(!empty($_SESSION["username"])){
            echo "<h2 class='user_name'>Howdy $username</h2>";
        }
        else{
            echo "<a class='login-btn' id='login-btn'>Log in</a>";
        }

    ?>
</header>
