<head>
  <link rel="stylesheet" href="../../public/css/booking/registration.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<?php
$url = $_GET['id'];


$id = '';
for ($i = 0; $i < strlen($url); $i++) {
  if ($url[$i] == '/') {
    break;
  }
  $id = $id . $url[$i];
}

$tablename = '';
$bool = 0;
for ($i = 0; $i < strlen($url); $i++) {
  if ($url[$i] == '=') {
    $bool++;
    continue;
  }
  if ($bool == 1) {
    $tablename = $tablename . $url[$i];
  }
}


require('./database_connect.php');
$query = "SELECT * FROM public.\"$tablename\" WHERE id = '$id';";

echo $id;
session_start();
echo $_SESSION['username']."username";

$result = pg_query($conn, $query);
$row = pg_fetch_assoc($result);
?>
<div class="div-reg-hp">
  <section class="container">
    <header>Registration Form</header>
    <form action="/phonepay_payment/?am=<?php echo $row['amount'] ?>/?<?php echo $id; ?>" class="form" method="post">
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter full name" required />
      </div>

      <div class="input-box">
        <label>Email Address</label>
        <input type="text" name="email" placeholder="Enter email address" required />
      </div>

      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="text" name="number" placeholder="Enter phone number" required />
        </div>
        <div class="input-box">
          <label>Birth Date</label>
          <input type="date" name="date" placeholder="Enter birth date" required />
        </div>
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" name="gender" id="check-male" name="gender" checked />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" name="gender" id="check-female" name="gender" />
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" name="gender" id="check-other" name="gender" />
            <label for="check-other">prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input type="text" name="address" placeholder="Enter street address" required />
        <div class="column">
          <input type="text" name="state" placeholder="Enter your state" required />
          <input type="text" name="city" placeholder="Enter your city" required />
        </div>
        <div class="column">
          
          <input type="text" name="region" placeholder="Enter your region">
          <input type="text" name="postal_code" placeholder="Enter postal code" required />
        </div>
        <div class="column">
          <input type="text" name="Adhard_no" placeholder="Enter Adhard card number" required />
        </div>
      </div>
      <button>Pay <i class="fa-solid fa-indian-rupee-sign"></i> <?php echo  $row['amount']; ?></button>
    </form>
  </section>
</div>