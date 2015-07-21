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
    <meta name="description" content="foroige" />
    <meta name="author" content="Foroige" />
    <!-- Twitter Bootstrap -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design for Bootstrap -->
    <link href="dist/css/roboto.min.css" rel="stylesheet">
    <link href="dist/css/material-fullpalette.min.css" rel="stylesheet">
    <link href="dist/css/ripples.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Dropdown.js -->
    <link href="http://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
    <!-- Upcoming Event Calendar -->
    <link rel="stylesheet" href="css/eventify.css">
    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
        <![endif]-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="navbar transparent navbar-inverse navbar-fixed-top">
                <ul class="nav navbar-nav">
                    <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#menu-modal"><span class="mdi-navigation-menu"></span></button>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                </ul>
        </div>
        <!-- Navigatin Modal -->
        <div class="modal fade" id="menu-modal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header modal-header-custom">
                        <button type="button" class="close close-custom" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <a data-toggle="tooltip" data-placement="bottom" title="www.foroige.ie" href="http://www.foroige.ie" target="_blank"><img src="img/foroige_logo.png" height="100" width="300" class="img-responsive center-block"/></a>
                    </div>
                    <div class="modal-body modal-body-custom">
                       <div class="list-group-separator"></div>
                       <div class="list-group">
                            <div class="row-content">
                                <a href="#home">
                                    <button id="btn" class="btn btn-default btn-block"><i class="glyphicon glyphicon-home"></i> Home</button>
                                </a>
                            </div>
                       </div>
                       <div class="list-group-separator"></div>
                       <div class="list-group">
                            <div class="row-content">
                                <a href="#cards">
                                    <button id="btn" class="btn btn-default btn-block"><i class="mdi-communication-forum"></i> Feed</button>
                                </a>
                            </div>
                       </div>
                       <div class="list-group-separator"></div>
                       <div class="list-group">
                            <div class="row-content">
                                <a href="#local-map"><button id="btn" class="btn btn-default btn-block btn-custom"><i class="mdi-maps-place"></i> Local Foroige Map</button></a>
                            </div>
                       </div>
                    </div>
                    <div class="modal-footer modal-footer-custom">
                        <button id="btn" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Navigation Modal -->
    </header>
    <div class="container-fuild" id="home">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <img src="img/bbbs.png">
                <div class="carousel-caption">
                    <h3>Example 1</h3>
                    <p>Monkeys can live to 300 years</p>
                    <button type="button" class="btn btn-primary btn-md">Touch me!</button>
                </div>
            </div>
            <div class="item">
                <img src="img/citizenship.jpg">
                    <div class="carousel-caption">
                        <h3>Example 2</h3>
                        <p>Did you know that cats plot against you? never trust them!</p>
                        <button type="button" class="btn btn-primary btn-md">Click me!</button>
                    </div>
            </div>
        </div>
    </div>
    <!--MAIN-->
    <div id="cards" class="container">
        <h2 class="text-center">Find out what's happening right now!</h2>
        <!--ROW 1-->
        <div class="row">
            <!-- FACEBOOK FEED -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-fb">
                        <a href="https://www.facebook.com/foroige" target="_blank"><i class="fa fa-facebook fa-3x fb-btn"><h4 class="text-center"><span class="text-color-social">Follow us on Facebook</span></h4></i></a>
                    </div>
                    <div class="panel-body">
                        <div class="fb-page" data-href="https://www.facebook.com/foroige?fref=ts" data-small-header="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
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
                <div class="panel panel-default">
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
                <div class="panel panel-default">
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
        <!-- END OF ROW 1 -->
        <!-- ROW TWO -->
        <div class="row">
            <!-- NEWSLETTER SIGN-UP -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-news">
                        <h4 class="text-center">Sign-Up for Newsletter</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form">
                            <div class="input-group text-center">
                                <input class="form-control input-lg" placeholder="Enter your email address" type="text">
                                <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END OF NEWSLETTER SIGN-UP -->
            <!-- DONATE -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-donate">
                        <h4 class="text-center">Donate Today!</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-primary btn-block">Donate</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF DONATE -->
            <!-- VOLUNTEER SIGN-UP -->
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-news">
                        <h4 class="text-center">Want to Volunteer?</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <button type="button" data-toggle="modal" data-target="#form-modal" class="btn btn-primary btn-block">Sign Up Now</button>
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
                                                <div class="form-group">
                                                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                                                    <div class="col-lg-10">
                                                        <input name="name" class="form-control floating-label" id="inputName" placeholder="Enter Name" type="name" <?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"' : '' ?> required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
                                                    <div class="col-lg-10">
                                                        <input name="email" class="form-control floating-label" id="inputEmail" placeholder="Enter email" type="email" <?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?> required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputTel" class="col-lg-2 control-label">Telephone:</label>
                                                    <div class="col-lg-10">
                                                        <input name="tel" class="form-control floating-label" id="inputTel" placeholder="Enter telephone number" type="telephone" <?php echo isset($fields['tel']) ? ' value="' . e($fields['tel']) . '"' : '' ?> required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputCheck" class="col-lg-4 control-label">Choose programme(s)</label>
                                                    <div class="col-lg-8">
                                                        <div class="checkbox">
                                                            <label> 
                                                                <input name="prog" type="checkbox" value="Big Brother Big Sister" <?php echo isset($fields['prog']) ? ' value="' . e($fields['prog']) . '"' : '' ?> required/> Big Brother Big Sister
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label> 
                                                                <input name="prog" type="checkbox" value="Leadership" <?php echo isset($fields['prog']) ? ' value="' . e($fields['prog']) . '"' : '' ?> required/> Leadership
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label> 
                                                                <input name="prog" type="checkbox" value="Citizenship" <?php echo isset($fields['prog']) ? ' value="' . e($fields['prog']) . '"' : '' ?> required/> Citizenship
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                                                    </div>
                                                </div>
                                                <?php if(!empty($errors)): ?>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <div class="alert alert-danger"><?php echo implode(', ', $errors); ?></div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF ROW 2 -->
        <!-- ROW 3 -->
        <div class="row">
            <!-- FOROIGE CALENDAR -->
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-events">
                        <span class="text-color-social"><h4 class="text-center">Upcoming Events</h4></span>
                    </div>
                    <div class="panel-body">
                        <div id="ei-events">
                            <!-- July -->
                            <div class="ei-event" data-start="2015-07-08 13:00" data-loc="St. Angela's College, Lough Gill, Co. Sligo">
                                <div class="ei-name">Junior Baking Competition</div>
                                <div class="ei-description">Regional Final (West) of National Junior Baking Competition</div>
                            </div>
                            <div class="ei-event" data-start="2015-07-11 12:00" data-loc="Our Lady's Bower Secondary School, Athlone, Co. Westmeath">
                                <div class="ei-name">Junior Baking Competition</div>
                                <div class="ei-description">Regional Final (Midlands) of National Junior Baking Competition</div>
                            </div>
                            <div class="ei-event" data-start="2015-07-11 12:00" data-loc="David College, Mallow, Co. Cork">
                                <div class="ei-name">Junior Baking Competition</div>
                                <div class="ei-description">Regional Final (South) of National Junior Baking Competition</div>
                            </div>
                            <div class="ei-event" data-start="2015-07-15 13:00" data-loc="Old Bawn Community School, Tallaght, Dublin 24">
                                <div class="ei-name">Junior Baking Competition</div>
                                <div class="ei-description">Regional Final (Dublin) of National Junior Baking Competition</div>
                            </div>
                            <!-- End of July -->
                            <!-- August -->
                            <div class="ei-event" data-start="2015-08-04 12:00" data-loc="NUI Maynooth, Co. Kildare">
                                <div class="ei-name">Leadership Conference</div>
                                <div class="ei-description">Leadership Conference 2015: 4th - 8th August</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END OF FOROIGE CALENDAR -->
            <!-- YouTube Media -->
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/playlist?list=PL00RN8WonDn9iGd4utWCyxseHM4W4kunw"></iframe>
                            </div>
                    </div>
                </div>
            </div>
            <!-- End of YouTube Media -->
        </div>
        <!--END OF ROW 3-->
    </div>
    <!-- LOCAL FOROIGE MAP -->
    <div class="container-fluid" id="local-map">
        <h2 class="text-center">Local Foroige Map</h2>
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="map-canvas"></div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row row-centered">
                <footer class="text-center">
                    &copy; Foroige
                    <br />
                    <br>
                    <a href="#home">
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
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
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

    $(document).ready(function() {
        setInterval(function() {
            $('#fade').fadeIn(1000);
        }, 4300);
    });
    </script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/application.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        var owl = $("#owl-demo");

        owl.owlCarousel({
            autoPlay: 5000, //set autoplay to 5 seconds
            navigation: false,
            singleItem: true,
            transitionStyle: "goDown",
            responsive: true,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: window
        });

    })
    </script>
    <script type="text/javascript">
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!-- FACEBOOK PAGE PLUGIN -->
    <script src="js/facebook-plugin.js"></script>
    <!-- END OF FACEBOOK PAGE PLUGIN -->
    <!-- TWITTER PAGE PLUGIN -->
    <script src="js/twitter.js"></script>
    <!-- END OF TWITTER PAGE PLUGIN -->
    <script src="http://snapwidget.com/js/snapwidget.js"></script>
    <!-- MATERIAL DESIGN SOURCE CODE -->
    <script src="js/source-code.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Material Design for Bootstrap -->
    <script src="dist/js/material.min.js"></script>
    <script src="dist/js/ripples.min.js"></script>
    <script>
    $.material.init();
    </script>
    <!-- Sliders -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    <script src="js/UIslider.js"></script>
    <!-- Dropdown.js -->
    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
    <script>
    $("#dropdown-menu select").dropdown();
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--Calendar Script -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="js/eventify.js"></script>
    <script type="text/javascript">
    $("#ei-events").eventify({
        theme: "dark",
        locale: "en"
    });
    </script>
    <!--Google Maps API v3 -->
    <script src="js/googlemaps.js"></script>
    <!-- FORM SCRIPTS -->
    <script src="js/mailgun.js"></script>
</body>

</html>
<?php 
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>
