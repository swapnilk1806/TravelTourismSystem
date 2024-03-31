<head>
    <link rel="stylesheet" href="../../public/css/allshow.css">
    <style>
        .short-loader-main{
            margin-bottom: 100px;
        }
    </style>
</head>

<?php include('./views/layouts/header.php') ?>
<?php

$packagename = $_POST['package'];

require('./database_connect.php');

$tablename1 = 'top_card';
$tablename2 = 'middle_card';
$tablename3 = 'short_card';


$query1 = "SELECT * FROM public.top_card where name = '$packagename';";
$query2 = "SELECT * FROM public.short_card where name = '$packagename';";
$query3 = "SELECT * FROM public.middle_card where name = '$packagename';";


$result1 = pg_query($conn,$query1);
$result2 = pg_query($conn,$query2);
$result3 = pg_query($conn,$query3);
?>
<div class="short-loader-main">
    <?php while ($row = pg_fetch_assoc($result1)) { ?>
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

    <?php while ($row = pg_fetch_assoc($result2)) { ?>
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
    <?php while ($row = pg_fetch_assoc($result3)) { ?>
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

</div>





<?php include('./views/layouts/footer.php') ?>