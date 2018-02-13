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

    $query = mysqli_query($con, "INSERT into silhouette (NAME,EMAIL,CONTACT) values('$name','$email','$phone')");
     mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Silhouette | E-CELL, VNIT</title>
        <meta name="keywords" content="E-cell VNIT entreprenuship cell consortium 18 ecell vnit consortium silhouette" />
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
    <body id="main">

        <!--========== HEADER ==========-->
        <?php include("header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('img/1920x1080/silhouette-landing.jpg');">
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Silhouette</h1><br><h2 class="g-color--white-opacity-light">Be the picasso of design science </h2>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                        <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
                        <div class="row">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                                    <p class="g-font-size-18--xs g-color--white">Test your creative skills as a logo designer . Design classic logos related to the theme provided. From amateurs to professionals , from paper to official logos .</p>
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
                                        <span class="s-promo-block-v3__month g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white">Prize worth!</span>
                               
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
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">About</h2>
            </div>
            <div class="card" id="event-card-bg">
    		    <div class="card-tabs">
    		      <ul class="tabs tabs-fixed-width">
    		        <li class="tab"><a class="active" href="#bizmantra4">WHAT?</a></li>
    		        <li class="tab"><a href="#bizmantra5">WHY?</a></li>
    		      </ul>
    		    </div>
    		    <div class="card-content code">
    		    	<div id="bizmantra4">
    					<p>An event to test your creative skills as a logo designer. Design classic logos related to the theme provided. From amateurs to professionals , from paper to official logos.</p>
    					<p>Along with the logo participant need to submit the basic concept and the ideation behind the logo. The logo should have originally , copied content if found will discarded.</p>
    					<p>To build the logo of your choice , get to the link below for theme ...</p><br>
				<p><a target="_blank" href="https://silhouette.ecellvnit.org/themes/DesignBrief.pdf" >Click here</a> to download theme</p>

    		    	</div>
    		    	<div id="bizmantra5">
    			     	<p>Logos are a critical aspect of business marketing . As the company's major graphical representation , a logo anchors a company's brand. For this reason , a well designed logo is an essential part of any company's overall marketing strategy.
    			     	Participation increases confidence level and the hurdles faced can help recognize strengths and weakness.<br>Silhouette will give life time experience and if you think you are ,then prove your worth . Come join the flow.
    					</p><br>
    					<h6>Winning Prizes</h6>
    					<ol>
    					    <li>Winner : Worth. Rs. 7,000/-</li>
    					    <li>Runner Up : Worth Rs. 5,000/-</li>
    					    <li>2nd Runner up : Worth Rs. 3,000/-</li>
    					</ol>
    					<h6>Register</h6>
    					<p>
    					    This contest is open to anyone on an individual basis. There will be online registration and then you will be receiving the theme. Contestants can submit multiple entries . Participants should strictly follow all the rules given in the manual.
    					</p><br>
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
                        <h6 class="g-color--white g-font-size-20--md">Ayush Singh</h6>
                        <p class=" g-color--white">isayushsingh@gmail.com</p>
                        <p class=" g-color--white">+91 9423539984</p>
                    </li>
                    <li class="g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Prashant Bramhanwade</h6>
                        <p class="g-color--white"></p>
                        <p class=" g-color--white">+91 7057856961</p>
                    </li>
                </ol>
            </div>
            <div id="newform">
                <form class="g-bg-color--dark-light g-padding-x-50--xs g-padding-y-80--xs g-radius--4">
                    <div class="g-text-center--xs">
                        <a href="https://silhouette.ecellvnit.org/register/" target="_blank" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Register</a>
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
