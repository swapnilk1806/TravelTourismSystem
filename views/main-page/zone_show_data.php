<head>
    <link rel="stylesheet" href="../../public/css/zonepage.css">
    <link rel="stylesheet" href="../../public/css/allshow.css">
</head>

<?php include('./views/layouts/header.php') ?>

<?php $zone_side = $_GET['name']; ?>

<h2 class="name-zone"><?php echo $zone_side; ?> Zone Indio </h2>

<?php
require('./database_connect.php');
$query = "SELECT * FROM public.middle_card where zone='$zone_side'";
$result = pg_query($conn, $query);
?>
<div class="short-loader-main">
    <?php while ($row = pg_fetch_assoc($result)) { ?>
        
        <div class="short-loader">
            <div class="img-short">
                 <!-- <p class="Compare">Compare</p> -->
                <img src="<?php echo  $row['image'] ?>" alt="">
            </div>
            <div class="sub-shoter">
                <p class="name">CUSTOMIZED HOLIDAYS <span>SHAP2</span></p>
                <p class="short-heading"><?php echo  $row['name']  ?></p>
                <p class="name-i">
                    <i class="fa-solid fa-hotel"></i>
                    <i class="fa-solid fa-camera"></i>
                    <i class="fa-solid fa-plane"></i>
                    <i class="fa-solid fa-bus"></i>
                </p>
                <p class="shoter-load">
                    <i class="fa-solid fa-location-dot"></i>
                    Travel <Span>3</Span> Days <span>1</span> Country <span>1</span> City
                </p>
                <p class="call-now">Call now <span>1800 22 7979</span> to customized this holidays.</p>
            </div>
            <div class="right-shoter">
                <p class="starts">starts from</p>
                <p class="Price-load">&#8377 <?php echo $row['amount'] ?></p>
                <p class="persion">per person on twin sharing</p>
                <a href="/get-show-info/?id=<?php echo $row['id'] ?>/hellow/?tablename1=<?php echo $tablename ?>"><button class="viewport">View Details</button></a>
                <a href="enqure"><button class="viewport-e">Enquire Now</button></a>
            </div>
        </div>

    <?php } ?>
    <div class="headaer-logo"></div>
</div>


<?php include('./views/layouts/footer.php') ?>