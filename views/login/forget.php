
<?php include('./views/layouts/header.php') 
?>

<head>
    <link rel="stylesheet" href="../../public/css/login/forget_pass.css">
</head>

<div class="dub-low"></div>
<div class="login-gp">
    <center>
        <header>Forget Password</header>
        <p>send password cheack Email</p>
        <form action="send_message" method="post">
            <input type="text" name="mail" placeholder="Email address" required />
            <!-- <input type="password" placeholder="Password" required />
            <a href="#">Forgot password?</a> -->
            <button>GET OTP</button>
        </form>
    </center>
    </div>
<div class="sub-upper"></div>

    <?php  include('./views/layouts/footer.php') ?>