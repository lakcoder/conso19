<?php
if ( isset( $_POST['submitexpo'] ) ) {
    $con = mysqli_connect("localhost:3306", "conso", "Conso123@", "conso");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $email=$_POST['emailexpo'];


    $query = mysqli_query($con, "INSERT into expo (EMAIL) values('$email')");
     mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php include("includes/head.php") ?>

    <!-- Body -->
    <body id="main">
      <?php include("includes/header.php") ?>
   <!--========== END HEADER V2 ==========-->


        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-45--xs g-font-size-55--sm g-font-size-75--md g-color--white"><strong>Consortium</strong><br></h1>
                            <h2 class="g-color--white">9-11th March<br>VNIT, Nagpur</h2>
			    <a class="btn btn-primary" href="https://apti.ecellvnit.org/" target="_blank" role="button">Register for Brainathon</a>
                        </div>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/01.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">push the human race forward</h1>
				    <a class="btn btn-primary" href="https://apti.ecellvnit.org/" target="_blank" role="button">Register for Brainathon</a>
                            </div>
                            <!--<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <div style="position:relative;height:0;padding-bottom:56.24%">
          <iframe width="640" height="360" src="https://www.youtube.com/embed/gKfnDdUL-LE" style="position:absolute;width:100%;height:100%;left:0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!--========== PAGE CONTENT ==========-->
        <!-- About -->
        <div class="g-promo-section" id="about">
            <div class="container g-padding-y-80--xs g-padding-y-60--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">E-cell</p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Consortium</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <p class="g-font-size-18--xs g-color--dark">Welcome to the extravaganza that is Consortium! Consortium, the Annual Entrepreneurship Summit of VNIT Nagpur comprises of invigorating events like Startup Conclave and Swades.
                        The summit aims at fueling entrepreneurial attitude amongst students through healthy competition and exciting challenges.
                        It fosters the importance of leadership and decision making and introduces young technocrats to various management practices in the corporate world.</p>
                        <p class="g-font-size-18--xs g-color--dark">This year Consortium’s theme is Push the Human Race Forward. Through this theme we want to focus on the disruptive innovations and inventions that have took the whole human race forward.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- End About -->

        <!-- Counter -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-padding-y-100--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class=" g-margin-b-0--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">20</figure>
                                <span class="g-font-size-40--xs g-color--white">k+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">No. of Participants</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class=" g-margin-b-0--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white  g-margin-b-0--xs js__counter">1</figure>
                                <span class="g-font-size-40--xs g-color--white">M</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Prizes Worth</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <div class=" g-margin-b-0--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white  g-margin-b-0--xs js__counter">350</figure>
                                <span class="g-font-size-40--xs g-color--white">+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Startups</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class=" g-margin-b-0--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">15</figure>
                                <span class="g-font-size-40--xs g-color--white">+</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Speakers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter -->

        <!-- Events -->
        <div class="container g-padding-y-10--xs s-portfolio" id="events">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">What We Have</h2>
            </div>
            <div class="card" id="event-card-bg">
                <div class="card-tabs">
    		      <ul class="tabs tabs-fixed-width">
    		        <li class="tab"><a class="active" href="#event">Events</a></li>
    		        <li class="tab"><a  href="#attraction">Attractions</a></li>
    		        <li class="tab"><a href="#session">Sessions</a></li>
    		        <li class="tab"><a href="#initiative">Initiatives</a></li>

    		      </ul>
    		    </div>
            </div>
            <!--Event Start-->
            <div class="card-content code">
                <div class="container g-margin-b-100--xs" id="event">

                    <div id="js__grid-portfolio-gallery" class="cbp">
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/startupconclave.jpg" alt="startupconclave Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Startup Conclave</h4>
                                    <p class="g-color--white">Opportunity to learn new entrepreneurial techniques.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="https://conso18.ecellvnit.org/events/startupconclave/" target="_blank" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/adventure.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Ad-Venture</h4>
                                    <p class="g-color--white">Roll your pitch ideas into a complete advertisement for a company.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/ad-venture.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/ceo.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">CEO</h4>
                                    <p class="g-color--white">Aims to ignite the spark of entrepreneurship in students to showcase their leadership skills in the corporate world.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/ceo.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/bizmantra.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">bizmantra</h4>
                                    <p class="g-color--white">Idea of surviving in the market, through an interactive competition.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/bizmantra.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/swades.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Swades</h4>
                                    <p class="g-color--white">Aims to understand the social problems in rural India and solve them using an entrepreneurial mindset.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/swades.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="s-portfolio__item cbp-item event motion">
                            <div class="s-portfolio__img-effect">
                                <img src="img/970x647/silhouette.jpg" alt="Portfolio Image">
                            </div>
                            <div class="s-portfolio__caption-hover--cc">
                                <div class="g-margin-b-25--xs">
                                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Silhouette</h4>
                                    <p class="g-color--white">Design stunning logo around a theme and test your desiging skills.</p>
                                </div>
                                <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                                    <li>
                                        <a href="/silhouette.php" class=" s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                            <i class="ti-fullscreen"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--Event End-->

            <!--Sessions Start-->
            <div class="card-content code">
                <div class="container g-margin-b-80--xs" id="session">
                    <div class="row">
                        <!-- Item -->
                        <div class=" col-md-2 col-md-offset-1 co-xs-12 col-sm-6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/yash.jpg" alt="yash" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Data Analytics By Yash Gandhi</h4>
                                        <p class="g-color--dark">Yash Gandhi</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('yash')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>
                        <!-- Item -->
                        <div class=" col-md-2 co-xs-12 col-sm-6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/ibhubs.jpg" alt="ibhubs" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Idea Generation and Validation</h4>
                                        <p class="g-color--dark">IB Hubs</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('ibhubs')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>
                        <!-- Item -->
                        <div class=" col-md-2 co-xs-12 col-sm-6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/frese.jpg" alt="frese" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Error Management</h4>
                                        <p class="g-color--dark">Michael Frese</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('frese')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>
                        <!-- Item -->
                        <div class=" col-md-2 co-xs-12 col-sm-6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/chawala.jpg" alt="chawala" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Desiging a BPlan</h4>
                                        <p class="g-color--dark">Devesh Chawla</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('chawala')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>
                        <!-- Item -->
                        <div class=" col-md-2 co-xs-12 col-sm-6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/abrahams.jpg" alt="abrahams" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Web Session</h4>
                                        <p class="g-color--dark">Matt Abrahams</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('abrahams')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Session End-->

            <!--Initiatives Start-->
            <div class="card-content code">
                <div class="container g-margin-b-100--xs g-padding-x-80--md" id="initiative">
                    <br>
                    <h4>Plantation</h4>
                    <h5>Smart Plantation by using Innovative Self Watering Tree Guard</h5>
                    <i>Sponsored by- Rainbow Greeners, Rakshak</i>
                    <p>Date: 26<sup>th</sup> January 2018</p>
                    <br>
                    <h6>About</h6>
                    <p>The 69th Republic Day of India witnessed a Self-Watering Tree Plantation Drive
                       organized by Entrepreneurship Cell, VNIT in association with Rakshak by Rainbow
                       Greeners. The Director of VNIT, Nagpur, Dr. N. S. Chaudhari, welcomed the initiative
                       along with the authorities and dignitaries of the institute.  The environment and its
                       greenery help make a nation healthier in the most direct way possible, and the students
                       of E-Cell, VNIT, decided that this auspicious day called for a step in the right direction.
                       The self-watering tree guards ensure that water directly goes to the roots of the plant, and
                       needs water only once every fifteen days. The CEO of Ajmera Tires, Dipesh Ajmera, also attended
                       the event to show his support. Mr. Ajmera is also a mentor on the panel of Startup Conclave, a pan
                       India exhibition of startups as part of Consortium ’18, coming up on 9 March, 2018. The initiative
                       today goes hand in hand with E-Cell’s mantra this year to ‘Push the Human Race Forward’, and create
                       a growth-driven youth for the city and the nation at large.  </p>
                </div>
            </div>
            <!--Inititatives End-->

            <!--Attractions Start-->
            <div class="card-content code">
                <div class="container g-margin-b-80--xs" id="attraction">
                    <div class="row">
                        <!-- Item -->
                        <div class=" col-md-4 col-xs-12 col-sm-6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/yash.jpg" alt="yash" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Inauguration</h4>
                                        <p class="g-color--dark">9<sup>th</sup> March, 18:00</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('inaug')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>
                        <!-- Item -->
                        <div class=" col-md-4 col-xs-12 col-sm-6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/yash.jpg" alt="yash" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Day 2nd</h4>
                                        <p class="g-color--dark">10<sup>th</sup> March</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('day2')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>
                        <!-- Item -->
                        <div class=" col-md-4 col-xs-12 col-sm-6 col-md-offset-0 col-sm-offset-3">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/guests/yash.jpg" alt="yash" onerror="this.onerror=null;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">
                                        <h4 class="g-font-size-18--xs g-color--dark g-margin-b-5--xs">Day 3rd</h4>
                                        <p class="g-color--dark">11<sup>th</sup> March</p>
                                        <div class="g-color--primary" id="call-session" onclick="show_overlay('day3')">View</div>
                                    </span>
                                </div>
                              </div>
                        </div>


                    </div>

                </div>
            </div>
            <!--Attractions End-->

        </div>

        <!-- Subscribe -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 50% 0 no-repeat fixed;" id="startupexpo">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Startup Expo</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Showcase your Startup at our Annual Entrepreneurship Summit</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

			    <a class="btn btn-primary" href="https://expo.ecellvnit.org/" target="_blank" role="button">Know More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->

        <!-- Feedback Form -->
        <div class="g-bg-color--sky-light" id="contact">
            <div class="container g-padding-y-0--xs g-padding-y-0--sm">
                <div class="g-text-center--xs g-margin-b-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Contact</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Mail Us</h2>
                </div>
                <form method="post" action="">
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" name="name" class="form-control s-form-v2__input g-radius--50" placeholder="* Name">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" name="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                            </div>
                            <input type="text" name="phone" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" name="message" placeholder="* Your message"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
                    </div>
                </form>
                <div class="g-text-center--xs" id="confirm"></div>
                <div class="g-text-center--xs g-margin-b-40--xs">
                    <br><br>
                    <p class="text-uppercase g-font-size-14--xs g-color--dark g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs">Or Need Any Help? Contact: <a href="team.php">Team</a></p>
                </div>
            </div>
        </div>
        <!-- End Feedback Form -->

        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("footer.php");?>
        <!--========== END FOOTER ==========-->

        <div class="overlay-session" id="yash">
            <button onclick="hide_overlay('yash')" id="close-session">X</button>
            <h3><b>Data Analytics by Yash Gandhi</b></h3>
            <h4>About the Speaker</h4>
            <ul>
                <li>Yash Gandhi,</li>
                <li>Lead Statistician,</li>
                <li>Helpshift,</li>
                <li>Purdue University</li>
            </ul>
            <p><b>Date : </b><b>24<sup>th</sup> August, 2017</b><p>
            <h4>Insights</h4>
            <p>
                Data science, also known as data-driven science, is an interdisciplinary field of scientific
                methods, processes, and systems to extract knowledge or insights from data in various forms,
                either structured or unstructured, similar to data mining.
                Data science is a "concept to unify statistics, data analysis and their related methods" in
                order to "understand and analyze actual phenomena" with data.
            </p>
            <p>Here's a look at some of the key Big Data trends entrepreneurs need to be aware of today:</p>
            <ul>
                <li>Heavier emphasis on predictive analytics</li>
                <li>Deep learning</li>
                <li>The rise of the data engineer</li>
                <li>Shifting away from Hadoop</li>
                <li>Big Data-as-a-Self Service</li>
            </ul>
        </div>

        <div class="overlay-session" id="ibhubs">
            <button onclick="hide_overlay('ibhubs')" id="close-session">X</button>
            <h3><b>Idea Generation And Validation</b></h3>
            <h4>About the Speaker</h4>
            <ul>
                <li>IB Hubs,</li>
                <li>Lead Statistician,</li>
                <li>Helpshift,</li>
                <li>Purdue University</li>
            </ul>
            <p><b>Date : </b><b>24<sup>th</sup> August, 2017</b><p>
            <h4>Insights</h4>
            <p>Comming Soon..</p>
        </div>
        <div class="overlay-session" id="frese">
            <button onclick="hide_overlay('frese')" id="close-session">X</button>
            <h3><b>Error Management</b></h3>
            <br>
            <h4>About the Speaker</h4>
            <ul>
                <li>Michael Frese,</li>
                <li>Provost's Chair,</li>
                <li>Head of Department,</li>
                <li>National University of Singapore</li>
            </ul>
            <br>
            <b>Date : </b><b>30<sup>th</sup> November, 2017</b>
            <br><br>
            <h4>Insights</h4>
            <p>
                Every organization is confronted with errors. Most errors are corrected easily,
                but some may lead to negative consequences. Organizations often focus on error
                prevention as a single strategy for dealing with errors. Our review suggests
                that error prevention needs to be supplemented by error management—an approach
                directed at effectively dealing with errors after they have occurred, with the
                goal of minimizing negative and maximizing positive error consequences
                (examples of the latter are learning and innovations). After defining errors
                and related concepts, we review research on error-related processes affected
                by error management (error detection, damage control). Empirical evidence on
                positive effects of error management in individuals and organizations is then
                discussed, along with emotional, motivational, cognitive, and behavioral
                pathways of these effects. Learning from errors is central, but like other
                positive consequences, learning occurs under certain circumstances—one being
                the development of a mind-set of acceptance of human error.
            </p>

        </div>

        <div class="overlay-session" id="chawala">
            <button onclick="hide_overlay('chawala')" id="close-session">X</button>
            <h3><b>Desiging a BPlan</b></h3>
            <h4>About the Speaker</h4>
            <ul type="none">
                <li>Devesh Chawla,</li>
                <li>CEO & Founder,</li>
                <li>Chatur Ideas</li>
            </ul>
            <b>Date : </b><b>04<sup>th</sup> January, 2018</b>
            <h4>Insights</h4>
            <div>
                <ul>
                    <li>
                        What is a business plan?
                        <ol type="a" start="1">
                            <li>Why prepare a business plan?</li>
                            <li>What to avoid in your business plan</li>
                        </ol>
                    </li>
                    <li>
                        Business Plan Format
                        <ol type="a" start="3">
                            <li>Vision statement</li>
                            <li>The people</li>
                            <li>Business profile</li>
                            <li>Economic assessment</li>
                        </ol>
                     </li>
                     <li>
                         Eight Steps to a Great Business Plan
                         <ol type="a" start="7">
                             <li>Set time aside to prepare</li>
                             <li>Focus and refine concept</li>
                             <li>Gather data</li>
                             <li>Outline the specifics of your business</li>
                             <li>Include experience</li>
                             <li>Put your plan into a compelling form</li>
                             <li>Enhance with graphics</li>
                             <li>Share draft with trusted advisers</li>
                         </ol>
                     </li>
                     <li>
                         Does Your Plan Include the Following Necessary Factors
                         <ol type="a" start="15">
                             <li>A sound business concept</li>
                             <li>Understanding your market</li>
                             <li>Healthy, growing and stable industry</li>
                             <li>Capable management</li>
                             <li>Able financial control</li>
                             <li>Consistent business focus</li>
                             <li>Mindset to anticipate change</li>
                             <li>Plans for online business</li>
                         </ol>
                     </li>
                </ol>
            </div>

        </div>

        <div class="overlay-session" id="abrahams">
            <button onclick="hide_overlay('abrahams')" id="close-session">X</button>
            <h3><b>Web Session by Matt Abrahams</b></h3>
            <br>
            <h4>About:</h4>
            <ul type="none">
                <li>Matt Abrahams,</li>
                <li>Lectures on organizational behavior,</li>
                <li>Stanford Graduate School of Business</li>
                <li>Author of <i>Speaking Up Without Freaking Out</i></li>
                <li><b>TEDx Speaker</b> on <i>“Think fast, talk smart”</i></li>
            </ul>
            <b>Date : </b><b>03<sup>rd</sup> February, 2018</b>
            <h4>In his words:</h4>
            <p><i>
                As a communication professor and coach, I hear a lot from presenters about anxiety.
                Their two greatest fears are that they will forget what to say and that the audience
                won’t remember what was spoken. These fears are certainly understandable, but create
                much angst among nervous and novice presenters. In this series of posts, I will suggest
                several steps you can take to make your presentations more memorable for everyone.
            </i></p>

        </div>
        <!-- Atractions overlays-->
        <div class="overlay-session" id="inaug">
            <button onclick="hide_overlay('inaug')" id="close-session">X</button>
            <h3 style="text-align:center;"><b>Inauguration</b></h3>

            <div class="container">
                <div class="row guest">
                    <div class="col-md-5 col-sm-6 col-xs-12 guest-img"><img src="img/970x970/01.jpg"/></div>
                    <div class="col-md-7 col-sm-6 col-xs-12 guest-content">
                        <h3>Guest1</h3>
                        <p>"Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>

                    </div>
                </div>
                <div class="row guest">
                    <div class="col-md-5 col-sm-6 col-xs-12 guest-img"><img src="img/970x970/01.jpg"/></div>
                    <div class="col-md-7 col-sm-6 col-xs-12 guest-content">
                        <h3>Guest1</h3>
                        <p>"Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>

                    </div>
                </div>
                <div class="row guest">
                    <div class="col-md-5 col-sm-6 col-xs-12 guest-img"><img src="img/970x970/01.jpg"/></div>
                    <div class="col-md-7 col-sm-6 col-xs-12 guest-content">
                        <h3>Guest1</h3>
                        <p>"Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>

                    </div>
                </div>
            </div>


            <br>



        </div>

        <div class="overlay-session" id="day2">
            <button onclick="hide_overlay('day2')" id="close-session">X</button>
            <h3><b>Day2</b></h3>
            <p>Stay Tuned...</p>
            <br>



        </div>

        <div class="overlay-session" id="day3">
            <button onclick="hide_overlay('day3')" id="close-session">X</button>
            <h3><b>Day3</b></h3>
            <p>Stay Tuned...</p>
            <br>



        </div>


        </div>


        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
		<script src="js/main.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>
        <script src="/js/cards.js"></script>
		<script src="/js/materialize.js"></script>


        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo("
<script type=\"text/javascript\">
    $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Plz! Fill the form</p>');
    location.replace(\"#contact\");
</script>
");

   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

require_once "Mail.php";
#include("Mail.php");
$from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
$to = "<contact@ecellvnit.org>";
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$host = "ssl://sharedlinux.cloudhostdns.net";
$port = "465";
$username = "noreply@ecellvnit.org";          //your mail id
$password = "Ecellvnit123@";                      //password of this mail id

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
   echo("
<script type=\"text/javascript\">
    $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Your Message Sent!</p>');
</script>
");
}

$from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
$to = $email_address;
$subject = "Thank You For Contacting us";
$body = "Thank You $name for Contacting us.\n\nWe will surely contact you soon.\n\nFor instant support contact\nName: Meghna Bhave\nEmail: meghna.bhave@gmail.com\nPhone: 8368255076";
$host = "ssl://sharedlinux.cloudhostdns.net";
$port = "465";
$username = "noreply@ecellvnit.org";          //your mail id
$password = "Ecellvnit123@";                      //password of this mail id

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
}
?>
