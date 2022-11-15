
<?php include 'libs/user.php';?>
<?php include 'libs/style.css';?>
<?php
$user = new user();

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])){
    $userRegi = $user->userRegistration($_POST);
}

?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script type="text/javascript" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
<script type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
        </div>
        <?php if(isset($userRegi)){
            echo $userRegi;
        }?>

        <div class="text-center mt-4 name">
            Twitter
        </div>
        <form class="p-3 mt-3" action="" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>            
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="email" name="email" id="pwd" placeholder="Email">
            </div>
            <button class="btn mt-3" name="register" id="register">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="index.php">Log in</a> or
             <a href="signup.php">Sign up</a>
        </div>
    </div>
?>