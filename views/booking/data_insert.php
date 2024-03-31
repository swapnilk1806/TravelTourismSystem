
<?
/*php $host = 'localhost';
$dbname = 'TR';
$username = 'postgres';
$password = '1806';

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
    echo "Connection failed";
    exit;
}

session_start();
$user_id = $_SESSION['username'];

$id = $_POST['id']."<br>";

$name =  $_POST['name'];
$email = $_POST['email'];
$number =  $_POST['number'];
$date =  $_POST['date'];
$gnder = $_POST['gender'];
$address =  $_POST['address'];
$state =  $_POST['country'];
$city = $_POST['city'];
$region =  $_POST['region'];
$postal_code = $_POST['postal_code'];
$adhard_card =  $_POST['Adhard_no'];

echo $name.$email.$number.$date.$gnder.$address.$state.$city.$region.$postal_code.$adhard_card."<br>";
$tablename = 'Registration';
$am = $_GET['am'];

$query = "INSERT INTO public.\"$tablename\"(user_id, id_p, name, email, mo_no, brith_date, gender, address, state, city, region, \"pin-code\", adhard_no, amount)\"
VALUES ($user_id,$id ,$name,$email, $number, $date, $gnder, $address, $state, $city, $region, '$postal_code', $adhard_card, $am);";

$result = pg_query($conn, $query);

if($result){
  echo "data insert";

};
*/