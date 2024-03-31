

<head>
    <link rel="stylesheet" href="../../../public/css/booking/registration.css">
    <link rel="stylesheet" href="../../../public/css/login/feedback.css">
</head>

<?php include('./views/login/header_d.php') ?>
<?php 
session_start(); 
 echo "username : ". $_SESSION['username'];
$pname = $_GET['pname'];
?>

?>

<div class="div-reg-hp">
  <section class="container">
    <header>Feed back form</header>
    <form action="/data-insert-feedback/?pname=<?php echo $pname; ?>" class="form" method="post">
      <div class="input-box">
        <label>Email Address</label>
        <textarea class="text-p" name="feedback" id="" cols="75" rows="10" require></textarea>
      </div>

      <div class="column">
        <div class="input-box">
          <label>Enter name</label>
          <input type="text" name="text" placeholder="Enter phone number" required />
        </div>
        <div class="input-box">
          <label>Today Date</label>
          <input type="date" name="date" placeholder="Enter birth date" required />
        </div>
      </div>
      <button>Feed back Submit</button>
    </form>
  </section>
</div>
