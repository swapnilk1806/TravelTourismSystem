    <?php
    $tablename1 = 'top_card';
    $tablename2 = 'short_card';
    $tablename3 = 'middle_card';
    $tablename4 = '';
    require('./database_connect.php');

    $query = "SELECT * FROM public.$tablename1;";
    $query2 = "SELECT * FROM public.$tablename2;";
    $query3 = "SELECT * FROM public.$tablename3;";
    $query4 = "SELECT * FROM public.feedback;";

    $result = pg_query($conn, $query);
    $result2 = pg_query($conn, $query2);
    $result3 = pg_query($conn, $query3);
    $result4 = pg_query($conn, $query4);
    
    ?>


    <?php include('./views/layouts/header.php') ?>


    <div class="card-top">
        <div class="love-logo">
            <img id="logoDH" src="../../image/indexpagephoto/tittle.svg" alt="">

        </div>
        <div class="card-photo">
            <?php while ($row = pg_fetch_assoc($result)) { ?>
                <a href="get-show-info/?id=<?php echo $row['id'] ?>/hellow/?$tablename1=<?php echo $tablename1 ?>">
                    <div class="card1">
                        <img class="img-page-loade" src="<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>">
                        <p id="Womens"><?php echo $row['name'] ?></p>
                        <p id="rstop">&#8377 <?php echo $row['amount'] ?></p>
                        <p id="dept"><?php echo $row['duration'] ?>Days| <?php echo $row['departure'] ?> Departure</p>
                    </div>
                </a>
            <?php } ?>
        </div>
        <!-- <button class="Explore">Explore more tours</button> -->
    </div>

    <!-- ---------------------------------------- info shoort card --------------------------------- -->

    <!-- <div class="classwapn"> -->
    <div class="main-adds">
        <div class="sub-adds">
        </div>
        <div class="sub-adds-right">
            <?php $bool = 0;
            while ($row = pg_fetch_assoc($result2)) { ?>
                <a href="/get-show-info/?id=<?php echo $row['id'] ?>/hellow/?tablename2=<?php echo $tablename2 ?>">
                    <div class="card-adds" style="background: url(<?php echo $row['image'] ?>);">
                        <p id="headtop"><?php echo $row['name'] ?></p>
                        <div class="top-upper-side">
                            <p id="head-upper"><?php echo $row['tours'] ?> Tours | <?php echo $row['departure'] ?> departures</p>
                            <p id="head-upper"><?php echo $row['tourists'] ?> gueste Travelled</p>
                        </div>
                    </div>
                </a>

            <?php } ?>
        </div>
    </div>
    <!-- </div> -->

    <!-- -------------------------------- 4 CARDS DISPLAY -------------------------------- -->
    <div class="header-load">
        <p id="Discover">Discover Tour</p>
    </div>
    <div class="cont-pi">
        <div class="pi-left">
            <button class="rpi-sub1">Popular European Trails</button>
            <button class="rpi-sub2">Golden Combinations</button>
            <button class="rpi-sub3">Splendid Scandinavia</button>
            <button class="rpi-sub4">Mediterranean Marvels</button>
            <button class="rpi-sub5">Central Eastern Europe</button>
        </div>

        <div class="pi-right">
            <div class="sub-card">
                <div class="header-card">
                    <div class="img-top">
                        <img src="https://www.adotrip.com/public/images/areas/master_images/5c8a36c301581-Prem_Mandir_Attractions.jpg" alt="">
                    </div>
                    <div class="card-top-right">
                        <div class="heading-sub-top">
                            <p id="group-tour">Group Tour <span>Family</span></p>
                            <p id="Seniars">Specials </p>
                            <span><i id="heart" class="fa-regular fa-heart"></i></span>
                        </div>
                        <h4 id="card-heading">vrindavan</h4>
                        <div class="symbols">

                            <i class="fa-solid fa-plane-departure"></i>
                            <i class="fa-solid fa-hotel"></i>
                            <i class="fa-solid fa-camera-retro"></i>
                            <i class="fa-solid fa-bus"></i>
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                    </div>
                </div>
                <div class="bottom-card">
                    <p><span> <i class="fa-solid fa-location-dot"></i>Travel | 12 Days</span> <span>10 States</span>
                        <span>16 Location</span> <span><i class="fa-solid fa-angles-right"></i></span>
                    </p>
                    <p><span>8 Departure Cities</span> <span>3 Departure Dates 16</span> <span><i class="fa-solid fa-angles-right"></i></span></p>
                </div>
                <div class=short-card>
                    <div class="div-first">
                        <p id="rading-sy"><i style="margin-right:5px ;" class="fa-solid fa-star"></i>4</p>
                        <p id="ruppes"><i class="fa fa-inr"></i>Quick Quote</p>
                        <a href="/enqure"><button id="Enquire">Enquire Now</button></a>
                    </div>
                    <div class="divsecound">
                        <p id="super">supper deal price</p>
                        <p id="ppp"><i class="fa fa-inr"></i>566987</p>
                        <p id="pp">per persion on twing sharing</p>
                        <a href="/app"><button id="Views">Views Details</button></a>

                    </div>
                </div>
            </div>
            <div class="sub-card">
                <div class="header-card">
                    <div class="img-top">
                        <img src="https://wallpaperaccess.com/full/1386109.jpg" alt="">
                    </div>
                    <div class="card-top-right">
                        <div class="heading-sub-top">
                            <p id="group-tour">Group Tour <span>Family</span></p>
                            <p id="Seniars">Specials </p>
                            <span><i id="heart" class="fa-regular fa-heart"></i></span>
                        </div>
                        <h4 id="card-heading"> Taj Mahal </h4>
                        <div class="symbols">

                            <i class="fa-solid fa-plane-departure"></i>
                            <i class="fa-solid fa-hotel"></i>
                            <i class="fa-solid fa-camera-retro"></i>
                            <i class="fa-solid fa-bus"></i>
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                    </div>
                </div>
                <div class="bottom-card">
                    <p><span> <i class="fa-solid fa-location-dot"></i>Travel | 10 Days</span> <span>10 States</span>
                        <span>16 Location</span> <span><i class="fa-solid fa-angles-right"></i></span>
                    </p>
                    <p><span>6 Departure Cities</span> <span>6 Departure Dates 16</span> <span><i class="fa-solid fa-angles-right"></i></span></p>
                </div>
                <div class=short-card>
                    <div class="div-first">
                        <p id="rading-sy"><i style="margin-right:5px ;" class="fa-solid fa-star"></i>4</p>
                        <p id="ruppes"><i class="fa fa-inr"></i>Quick Quote</p>
                        <a href="/enqure"><button id="Enquire">Enquire Now</button></a>
                    </div>
                    <div class="divsecound">
                        <p id="super">supper deal price</p>
                        <p id="ppp"><i class="fa fa-inr"></i>656987</p>
                        <p id="pp">per persion on twing sharing</p>
                        <a href="/app"><button id="Views">Views Details</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------- RATING ------------------------------------ -->
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
    <!-- ------------------------------ box liting --------------------------------------- -->
    <div class="box-container">
        <div class="sub-box">
            <div class="sub-box-info">
                <h4 id="fly">Fly with beautiful places</h4>
                <h4 id="fly">Indio</h4>
                <p id="days">6 Days - 16 Days</p>
                <a href="/"><button id="Book">Book now</button></a>
            </div>
            <div class="righ-side-top">
                <h4 id="top-indio"><i class="fa-regular fa-eye"></i> Hellow INDIO <i class="fa-regular fa-eye"></i>
                </h4>
            </div>
        </div>
    </div>
    <!-- ------------------- card ------------------ -->

    <di class="clas">
        <h2 class="tittle-sub-cand">Incredible India</h2>
        <div class="main-container">
            <?php $bool = 0;
            while ($row = pg_fetch_assoc($result3)) { ?>

                <div class="sub-card">
                    <div class="header-card">
                        <div class="img-top">
                            <img class="immf-sub" src="<?php echo $row['image'] ?>" alt="">
                        </div>
                        <div class="card-top-right">
                            <div class="heading-sub-top">
                                <p id="group-tour">Group Tour <span>Family</span></p>
                                <p id="Seniars">Specials </p>
                                <span><i id="heart" class="fa-regular fa-heart"></i></span>
                            </div>
                            <h4 id="card-heading"><?php echo $row['name'] ?></h4>
                            <div class="symbols">

                                <i class="fa-solid fa-plane-departure"></i>
                                <i class="fa-solid fa-hotel"></i>
                                <i class="fa-solid fa-camera-retro"></i>
                                <i class="fa-solid fa-bus"></i>
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-card">
                        <p><span> <i class="fa-solid fa-location-dot"></i>Travel | 10 Days</span> <span>10 States</span>
                            <span>16 Location</span> <span><i class="fa-solid fa-angles-right"></i></span>
                        </p>
                        <p><span>6 Departure Cities</span> <span><?php echo $row['departure'] ?>Departure Dates 16</span> <span><i class="fa-solid fa-angles-right"></i></span></p>
                    </div>
                    <div class=short-card>
                        <div class="div-first">
                            <p id="rading-sy"><i style="margin-right:5px ;" class="fa-solid fa-star"></i>4</p>
                            <p id="ruppes"><i class="fa fa-inr"></i>Quick Quote</p>
                            <a href="enqure"><button id="Enquire">Enquire Now</button></a>
                        </div>
                        <div class="divsecound">
                            <p id="super">supper deal price</p>
                            <p id="ppp"><i class="fa fa-inr"></i><?php echo $row['amount']  ?></p>
                            <p id="pp">per persion on twing sharing</p>
                            <a href="/get-show-info/?id=<?php echo $row['id'] ?>/hellow/?tablename3=<?php echo $tablename3 ?>"> <button id="Views">Views Details</button> </a>

                        </div>
                    </div>
                </div>
            <?php
                $bool++;
                if ($bool == 3) {
                    break;
                }
            }
            ?>
        </div>

        </div>
        <!-- ----------------- 4 direction -------------------------- -->
        <div class="it">
            <div class="dik">
                <h5>Indio Tour Packages By Zone</h5>
            </div>
        </div>
        <div class="btn-in">
            <button class="state btn1-i">South Indio</button>
            <button class="state btn2-i">North Indio</button>
            <button class="state btn3-i">West Indio</button>
            <button class="state btn4-i">East Indio</button>
        </div>
        <div class="click-sub">
            <div class="click-1">
                <div class="sub-load1">
                    <a href="/zone/?name=South">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load" src="https://www.pixelstalk.net/wp-content/uploads/2016/06/Best-HD-Backgrounds-Photos-Download.jpg" alt="">
                            <p class="swapnil">Have fun at Riverside County Fairgrounds</p>
                        </div>
                    </a>
                    <a href="/zone/?name=South">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load load-swa" src="https://thetouristchecklist.com/wp-content/uploads/2022/03/Jackalope-Ranch.jpg" alt="">
                            <p class="swapnil">The Jackalope Ranch</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load2">
                    <a href="/zone/?name=South">
                        <div class="sub2-load-upper">
                            <img class="ravdi-load load-swa2" src="https://assets.palmspringslife.com/wp-content/uploads/2023/11/17135706/EmpirePoloClub-1024x683.jpg" alt="">
                            <p class="swapnil">Empire Polo Club</p>
                        </div>
                    </a>
                    <a href="/zone/?name=South">
                        <div class="sub2-load-lowar">
                            <img class="ravdi-load load-swa3" src="https://media-cdn.tripadvisor.com/media/photo-o/0d/9e/79/99/empire-polo-club-desert.jpg" alt="">
                            <p class="swapnil">location Indio</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load3">
                    <a href="/zone/?name=South">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load load-swa-3" src="https://www.whyweseek.com/wp-content/uploads/2018/03/Golden-Temple-at-Night-Amritsar-1024x683.jpg" alt="">
                            <p class="swapnil">Golden Temple</p>
                        </div>
                    </a>
                    <a href="/zone/?name=South">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load " src="https://i.pinimg.com/originals/51/31/ee/5131ee7608391d2c6abd3bfa12f1ff80.jpg" alt="">
                            <p class="swapnil">Udaipur</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load4">
                    <a href="/zone/?name=South">
                        <div class="sub4-load-upper">
                            <img class="ravdi-load load4-swa" src="https://www.global-gallivanting.com/wp-content/uploads/2016/02/IMG_20160214_145051-1024x1024.jpg" alt="">
                            <p class="swapnil">Goa Indio</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="click-2">
                <div class="sub-load1">
                    <a href="/zone/?name=North">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load" src="https://californiathroughmylens.com/wp-content/uploads/2021/01/Indio-Hills-Badlands-32.jpg" alt="">
                            <p class="swapnil">Hills </p>
                        </div>
                    </a>
                    <a href="/zone/?name=North">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load load-swa" src="https://assets.traveltriangle.com/blog/wp-content/uploads/2016/07/131.jpg" alt="">
                            <p class="swapnil"> Dharamshala – Tibetan Charm
                            </p>
                        </div>
                    </a>
                </div>
                <div class="sub-load2">
                    <a href="/zone/?name=North">
                        <div class="sub2-load-upper">
                            <img class="ravdi-load load-swa2" src="https://assets.traveltriangle.com/blog/wp-content/uploads/2017/07/Varanasi.jpg" alt="">
                            <p class="swapnil">Varanasi A Peace Seeker’s Haven </p>
                        </div>
                    </a>
                    <a href="/zone/?name=North">
                        <div class="sub2-load-lowar">
                            <img class="ravdi-load load-swa3" src="https://assets.traveltriangle.com/blog/wp-content/uploads/2016/07/Tomb-of-Nithar-at-Khusro-bagh-Allahabad.jpg" alt="">
                            <p class="swapnil">Allahabad UP’s Pride
                            </p>
                        </div>
                    </a>
                </div>
                <div class="sub-load3">
                    <a href="/zone/?name=North">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load load-swa-3" src="https://www.travelescape.in/wp-content/uploads/2019/06/golden-temple-397886__340.jpg" alt="">
                            <p class="swapnil">Golden Temple</p>
                        </div>
                    </a>
                    <a href="/zone/?name=North">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load " src="https://i.pinimg.com/originals/51/31/ee/5131ee7608391d2c6abd3bfa12f1ff80.jpg" alt="">
                            <p class="swapnil">Udaipur</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load4">
                    <a href="/zone/?name=North">
                        <div class="sub4-load-upper">
                            <img class="ravdi-load load4-swa" src="https://assets.traveltriangle.com/blog/wp-content/uploads/2017/07/Amritsar.jpg" alt="">
                            <p class="swapnil">Amritsar – A Must Visit City
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="click-3">

                <div class="sub-load1">
                    <a href="/zone/?name=West">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load" src="https://lp-cms-production.imgix.net/2022-03/LPI-21-704.jpg?auto=format&q=75&w=1024" alt="">
                            <p class="swapnil">Jaisalmer, Rajasthan
                            </p>
                        </div>
                    </a>
                    <a href="/zone/?name=West">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load load-swa" src="https://lp-cms-production.imgix.net/2023-09/shutterstockRF200702498.jpg?auto=format&q=75&w=1024" alt="">
                            <p class="swapnil">Darjeeling, West Bengal
                            </p>
                        </div>
                    </a>
                </div>
                <div class="sub-load2">
                    <a href="/zone/?name=West">
                        <div class="sub2-load-upper">
                            <img class="ravdi-load load-swa2" src="https://lp-cms-production.imgix.net/2023-09/GettyRF163243396.jpg?auto=format&q=75&w=1024" alt="">
                            <p class="swapnil">Mysuru (Mysore), Karnataka
                            </p>
                        </div>
                    </a>
                    <a href="/zone/?name=West">
                        <div class="sub2-load-lowar">
                            <img class="ravdi-load load-swa3" src="https://www.tripsavvy.com/thmb/2hR1VF0fk5VTp9H1kLFxBn9zI3g=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/GettyImages-603222582-59228d0c3df78cf5fa656d38.jpg" alt="">
                            <p class="swapnil">Delhi</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load3">
                    <a href="/zone/?name=West">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load load-swa-3" src="https://www.whyweseek.com/wp-content/uploads/2018/03/Golden-Temple-at-Night-Amritsar-1024x683.jpg" alt="">
                            <p class="swapnil">Dalhousie</p>
                        </div>
                    </a>
                    <a href="/zone/?name=West">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load " src="https://www.tripsavvy.com/thmb/7Vza40yYMfo5uNQlVac08nEHt5Y=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/GettyImages-151731894-592288415f9b58f4c06e4dbf.jpg" alt="">
                            <p class="swapnil">Varanasi</p>
                        </div>
                    </a>
                </div>

                <div class="sub-load4">
                    <a href="/zone/?name=West">
                        <div class="sub4-load-upper">
                            <img class="ravdi-load load4-swa" src="https://www.travelwithcg.com/wp-content/uploads/2021/02/Ganesh-Pol-scaled.jpg" alt="">
                            <p class="swapnil">jaipur</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="click-4">
                <div class="sub-load1">
                    <a href="/zone/?name=East">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load" src="https://static.trip101.com/paragraph_media/pictures/002/645/607/large/big-prizes-1661510745.jpg?1661512495" alt="">
                            <p class="swapnil">Have fun at Riverside County Fairgrounds</p>
                        </div>
                    </a>
                    <a href="/zone/?name=East">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load load-swa" src="https://thetouristchecklist.com/wp-content/uploads/2022/03/Jackalope-Ranch.jpg" alt="">
                            <p class="swapnil">The Jackalope Ranch</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load2">
                    <a href="/zone/?name=East">
                        <div class="sub2-load-upper">
                            <img class="ravdi-load load-swa2" src="https://assets.palmspringslife.com/wp-content/uploads/2023/11/17135706/EmpirePoloClub-1024x683.jpg" alt="">
                            <p class="swapnil">Empire Polo Club</p>
                        </div>
                    </a>
                    <a href="/zone/?name=East">
                        <div class="sub2-load-lowar">
                            <img class="ravdi-load load-swa3" src="https://media-cdn.tripadvisor.com/media/photo-o/0d/9e/79/99/empire-polo-club-desert.jpg" alt="">
                            <p class="swapnil">location Indio</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load3">
                    <a href="/zone/?name=East">
                        <div class="sub1-load-upper">
                            <img class="ravdi-load load-swa-3" src="https://www.whyweseek.com/wp-content/uploads/2018/03/Golden-Temple-at-Night-Amritsar-1024x683.jpg" alt="">
                            <p class="swapnil">Golden Temple</p>
                        </div>
                    </a>
                    <a href="/zone/?name=East">
                        <div class="sub1-load-lower">
                            <img class="ravdi-load " src="https://i.pinimg.com/originals/51/31/ee/5131ee7608391d2c6abd3bfa12f1ff80.jpg" alt="">
                            <p class="swapnil">Udaipur</p>
                        </div>
                    </a>
                </div>
                <div class="sub-load4">
                    <a href="/zone/?name=East">
                        <div class="sub4-load-upper">
                            <img class="ravdi-load load4-swa" src="https://www.global-gallivanting.com/wp-content/uploads/2016/02/IMG_20160214_145051-1024x1024.jpg" alt="">
                            <p class="swapnil">Goa Indio</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <?php include('./views/layouts/footer.php') ?>