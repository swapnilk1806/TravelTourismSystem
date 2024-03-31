<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mystery+Quest&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Mystery+Quest&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/indexpage.css">
    <link rel="stylesheet" href="../../public/css/layouts/header.css">
    <link rel="stylesheet" href="../../public/css/layouts/footer.css">
    <link rel="stylesheet" href="../../public/css/show.css">
    <link rel="stylesheet" href="../../public/css/allshow.css">
    <link rel="stylesheet" href="../../public/css/call.css">


    <link rel="icon" href="../../image/logo/logo_i.png" />


    <!-- <link rel="stylesheet" href="../../public/css/login/res.css"> -->

    <style>
        .logo-phoyo p {
            margin-top: 20px;
            font-family: "Mystery Quest", system-ui;
            font-weight: 400;
            font-style: normal;
            color: aqua;
            text-shadow: 1px 1px 3px yellow;
            font-weight: bold;
            font-size: 27px;
        }
    </style>
</head>

<body>
    <header class="header-top">
        <div class="cont-saw">
            <div class="logo-phoyo">
                <p>Hellow Indio</p>
            </div>
            <div class="input-search">
                <form action="/location-search" method="post">
                <input type="text" name="package" placeholder="search 'location'">         
                </form>
            </div>
            <div class="i-logo">
                <div class="upper-i-logo">
                    <span class="material-symbols-outlined call-js">
                        call
                    </span>
                    <span class="material-symbols-outlined">
                        notifications_active
                    </span>
                    <span class="material-symbols-outlined">
                        favorite
                    </span>
                    <a href="sign-logo" class="raku-d">
                        <span class="material-symbols-outlined raku-d">
                            person
                        </span>
                    </a>
                </div>
                <div class="lower-i-logo">
                    <p class="call call-js">call</p>
                    <p class="Wishlist">Wishlist</p>
                    <p class="Notifications">Notifications</p>
                    <a class="raku-d" href="/sign-logo">
                        <P class="Sign ">Sign In</P>
                    </a>
                </div>
            </div>
        </div>
        <div class="header-left-sub">
            <div class="middle-sub-part">
                <a href="/app">
                    <p>Indio <i class="fa-solid fa-caret-down"></i></p>
                </a>
                <p class="hewlloq-p">speciality Tours <button><i class="fa-solid fa-caret-down"></i></button></p>
                <p class="hw_cand">Customized Holidays <i class="fa-solid fa-caret-down"></i></p>
                <!-- <p>Gift a Tour</p> -->
                <a href="/contact_us">
                    <p>Contact US</p>
                </a>
              <a href="/service-info">  <p>Service</p></a>
            </div>
        </div>
    </header>


    <!-- ======================================= call =================================== -->



    <div class="call-ut">
        <div class="call-main">
            <center>
                <header>
                    <p id="call-cg">CALL</p>
                </header>
                <div class="toll-free">
                    <p class="cal-p">Toll free number</p>
                    <h3 id="call-cg" class="call-h3">+91 84211 04301</h3>
                </div>

                <div class="wp_no">
                    <p class="cal-p">whatsapp number</p>
                    <h3 class="call-h3 nam-cl"><i class="fa-brands fa-whatsapp"></i>+ 91 74994 74393</h3>
                    <h3 id="call-cg" class="call-h3 "><i class="fa-brands fa-whatsapp"></i> +91 95524 87844</h3>
                </div>

                <div class="bess-number">
                    <h3 class="call-h3 nam-cl bl-g">Business Hours</h3>
                    <h4 id="call-cg" class="call-h4"><i class="fa-regular fa-clock"></i>10am - 6pm </h4>
                </div>
            </center>
        </div>
    </div>
    <!-- ================== customized holidays =================  -->

    <div class="load-tp-hellow">
        <div class="load-sub-info1">
            <div class="left-hand-side-lod">
                <img id="logocand" src="https://www.veenaworld.com/assets/images/header/customized-header-icon.gif" alt="">
                <h4 class="head-sub">THEMED EXPERENCES - Find your resion!</h4>

                <a href="customized-holidays/?name=Family Fun">
                    <p class="logodh"> <span class="material-symbols-outlined">family_restroom</span>Family Fun</p>
                </a>
                <a href="customized-holidays/?name=Romantic Holidays">
                    <p class="logodh"> <span class="material-symbols-outlined">favorite</span>Romantic Holidays</p>
                </a>
                <a href="customized-holidays/?name=City Breaks">
                    <p class="logodh"> <span class="material-symbols-outlined">apartment</span>City Breaks</p>
                </a>
                <a href="customized-holidays/?name=Getaways">
                    <p class="logodh"><span class="material-symbols-outlined">star</span>GateWay</p>
                </a>
                <a href="customized-holidays/?name=Adventure Stories">
                    <p class="logodh"><span class="material-symbols-outlined">travel</span>Adventure Stories</p>
                </a>
                <a href="customized-holidays/?name=Road Trip">
                    <p class="logodh"><span class="material-symbols-outlined">family_star</span>Road Trip</p>
                </a>
            </div>
            <div class="right-hand-side-lod">
                <div class="upper-side">
                    <img src="https://cfimages.mercuryholidays.co.uk/3vgdkcmqrnp2/14t4QBlzCYSIwGKGxy3Op1/a4c7ca1cba1310ba05e512c7d1ca3c43/Goa_Beach_Stay.jpg?w=1920&fm=jpg&fl=progressive" alt="">
                    <p id="logosd">Luxury Holidays</p>
                </div>
                <div class="lower-side">
                    <div class="upper-side">
                        <img src="https://d230guve1pq62y.cloudfront.net/wp-content/uploads/2019/01/10214324/iStock_000026994380XLarge.jpg" alt="">
                        <p id="logosd">Romantic Holidays</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php $name = 'kadam'; ?>
    <!-- <button >Swapnil keda kadam</button> -->
    <div class="cont">
        <a href="/zone/?name=West">
            <p>West zone Indio</p>
        </a>
        <a href="/zone/?name=East">
            <p>East zone Indio</p>
        </a>
        <a href="/zone/?name=South">
            <p>South zone Indio</p>
        </a>
        <a href="/zone/?name=North">
            <p>North zone Indio</p>
        </a>
    </div>


    <script src="../../public/js/layouts/header.js"></script>