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
	    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113907534-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113907534-1');
</script>

        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ad-Venture | E-CELL, VNIT</title>
        <meta name="keywords" content="E-cell VNIT entreprenuship cell consortium 18 ecell vnit adventure consortium" />
        <meta name="description" content="Consortium'18 E-CELL VNIT Annual Entrepreneurship Summit">
        <meta name="author" content="E-cell">

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
                                            <span class="s-promo-block-v3__date g-font-size-100--xs g-font-size-135--lg g-font-weight--300 g-color--primary">20<span class="g-font-size-20--xs g-font-size-30--lg">K</span></span>
                                        </div>
                                    </div>
                                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                                        <span class="s-promo-block-v3__month g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white"><b>Cash Prize<b></span>

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

                    <h6><b>About</b></h6>
    					<p>Ad-venture is the ad making event in Conso. If you can roll
                        your ideas into a complete advertisement for a company
                        then this event provides you with the opportunity to make it
                        big. It is your chance to be on the screen while giving life to
                        your ideas staying behind it.</p>
                        <br>

                    <h6><b>Theme</b></h6>
                        <p>The theme for the event is <b>“Give traction to your life with the right choice of tyre.”</b></p>
                        <p>The comfort of your journey can vary sharply based on the tyres you use
                        for your vehicle. The ride could be effortless, allowing you to cruise through
                        highways and roughened roads with ease, or it could lead to you go on looking at
                        your destination on the map, wanting the ride to end almost instantly. The dangers
                        of a bad tyre are many, yet all it takes one choice to avoid all that trouble and
                        ensure your life is always on track. </p>
                        <p>Make an ad for our sponsor <b>“Ajmera Tyres”</b>, a reputed company with years of experience in tyre manufacture. </p>
                        <p>The ad should be based on the idea of <b>“enhancing the pleasure of driving and educating the society about the importance of good tyres”</b>.</p>
    		    	    <p>For more information about Ajmera Tyres visit: <a href="http://bit.ly/2stOiFB" target="_blank">Adventure: Ajmera Tyres Brief</a></p>

                    <br>
    		        <h6><b>Type of content expected</b></h6>
    		        <p>The content can be in any one of the forms below:</p>
    		        <ol>
    		            <li>Videos</li>
    		            <li>Posters</li>
    		            <li>Jingles</li>
    		        </ol>
    		        <p><i>If you have any other form/media in mind, contact us.</i></p>

    		        <br>
    		        <h6><b>Criteria for Judgement:</b></h6>
    		        <ol>
    		            <li>Coherence of content with the theme.</li>
    		            <li>Visual appeal.</li>
    		            <li>Skills attributed to refining and editing.</li>
    		            <li>Creativity of thought.</li>
    		            <li>Sense of completeness and effort.</li>
    		            <li>Content reflected in the ad; on the given theme.</li>
    		        </ol>

    		        <br>
    		        <br>
    		        <b><p>LAST DAY OF REGISTRATION: 11:59 PM, 25 February, 2018. </p></b>
    		        <b><p>LAST DAY OF SUBMISSION OF THE CONTENT: 11;59 PM, 6 March, 2018. </p></b>


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
                        <p class=" g-color--white">msricharan99@gmail.com</p>
                    </li>

                </ol>
            </div>
            <div id="newform">
                <form class="g-bg-color--dark-light g-padding-x-50--xs g-padding-y-80--xs g-radius--4">
                    <div class="g-text-center--xs">
                        <a href="https://adventure.ecellvnit.org/register/" target="_blank" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Register</a>
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
