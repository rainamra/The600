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

    <div class="banner row">
        <div class="left-side column">
            <h1>Get In <span class="color-red">Touch</span></h1>
            <p>From the services industry, trades to e-commerce, we have helped many businesses reach their conversion goals, whether they be leads or sales.</p>
            <a class="button-red" href="">Get Started</a>
        </div>
        <div class="right-side">
            <img src="./assets/images/contact-banner.png" alt="">
        </div>
    </div>

    <div class="contact-banner-wrapper column">
        <div class="contact-banner">
            <div class="side column">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126904.25651806731!2d106.6382719031876!3d-6.295498383904047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fab10419c095%3A0x8706481c2c4aafe4!2sSouth%20Tangerang%2C%20South%20Tangerang%20City%2C%20Banten!5e0!3m2!1sen!2sid!4v1643872740099!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <ul class="contact-info">
                    <li><img src="./assets/images/email-icon.png" alt=""><p>Email : example@gmail.com</p></li>
                    <li><img src="./assets/images/call-icon.png" alt=""><p>Phone : +62 8986 7855</p></li>
                </ul>
                <ul class="contact-button">
                    <li><img src="./assets/images/instagram-icon.png" alt=""></li>
                    <li><img src="./assets/images/web-icon.png" alt=""></li>
                    <li><img src="./assets/images/twitter-icon.png" alt=""></li>
                    <li><img src="./assets/images/youtube-icon.png" alt=""></li>
                </ul>
            </div>
            <div class="side form">
                <input type="text" name="name" id="name" placeholder="Your name">
                <input type="text" name="email" id="email" placeholder="Your mail">
                <textarea type="text" name="subject" id="subject" placeholder="Subject"></textarea>
                <img src="./assets/images/email-icon.png" alt="">
                <a class="button-red" href="">Send</a>
            </div>
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

    </script>

</body>
</html>