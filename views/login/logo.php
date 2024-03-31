
<?php include('header_d.php') ?>

<?php

if(!isset($_SESSION)){
    session_start();
}

if (isset($_SESSION['username'])) {
      header("refresh:0;url=login_page");
} else { ?>
     <div class="hellow-dwas">
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
    </div>

    
<?php } ?>