<?php include "config.php"; ?>

<!DOCTYPE html>


<!--

                                        oooooooooooo
                               oooooooooooooooooooooooo
                          ooooooooo                 ooo
                     oooooooo                       oo
                 ooooooo                           o
              oooooo                             o
           oooooo          oooooooo    ooooooo      ooooooooo
        oooooo           oooooooo    oooooooo    ooooooooooooooo
      ooooo               oooooo      oooooo     ooooooo   ooooo
    ooooo                oooooo      oooooo     ooooooo    ooooo
  ooooo                 oooooo      oooooo     ooooooo   oooooo
 oooo                  oooooooooooooooooo     ooooooooooooo
oooo                  oooooooooooooooooo     ooooooo  oooooo
oooo         ooo     oooooo      oooooo     ooooooo    ooooooo
  oooooooooo        oooooo      oooooo     ooooooo     ooooooo
                   oooooo      oooooo     ooooooo     ooooooo
                  oooooo      oooooo     ooooooo     ooooooo
                 oooooooo    oooooooo   oooooooo  oooooooo
                oooooooo    oooooooo   ooooooooooooooo


-->

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
    
        <meta charset="utf-8">
        <title>Halo Burger | MI | Hamburger Restaurant, Fast Food | Halo Burger</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Halo Burger has 16 locations throughout Michigan. We use 100% fresh, never-frozen, premium beef and the freshest ingredients, made to order. Call us today.">
        <meta name="author" content="Theo Dillon - Dortch Enterprises, LLC">
    
        <!-- Bootstrap Fontawesome & Halostyle -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="<?php echo SCRIPT_ROOT . "build/halostyle.css"; ?>" rel='stylesheet' type='text/css'>
		    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>      <!--[if IE]>
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" type="text/css">
        <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Arvo:400italic' rel='stylesheet' type='text/css'>
    
        <!-- Favicons -->
        <link rel="shortcut icon" href="http://wwww.haloburger.com/img/favicon.ico">
        <link rel="apple-touch-icon" href="http://wwww.haloburger.com/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://wwww.haloburger.com/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="http://wwww.haloburger.com/img/apple-touch-icon-114x114.png">
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="unsticky-body">

        <div id="weather" class="but-toggled">
          <?php
          $json_string = file_get_contents("http://api.wunderground.com/api/b3c3f581b2b3dea5/geolookup/conditions/q/MI/Flint.json");
          $parsed_json = json_decode($json_string);
          $location = $parsed_json->{'location'}->{'city'};
          $icon = $parsed_json->{'current_observation'}->{'icon_url'};
          $weather = $parsed_json->{'current_observation'}->{'weather'};
          $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
          ?>
          
          <a href="http://www.wunderground.com/weather-forecast/US/MI/Flint.html" title="Current conditions from Weather Underground" class="h5">Flint, MI</a>
          
          <div class="conditions">
            <h5>
              <?php echo $temp_f ?><span>&deg;F</span>&nbsp;&nbsp;<?php echo $weather ?> 
              <img alt="weather-icon" src="<?php echo $icon ?>">
            </h5>
           
          </div> <!-- end conditions -->
          
          

          <ul class="weather-nav">
              <li>
                <a href="<?php echo SCRIPT_ROOT . "rewards"; ?>" class="h5">
                <i class="fa fa-mobile"></i>&emsp;Rewards App
                <span class="sr-only"> Like us on Facebook</span>
              </a>
              </li>
              <li>
                <a href="<?php echo SCRIPT_ROOT . "careers"; ?>" class="h5">
                <i class="fa fa-user-plus"></i>&emsp;Careers
                <span class="sr-only"> Careers at Halo Burger</span>
                </a>
              </li>
              <li>
                <a class="h4" href="http://www.facebook.com/haloburgerfans" title="Like Halo Burger on Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="sr-only"> Like us on Facebook</span></a>
              </li>
              <li>
                <a class="h4" href="http://www.twitter.com/halo_burger" title="Follow Halo Burger on Twitter">
                <i class="fa fa-twitter"></i>
                <span class="sr-only"> Follow us on Twitter</span></a>
              </li>
              <li>
                <a class="h4" href="http://www.instagram.com/halo_burger" title="Follow Halo Burger on Instagram">
                <i class="fa fa-instagram"></i>
                <span class="sr-only"> Follow us on Instagram</span></a>
              </li>
              <!-- ADDTHIS BUTTON BEGIN -->
              <li>  
                <script type="text/javascript">
                if (typeof addthis_config !== "undefined") {
                addthis_config.ui_click = true
                } else {
                var addthis_config = {
                pubid: "ra-51a61d811216776c",
                ui_click: true
                };
                }
                </script>
                <a class="addthis_button_compact h4">
                <i class="fa fa-share-alt"></i></span>&emsp;
                <span class="sr-only">Share Halo Burger</span></a>
              </li> 
            </ul>

        </div> <!-- end weather -->
        


        <header class="site-header unsticky" role="navigation">
            <div class="container-fl">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" title="Halo Burger Home" href="<?php echo SCRIPT_ROOT; ?>">
                        <span class="sr-only">Halo Burger</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1250 300" enable-background="new 0 0 1250 300" xml:space="preserve">
                            <path id="logo" d="M295.6 201c-4.1 10.6-4.3 14.4 4.2 15.5c-12.3 17.7-14.6 19-28.2 19h-29c5.9-7.1 10.2-14.2 13.1-21.7l17.1-43.3h-32 l-12 30.5c-4.2 10.6-4.1 14.4 4.4 15.5c-12.3 17.7-14.8 19-28.4 19h-29c5.9-7.1 10.4-14.2 13.3-21.7l32.4-82.4 c4.2-10.5 4.1-14.2-4.5-15.3c12.3-17.6 14.6-19 28.2-19h29.1c-5.9 7.1-10.4 14.2-13.3 21.7l-13.4 33.9h32l8.4-21.3 c4.2-10.5 4.1-14.2-4.5-15.3c12.3-17.6 14.8-19 28.4-19h29c-5.9 7.1-10.2 14.2-13.1 21.7L295.6 201z M461.3 116.8l-37.8 96 c-2.4 6.1-6.7 13.6-13.3 22.6h29.3c10.9 0 14-2.9 25.4-19.2c-8.7-0.8-8.7-4.2-5-13.6l37.7-95.9c2.8-7.1 7.3-14.8 13.5-22.6h-29.5 c-10.9 0-13.7 2.7-25.1 19C465.2 103.9 465 107.4 461.3 116.8z M556.2 123.1c30.3 0 41 21.1 26.7 57.3 c-14.3 36.2-41.5 57.3-71.8 57.3c-30.3 0-40.7-21.3-26.5-57.3C498.9 144.2 526.1 123.1 556.2 123.1z M518.7 219 c10.4 0 19.9-12.6 30.1-38.5c10.2-25.9 10.6-38.5 0.2-38.5c-10.4 0-20.1 12.7-30.3 38.5C508.5 206.4 508.2 219 518.7 219z M389.7 122.9c16.1 0 26.8 3.4 32.2 10.7c5.6 7.7 2.5 17.6-3.2 32l-14.6 37c-3.8 9.8-5.3 13.4 4.6 13.6 c-9.6 15.7-15.6 19.2-28.8 19.2H373c-4.6 0-8.8 0.4-13 1.3c2.5-4.4 4.6-8.6 6-12.3c0.3-0.8 0.5-1.3 0.8-2.1 c-10.6 10-21.5 14.8-33.2 14.8c-19.9 0-27.6-15.7-17.8-40.4c9.7-24.5 30.5-39.9 52.1-39.9c10.5 0 17.2 4.6 18.7 12.8 c1-2.1 1.8-4.2 2.6-6.1c6.9-17.4 2.9-24-15.5-24c-8.8 0-18.8 1.5-29.5 4.8c8.4-10.5 13.2-16.9 17.5-18.2 C366.4 124.7 376.5 122.9 389.7 122.9z M371.6 175.3c-8.8 0-17.6 7.7-22.8 20.9c-5.2 13.2-2.4 21.3 5.6 21.3 c8.4 0 16.5-7.3 21.8-20.9C381.8 182.6 379.9 175.3 371.6 175.3z M142.2 216.3c-33.2 9-76.7 17.4-85.7 2.3 c-17.8-30.1 52.8-92.5 149.4-135.1c96.6-42.7 197.6-49.1 199.2-20c0.6 10-9.4 23-26.1 37.3c-0.2 0.2 0 0.4 0.2 0.1 c29.7-22.9 46-43.6 38.5-56.9c-19.2-33.9-115.8-26-223.5 21.6C86.4 113.1 9.8 181.5 27.6 216.2c11.1 21.7 57.2 18 114.2 1.2 L142.2 216.3z M1225.1 122.9c-6.7 12.3-11.6 20.1-15.7 23.4c-5.6 4.4-10 4-15.4 5c-10.9 1.9-17.4 7.3-21.8 18.4l-13.1 33.2 c-3.9 10-3.9 12.8 6.3 13.6c-11.4 16.3-14.3 19.2-25.2 19.2H1108c6.8-8.1 11.7-15.5 14.5-22.6l22.3-56.6c3.3-8.4 3.3-10.7-5.5-10.9 c11.8-17.3 14.3-20.1 26.3-20.1c4.2 0 7.4 0.2 9.1 0.2c4 0 7.8-0.4 11.6-1.3c-4.2 8.6-8.2 17.4-11.8 26.7 c13.2-19 22.5-27.4 34.2-27.4c3.7 0 6.4 0.2 8.7 0.2C1219.8 123.7 1222.3 123.5 1225.1 122.9z M1022.8 153.8l-29.3 74.4 c-13.3 33.7-31.6 48.7-65.2 48.7c-17.5 0-32.4-4.4-42.9-12.3c7.4-7.7 12-11.1 17.6-11.1c7.5 0 14.1 5.2 23.9 5.2 c14.2 0 25.5-8.2 31.1-22.6l1.8-4.6c-6.2 3.7-14.1 5.6-22.9 5.6c-25.5 0-35.6-20.7-22.1-55c14.3-36.2 41.7-58.7 69.5-58.7 c11.5 0 19.5 3.6 23.5 10.9c3.4-7.7 9.9-8.6 24.5-8.6h9.4C1034.3 132.2 1027.6 141.7 1022.8 153.8z M983.5 140.8 c-11.9 0-23.4 13.2-33.5 38.9c-10 25.3-8.2 38 4 38c3.8 0 8.3-1.5 13.1-4.6l20-50.8C992.9 147.5 993.1 140.8 983.5 140.8z M817.4 204.8l22.3-56.6c2.4-6.1 7-13.8 13.5-22.6h-29.5c-10.9 0-13.7 2.7-25.1 19c8.7 0.8 8.4 4.4 4.7 13.8l-14.9 37.8 c-6.5 16.5-13.1 24.2-23.9 24.2c-8.3 0-9.8-5.8-5-17.8l21.3-54.3c2.6-6.7 6.9-14.2 13.3-22.6h-29.3c-10.9 0-13.9 2.7-25.3 19 c8.7 0.8 8.6 4.4 4.9 13.8L729 197.5c-11 28-6.3 40.8 17.7 40.8c14.4 0 27.2-6.1 38.3-18.4c-2.3 5-5.3 10.5-8.9 16.9 c3.6-1 7.7-1.1 12.1-1.1h8.8c11.9 0 14.2-2.9 25.9-20C814.2 215.6 814.1 213.3 817.4 204.8z M876.5 202.9l13.1-33.2 c4.4-11.1 10.9-16.5 21.8-18.4c5.4-0.9 9.8-0.6 15.4-5c4.1-3.3 9-11.1 15.7-23.4c-2.7 0.6-5.3 0.8-7.6 0.8c-2.3 0-5.1-0.2-8.8-0.2 c-11.7 0-21 8.4-34.2 27.4c3.6-9.2 7.7-18 11.8-26.7c-3.8 0.9-7.6 1.3-11.7 1.3c-1.7 0-4.9-0.2-9.1-0.2c-12.1 0-14.6 2.9-26.3 20.1 c8.7 0.2 8.8 2.5 5.5 10.9l-22.3 56.6c-2.8 7.1-7.7 14.6-14.5 22.6h32.2c10.9 0 13.8-2.9 25.2-19.2 C872.6 215.7 872.6 212.9 876.5 202.9z M1105.8 224.2c-18.2 9.2-34.4 13.8-48.6 13.8c-31 0-43.8-22.6-30.3-56.9 c6.6-16.7 17-30.5 30.7-41.4c13.4-10.5 28.5-16.3 42.8-16.3c17.6 0 24.6 9 34.7 19.9c-6.7 7.9-8.9 13.8-10.7 17.1 c-6.7 11.3-14.3 16.3-29.2 22.6l-37.4 15.7c0.1 13.4 5.9 20.1 17.6 20.1c8.3 0 17-3.8 23-3.8C1103.5 215 1104.1 217.9 1105.8 224.2 z M1060.8 178.8l15.7-6.3c12.3-5 21.1-12.7 23.8-19.6c2.6-6.7-0.2-11.7-6.7-11.7c-10.4 0-23.1 11.5-30.3 29.7 C1062.5 173 1061.6 175.7 1060.8 178.8z M730.3 129.1c-5.9 15-18.9 23.8-35.1 23.8c-3.2 0-5.7-0.2-7.5-0.4l-0.5 1.3 c26.6 4.6 35.8 21.1 27.1 43.3c-9.7 24.6-33.9 39.9-67.3 39.9c-16.1 0-30.4-3.1-45-3.1c-2.1 0-5.3 0.4-8.9 0.6 c8-8.2 13.8-16.5 17.3-25.3l28.7-72.9l3.6-9.2c3.2-8.2 3-11.1-4.7-11.9c9-17.1 22.5-19.6 52-19.6C725.4 95.7 738.6 108 730.3 129.1 z M665.8 156.5l-19.3 49.1c-4.2 10.7-3.4 15.5 4.6 15.5c10.4 0 19.8-8.4 26.2-24.7C684.7 177.6 680.9 164 665.8 156.5z M692.3 111.1c-6.1 0-9.9 3.3-12.8 10.5l-7.6 19.4c2.7 1.3 5.3 2.1 8.2 2.1c8.8 0 16.4-5.6 20.1-15 C704.2 117.8 700.7 111.1 692.3 111.1z"/>
                        </svg>
                    </a>
                </div>
                <nav id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo SCRIPT_ROOT . "menu.php"; ?>"><span>Menu</span></a></li>
                        <li><a href="<?php echo SCRIPT_ROOT . "locations.php"; ?>"><span>Locations</span></a></li>
                        <li><a href="<?php echo SCRIPT_ROOT . "comments"; ?>"><span>Comments</span></a></li>
                        <li><a class="only-toggled" href="<?php echo SCRIPT_ROOT . "careers"; ?>">Careers</a></li>
                        <li><a class="only-toggled" href="<?php echo SCRIPT_ROOT . "rewards"; ?>">Rewards App</a></li>
                    </ul>
                    <div class="bh-sl-form-container">
                      <form class="navbar-form navbar-right" id="bh-sl-user-location" role="search">
                        <div class="form-group">
                          <label for="bh-sl-address"><i class="fa fa-lg fa-map-marker"></i></label>
                          <input type="text" id="bh-sl-address" name="bh-sl-address" class="form-control" placeholder="Enter City or ZIP">
                        </div>
                        <button type="submit" id="bh-sl-submit" class="btn btn-warning">Find</button>
                      </form>
                    </div>
                    <ul class="social-mobile">
                      <li>
                        <a class="h4" href="http://www.facebook.com/haloburgerfans" title="Like Halo Burger on Facebook">
                        <i class="fa fa-facebook-square"></i>
                        <span class="sr-only"> Like us on Facebook</span></a>
                      </li>
                      <li>
                        <a class="h4" href="http://www.twitter.com/halo_burger" title="Follow Halo Burger on Twitter">
                        <i class="fa fa-twitter"></i>
                        <span class="sr-only"> Follow us on Twitter</span></a>
                      </li>
                      <li>
                        <a class="h4" href="http://www.instagram.com/halo_burger" title="Follow Halo Burger on Instagram">
                        <i class="fa fa-instagram"></i>
                        <span class="sr-only"> Follow us on Instagram</span></a>
                      </li>
                      <!-- ADDTHIS BUTTON BEGIN -->
                      <li>  
                        <script type="text/javascript">
                        if (typeof addthis_config !== "undefined") {
                        addthis_config.ui_click = true
                        } else {
                        var addthis_config = {
                        pubid: "ra-51a61d811216776c",
                        ui_click: true
                        };
                        }
                        </script>
                        <a class="addthis_button_compact h4">
                        <i class="fa fa-share-alt"></i></span>&emsp;
                        <span class="sr-only">Share Halo Burger</span></a>
                      </li> 
                    </ul>
                </nav><!--/.navbar-collapse -->
            </div>
        </header>

        <div id="map-container" class="bh-sl-map-container container-fl">
          <section class="row">
            <div id="map-results-container">
              <div id="bh-sl-map" class="bh-sl-map col-md-9"></div>
              <div class="bh-sl-loc-list col-md-3">
                <ul class="list list-unstyled"></ul>
              </div>
            </div>
          </section>
        </div>