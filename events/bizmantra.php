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

    $query = mysqli_query($con, "INSERT into bizmantra (NAME,EMAIL,CONTACT) values('$name','$email','$phone')");
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
        <title>Bizmantra | E-CELL, VNIT</title>
        <meta name="keywords" content="E-cell VNIT entreprenuship cell consortium 18 ecell vnit consortium bizmantra" />
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
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('img/1920x1080/bizmantra-landing.jpg');">
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Bizmantra</h1><br><h2 class="g-color--white-opacity-light">Buzz the mantra, Do the Biz!</h2>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                        <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
                        <div class="row">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                                    <p class="g-font-size-18--xs g-color--white-opacity">To accept a product from our side and build its presence by bringing it in the spotlight.</p>
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                            <span class="s-promo-block-v3__date g-font-size-100--xs g-font-size-135--lg g-font-weight--300 g-color--primary">8<span class="g-font-size-20--xs g-font-size-30--lg">K</span></span>
                                        </div>
                                    </div>
                                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                                        <span class="s-promo-block-v3__month g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white-opacity-light">Prize Worth!</span>
                                        <span class="s-promo-block-v3__year g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white-opacity-light">And more!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-pull-8">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                           
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
    		    	    <h6><i>"Marketing is no longer about the stuff that you make, but about the stories you tell" -Seth Godin</i></h6>
    					<p>BizMantra aims to test your marketing skills at a rudimentary level. Here you have to accept a product from our side and build its presence by bringing it in the spotlight.
    					Your journey in this event will put you through a series of tasks, which will help you realize your potential in the world of marketing.</p>
    					<br>
    					<h6><b>Event Structure</b></h6>
    					<ul>

    					    <li><h6>Round 1</h6><p>The event will start with a quiz that will help shortlist the candidates. If you are able to clear the quiz, you will  be divided into teams of five, and would have to clear two rounds in order to win the competition.</p></li>
    					    <br>
    					    <li><h6>Round 2</h6><p>Your team will be given a catchy fictitious product for which you have to garner maximum votes. The top teams from this round will be selected for the final task. </p></li>
    					    <br>
    					    <li><h6>Round 3</h6><p>In this round, you will be given a series of products and you have to sell the products at the maximum profit possible in order to win the round, and consequently the event.</p></li>
    					</ul>
    		    	</div>
    		    	<div id="bizmantra5">
    			     	<ol>
    			     	    <li>The event will give you an exposure to marketing at a ground level.</li>
    			     	    <li>Certificates of Participation will be awarded to everyone clearing the quiz round, issued by E-          Cell.</li>
    			     	    <li>The members of the winning team will not only be given a merit certificate, but will also be
                                awarded a cash price, the amount of which will be disclosed later on.
                                </li>
    			     	    <li>Not only this, as an added incentive, the members of the winning team will also be able to avail a marketing internship, which will provide them with a great exposure.</li>

    			     	</ol>
    			     	<br><a href="#newform">Register</a>
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
                    <br>
                    <li class=" g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Souvik Naha</h6>
                        <p class=" g-color--white">7908057043</p>
                    </li>
                    <br>
                    <li class=" g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Omkar Tarkar</h6>
                        <p class=" g-color--white">9930137666</p>
                    </li>
                    <br>
                    <li class=" g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Abhishek Kumar Singh</h6>
                        <p class=" g-color--white">9532902034</p>
                    </li>
                    <br>
                    <li class=" g-color--white">
                        <h6 class="g-color--white g-font-size-20--md">Akshay Singh</h6>
                        <p class=" g-color--white">7758009078</p>
                    </li>

                </ol>
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
