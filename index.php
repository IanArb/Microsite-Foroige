<?php
error_reporting(E_ALL);

session_start();

require_once 'helpers/security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
$result = isset($_SESSION['result']) ? $_SESSION['result'] : [];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Foroige</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Foroige Microsite" />
    <meta name="author" content="Foroige" />
    <meta name="keywords" content="Microsite, Foroige, Youth, Charity"
    <!-- Fav Icon for Web, Apple, and Android devices -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Twitter Bootstrap -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Material Design for Bootstrap -->
    <link href="dist/css/roboto.min.css" rel="stylesheet">
    <link href="dist/css/material-fullpalette.min.css" rel="stylesheet">
    <link href="dist/css/ripples.min.css" rel="stylesheet">
    <!-- Main css -->
    <link href="css/main.css" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Dropdown.js -->
    <link href="http://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
    <!-- Pre loading -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="js/preloader.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
        <![endif]-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Aminated Page Loader -->
    <div class="pre-loader"></div>
    <header>
        <div id="top" class="navbar transparent navbar-inverse">
	        <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		            <span class="mdi-navigation-menu"></span>
		        </button>
		        <a href="#home" class="navbar-brand" href="javascript:void(0)">
		        	<img alt="Brand" src="img/foroige-icon.png"/>
		        </a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#cards"><span class="mdi-communication-forum"></span> Stream</a></li>
                    <li><a href="#local-map"><span class="mdi-maps-place"></span>  Foroige Map</a></li>
                    <li><a href="#contact"><span class="mdi-communication-email"></span> Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.foroige.ie" target="_blank"><span class="mdi-maps-store-mall-directory"></span> Foroige Website</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fuild" id="home">
        <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item">
                <img src="img/carousel/img-01.png" alt="img-01">
                <div class="carousel-caption">
                    <h4>Welcome to Foróige Lite!</h4>
                    <a href="#cards"><button id="btn" type="button" class="btn btn-primary btn-sm">Tell me more!</button></a>
                </div>
            </div>
            <div class="item">
                <img src="img/carousel/img-02.png" alt="img-02">
                <div class="carousel-caption">
                    <h4>We are actively seeking volunteers</h4>
                    <a href="#cards"><button id="btn" type="button" class="btn btn-primary btn-sm">Tell me more!</button></a>
                </div>
            </div>
            
        </div>
    </div>
    <!--MAIN-->
    <div id="cards" class="container-fluid">
        
        <!-- ROW 1 -->
        <div class="row">
            
        </div>
        <!-- END OF ROW 1 -->
        <!--ROW 2-->
        <div class="row">
            <!-- RSS feed -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-events">
                        <span class="text-color-white"><h4 class="text-center">News Feed</h4></span>
                    </div>
                    <div class="panel-body">
                        <!-- start feedwind code -->
                        <!-- RSS feed -->
                        <script type="text/javascript">
                        document.write('\x3Cscript type="text/javascript" src="' 
                            + ('https:' == document.location.protocol ? 'https://' : 'http://') 
                            + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');
                        </script>
                        <script src="js/rss.js"></script>
                        <div style="font-size:10px; text-align:center; ">
                            <a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a>
                            <!--Please display the above link in your web page according to Terms of Service.-->
                        </div><!-- end feedwind code -->
                    </div>
                </div>
                <!-- END OF RSS FEED -->
            </div>
            <!-- YouTube Media -->
            <div class="col-md-5 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-news">
                        <h4 class="text-center text-color-white">Foroige Fifty News</h4>
                    </div>
                    <div class="panel-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/playlist?list=PL00RN8WonDn--jpn2lPpo8nZkh57I_wVb"></iframe>
                            </div>
                    </div>
                </div>
            </div>
            <!-- End of YouTube Media -->
            <!-- FOROIGE CALENDAR -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-events">
                        <span class="text-color-white"><h4 class="text-center">Upcoming Events</h4></span>
                    </div>
                    <div class="panel-body">
                        <div id="ei-events">
                            <!-- July -->
                            <div class="ei-event" data-start="2015-07-08 13:00" data-loc="St. Angela's College, Lough Gill, Co. Sligo">
                                <div class="ei-name">Baking Competition</div>
                                <div class="ei-description">Regional Final (West) of National Junior Baking Competition</div>
                            </div>
                            <div class="ei-event" data-start="2015-07-11 12:00" data-loc="Our Lady's Bower Secondary School, Athlone, Co. Westmeath">
                                <div class="ei-name">Baking Competition</div>
                                <div class="ei-description">Regional Final (Midlands) of National Junior Baking Competition</div>
                            </div>
                            <div class="ei-event" data-start="2015-07-11 12:00" data-loc="David College, Mallow, Co. Cork">
                                <div class="ei-name">Baking Competition</div>
                                <div class="ei-description">Regional Final (South) of National Junior Baking Competition</div>
                            </div>
                            <div class="ei-event" data-start="2015-07-15 13:00" data-loc="Old Bawn Community School, Tallaght, Dublin 24">
                                <div class="ei-name">Baking Competition</div>
                                <div class="ei-description">Regional Final (Dublin) of National Junior Baking Competition</div>
                            </div>
                            <!-- End of July -->
                            <!-- August -->
                            <div class="ei-event" data-start="2015-08-04 12:00" data-loc="NUI Maynooth, Co. Kildare">
                                <div class="ei-name">Leadership Conference</div>
                                <div class="ei-description">Leadership Conference 2015: 4th - 8th August</div>
                            </div>
                            <!-- September -->
                            <div class="ei-event" data-start="2015-09-15" data-loc="NUI Maynooth, Co. Kildare">
                                <div class="ei-name">Citizenship Project Deadline</div>
                                <div class="ei-description">Citizenship project entry deadlines for project report form or blog</div>
                            </div>
                            <!-- End of September -->
                            <!-- October -->
                            <div class="ei-event" data-start="2015-10-24 12:00" data-loc="NUI Maynooth, Co. Kildare">
                                <div class="ei-name">Youth Citizenship Awards</div>
                                <div class="ei-description">Foroige Youth Citizenship Awards in partnership with Aldi Ireland.</div>
                            </div>
                            <!-- End of October -->
                            <!-- November -->
                            <div class="ei-event" data-start="2015-10-27 12:00" data-loc="NUI Maynooth, Co. Kildare">
                                <div class="ei-name">Affiliation Deadline</div>
                                <div class="ei-description">Affiliation Deadline</div>
                            </div>
                            <!-- End of November -->
                            <!-- January -->
                            <div class="ei-event" data-start="2016-01-16 12:00" data-loc="NUI Maynooth, Co. Kildare">
                                <div class="ei-name">Regional Conference</div>
                                <div class="ei-description">Regional Conference: </div>
                            </div>
                            <!-- End of January -->
                            <!-- February -->
                            <div class="ei-event" data-start="2016-02-26 12:00" data-loc="NUI Maynooth, Co. Kildare">
                                <div class="ei-name">Annual Volunteers Conference</div>
                                <div class="ei-description">Volunteers Conference: 26th - 28th</div>
                            </div>
                            <!-- End of Ferbruary -->
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--END OF FOROIGE CALENDAR -->
        </div>
        <!-- END OF ROW 2 -->
        <!-- ROW 3 -->
        <div class="row">
            <!-- POLL 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-news">
                        <h4 class="text-center text-color-white">What's your involvement in Foroige?</h4>
                    </div>
                    <div class="panel-body">
                        <div id="poll" class="poll-1">
                            <form>
                                <div id="poll" class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="vote" value="0"  onClick="getVote(this.value)">
                                        Foroige Member
                                    </label>
                                </div>
                                <div id="poll" class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="vote" value="1"  onClick="getVote(this.value)">
                                        Parent
                                    </label>
                                </div>
                                <div id="poll" class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="vote" value="2"  onClick="getVote(this.value)">
                                        Volunteer
                                    </label>
                                </div>
                                <div id="poll" class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="vote" value="3" onClick="getVote(this.value)">
                                        Not a member
                                    </label>
                                </div>
                            </form>
                            <div id="poll" class="col-lg-12">
                                <h4 class="text-center"><i class="fa fa-question fa-lg"></i></h4>
                                <h4 class="text-center">Check the radio button to cast your vote</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END OF POLL 1 -->
            <!-- VOLUNTEER SIGN-UP -->
            <div class="col-md-4 col-sm-6 col-push-1">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-signup">
                        <h4 class="text-center text-color-white">Want to Volunteer?</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <button type="button" data-toggle="modal" data-target="#form-modal" class="btn btn-info btn-block">Sign Up Now</button>
                        </div>
                        <div id="form-modal" class="modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <a data-toggle="tooltip" data-placement="bottom" title="www.foroige.ie" href="http://www.foroige.ie" target="_blank"><img src="img/foroige_logo.png" height="100" width="300" class="img-responsive center-block"/></a>
                                    </div>
                                    <div class="modal-body">
                                        <form id="mailgun" name="form" role="form" method="POST" class="form-horizontal">
                                            <fieldset>
                                                <Legend>Sign Up below for our volunteer programmes</Legend>
                                                <div class="form-group-material-blue-600">
                                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                                    <div class="col-lg-10">
                                                        <input name="name" class="form-control floating-label" id="inputName" placeholder="Enter Name" type="name" <?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"' : '' ?> required/>
                                                    </div>
                                                </div>
                                                <div class="form-group-material-blue-600">
                                                    <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
                                                    <div class="col-lg-10">
                                                        <input name="email" class="form-control floating-label" id="inputEmail" placeholder="Enter email" type="email" <?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?> required/>
                                                    </div>
                                                </div>
                                                <div class="form-group-material-blue-600">
                                                    <label for="inputTel" class="col-lg-2 control-label">Telephone:</label>
                                                    <div class="col-lg-10">
                                                        <input name="tel" class="form-control floating-label" id="inputTel" placeholder="Enter telephone number" type="telephone" <?php echo isset($fields['tel']) ? ' value="' . e($fields['tel']) . '"' : '' ?> required />
                                                    </div>
                                                </div>
                                                <div class="form-group-material-blue-600">
                                                    <label for="select" class="col-lg-2 control-label">Choose programme:</label>
                                                    <div class="col-lg-10">
                                                        <select class="form-control" id="select" name="prog" <?php echo isset($fields['prog']) ? ' value="' . e($fields['prog']) . '"' : '' ?> required>
                                                            <option value="Big Brother Big Sister">Big Brother Big Sister</option>
                                                            <option value="Citizenship">Citizenship</option>
                                                            <option value="Leadership">Leadership</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group-material-blue-600">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
                                                    </div>
                                                </div>
                                                <?php if(!empty($errors)): ?>
                                                <div class="form-group-material-blue-600">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <div class="alert alert-danger"><?php echo implode(', ', $errors); ?></div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- POLL 2 -->
        	<div class="col-md-4 col-sm-6">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-news">
                        <h4 class="text-center text-color-white">Does Foroige meet your expectations?</h4>
                    </div>
                    <div class="panel-body">
                        <div id="poll-2" class="poll-2">
                            <div id="poll-2" class="radio radio-primary">
                                <label>
                                    <input type="radio" name="vote_opinion" value="0" onClick="getVoteSecond(this.value)" >
                                    Yes
                                </label>
                            </div>
                            <div id="poll-2" class="radio radio-primary">
                                <label>
                                    <input type="radio" name="vote_opinion" value="1" onClick="getVoteSecond(this.value)">
                                    Somewhat
                                </label>
                            </div>
                            <div id="poll-2" class="radio radio-primary">
                                <label>
                                    <input type="radio" name="vote_opinion" value="2" onClick="getVoteSecond(this.value)" >
                                    No
                                </label>
                            </div>
                            <div id="poll-2" class="col-lg-12">
                            	<h4 class="text-center"><i class="fa fa-question fa-lg"></i></h4>
                                <h4 class="text-center">Check the radio button to cast your vote</h4>
                        	</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END OF POLL 2 -->
            
        </div>
        <div class="row">
            <!-- FACEBOOK FEED -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-fb">
                        <a href="https://www.facebook.com/foroige" target="_blank"><i class="fa fa-facebook fa-3x fb-btn"><h4 class="text-center"><span class="text-color-social">Follow us on Facebook</span></h4></i></a>
                    </div>
                    <div class="panel-body">
                        <div class="fb-page" width="1000px" data-href="https://www.facebook.com/foroige?fref=ts" data-small-header="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/foroige?fref=ts"><a href="https://www.facebook.com/foroige?fref=ts">Foróige</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF FACEBOOK FEED -->
            <!-- TWITTER FEED  -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-tw">
                        <a href="https://twitter.com/Foroige" target="_blank"><i class="fa fa-twitter fa-3x tw-btn"><h4 class="text-center"><span class="text-color-social">Follow us on Twitter</span></h4></i></a>
                    </div>
                    <div class="panel-body">
                        <a class="twitter-timeline" href="https://twitter.com/Foroige" data-widget-id="619508300577701888">Tweets by @Foroige</a>
                    </div>
                </div>
            </div>
            <!-- END OF TWITTER FEED -->
            <!-- INSTAGRAM FEED -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default shadow-z-4">
                    <div class="panel-heading panel-heading-insta">
                        <a href="https://instagram.com/foroige/" target="_blank"><i class="fa fa-instagram fa-3x insta-btn"><h4 class="text-center"><span class="text-color-social">Follow us on Instagram</span></h4></i></a>
                    </div>
                    <div class="panel-body">
                        <iframe src="http://snapwidget.com/in/?u=Zm9yb2lnZXxpbnwxMjV8M3wzfHx5ZXN8NXxmYWRlSW58b25TdGFydHx5ZXN8eWVz&ve=100715" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
                    </div>
                </div>
            </div>
            <!-- END OF INSTAGRAM FEED -->
        </div>
        
        </div>
    <!--END OF CONTAINER -->

    <!-- LOCAL FOROIGE MAP -->
    <div class="container-fluid" id="local-map">
        <div class="map-container">
            <p><iframe src="//batchgeo.com/map/7171b7fee21ee845696d867d344e761e" frameborder="0" width="100%" height="1000" style="border:2px solid #aaa;"></iframe></p>
            <p><small>View <a href="https://batchgeo.com/map/7171b7fee21ee845696d867d344e761e">Foróige Listings 2015</a> in a full screen map</large></p>
        </div>
    </div>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row row-centered">
                <footer class="text-center">
                    <a href="#top">
                        <button id="btn" type="button" class="btn btn-default btn-md">
                            <span class="mdi-navigation-arrow-drop-up"></span> Back to top
                        </button>
                    </a>
                    <a href="http://www.foroige.ie" target="_blank">
                        <button id="btn" type="button" class="btn btn-default btn-md">
                            <span class="mdi-navigation-arrow-forward"></span> Foroige Website
                        </button>
                    </a>
                </footer>
                <br><br>
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-center">
                            Foróige, the National Youth Development Organisation
                            <br>
                            Block 12D, Joyce Way, Park West,
                            <br>
                            Dublin 12
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="text-center">
                            Foróige is a Company Limited by Guarantee not having share capital. It is registered in Dublin, 
                            Ireland with a registered number of 552248 as per the company's Certificate of Incorporation.
                            <br>
                            <br>
                            Registered Charity Number: CHY 5359
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="text-center">
                            Call us:     01 630 1560
                            <br>
                            Fax us:     01 630 1568
                            <br>
                            Email us:  <a href="mailto:info@foroige.ie">info@foroige.ie</a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <h4 class="text-center">&copy; Foroige 2015. All Rights Reserved.</h4>
                </div>
                 
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    
    <script src="js/owl.carousel.controls.js"></script>
    <script type="text/javascript">
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!-- Polls -->
    <script src="ajax/poll.js"></script>
    <script src="ajax/poll_second.js"></script>
    <!-- FACEBOOK PAGE PLUGIN -->
    <script defer src="js/facebook-plugin.js"></script>
    <!-- TWITTER PAGE PLUGIN -->
    <script src="js/twitter.js"></script>
    <script src="http://snapwidget.com/js/snapwidget.js"></script>
    <!-- MATERIAL DESIGN SOURCE CODE -->
    <script src="js/source-code.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Material Design for Bootstrap -->
    <script src="dist/js/material.min.js"></script>
    <script src="dist/js/ripples.min.js"></script>
    <script type="text/javascript">
        $.material.init();
    </script>
    <!-- Sliders -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    <script src="js/UIslider.js"></script>
    <!-- Dropdown.js -->
    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
    <script type="text/javascript">
    $("#dropdown-menu select").dropdown();
    </script>
    <!--Calendar Script -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="js/eventify.min.js"></script>
    <script type="text/javascript">
    $("#ei-events").eventify({
        theme: "dark",
        locale: "en"
    });
    </script>
    <!-- FORM SCRIPTS -->
    <script src="js/mailgun.js"></script> 
</body>

</html>
<?php 
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>