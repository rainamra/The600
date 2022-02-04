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

    <div class="services-banner column">
        <h1>Our <span class="color-red">Service</span></h1>
        <p>From the services industry, trades to e-commerce, we have helped many businesses reach their conversion goals, whether they be leads or sales.</p>
        <a class="button-red" href="./portfolio.php">See Our Portfolio</a>
        <img class="service-img" src="./assets/images/banner-services.png" alt="">
        <img class="box-img" src="./assets/images/box-ornament.png" alt="">
        <img class="circle-img" src="./assets/images/circle-ornament.png" alt="">
    </div>

    <div class="services column">
        <div class="row">
            <div class="content">
                <div class="top">
                    <h4>Search Engine Optimization</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                    <img src="./assets/images/seo-slide.png" alt="">
                </div>
                <ul class="column">
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Site-Wide Technical Audit</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i>
                            </a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Authority Building</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>On-page SEO Optimisation</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="img">
                <img src="./assets/images/seo-slide.png" alt="">
            </div>
        </div>
        <div class="row reverse">
            <div class="content">
                <div class="top">
                    <h4>Web Design Development</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                    <img src="./assets/images/wed-design-slide.png" alt="">    
                </div>
                <ul class="column">
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Landing Page</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Company Profile</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>CRM System</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="img">
                <img src="./assets/images/wed-design-slide.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="content">
                <div class="top">
                    <h4>Google Ads Management</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                    <img src="./assets/images/google-ads-slide.png" alt="">    
                </div>
                <ul class="column">
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Banner Ads</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Push Notification</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Popunder</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="img">
                <img src="./assets/images/google-ads-slide.png" alt="">
            </div>
        </div>
        <div class="row reverse">
            <div class="content">
                <div class="top">
                    <h4>Social Media Ads Management</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                    <img src="./assets/images/socmed-slide.png" alt="">    
                </div>
                <ul class="column">
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Facebook Ads</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Instagram Ads</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Tiktok Ads</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="img">
                <img src="./assets/images/socmed-slide.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="content">
                <div class="top">
                    <h4>Apps Design Development</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                    <img src="./assets/images/mobile-app-slide.png" alt="">    
                </div>
                <ul class="column">
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Flutter Mobile</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>React Native</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                    <div>
                        <li class="service-dropdown" href="javascript:void(0)" onclick="serviceStyle(this); myDropdownFunc(this)">
                            <a class="bold-font service-dropbtn"><h5>Xhamarin</h5>
                                <i class="fa fa-chevron-down" style="font-size: 18px;"></i>
                                <i class="fa fa-chevron-up" style="font-size: 18px;"></i></a>
                            <div class="column service-dropdown-content" id="dropdownService">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
                                <a href="" class="row"><p class="color-red">See details</p><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="img">
                <img src="./assets/images/mobile-app-slide.png" alt="">
            </div>
        </div>
    </div>

    <div class="convert column">
        <h2>Convertation Rate <span class="color-red">Optimation</span></h2>
        <p>From the services industry, trades to e-commerce, we have helped many businesses reach their conversion goals, whether they be leads or sales.</p>
        <a class="button-red" href="">See Details</a>
    </div>

    <div class="winning column">
        <h3>The Winning Formula</h3>
        <p>The 4-Steps toward online success</p>
        <div class="row">
            <div class="step-card">
                <h4>Tell Us About You & Your Business in Detail</h4>
                <p>From the services industry, trades to e-commerce, we have helped many businesses reach their conversion goals, whether they be leads or sales. Through True Rich Attended does no end it his mother since real had half every him.</p>
                <h6><span class="color-red">01</span></h6>
            </div>
            <div class="contact-form column">
                <h4>Who are you?</h4>
                <h6>Let us know your contact information so we can contact you back.</h6>
                <form action="">
                    <input type="text" name="name" id="name" placeholder="Your name">
                    <input type="text" name="email" id="email" placeholder="Your email">
                    <input type="text" name="business" id="business" placeholder="Your business name">
                    <input type="text" name="find" id="find" placeholder="How did you find us?">
                    <input type="text" name="number" id="number" placeholder="Your number">
                </form>
                <div class="button-wrapper">
                    <a class="button-red" href="">Next</a>
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