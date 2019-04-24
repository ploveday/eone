<?php
function genId($length = 10) 
{

    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function feedback($subject, $emailMessage)
{
    //SEND AN EMAIL
    $to = 'events@e-oneevents.com, ncosugo@yahoo.com';
    $mailSubject = $subject;
    $mailmessage = $emailMessage;
           
    //Alternative
    $headers = array();
    $from = "events@e-oneevents.com";
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=iso-8859-1";
$headers[] = "Mesaage-id: " .genId();
$headers[] = "From: 'E-ONE Events' <$from>";
$headers[] = "Reply-To: <$from>"; 
$headers[] = "Date: $date";
$headers[] = "Return-Path: <$from>";
$headers[] = "X-Priority: 3";//1 = High, 3 = Normal, 5 = Low
$headers[] = "X-Mailer: PHP/" . phpversion(); 
$emailStatus = mail($to,$mailSubject,$mailmessage,implode("\r\n", $headers)); 
}
if(isset($_POST['fed_msg']))
{
    if(strlen($_POST['email']) > 6 || strlen($_POST['message']) > 6 || strlen($_POST['name']) > 2)
    {
    $subject = "Message from ".$_POST['name'].", a web visitor at http://www.e-oneevents.com/";
    
    $emailMessage = "Name: ".$_POST['name']."<br>Email: ".$_POST['email']."<br>Telephone: ".$_POST['phone']."<br>Message: ".$_POST['message'];
    feedback($subject, $emailMessage);
    echo "<script language='javascript'> alert('Thank you for contacting us. Your Feedback has been successfully submited')
    </script>";
    }
    else
    {
        echo "<script language='javascript'> alert('All fields are required. Kindly enter your complete data - Name, Email, Phone Number and Message')
    </script>";
    }

}
if(isset($_POST['venue_request']))
{
    if(strlen($_POST['appointment_phone']) > 6 || strlen($_POST['appointment_type']) > 6 || strlen($_POST['appointment_name']) > 2)
    {
    $subject = "Venue Reservation Request from ".$_POST['appointment_name'];
    
    $emailMessage = "<p>Hello there,<br> ".$_POST['appointment_name']." has submitted a request for venue reservation as follows. </p>Name: ".$_POST['appointment_name']."<br>Email: ".$_POST['appointment_email']."<br>Telephone: ".$_POST['appointment_phone']." <br>Date / Time: ".$_POST['appointment_date']."/".$_POST['appointment_time']." <br>Type of Event: ".$_POST['appointment_type']."<p>Your urgent action is requested.</p>Best Regards,<br><b>".$_POST['appointment_name']."</b>";
    feedback($subject, $emailMessage);    
    echo "<script language='javascript'> alert('Thank you for making a Reservation. Your request is now being processed. We shall contact you shortly')
</script>";
    }
    else
    {
        echo "<script language='javascript'> alert('All fields are required. Kindly enter your complete data - Name, Email, Phone Number and select an event type')
    </script>";
    }
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
        <title>E-one Events</title>
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
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.html" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="images/small_logo.png" alt="e-oneevets">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="images/small_logo.png" alt="e-oneevets Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        

                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#our_services" target="_blank">Welcome</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#facilities" target="_blank">Facilities</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#events" target="_blank">Past Events</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#testimonials" target="_blank">Testimonials</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#gallery" target="_blank">Gallery</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#msg" target="_blank">Contacts</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('images/ad.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"></h1>
                            <div class="g-color--white"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('images/bg_1.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Modern Event centre <br>with State of the art facilities</h1>
                          <div class="g-color--white" style="background-color: #804">
                            FREE Wifi, CCTV, Stable Electricity (Standby Generator), Dedicated Transformer, Aircondition, serene environment, Spacious Car Park, Ease of access.
                        </div>
                        </div>
                        
                    </div>
                </div>

                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('images/bg_2.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Modern Seating Arrangment<br>That Inspires Travel</h1>
                            <div class="g-color--white" style="background-color: #804">A conducive event hall for Wedding, Seminar, Conference, Birthday, Concerts, Reliogious gathering etc.</div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('images/bg_3.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Spacious can accommodate large audience</h2>
                                <div class="g-color--white" style="background-color: #804">Bring your event alive at eone event centre. Spacious and condicive environment</div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('images/bg_5.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Poseur tables</h2>
                                <div class="g-color--white" style="background-color: #804">Our high/ poseur tables are available in a range of materials and styles. <br>They give a better view of your event surroundings so your guest can maximize the full view of all ongoing activities at your event.</div>
                            </div>
                            
                        </div>
                    </div>
                </div>


                
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            <a href="#facilities" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->

        <!-- Parallax -->
        <div id="facilities" class="js__parallax-window" style="background: url(images/02.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">State of The Art Facilities</h2>
                </div>
                <div class="text g-color--white">
                Our state of the art event centre is well-planned with good and stable electricity for convenience and less financial stress.</div>
            </div>
            
<div id="js__grid-portfolio-gallery" class="cbp">
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="images/person_5.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">24 Hours CCTV</h4>
                            <p class="g-color--white-opacity">CCTV surveillance cameras provide enhanced security with utmost clarity to ensure the safty of guests at your events hosted at e-one event centre</p>
                        </div>
                        
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="images/person_4.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Ideal Location</h4>
                            <p class="g-color--white-opacity">A good location is important to the success of any event. Either small, medium or large event one common advantage to hosting your event at eone is easy of access, cost saving, logistic purses and accomplishing of planed budget.</p>
                        </div>
                        
                    </div>
                </div>
                <!-- Item -->
              <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="images/person_3.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Standby Generators</h4>
                            <p class="g-color--white-opacity">These generators are permanent and always on standby should there be power failure. Our generators has the capability of powering all electrical device at the event centre and are sound proofed making the environment serene enough for your event.</p>
                        </div>
                        
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="images/person_2.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Hygienic Lavatory</h4>
                            <p class="g-color--white-opacity">Our dedicated Transformer is linked directly to main power source with dedicated power line from source and  ensures stability of electrical current entering all electrical appliance at our event centre.</p>
                        </div>
                        
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="images/person_7.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Spacious Car Park</h4>
                            <p class="g-color--white-opacity">Cost free parking, Safety of vehicles, Guests can walk to event hall directly from car park, convenient entry and exit of vehicles at the car park facility</p>
                        </div>
                        
                    </div>
                </div>
                <!-- Item -->
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="images/person_6.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Free Internet Access</h4>
                            <p class="g-color--white-opacity">At Eone events, guest have access to our free internet hotspot via wifi. This will encourage your invitees to attend your event as they will have unlimited internet access irrespective of the status of their default phone network provider.</p>
                        </div>
                        
                    </div>
                </div>
                <!-- End Item -->
            </div>

        </div>
        <!-- End Parallax -->

        <!-- Culture -->
        <div id="events" class="js__parallax-window" style="background: url(images/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Hosted</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Events</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs text g-color--white">We have hosted diverse types of events at eone event center ranging from Birthday Party, Wedding ceremony, Wedding anniversary, Annual General meetings, Children party, Club Meetings, Seminars, Conferences, Trade Shows, product lunching, Church Program, Receptions, Music Lunching, Fund raising ceremony, Executive Retreats, Incentive Programs and lots more</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/970x970/03.jpg" alt="Image">
            </div>
        </div>
        <!-- End Culture -->

        
        <!-- Portfolio Filter -->
        <div id="gallery" class="js__parallax-window">
            <span class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <p class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-letter-spacing--2 g-margin-b-50--xs">Events Gallery</span>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            
                            <div class="row">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_3.jpg" alt="eoneevents">
                        
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_6.jpg" alt="Image">
                        
                           
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/bg_8.jpg" alt="Image">
                        
                          
                    </article>
                    <!-- End News -->
                </div>
            </div>

                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="row">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_1.jpg" alt="Image">
                        
                           
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_2.jpg" alt="Image">
                        
                           
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/gallery-1.jpg" alt="Image">
                        
                    </article>
                    <!-- End News -->
                </div>
            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="row">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_4.jpg" alt="Image">
                        
                          
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_5.jpg" alt="Image">
                        
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/gallery-4.jpg" alt="Image">
                        
                    </article>
                    <!-- End News -->
                </div>
            </div>
                        </div>

                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="row">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/person_1.jpg" alt="Image">
                        
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/person_4.jpg" alt="Image">
                        
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/person_3.jpg" alt="Image">
                        
                    </article>
                    <!-- End News -->
                </div>
            </div>
                        </div>

                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                           <div class="row">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/person_5.jpg" alt="Image">
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_1.jpg" alt="Image">
                        
                            
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/image_2.jpg" alt="Image">
                        
                           
                       
                    </article>
                    <!-- End News -->
                </div>
            </div>
                        </div>

                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="row">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/bg_3.jpg" alt="Image">
                        
                            
                        
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/ad.jpg" alt="Image">
                        
                            
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="images/bg_2.jpg" alt="Image">
                        
                           
                        
                    </article>
                    <!-- End News -->
                </div>
            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Portfolio -->

        <!-- Testimonials -->
        <div id="testimonials" class="js__parallax-window" style="background: url(images/02.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-25--sm">
                <p class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" A numberof us have been to E-One Event Centre over many years and there was a real consensus that this was the most enjoyable evening we could remember -- Faith Kolo. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Faith Kolo</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" Hi Eone- very well done on organising such a magnificent evening!! All your efforts and painstakingly hard work has really paid off! You have succeeding in organising the very best of all the YIS dinners we have ever been to! "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Dennis Olomode</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" Dearest Thank you for inviting us all to the Galanight hosted at Eone event. We all enjoyed it very much and we're very impressed. From the entertainment to the venue, all we're exceptional. The entertainment especially was very well organised and laughing to jokes of Shazia made the event unique. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Kolawole Hammed</h4>
                            </div>
                        </div>

                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" What can I say about this fantastic event! Musa and I had such a brilliant time.....your organisation was spot on....timing was perfect (very unlike traditional 'Nigerian-timing'!)...entertainment was fabulous and professional, the speakers were thought-provoking and eloquent....and food was plentiful and delicious. What more could one ask for? "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Damilola Wale</h4>
                            </div>
                        </div>

                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" Dear Peter and Tony, Thank you for organising such a delightful event. We enjoyed every aspect of the evening:From the venue (Eone Event), the food and the entertainment to the auction. We are very thrilled to have won the bid for a day at Silverstone! And best of all it's for charity which always makes one feel proud. Well done to you and YIS. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Johnson Ndidi</h4>
                            </div>
                        </div>

                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" Dearest Thank you for inviting us all to the Galanight hosted at Eone event. We all enjoyed it very much and we're very impressed. From the entertainment to the venue, all we're exceptional. The entertainment especially was very well organised and laughing to jokes of Shazia made the event unique. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Kolawole Hammed</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Testimonials -->
        
<div class="container g-padding-y-80--xs g-padding-y-25--sm">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 color-1 p-4">
                    <h3 class="mb-4">Express Reservation</h3>
                    <p>In the event of a abrupt meeting, Call for express venue reservation</p>
                    <span class="phone-number">0700EONEEVENTS (0700 3663 3836 87), 0808 200 0057, 0802 321 7049,
0807 062 9439</span>
                </div>
                <div class="col-md-3 color-2 p-4">
                    <h3 class="mb-4">Opening Hours</h3>
                    <p class="openinghours d-flex">
                        <span>Monday - Friday</span>
                        <span>8:00 - 19:00</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Saturday</span>
                        <span>10:00 - 17:00</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Sunday</span>
                        <span>10:00 - 16:00</span>
                    </p>
                </div>
                <div class="col-md-6 color-3 p-4">
                    <h3 class="mb-2">Make A Reservation</h3>
                    <form method="post">
                <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                          <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="appointment_type" class="form-control">
                        <option value="Event Type">Event Type</option>
                        <option value="Conference">Conference</option>
                        <option value="Product Lunching">Product Lunching</option>
                        <option value="Wedding Receiption">Wedding Receiption</option>
                        <option value="Birthday Party">Birthday Party</option>
                      </select>
                    </div>
                        </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                        <div class="icon"><span class="icon-user"></span></div>
                          <input type="text" class="form-control" name="appointment_name" placeholder="Name">
                        </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                        <div class="icon"><span class="icon-paper-plane"></span></div>
                          <input type="text" class="form-control" name="appointment_email" placeholder="Email">
                        </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                      <input type="date" class="form-control" name="appointment_date" placeholder="Date">
                    </div>    
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                        <div class="icon"><span class="ion-ios-clock"></span></div>
                      <input type="text" class="form-control" name="appointment_time" placeholder="Time">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                        <div class="icon"><span class="icon-phone2"></span></div>
                      <input type="text" class="form-control" name="appointment_phone" placeholder="Phone">
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <input type="submit" value="Send Reservation Request" class="btn btn-primary" name="venue_request">
                </div>
              </form>
                </div>
            </div>
        </div>
    </div>
        <!-- Feedback Form -->
        <div class="g-bg-color--sky-light" id="msg">
            <div class="container g-padding-y-80--xs g-padding-y-25--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Send us a note</h2>
                </div>
                <form method="post">
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Name" name="name">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email" name="email">
                            </div>
                            <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone" name="phone">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Your message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs" name="fed_msg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Feedback Form -->

        
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="index.html">Home</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#facilities">Facilities</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#events">Past Events</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#testimonials">Testimonials</a></li>
                                
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#gallery">Gallery</a></li>
                                
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#msg">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                               <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">YouTube</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">EOne Events</h3>
                            <p class="g-color--white-opacity">We are a creative events center focusing on Entertainments, luxury, Pleasures &amp; Enlightment. Somewhere between sophistication and simplicity.</p>
                            <p class="g-color--white-opacity">
                                <i class="g-font-size-28--xs g-color--primary ti-location-pin"></i>
                                277/283 Ipaja Road, Besides Ipaja Post Office, Ipaja, Alimosho, Lagos
                            </p>
                            <p class="g-color--white-opacity">
                                <i class="g-font-size-28--xs g-color--primary ti-mobile"></i>
                                0700EONEEVENTS (0700 3663 3836 87),<br>0808 200 0057, 0802 321 7049,<br>0807 062 9439
                            </p>
                            <p class="g-color--white-opacity">
                                <i class="g-font-size-28--xs g-color--primary ti-home"></i>
                                 events@e-oneevents.com, www.e-oneevents.com
                            </p>

                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="images/small_logo.png" alt="Eone Logo">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="index.html">Eone</a> E-One Event Centre <a href="index.html">e-oneevets.com</a></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
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
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

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
