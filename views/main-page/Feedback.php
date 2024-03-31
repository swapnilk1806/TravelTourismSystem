<head>
    <link rel="stylesheet" href="../../public/css/indexpage.css">
    <style>
        /* .rating-upper {
            border: 1px solid rgba(50, 50, 114, 0.792);
            background-color: rgb(36, 36, 70);
            text-align: center;
            height: 1000px !important;
        }

        .rating-card {
            display: inline-block;
            word-wrap: break-word;
        }

        .feed-back-tour {
            text-align: center;
            margin: 35px;
            color: white;
            text-shadow: 1px 1px 1px yellow;
        }

        .sub-rating {
            /* display: flex !important; */
            /* flex-wrap: wrap !important;
        }

        .rating-sub {
            margin-top: 30px;
        } */
    </style>

    <link rel="stylesheet" href="../../public/css/login/feedback.css">
</head>

<?php
include('./views/layouts/header.php');
require('./database_connect.php');
$query = "SELECT * FROM public.feedback;";
$result = pg_query($conn, $query);

?>

<div class="rating-upper">
    <h1 class="feed-back-tour">FeedBack tour</h1>
    <div class="rating-card" id="name-kdg">
        <div class="sub-rating">
            <?php while ($row = pg_fetch_assoc($result)) { ?>
                <div class="rating-sub">
                    <p id="lohorating">Short family Trips <span><i class="fa-solid fa-star"></i></span></p>
                    <p id="tamiltrip"><?php echo $row['package_name']; ?></p>
                    <div class="comments">
                        "<?php echo $row['feedback']; ?>"
                    </div>
                    <p id="tour"><?php echo $row['customer_name'] ?></p>
                    <p id="traveltour">Travelled in <?php echo $row['date']; ?></p>
                </div>
            <?php  } ?>
        </div>
    </div>
</div>
<?php  ?>

<?php include('./views/layouts/footer.php') ?>
