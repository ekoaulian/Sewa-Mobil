<?php
include('header.php');
session_start();
 
if( isset($_SESSION['akses']) )
{
    header('location:'.$_SESSION['akses']);
    exit();
}
 
$error = '';
if( isset($_SESSION['error']) ) {
 
     $error = $_SESSION['error']; // set error
 
     unset($_SESSION['error']);
} ?>
 
<?php echo $error;?>

<link rel="stylesheet" type="text/css" href="csslogin.css">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in</h1>
            <div class="account-wall">
                <img class="profile-img" src="img/ip.jpg" alt="">
                <form method="post" action="check-login.php" class="form-signin" >

                <input type="text" name="usernamemu" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="passwordmu" class="form-control" placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
<br>
</body>

</html>



<!-- <h3>Form Login</h3>
<form action="check-login.php" method="post">
username : <br/>
<input type="text" name="usernamemu" /> <br>
password : <br/>
<input type="password" name="passwordmu" />
<br>
<button>Login</button>
</form> -->