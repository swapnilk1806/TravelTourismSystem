<!-- <link rel="stylesheet" href="../../public/css/show.css"> -->

<?php include('./views/layouts/header.php') ?>

<head>
    <link rel="stylesheet" href="../../public/css/ltinerary.css">
</head>
<?php

$host = 'localhost';
$dbname = 'TR';
$username = 'postgres';
$password = '1806';

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
    echo "Connection failed";
    exit;
}

$amount = '';
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
echo $tablename;

session_start();

//echo "username : ".$_SESSION['username']."<br>";
//echo $id;

$query = "SELECT * FROM public.\"$tablename\" WHERE id = '$id';";
$result = pg_query($conn, $query);
$row = pg_fetch_assoc($result);
echo "state : ".$states."<br>";
$states = $row['state'];

$query2 = "select * from location where state='$states';";
$result2 = pg_query($conn, $query2);
$row2 = pg_fetch_assoc($result2);
echo "id : " . $row2['id'];
?>

<body>
    <div class="sk">

        <div class="cls-outter">
            <div class="cls-top">
                <div class="cls-top-left">
                    <p class="name-cls">Group Tour <span>EUHG</span></p>
                    <h6 class="main-cls">Glimpses of Greece</h6>
                    <p class="cl-info"><i class="fa-solid fa-calendar-days"></i> <span>6 Days</span> <i class="fa-solid fa-earth-americas"></i> <span>1 Country</span> <i class="fa-solid fa-location-dot"></i> <span>2 Cities</span></p>
                    <p></p>
                </div>
                <div class="cls-top-middle">
                    <p class="deal-supper">SUPPER DEAL PRICE</p>
                    <h5 class="name-cls-price">Stats from <span><i class="fa-solid fa-indian-rupee-sign"></i>
                            <?php echo $row['amount']; ?></span> </h5>
                    <p class="per-person">per person on twins sharing </p>
                    <a class="a-name-account" href="#">from <i class="fa-solid fa-indian-rupee-sign"></i>4567 /month
                    </a>
                </div>
                <div class="cls-top-right">
                    <a href="/registration-bellow/?id=<?php echo $row['id'] ?>/?tablename =<?php echo $tablename; ?>"><button>Registration trip</button></a>
                    <p>viesw pricing Tables</p>
                </div>
            </div>
            <div class="cls-middle">
                <div class="img-cls">
                    <img src="<?php echo $row['image'] ?>" alt="">
                </div>
                <div class="cls-middle-main">
                    <p>How many reasons to choose Hellow Indio? Endless</p>
                    <div class="cls-sub">
                        <div class="cls-middle-left">
                            <p id="ravdi">7,05,856</p>
                            <p id="Happy">Happy guests</p>
                            <p id="ravdi">56+</p>
                            <p id="Happy">year of experince</p>
                        </div>
                        <div class="cls-middle-right">
                            <p id="ravdi">56,856</p>
                            <p id="Happy">Number of successful tours</p>
                            <p id="ravdi">506+</p>
                            <p id="Happy">Team members working to ensure you have the best holidays</p>
                        </div>
                    </div>
                    <div class="cls-top-center">
                        <h5 id="includes">Tour includes </h5>
                        <div class="cls-p looad">
                            <p><i class="fa-solid fa-hotel"></i> <i class="fa-solid fa-bus"></i>
                                <i class="fa-solid fa-plane"></i><i class="fa-solid fa-camera"></i>
                                <i class="fa-solid fa-shop"></i><i class="fa-solid fa-fan"></i>
                            </p>
                            <p id="span-load"> <span>Hotel</span>
                                <span>Bus</span>
                                <span>Plane</span>
                                <span>Camera</span>
                                <span>Shop</span>
                                <span>Fan</span>
                            </p>
                        </div>
                    </div>

                    <p class="keys-dik">Keys Highlights</p>
                    <ul id="vertices">
                        <li>Hadrian’s Arch Monument</li>
                        <li>Acropolis Site And Museum</li>
                        <li>Akrotiri Archeological Site</li>
                        <li>Prophet Ilias Monastery</li>
                        <li>Black Beach And Red Beach</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>




    <!-- ------------------------------- booking infon ------------------------- -->
    <div class="hellowp">
        <h3>Select departure city, dates & add guest to book your tour</h3>
        <p class="seats">As seats fill, prices increase! So book today!</p>
        <p class="one">1. SELECT DEPARTURE CITY & DATE</p>

        </p>
        <div class="all-departure">
            <button><i class="fa-regular fa-circle"></i> All departure</button>
            <p id="all-p">All departure dates (4) <span>Only 2 seats left at this all inclusive price, lock in
                    today!</span>
            <div class="depure-setas">
                <div class="head-card">
                    <div class="head-left">
                        <p>May</p>
                        <p>2024</p>
                    </div>
                    <div class="head-right">
                        <p>TUE</p>
                        <p>06</p>
                        <p>50000</p>
                    </div>
                </div>

                <div class="head-card">
                    <div class="head-left">
                        <p>FRI</p>
                        <p>2024</p>
                    </div>
                    <div class="head-right red">
                        <p>TUE</p>
                        <p>12</p>
                        <p>35000</p>
                    </div>
                </div>
                <div class="head-card">
                    <div class="head-left">
                        <p>May</p>
                        <p>2024</p>
                    </div>
                    <div class="head-right blue">
                        <p>SUN</p>
                        <p>17</p>
                        <p>46000</p>
                    </div>
                </div>
                <div class="head-card">
                    <div class="head-left">
                        <p>May</p>
                        <p>2024</p>
                    </div>
                    <div class="head-right yellow">
                        <p>SAT</p>
                        <p>19</p>
                        <p>54000</p>
                    </div>
                </div>
            </div>
            <div class="condition">
                <ul>
                    <li>
                        Terms and Conditions apply.
                    </li>
                    <li>
                        5% GST is applicable on given tour price.
                    </li>
                    <li>
                        Mentioned tour prices are Per Person for Indian Nationals only.
                    </li>
                    <li>
                        TCS (5% or 10%) is applicable for international.
                    </li>
                </ul>
            </div>

            <h3 class="h3-swa">Itinerary <span>(days wise)</span></h3>
            <div class="locations">
                <ul>
                    <li>
                        <?php echo $row2['city1']; ?>
                    </li>
                    <li>
                        <?php echo $row2['city2']; ?>
                    </li>
                    <li>
                        <?php echo $row2['city3']; ?>
                    </li>
                    <li>
                        <?php echo $row2['city4']; ?>
                    </li>
                    <li>
                        <?php echo $row2['city5']; ?>
                    </li>
                    <li>
                        <?php echo $row2['city6']; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------Tour Information ------------ -->

    <div class="cand-load">
        <div class="info-suub-load">
            <h4 class="Information-load">Tour Information</h4>
            <p class="to">Read this to prepare for your tour in the best way !</p>
        </div>
        <div class="btn-sub-info">
            <button class="aai-load1">Tour inclusions</button>
            <button class="aai-load2">Tour Exclusions</button>
            <button class="aai-load3">Advance preparations</button>
        </div>

        <div class="ino-load">
            <div class="inclusions">
                <ul class="hellow-load">
                    <li class="li-link">
                        To and Fro economy class air ticket (Ex-Mumbai) with current airport taxes
                    </li>
                    <li class="li-link">
                        Baggage Allowance as per the airline policy
                    </li>
                    <li class="li-link">
                        Travel by comfortable A/C or non A/C small cars or Tempo Travellers or Mini Buses or big buses
                        depending on the respective tour group size
                    </li>
                    <li class="li-link">
                        Accommodation in comfortable hotels on twin/triple/Single sharing basis
                    </li>
                    <li class="li-link">
                        All Meals – Morning tea/coffee, breakfast, lunch, evening tea/coffee with cookies/snacks, dinner
                        and Water Bottle (1 Litre) per person per day

                    </li>
                    <li class="li-link">
                        Guide & driver tips, hotel & restaurants tips
                    </li>
                    <li class="li-link">
                        Permits/ entrance fees of all sightseeing places which is to be visited from inside
                        Accompanied local guide/s services wherever require
                    </li>
                    <li class="li-link">
                        Veena World Tour Manager Services from Day 01 Meeting point till the dropping point on last day
                        Travel Insurance for guests up to 70 years of age
                    </li>
                </ul>
            </div>
            <div class="Exclusions">
                <ul class="hellow-load">
                    <li class="li-link">
                        Government of India Goods & Services Tax (GST) of 5%
                    </li>
                    <li class="li-link">
                        Any increase in airfare, airport tax, fuel surcharge etc.
                    </li>
                    <li class="li-link">
                        Any new tax/es levied by the central or state government
                        Cost of Insurance
                    </li>
                    <li class="li-link">
                        Any upgradation in airline class, vehicle, hotel or hotel room category
                    </li>
                    <li class="li-link">
                        Cost of Pre/Post tour hotel accommodation
                    </li>
                    <li class="li-link">
                        Any extra expense incurred due to any forced majeure situation before the tour departure or
                        during the tour, such as change in airline schedule, route or operation, changing the tour date,
                        change in hotel etc.
                    </li>
                    <li class="li-link">
                        Personal expense like porterage, laundry, telephone, shopping, alcoholic beverages, extra
                    </li>
                    <li class="li-link">
                        mineral water or food which is not a part of group’s set meal menu
                    </li>
                    <li class="li-link">
                        Any extra cost incurred due to illness, accident, hospitalization or any personal emergency
                    </li>
                    <li class="li-link">
                        Cost of any optional activity or service
                    </li>
                    <li class="li-link">
                        Anything specifically not mentioned in the ‘tour price includes’ column
                    </li>
                </ul>
            </div>
            <div class="preparations">
                <ul class="hellow-load">
                    <li class="li-link">As everyone is becoming a frequent traveller now, we suggest that you make your
                        own travel
                        accessories kit to ensure a stress free holiday.
                    </li>
                    <li class="li-link">Always make sure to carry less and light luggage, use a four wheel small or
                        medium suitcase and
                        please make sure that you are carrying only one suitcase per person. This will ensure that you
                        will travel smartly and without any inconveniences.
                    </li>
                    <li class="li-link">It is also recommended that you have one cross shoulder bag or haversack for
                        your handy needs
                        which will ensure that you are comfortable at the time of sightseeing and also easy for
                        photography during your tour.
                    </li>
                    <li class="li-link">
                        A smart cap/hat and sunglasses are definitely something that you should have in your kit.
                    </li>
                    <li class="li-link">
                        Though Veena World provides all three meals, that is breakfast, lunch, dinner and Veena World
                        treats as per the itinerary, you can carry dry snacks of your choice in small sealed packets for
                        munching during air travel or road journeys.
                    </li>
                    <li class="li-link">
                        If you are travelling during the monsoon or to destinations where it is rainy, please carry a
                        small
                        umbrella or poncho.
                    </li>
                    <li class="li-link">
                        For international tours, please carry a universal adapter for charging your cameras and mobile
                        phones.
                    </li>
                    <li3 class="li-link">
                        Ensure that your clothing and footwear is suitable for the destination you are travelling to.
                        Nee
                        </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- --------------------------- Travel Information ---------------------- -->
    <!-- <div class="cand-load">
        <h3>Travel Information</h3>
        <div class="btn-sub-info">
            <button class="aai-load1">Flight Details</button>
            <button class="aai-load2">Accommodation Details</button>
            <button class="aai-load3">Reporting & Droping</button>
        </div>

        <div class="ino-load">
            <div class="inclusions">
                <ul class="hellow-load">
                    <li class="link-1">
                        Processing the best for you!
                    </li>
                    <li class="link-1">
                        We are in the process of booking the flights for this tour. We will update it here, as we are
                        done.
                    </li>
                    <li class="link-1">
                        Post Booking, you will be notified through your contact details about all tour related updates.
                    </li>
                </ul>
            </div>
            <div class="Exclusions">
                <ul class="hellow-load">
                    <li class="link-1">
                        Processing the best for you!
                    </li>
                    <li class="link-1">
                        We are in the process of booking the accommodation for this tour. We will update it here, as we
                        are done.
                    </li>
                    <li class="link-1"></li>
                    Post Booking, you will be notified through your contact details about all tour related updates.
                    </li>

                </ul>
            </div>
            <div class="preparations">
                <ul class="hellow-load">
                    <li class="link-1">
                        <p class="p-hellow">Guest Type : <span>Scheduled Tour Guests</span></p>
                        <p class="p-hellow">Reporting Point :  <span>Chhatrapati Shivaji Maharaj International Airport Mumbai</span></p>
                        <p class="p-hellow">Dropping Point : <span> Chhatrapati Shivaji Maharaj International Airport Mumbai</span></p>
                        <hr>
                        <p class="p-hellow">Guest Type : <span>Joining & Leaving Guests</span></p>
                        <p class="p-hellow">Reporting Point : <span>Athens Airport</span></p>
                        <p class="p-hellow">Dropping Point : <span>Athens Airport</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->


    <!-- ------------------------------------------- need know -------------- -->
    <div class="msin-need">
        <div class="need">
            <h3>Need to Know</h3>
            <p>Things to consider before the trip!</p>

            <h4>Weather</h4>
            <ul>
                <li>Cool and dry</li>
                <li>For detailed Information about weather kindly visit www.accuweather.com</li>
            </ul>
            <h4>Transport</h4>
            <h5>Air Travel:</h5>
            <ul>
                <li>Mumbai - Athens - Mumbai. We use a combination of airlines like Gulf Airways/ Turkish Airline /Qatar
                    Airways etc.</li>
            </ul>
            <h5>Coach Tavel</h5>
            <ul>
                <li>
                    A/C coach - Seating capacity depends upon group size
                </li>
            </ul>
            <h4>Documents Required for Travel</h4>
            <ul>
                <li>
                    Original passport with minimum 6 months validity from the date of tour arrival along with sufficient
                    blank
                    pages for the stamping of visa
                </li>
                <li>
                    A valid Tourist Visa for the duration of the tour
                </li>
                <li>
                    For all Schengen countries passport validity should not exceed more than 10 years
                </li>
                <li>
                    Handwritten passport is not acceptable
                </li>
            </ul>
        </div>
    </div>

    <!-- ------------------------------------ Cancellation ----------------- -->
    <div class="load-sub">
        <div class="can-load">
            <h3>Cancellation Policy & Payment Terms</h3>
            <p>We keep it transparent, crystal clear!</p>

            <div class="div-can">
                <div class="cans-div1">
                    <div class="cand-swa1">
                        <p>Cancellation received no. of days prior to departure</p>
                    </div>
                    <div class="cand-right-upper">
                        <div class="uupper">
                            <p>D</p>
                            <p>D</p>
                            <p>D</p>
                            <p>D</p>
                            <p>D</p>
                            <p>D</p>
                            <p>D</p>
                            <p>D</p>
                        </div>
                        <div class="llower">
                            <p class="zero">0 to 5</p>
                            <p>6 to 15</p>
                            <p>16 to 30</p>
                            <p>31 to 45</p>
                            <p>46 to 60</p>
                            <p>61 to 90</p>
                            <p>91 to 120</p>
                            <p>121 to 900</p>
                        </div>
                    </div>
                </div>
                <div class="cans-div2">
                    <div class="cand-swa2">
                        <p>Cancellation fee applicable on Net Tour Price (per person)
                        </p>
                    </div>
                    <div class="cand-right-lower">
                        <div class="loower-sb">
                            <p>100%</p>
                            <p>85%</p>
                            <p>75%</p>
                            <p>50%</p>
                            <p>30%</p>
                            <p>20%</p>
                            <p>15%</p>
                            <p>10%</p>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="name-dik-h">Payment Terms</h5>
            <p>Guest can pay by Cheque/ Demand Draft/ Debit card / Credit card/ NEFT/ RTGS/ IMPS. For Debit / Credit
                card
                payment additional 1.8 % convenience charge will be applicable Cheque / Demand draft should be in favour
                of "Hellow Indio"
            </p>
            <h5 class="name-dik-h">Remarks</h5>
            <ul>
                <li id="swsa">
                    All meals are provided by Veena World in case the flight reaches the stipulated destination early
                    morning or
                    leaves destination late in the evening.
                </li>
                <li id="swsa">
                    ‘In Case if any sightseeing is not done due to weekly closure, an alternative sightseeing will be
                    done for
                    the same’.
                </li>
                <li id="swsa">
                    Standard Check-in and check-out time of International hotels is usually 1500hrs and 1200hrs
                    respectively
                </li>
                <li id="swsa">
                    Guests may please note that for Domestic flights or internal flights from one city to another city
                    on
                    international tours, the baggage allowance will be as per the respective airline baggage policy and
                    weight
                    regulations. Guests are requested to pack their belongings and carry luggage in accordance to the
                    respective
                    airlines baggage allowance. Excess baggage (if any) will be chargeable as per the airline policy and
                    the
                    same has to be borne by the guest.
                </li>
            </ul>
        </div>
    </div>
    <!-- ---------------------- Upgrade Available----------------------------- -->
    <div class="main-camm">
        <h3 class="Upgrades">Upgrades Available</h3>
        <p class="Want">Want luxury? Add luxury at minimum cost!</p>
        <div class="fpp">
            <div class="camm1">
                <button class="Flight">Flight Upgrade</button>
                <button class="prime">Prime Seats (S)</button>
            </div>
            <div class="class-tp">
                <div class="tp1">
                    <ul>
                        <li class="link-top">
                            Need to upgrade to business or first class? Please get in touch with our team on <span id="mb">1800 22 7979</span> for more details.
                        </li>
                    </ul>
                </div>
                <div class="tp2">
                    <ul>
                        <li class="link-top">
                            You can select the prime seat(s) in your coach at an additional cost. Please get in touch with our team on <span id="mb">1800 22 7979</span> for more details.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------- RATING ------------------------------------ -->
    <?php
    require('./database_connect.php');
    $query4 = "SELECT * FROM public.feedback;";
    $result4 = pg_query($conn, $query4);
    ?>
    <div class="rating-upper">
        <p id="Hellows">Hellow INDIO</p>
        <p id="ratingq">What are you waiting for? Chalo Bag Bharo Nikal Pado!</p>
        <div class="rating-card" id="name-kdg">
            <div class="sub-rating">
                <?php $bool = 0;
                while ($row = pg_fetch_assoc($result4)) { ?>
                    <div class="rating-sub">
                        <p id="lohorating">Short family Trips <span><i class="fa-solid fa-star"></i></span></p>
                        <p id="tamiltrip"><?php echo $row['package_name']; ?></p>
                        <div class="comments">
                            "<?php echo $row['feedback']; ?>"
                        </div>
                        <p id="tour"><?php echo $row['customer_name'] ?></p>
                        <p id="traveltour">Travelled in <?php echo $row['date']; ?></p>
                    </div>
                <?php
                    $bool++;
                    if ($bool == 3) {
                        break;
                    }
                } ?>
            </div>
        </div>
        <a href="/read-more-rating"><button id="Reviews">Read more Reviews</button></a>
    </div>

    <div class="kdh">
        <p class="hacks">Travel tips, hacks, tricks and a whole lot more...</p>
        <div class="load-skw">
            <div class="cards-sub-load">
                <img class="img-dik" src="https://img.veenaworld.com/wp-content/uploads/2023/03/Best-Places-to-Stay-in-Rome-for-a-Luxurious-Vacation.jpg" alt="">
            </div>
            <div class="cards-sub-load">
                <img class="img-dik" src="https://img.veenaworld.com/wp-content/uploads/2022/12/All-You-Need-to-Know-about-the-Jaisalmer-Desert-Festival.jpg" alt="">
            </div>
            <div class="cards-sub-load">
                <img class="img-dik" src="https://img.veenaworld.com/wp-content/uploads/2023/04/Hotels-To-Stay-in-Spain.jpg" alt="">
            </div>
            <div class="cards-sub-load">
                <img class="img-dik" src="https://img.veenaworld.com/wp-content/uploads/2023/04/16-Food-Items-You-Need-to-Try-in-Belgium-on-Your-Next-Vacation.jpg" alt="">
            </div>
            <div class="cards-sub-load">
                <img class="img-dik" src="https://img.veenaworld.com/wp-content/uploads/2022/07/Rajasthan-monsoon.jpg" alt="">
            </div>
        </div>
        <div class="loda-info-cand">
            <div class="lodo-info">
                <p class="Hotels">Hotels To Stay In Spain</p>
                <p>All You Need To Know About The Jaisalmer Desert Festival</p>
                <p>Why You Should Visit Rajasthan During Monsoon</p>
                <p>16 Food Items You Need To Try In Belgium On Your Next Vacation</p>
                <p>Best Places To Stay In Rome For A Luxurious Vacation</p>

            </div>
        </div>
    </div>
    <hr>
</body>

<!-- include('../layouts/footer.php') -->
<script src="../../public/js/show.js"></script>
<?php include('./views/layouts/footer.php') ?> -->
<!-- <script src="./../../public/js/show.js"></script> -->