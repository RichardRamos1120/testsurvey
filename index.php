<?php require("config.php"); ?>

<?php include_once ("public/header.php"); ?>


<div class="container">
    <!--login form-->
    <form class="login-form <?php if(isset($_SESSION["loginAccess"])) {echo "not-Hide";} else echo "hide" ?>" id="login-form" action="public/log-in.php" method="post">
        <img src="public/img/logo.png" alt="" id="logo">

        <section class="login-form__section">
            <div class="login-form__section__div">
                <label for="username">Email or Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="login-form__section__div">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <input type="submit" value="Log in" id="sign-in">
        </section>
    </form>
    <!--end login form-->

 <!--Question Fields-->
    <section class="questions_field">


        <div class="questions_field__div">
            <h3>Just a couple more questions</h3>
            <label for="email">What is your email address?</label>
            <input type="email" name="question_email" placeholder="example@test.com">
            <small>This is not required</small>
            <button class="questions_field__start-btn" id="startbtn">Start</button>
        </div>

        <div class="questions_field__div hide" id="questions_field__div1">
            <h3 class="question" id="question1">What is your favorite fruit</h3>
            <ul>
                <li>Apple</li>
                <li>Orange</li>
                <li>Mango</li>
            </ul>
            <input type="input" name="fav_fruit" placeholder="Choose your answer from the list" required>
            <button class="next_btn" id="next_btn1">Next</button>
        </div>

        <div class="questions_field__div hide" id="questions_field__div2">
            <h3 class="question" id="question2">What country do you want to visit</h3>
            <ul>
                <li value="usa">USA</li>
                <li value="japan">Japan</li>
                <li value="japan">South Korea</li>
            </ul>
            <input type="input" name="visit_country" placeholder="Choose your answer from the list" required>
            <button class="next_btn" id="next_btn2">Next</button>
        </div>

        <div class="questions_field__div">
            <div class="questions_field__div hide" id="questions_field__div3">
                <h3 class="question" id="question3"></h3>

                <img src="" alt="" id="answ_img">
            </div>
            <button class="next_btn hide" id="next_btn3">Download a Copy</button>
        </div>


    </section>
 <!--end Question Fields-->

</div>

<?php include_once ("public/footer.php"); ?>
<!--clear the login form access to login form history -->
<?php unset( $_SESSION["loginAccess"] ); ?>

