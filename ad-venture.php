<?php
// Add name tags to input in html: name,email,phone,submit
// Change table names to adventure,bizmantra,silhouette resp.

// add in formtag : method="post" action="<?php echo $_SERVER['PHP_SELF'];

if ( isset( $_POST['submit'] ) ) {
    $con = mysqli_connect("localhost:3306", "conso", "Conso123@", "conso");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $query = mysqli_query($con, "INSERT into adventure (NAME,EMAIL,CONTACT) values('$name','$email','$phone')");
     mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Consortium'18 | E-CELL, VNIT</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Skins -->
        <link href="css/theme/red.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <?php include("header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('img/1920x1080/ad-venture-landing.jpg');">
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">AD-Venture</h1><br><h2 class="g-color--white-opacity-light">Lens The Idea</h2>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                        <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
                        <div class="row">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                                    <p class="g-font-size-18--xs g-color--white">Roll your ideas into a complete advertisement for a company and let everyone see how your idea can take life as a ad.</p>
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                            <span class="s-promo-block-v3__date g-font-size-100--xs g-font-size-135--lg g-font-weight--300 g-color--primary">50<span class="g-font-size-20--xs g-font-size-30--lg">K</span></span>
                                        </div>
                                    </div>
                                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                                        <span class="s-promo-block-v3__month g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white"><b>Prize Worth!<b></span>
                                        <span class="s-promo-block-v3__month g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white"><b>1st prize 10K cash</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-pull-8">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a href="#newform" title="Register">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>
                                <span class="text-uppercase g-font-size-13--xs g-color--white g-padding-x-15--xs">Register Now!</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm">
            <h1>About</h1>
            <div class="card" id="event-card-bg">
    		    <div class="card-tabs">
    		      <ul class="tabs tabs-fixed-width">
    		        <li class="tab"><a class="active" href="#bizmantra4">WHAT?</a></li>
    		        <li class="tab"><a href="#bizmantra5">WHY?</a></li>
    		      </ul>
    		    </div>
    		    <div class="card-content code">
    		    	<div id="bizmantra4">


    					<p>Ad-venture is the ad making event in Conso. If you can roll
                        your ideas into a complete advertisement for a company
                        then this event provides you with the opportunity to make it
                        big. It is your chance to be on the screen while giving life to
                        your ideas staying behind it.</p>
                        <p>So, This Conso's 18, grab your camera, find a place and don't forget to bring your idea along
                        and let everyone see how your idea can take life in your ad.</p>
    		    	</div>
    		    	<div id="bizmantra5">
    			     	<p>A company's growth is nestled in the way it is marketed. What if you never see your
                        favourite soft-drink company on your tele or daily? What if they never appear on your news
                        feeds? Every company, be it at any stage, need to project it's vision and idea in the most
                        unique way. Well, an advertisement that'd connect with millions and let their idea breathe
                        with them is what all a company needs.
                        </p>
                        <p>Participants will make an ad be it a 'jingle' or a 'video' for a company and will be
                        judged on their creativity, brevity and originality. Why keep
                        an idea, lens it this Conso.</p>
                        <a href="#newform">Register</a>
    				</div>

    		    </div>
		  </div>
        </div>
        <!-- End Features -->

        <!-- Coordinators -->
        <div class="container js__parallax-window">
            <div class="" id="cordinator">
                <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-40--md g-color--white">Event Managers</h2>
                <ol>
                    <li class=" g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Ayush Ratna</h6>
                        <p class=" g-color--white">+91 7558621726</p>
                        <p class=" g-color--white">ratnapro19@gmail.com</p>
                    </li>
                    <li class="g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Aman Jain</h6>
                        <p class="g-color--white">+91 9561503330</p>
                        <p class=" g-color--white">aj161198@gmail.com</p>
                    </li>
                    <li class="g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Sri Charan</h6>
                        <p class="g-color--white">+91 7721075759</p>
                        <p class=" g-color--white"></p>
                    </li>

                </ol>
            </div>
            <div id="newform">
                <form class="g-bg-color--dark-light g-padding-x-50--xs g-padding-y-80--xs g-radius--4" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="g-text-center--xs g-margin-b-40--xs">
                        <h2 class="g-font-size-30--xs g-color--white">Join Event</h2>
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name" name="name">
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="email">
                    </div>
                    <div class="g-margin-b-40--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Phone" name="phone">
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs" name="submit">Join Now</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Coordinator -->




        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("footer.php");?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>
        <script src="/js/cards.js"></script>
		<script src="/js/materialize.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
