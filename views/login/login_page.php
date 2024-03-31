<?php include('header_d.php') ?>

<head>
  <link rel="stylesheet" href="../../public/css/login/login_page.css">
  <link rel="stylesheet" href="../../public/css/allshow.css">
  <link rel="stylesheet" href="../../public/css/login/cancel.css">
</head>

<?php session_start(); ?>
<div class="sdh">
  <div class="wrapper">
    <div class="img-area">
      <div class="inner-area">
        <img src="https://www.freeiconspng.com/uploads/account-icon-5.jpg" alt="">
      </div>
    </div>
    <div class="icon arrow"> <a href="/"><i class="fas fa-arrow-left"></i> </a></div>
    <!-- <div class="icon dots"><i class="fas fa-ellipsis-v"></i></div> -->
    <div class="name">Username : <?php echo $_SESSION['username'] ?></div>
    <!-- <div class="about">Designer & Developer</div> -->
    <div class="buttons">
      <!-- <button>Message</button> -->
      <a href="log_out_acccount"><button>log out</button></a>
    </div>
    <div class="social-share">
    </div>
  </div>
</div>

<?php
$username = $_SESSION['username'];
//echo "<hr>";

$host = 'localhost';
$dbname = 'TR';
$username = 'postgres';
$password = '1806';

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
  echo "Connection failed";
  exit;
}

$table = 'Registrations';
$tablename1 = 'middle_card';
$tablename2 = 'short_card';
$tablename3 = 'top_card';

$query = "select * from public.\"Registrations\" as r inner join top_card as m on r.p_id = m.id where r.user_id = 'swapnil@this.com'";
$result = pg_query($conn, $query);

while ($row = pg_fetch_assoc($result)) { ?>
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
      <div class="clsp">
      <a href="/cancle_records" > <button class="name-d">Cancle tour</button></a>
      <a href="/feed-back-send/?pname=<?php echo $row['name']; ?>"><button class="feed-black">Feedback</button></a>
      </div>
    </div>
  </div>

<?php }
?>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>