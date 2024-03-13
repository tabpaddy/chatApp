<?php
session_start();
if (isset($_SESSION['unique_id'])) { //if user is logged in
    header("location: users.php");
}
include_once "includes/header.php";
?>
    <div class="wrapper">
        <section class="form login">
            <header>Smallboyintech Chat App</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter Your password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
                
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>

    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
    
</body>
</html>