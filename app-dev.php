<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<header>
        <ul class="nav-logo row">
            <li>
                <a href="./index.php">
                    <img src="./assets/images/600-logo.png" alt="600-header-logo">
                </a>
            </li>
        </ul>
        <ul class="nav-menu row">
            <li><a href="./index.php">Home</a></li>
            <li class="dropdown">
                <a class="drop-button" href="./services.php">Service</a>
                <div class="dropdown-content" id="dropdown-content" >
                    <a href="./seo.php">SEO</a>
                    <a href="./google-ads.php">Google Ads</a>
                    <a href="./socmed-ads.php">Social Media Ads</a>
                    <a href="./app-dev.php">Web & Apps Development</a>
                    <a href="./app-design.php">Creative Design Solution</a>
                </div>
            </li>
            <li><a href="./portfolio.php">Portfolio</a></li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
        <ul class="nav-call row">
            <li><a href="">Call us</a></li>
        </ul>
        <a href="javascript:void(0);" class="icon-menu" onclick="myFunction()">
            <i class="fa fa-bars" style="font-size: 34px; line-height: 40px;"></i>
        </a>
        <ul id="menu-links">
            <li><a href="./index.php">Home</a></li>
            <li class="dropdown">
                <a class="drop-button" href="javascript:void(0);" onclick="myMenuMobile()">Service</a>
            </li>
            <div id="dropdown-mobile">
                <div class="dropdown-content" >
                    <a href="./seo.php">SEO</a>
                    <a href="./google-ads.php">Google Ads</a>
                    <a href="./socmed-ads.php">Social Media Ads</a>
                    <a href="./app-dev.php">Web & Apps Development</a>
                    <a href="./app-design.php">Creative Design Solution</a>
                </div>
            </div>
            <li><a href="./portfolio.php">Portfolio</a></li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
    </header>

    <div class="banner seo-banner row">
        <div class="left-side column">
            <h1>Apps <span class="color-red">Development</span></h1>
            <p>We offer your business affordable yet bespoke services in a landscape otherwise teeming with banality.</p>
            <ul>
                <li><img src="./assets/images/bullet.png" alt=""><p>Boost brand visibility and credibility on the world’s biggest search engines</p></li>
                <li><img src="./assets/images/bullet.png" alt=""><p>Grow your customer base organically</p></li>
                <li><img src="./assets/images/bullet.png" alt=""><p>Rank higher for high-intent, relevant keywords</p></li>
                <li><img src="./assets/images/bullet.png" alt=""><p>Skyrocket your ROI</p></li>
            </ul>
            <a class="button-red" href="">Get Started</a>
        </div>
        <div class="right-side">
            <img src="./assets/images/mobile-app-slide.png" alt="">
        </div>
    </div>

    <div class="seo-service">
        <h1>Best <span class="color-red">Apps Development</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus tincidunt sapien diam justo, nec id tellus tempor. Aliquam mi, ut amet rutrum malesuada cras</p>
        <div class="banner row">
            <div class="left-side"><img src="./assets/images/mobile-1.png" alt=""></div>
            <div class="right-side">
                <h3>Why is our service better?</h3>
                <ul class="column">
                    <li>
                        <img src="./assets/images/percent-1.png" alt="">
                        <div class="column">
                            <h5>Fastest service on demand</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                        </div>
                    </li>
                    <li>
                        <img src="./assets/images/percent-2.png" alt="">
                        <div class="column">
                            <h5>Have good communication</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                        </div>
                    </li>
                    <li>
                        <img src="./assets/images/percent-3.png" alt="">
                        <div class="column">
                            <h5>Fastest service on demand</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                        </div>
                    </li>
                    <li>
                        <img src="./assets/images/percent-4.png" alt="">
                        <div class="column">
                            <h5>Have good communication</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="services column">
            <div class="row">
                <div class="content">
                    <div class="top">
                        <h4>Our types of Apps Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                        <img src="./assets/images/mobile-2.png" alt="">
                    </div>
                    <ul class="column">
                        <div>
                            <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                                <a class="bold-font service-dropbtn"><h5>Android & IOS</h5>
                                    <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                    <i class="fa fa-chevron-up" style="font-size: 18px;"></i>
                                </a>
                                <div class="column service-dropdown-content" id="dropdownService">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                    <a href="" class="row"><p class="color-red">Contact Us</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                                <a class="bold-font service-dropbtn"><h5>Complete Solution: UI & Backend</h5>
                                    <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                    <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                                <div class="column service-dropdown-content" id="dropdownService">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                    <a href="" class="row"><p class="color-red">Contact Us</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                                </div>
                            </li>
                        </div>
                        <div>
                            <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                                <a class="bold-font service-dropbtn"><h5>Documentation Handover</h5>
                                    <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                    <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                                <div class="column service-dropdown-content" id="dropdownService">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                    <a href="" class="row"><p class="color-red">Contact Us</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
                <div class="img">
                    <img src="./assets/images/mobile-2.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="clients column">
        <h3>Our Clients</h3>
        <p>We have been working with some Fortune 500 clients</p>
        <div class="clients-wrapper row">
            <div class="column mobile">
                <div class="logo-wrapper"><img src="./assets/images/airbnb-logo.png" alt=""></div>
            </div>
            <div class="column">
                <div class="logo-wrapper"><img src="./assets/images/google-logo.png" alt=""></div>
                <div class="airbnb logo-wrapper"><img src="./assets/images/airbnb-logo.png" alt=""></div>
                <div class="logo-wrapper"><img src="./assets/images/book-logo.png" alt=""></div>
            </div>
            <div class="column">
                <div class="logo-wrapper"><img src="./assets/images/microsoft-logo.png" alt=""></div>
                <div class="logo-wrapper"><img src="./assets/images/fedex-logo.png" alt=""></div>
                <div class="logo-wrapper"><img src="./assets/images/walmart-logo.png" alt=""></div>
            </div>
            <div class="column">
                <div class="logo-wrapper"><img src="./assets/images/oyo-logo.png" alt=""></div>
                <div class="logo-wrapper amazon"><img src="./assets/images/amazon-logo.png" alt=""></div>
                <div class="logo-wrapper"><img src="./assets/images/ola-logo.png" alt=""></div>
            </div>
            <div class="column mobile">
                <div class="logo-wrapper"><img src="./assets/images/amazon-logo.png" alt=""></div>
            </div>
        </div>
    </div>

    <div class="banner order row">
        <div class="left-side column">
            <h2> Place an Order Immediately</h2>
            <p>The 4-Steps toward online success</p>
            <a class="button-red" href="">Contact Us</a>
        </div>
        <div class="right-side">
            <img src="./assets/images/order-banner.png" alt="">
        </div>
    </div>

    <div class="testimoni column">
        <h3>Whats Our Customer's Say?</h3>
        <p>The 4-Steps toward online success</p>
        <div class="map-wrapper column">
            <img class="map" src="./assets/images/map.png" alt="">
            <div class="card column">
                <img src="./assets/images/symbol.png" alt="">
                <p>I really like the team for example, a relationship-focused performance expectation might be that the employee sustain collegial working relationships with her peers, subordinates and customers.</p>
                <div class="profile row">
                    <img src="./assets/images/profile.png" alt="">
                    <h5>Lafenia Sianipar</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="email-section">
        <div class="email-wrapper column">
            <h2>Lets Make Something <span class="color-red"> <br>Big Together</span></h2>
            <form class="row" action="">
                <input type="text" name="email-section" id="email-section" placeholder="Email address">
                <a class="button-red" href="">Send</a>
                <img src="./assets/images/email-icon.png" alt="">
            </form>
            <div class="plane-wrapper">
                <img src="./assets/images/plane-icon.png" alt="">
            </div>
        </div>
    </div>

    <div class="footer column">
        <div class="row">
            <div class="column social">
                <img class="logo" src="./assets/images/600-logo.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit lectus purus etiam facilisi at leo adipiscing.</p>
                <ul class="row">
                    <li><a href=""><img src="./assets/images/instagram-icon.png" alt=""></a></li>
                    <li><a href=""><img src="./assets/images/business-icon.png" alt=""></a></li>
                    <li><a href=""><img src="./assets/images/twitter-icon.png" alt=""></a></li>
                    <li><a href=""><img src="./assets/images/youtube-icon.png" alt=""></a></li>
                </ul>
            </div>
            <div class="info column">
                <h5><span class="bold-font">Contact and Info</span></h5>
                <p>+ 6285807117231</p>
                <p>Sumberpucung , malang (65165) Indonesia</p>
                <p>Mon – Sat 8.00 – 18.00 Sunday CLOSED</p>
            </div>
            <div class="form column">
                <h5><span class="bold-font">News Letter</span></h5>
                <form action="">
                    <input type="text" name="news" id="news" placeholder="Your mail">
                </form>
                <a class="button-red" href="">Send</a>
            </div>
        </div>
        <div class="copyright">
            <div class="copyright-wrapper row">
                <ul>
                    <li>© Copyright Ostenpowers - Theme by Ostenpowers</li>
                </ul>
                <ul class="row">
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
          var x = document.getElementById("menu-links");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }

        function myMenuMobile() {
          var y = document.getElementById("dropdown-mobile");
          if (y.style.display === "block") {
            y.style.display = "none";
          } else {
            y.style.display = "block";
          }
        }

        var myDropdownFunc = function(event) {
            var y = event.parentNode.querySelector('.service-dropdown-content');
            if (y.style.display === "block") {
                y.style.display = "none";
            } else {
                y.style.display = "block";
            }
        }

        var serviceStyle = function(event) {
            var z = event.parentNode.querySelector('.service-dropdown');
            if (z.classList.contains("open")) {
                z.classList.remove("open");
            } else {
                z.classList.add("open");
            }
        }

    </script>

</body>
</html>