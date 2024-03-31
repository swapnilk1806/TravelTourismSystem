<?php include('./views/layouts/header.php')
?>

<head>
    <link rel="stylesheet" href="../../public/css/login/res.css">
</head>

<?php session_start();
 echo $_SESSION['username'];
 echo $_SESSION['password'];
if (isset($_SESSION['username'])) {
      echo "username exit : ".$_SESSION['username']."<br>";
      echo "password exit : ".$_SESSION['password']."<br>";
 ?>
  
<?php } else { echo $_SESSION['username']; ?>
     
       <!-- <div class="hellow-dwas">
        <section class="wrapper">
            <div class="form signup">
                <header>Signup</header>
                <form action="reg_d-hellow-info" method="post">
                    <input type="text" name="name" placeholder="Full name" required />
                    <input type="text" name="username" placeholder="Email address" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <input type="text" name="mo_no" placeholder="Password" required />
                    <div class="checkbox">
                        <input type="checkbox" id="signupCheck" />
                        <label for="signupCheck">I accept all terms & conditions</label>
                    </div>
                    <input type="submit" value="Signup" />
                </form>
            </div>

            <div class="form login">
                <header>Login</header>
                <form action="login_user_password" method="post">
                    <input type="text" name="username" placeholder="Email address" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <a href="forget-pass">Forgot password?</a>
                    <input type="submit" value="Login" />
                </form>
            </div>
            <script>
                const wrapper = document.querySelector(".wrapper"),
                    signupHeader = document.querySelector(".signup header"),
                    loginHeader = document.querySelector(".login header");

                loginHeader.addEventListener("click", () => {
                    wrapper.classList.add("active");
                });
                signupHeader.addEventListener("click", () => {
                    wrapper.classList.remove("active");
                });
            </script>
        </section>
    </div> -->

    <!-- //include('login_page.php'); -->
 <?php } ?>
<!-- <?php // include('./views/layouts/footer.php') 
        ?> -->