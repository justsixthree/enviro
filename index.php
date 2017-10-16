<?php
$servername = "localhost";
$username = "root";
$password = "";

//// Create connection
//$conn = new mysqli($servername, $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "<pre>";
//print_r($_SERVER);
//echo "<pre>";die();
$con = mysqli_connect("localhost", "root", "", "eviro");
if (count($_POST)) {
    if (isset($_POST['message_form_submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg = $_POST['message'];
        if (strlen($email) && strlen($msg)) {
            $sql_query = 'INSERT INTO `message`(`message_id`, `user_name`, `user_email`, `user_phone`, `user_message`) VALUES (NULL,"' . $name . '","' . $email . '","' . $phone . '","' . $msg . '")';
            mysqli_query($con, $sql_query) or die(mysqli_error($con));
        }
        header("Location:" . $_SERVER['PHP_SELF']);
    }
    if (isset($_POST['question_form_submit'])) {
        $question = $_POST['question'];
        if (!empty($question)) {
            $sql = 'INSERT into `question` set  user_question  = "' . $question . '"';
            mysqli_query($con, $sql) or die(mysqli_error($con));
            header("Location:" . $_SERVER['PHP_SELF']);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Enviro Pollution</title>
        <link rel="stylesheet" type="text/css" href="assets/fonts/ep/fonts.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="assets/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body class="ep-header-fixed">
        <div class="site-wrapper">
            <section id="home">
                <header class="ep-header header clearfix" data-minimize-offset="40">
                    <div class="ep-navbar clearfix">
                        <div class="container">
                            <div class="ep-navbar-wrapper clearfix">
                                <div class="ep-brand pull-left">
                                    <a href="index.php" class="ep-logo">
                                        <img src="assets/images/logo.png" alt="LOGO" class="ep-desktop-logo">
                                        <img src="assets/images/logo.png" alt="Logo" class="ep-desktop-logo-inverse">
                                        <img src="assets/images/logo.png" alt="Logo" class="ep-mobile-logo"> 
                                    </a>
                                    <button class="nav-toggler" type="button" data-target=".menu">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </button>
                                </div>
                                <nav class="menu menu-onepage pull-right" data-onepage-animation-speed="700">
                                    <ul class="nav navbar-nav">
                                        <li class="page-link ep-active">
                                            <a href="#home">Home</a>
                                        </li>
                                        <li class="page-link ">
                                            <a href="#types">Types of Pollution</a>
                                        </li>
                                        <li class="page-link ">
                                            <a href="#causes">Causes &AMP; Effects</a>
                                        </li>
                                        <li class="page-link">
                                            <a href="#whattodo">What to do?</a>
                                        </li>
                                        <li class="page-link ">
                                            <a href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>
                <!--BANNER-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="assets/images/banner-4.png" alt="Banner Image">
                        </div>
                        <div class="item">
                            <img src="assets/images/banner-2.png" alt="Banner Image Second">
                        </div>
                        <div class="item">
                            <img src="assets/images/banner-4.png" alt="Banner Image Third">
                        </div>
                        <div class="item">
                            <img src="assets/images/banner-4.png" alt="Banner Image Fourth">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left icon-arrow-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right icon-arrow-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--//BANNER-->
            </section>
            <!--MAIN TYPES-->
            <section id="types">
                <div class="ep-content-box ep-size-md ep-bg-grey-1">
                    <div class="container">
                        <div class="main-types">
                            <!-- Begin: Title 1 component -->
                            <div class="ep-content-title-1">
                                <h3 class="ep-font-uppercase text-center ep-font-bold">Types of Pollution</h3>
                                <div class="ep-line-center ep-theme-bg"></div>
                                <p class="text-center">Main six types of pollutions</p>
                            </div>
                            <!-- End-->
                            <ul class="ep-list">
                                <li>
                                    <div class="ep-card ep-bg-white text-right wow animate fadeInLeft" style="opacity: 1; visibility: visible; animation-name: fadeInLeft;">
                                        <i class="icon-fire ep-font-27 ep-theme-font ep-float-right ep-border "></i>
                                        <div class="ep-content ep-content-right">
                                            <h3 class="ep-font-uppercase ep-font-bold">Air Pollution</h3>
                                            <p>Air pollution is defined as any contamination of the atmosphere that disturbs the natural composition and chemistry of the air.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="ep-card ep-bg-white wow animate fadeInRight" style="opacity: 1; visibility: visible; animation-name: fadeInRight;">
                                        <i class="icon-drop ep-font-27 ep-theme-font ep-float-left ep-border "></i>
                                        <div class="ep-content ep-content-left">
                                            <h3 class="ep-font-uppercase ep-font-bold">Water Pollution</h3>
                                            <p>Water pollution involves any contaminated water, whether from chemical, particulate, or bacterial matter that degrades the water's quality and purity.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="ep-list">
                                <li>
                                    <div class="ep-card ep-bg-white text-right wow animate fadeInLeft" style="opacity: 1; visibility: visible; animation-name: fadeInLeft;">
                                        <i class="icon-trash ep-font-27 ep-theme-font ep-float-right ep-border "></i>
                                        <div class="ep-content ep-content-right">
                                            <h3 class="ep-font-uppercase ep-font-bold">Soil Pollution</h3>
                                            <p>Soil, or land pollution, is contamination of the soil that prevents natural growth and balance in the land whether it is used for cultivation, habitation, or a wildlife preserve.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="ep-border-grey-1-5">
                                    <div class="ep-card wow ep-bg-white animate fadeInRight" style="opacity: 1; visibility: visible; animation-name: fadeInRight;">
                                        <i class="icon-volume-2 ep-font-27 ep-theme-font ep-float-left ep-border "></i>
                                        <div class="ep-content ep-content-left">
                                            <h3 class="ep-font-uppercase ep-font-bold">Noise Pollution</h3>
                                            <p>Noise pollution refers to undesirable levels of noises caused by human activity that disrupt the standard of living in the affected area.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="ep-list">
                                <li>
                                    <div class="ep-card ep-bg-white text-right wow animate fadeInLeft" style="opacity: 1; visibility: visible; animation-name: fadeInLeft;">
                                        <i class="icon-energy ep-font-27 ep-theme-font ep-float-right ep-border "></i>
                                        <div class="ep-content ep-content-right">
                                            <h3 class="ep-font-uppercase ep-font-bold">Thermal Pollution</h3>
                                            <p>Thermal pollution is excess heat that creates undesirable effects over long periods of time.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="ep-card wow ep-bg-white animate fadeInRight" style="opacity: 1; visibility: visible; animation-name: fadeInRight;">
                                        <i class="icon-ghost ep-font-27 ep-theme-font ep-float-left ep-border "></i>
                                        <div class="ep-content ep-content-left">
                                            <h3 class="ep-font-uppercase ep-font-bold">Personal Pollution</h3>
                                            <p>Personal pollution is the contamination of one's body and lifestyle with detrimental actions.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--//MAIN TYPES-->
            <!--CAUSES AND EFFECTS-->
            <section id="causes">
                <div class="ep-content-box ep-size-md ep-bg-grey-1 ep-no-bottom-padding">
                    <div class="ep-container">
                        <div class="causes-effects ep-opt-1">
                            <div>
                                <ul class="nav ep-theme-nav">
                                    <li class="active">
                                        <a class="" href="#air-pollution" data-toggle="tab">Air Pollution</a>
                                    </li>
                                    <li>
                                        <a class="" href="#water-pollution" data-toggle="tab">Water Pollution</a>
                                    </li>
                                    <li>
                                        <a class="" href="#soil-pollution" data-toggle="tab">Soil Pollution</a>
                                    </li>
                                    <li>
                                        <a class="" href="#noise-pollution" data-toggle="tab">Noise Pollution</a>
                                    </li>
                                    <li>
                                        <a class="" href="#thermal-pollution" data-toggle="tab">Thermal Pollution</a>
                                    </li>
                                    <li>
                                        <a class="" href="#personal-pollution" data-toggle="tab">Personal Pollution</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ep-tab-content">
                                <div class="container">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="air-pollution">
                                            <div class="col-md-5 col-sm-12 wow animate fadeInLeft">
                                                <ul class="ep-items">
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-fire"></i>Air Pollution
                                                        </h4>
                                                        <p>Air pollution is defined as any contamination of the atmosphere that disturbs the natural composition and chemistry of the air. This can be in the form of particulate matter such as dust or excessive gases like carbon dioxide or other vapors that cannot be effectively removed through natural cycles, such as the carbon cycle or the nitrogen cycle. </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-tag"></i>Causes
                                                        </h4>
                                                        <p>
                                                            <span>Vehicle or manufacturing exhaust,Forest fires.</span><br/>
                                                            <span>volcanic eruptions, dry soil erosion,and other natural sources.</span><br/>
                                                            <span>Building construction or demolition.</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-target"></i>Effects
                                                        </h4>
                                                        <p>Depending on the concentration of air pollutants, several effects can be noticed. Smog increases, higher rain acidity, crop depletion from inadequate oxygen, and higher rates of asthma. Many scientists believe that global warming is also related to increased air pollution. </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-7 col-sm-12 wow animate fadeInRight">
                                                <ul class="ep-photos">
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/air-pollution/air-1.png" alt="1"> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/air-pollution/air-2.png" alt="2">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/air-pollution/air-3.png" alt="3"> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/air-pollution/air-4.png" alt="4"> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/air-pollution/air-5.png" alt="5">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/air-pollution/air-6.png" alt="6">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="water-pollution">
                                            <div class="col-md-5 col-sm-12">
                                                <ul class="ep-items">
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-drop"></i>Water Pollution 
                                                        </h4>
                                                        <p>Water pollution involves any contaminated water, whether from chemical, particulate, or bacterial matter that degrades the water's quality and purity. Water pollution can occur in oceans, rivers, lakes, and underground reservoirs, and as different water sources flow together the pollution can spread</p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-tag"></i>Causes
                                                        </h4>
                                                        <p>
                                                            <span>Increased sediment from soil erosion </span><br/>
                                                            <span>Improper waste disposal and littering</span><br/>
                                                            <span>Leaching of soil pollution into water supplies </span><br>
                                                            <span>Organic material decay in water supplies</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-target"></i>Effects
                                                        </h4>
                                                        <p>The effects of water pollution include decreasing the quantity of drinkable water available, lowering water supplies for crop irrigation, and impacting fish and wildlife populations that require water of a certain purity for survival. </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <ul class="ep-photos">
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/water-pollution/water-1.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/water-pollution/water-2.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/water-pollution/water-3.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/water-pollution/water-4.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/water-pollution/water-5.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/water-pollution/water-6.png" alt=""> 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="soil-pollution">
                                            <div class="col-md-5 col-sm-12">
                                                <ul class="ep-items">
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-trash"></i>Soil Pollution
                                                        </h4>
                                                        <p>Soil, or land pollution, is contamination of the soil that prevents natural growth and balance in the land whether it is used for cultivation, habitation, or a wildlife preserve. Some soil pollution, such as the creation of landfills, is deliberate, while much more is accidental and can have widespread effects. </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-tag"></i>Causes
                                                        </h4>
                                                        <p>
                                                            <span>Hazardous waste and sewage spills </span><br/>
                                                            <span>Non-sustainable farming practices, such as the heavy use of inorganic pesticides</span><br/>
                                                            <span>Strip mining, deforestation, and other destructive practices</span><br>
                                                            <span>Household dumping and littering</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-target"></i>Effects</h4>
                                                        <p>Soil contamination can lead to poor growth and reduced crop yields, loss of wildlife habitat, water and visual pollution, soil erosion, and desertification. </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <ul class="ep-photos">
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/soil-pollution/soil-1.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/soil-pollution/soil-2.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/soil-pollution/soil-3.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/soil-pollution/soil-4.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/soil-pollution/soil-5.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/soil-pollution/soil-6.png" alt=""> 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="noise-pollution">
                                            <div class="col-md-5 col-sm-12">
                                                <ul class="ep-items">
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-volume-2"></i>Noise Pollution
                                                        </h4>
                                                        <p>Noise pollution refers to undesirable levels of noises caused by human activity that disrupt the standard of living in the affected area. </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-tag"></i>Causes
                                                        </h4>
                                                        <p>
                                                            <span>Traffic</span><br/>
                                                            <span>Airports</span><br/>
                                                            <span>Railroads</span><br>
                                                            <span>Manufacturing plants</span>
                                                            <span>Construction or demolition</span>
                                                            <span>Concerts</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-target"></i>Effects
                                                        </h4>
                                                        <p>Some noise pollution may be temporary while other sources are more permanent. Effects may include hearing loss, wildlife disturbances, and a general degradation of lifestyle.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <ul class="ep-photos">
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/noise-pollution/noise-1.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/noise-pollution/noise-2.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/noise-pollution/noise-3.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/noise-pollution/noise-4.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/noise-pollution/noise-5.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/noise-pollution/noise-6.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thermal-pollution">
                                            <div class="col-md-5 col-sm-12">
                                                <ul class="ep-items">
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-energy"></i>Thermal Pollution
                                                        </h4>
                                                        <p>Thermal pollution is excess heat that creates undesirable effects over long periods of time. The earth has a natural thermal cycle, but excessive temperature increases can be considered a rare type of pollution with long term effects. Many types of thermal pollution are confined to areas near their source, but multiple sources can have wider impacts over a greater geographic area. </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-tag"></i>Causes
                                                        </h4>
                                                        <p>
                                                            <span>Power plants </span><br/>
                                                            <span>Urban sprawl </span><br/>
                                                            <span>Air pollution particulates that trap heat </span><br>
                                                            <span>Deforestation</span>
                                                            <span>Loss of temperature moderating water supplies </span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-target"></i>Effects
                                                        </h4>
                                                        <p>As temperatures increase, mild climatic changes may be observed, and wildlife populations may be unable to recover from swift changes. </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <ul class="ep-photos">
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/thermal-pollution/thermal-1.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/thermal-pollution/thermal-2.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/thermal-pollution/thermal-3.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/thermal-pollution/thermal-4.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/thermal-pollution/thermal-5.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/thermal-pollution/thermal-6.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="personal-pollution">
                                            <div class="col-md-5 col-sm-12">
                                                <ul class="ep-items">
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-ghost"></i>Personal Pollution
                                                        </h4>
                                                        <p>Personal pollution is the contamination of one's body and lifestyle with detrimental actions.</p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-tag"></i>Causes
                                                        </h4>
                                                        <p>
                                                            <span>Excessive smoking, drinking or drug abuse</span><br/>
                                                            <span>Emotional or physical abuse</span><br/>
                                                            <span>Air pollution particulates that trap heat </span><br>
                                                            <span>Poor living conditions and habits</span>
                                                            <span>Poor personal attitudes</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4 class="ep-font-20">
                                                            <i class="icon-target"></i>Effects
                                                        </h4>
                                                        <p>In some cases, personal pollution may be inflicted by caregivers, while in other cases it is caused by voluntary actions. Taking positive steps in your life can help eliminate this and other sources of pollution so you can lead a more productive, satisfying life. </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <ul class="ep-photos">
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/personal-pollution/personal-1.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/personal-pollution/personal-2.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/personal-pollution/personal-3.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/personal-pollution/personal-4.png" alt="">
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/personal-pollution/personal-5.png" alt=""> 
                                                    </li>
                                                    <li class="col-md-4 col-sm-4">
                                                        <img class="img-responsive" src="assets/images/personal-pollution/personal-6.png" alt=""> 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--//CAUSES AND EFFECTS-->
            <!--WHAT TO DO-->
            <section id="whattodo">
                <div class="ep-content-box ep-size-md ep-bg-white ep-bg-parallax" style="background-image: url(./assets/images/bg-parallax.jpg)">
                    <div class="container">
                        <div class="ep-content-title-1 text-center ep-margin-t-80">
                            <h3 class="ep-font-uppercase ep-font-bold">A List of Things You Can Do</h3>
                            <div class="ep-line-center"></div>
                        </div>
                        <div class="row text-center">
                            <div class="col-xs-12 wow animate fadeInDown" style="visibility: visible; animation-name: fadeInUp; opacity: 1;">
                                <p>Every action or inaction of any person has an effect on the environment-be it good, neutral, or negative. By becoming aware and doing the right thing, we choose to be part of the solution. Here are some things you can do: </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 wow animate fadeInDown" style="visibility: visible; animation-name: fadeInUp; opacity: 1;">
                                <ul class="ep-to-do-list ep-theme ep-separator-dot ep-font-uppercase">
                                    <li>Drive an electric or hybrid car or at least one that uses unleaded gasoline.</li>
                                    <li>Keep your car in good running condition to avoid emissions.</li>
                                    <li>Share a ride or carpool.</li>
                                    <li>Choose to walk or ride a bicycle whenever possible.</li>
                                    <li>Get regular maintenance on your vehicle</li>
                                    <li>Never use open fires to dispose of waste, especially chemicals and plastic.</li>
                                    <li>Adopt the 3 Rs of solid waste management: reduce, reuse, and recycle.</li>
                                    <li>Use sustainable, reclaimed, or recycled building materials.</li>
                                    <li>Start composting leaves and clippings from your yard and food scraps from your kitchen to reduce waste while improving your soil.</li>
                                    <li>Buy local foods and goods. In this manner, the use of fuel for transporting goods can be minimized.</li>
                                    <li>Look around you house or place of business for ways you could conserve water.</li>
                                    <li>Use and buy products that are eco-friendly or made with biodegradable materials. Avoid plastic.</li>
                                    <li>Always bring a bag when you shop.</li>
                                    <li>Get rid of your lawn: Plant bee-friendly, drought-tolerant, native plants instead.</li>
                                    <li>Plant more trees. They clean the air, provide oxygen, and beautify your surroundings.</li>
                                    <li>Take care to properly dispose of your pet's waste.</li>
                                    <li>Do not litter. Start an anti-litter campaign to educate your community.</li>
                                    <li>Say a big "NO" to pesticides and GMOs (genetically modified organisms).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--//WHAT TO DO-->
            <!--CONTACT-->    
            <section id="contact"> 
                <div class="ep-content-box ep-size-md ep-bg-white">
                    <div class="container">
                        <div class="contact ep-option-1">
                            <div class="row">
                                <div class="col-md-6 wow animate fadeInLeft">
                                    <div class="ep-container ep-bg-grey-1">
                                        <div class="ep-content-title-1">
                                            <h3 class="ep-font-uppercase ep-font-bold">Have a question?</h3>
                                            <div class="ep-line-left"></div>
                                            <form action="index.php" name="question_form" method="post" id="question-form">
                                                <div class="input-group input-group-lg ep-square">
                                                    <input class="form-control ep-square" name="question" placeholder="Ask a question" type="text">
                                                    <span class="input-group-btn">
                                                        <button class="btn ep-theme-btn" type="submit" name="question_form_submit">Go!</button>
                                                    </span>
                                                </div>
                                            </form>
                                            <p>Ask your questions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow animate fadeInRight">
                                    <div class="ep-contact">
                                        <div class="ep-content-title-1">
                                            <h3 class="ep-font-uppercase ep-font-bold">Please Share your views.</h3>
                                            <div class="ep-line-left"></div>
                                            <p class="ep-font-lowercase">What is your point of view on the effect of pollution on evolution? </p>
                                        </div>
                                        <form id="message-form" action="#contact" method="post" name="message_form">
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Name" min-length="3" max-length="15" name="name" required class="form-control ep-square ep-theme input-lg required"> 
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Your Email" name="email" required class="form-control ep-square ep-theme input-lg required"> 
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Contact Phone" min-length="10" max-length="13" required name="phone" class="form-control ep-square ep-theme input-lg required"> 
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="8" name="message" min-length="5" max-length="150"  required placeholder="Write comment here ..." class="form-control ep-theme ep-square input-lg required"></textarea>
                                            </div>
                                            <button class="btn ep-theme-btn btn-lg " name="message_form_submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FOOTER-->
                <footer class="ep-layout-footer wow animate fadeInUp">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="ep-copyright">Copyright <small>BY</small> Bhupinder Singh</p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--//FOOTER-->
            </section>
            <!--//CONTACT-->    
            <!--BACK TO TOP-->
            <div class="ep-go2top">
                <i class="icon-arrow-up"></i>
            </div>
            <!--//BACK TO TOP-->
        </div>
        <!-- //SITE WRAPPER -->
        <!--SCRIPTS-->
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/js/wow.js" type="text/javascript"></script>
        <script src="assets/js/reveal-animate.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <!--//SCRIPTS-->
    </body>
</html>