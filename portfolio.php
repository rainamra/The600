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
            <h1>Our <span class="color-red">Works</span></h1>
            <p>From the services industry, trades to e-commerce, we have helped many businesses reach their conversion goals, whether they be leads or sales.</p>
            <a class="button-red" href="">Get Started</a>
        </div>
        <div class="right-side">
            <img src="./assets/images/portfolio-img.png" alt="">
        </div>
    </div>

    <div class="portfolios">
        <div class="what-we-do column">
            <h3>What We Do?</h3>
            <div class="carousel">
                <ul class="row slider">
                    <a class="0 active" id="nav-portfolio" href="javascript:void(0)" onclick="changePortfolio(this); highlightNav(this);">SEO</a>
                    <a class="1" id="nav-portfolio" href="javascript:void(0)" onclick="changePortfolio(this); highlightNav(this);">Google Ads</a>
                    <a class="2" id="nav-portfolio" href="javascript:void(0)" onclick="changePortfolio(this); highlightNav(this);">Social Media Ads</a>
                    <a class="3" id="nav-portfolio" href="javascript:void(0)" onclick="changePortfolio(this); highlightNav(this);">Web & Apps Development</a>
                    <a class="4" id="nav-portfolio" href="javascript:void(0)" onclick="changePortfolio(this); highlightNav(this);">Creative Design Solution</a>
                </ul>
            </div>
        </div>
        <div class="0 portfolio-wrapper selected">
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-1.png');"></div>
                <h4>Tour Guide Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-2.png');"></div>
                <h4>Education Africans Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-3.png');"></div>
                <h4>Cinemas Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-4.png');"></div>
                <h4>Crypto Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-5.png');"></div>
                <h4>Future Home Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-6.png');"></div>
                <h4>Pipe Relining Expert</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
        </div>
        <div class="1 portfolio-wrapper">
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-1.png');"></div>
                <h4>TourGuide Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-2.png');"></div>
                <h4>Education Africans Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-3.png');"></div>
                <h4>Cinemas Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-4.png');"></div>
                <h4>Crypto Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-5.png');"></div>
                <h4>Future Home Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-6.png');"></div>
                <h4>Pipe Relining Expert</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
        </div>
        <div class="2 portfolio-wrapper">
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-1.png');"></div>
                <h4>Tour Guide Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-2.png');"></div>
                <h4>Education Africans Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-3.png');"></div>
                <h4>Cinemas Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-4.png');"></div>
                <h4>Crypto Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-5.png');"></div>
                <h4>Future Home Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-6.png');"></div>
                <h4>Pipe Relining Expert</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
        </div>
        <div class="3 google-portfolio portfolio-wrapper">
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-1.png');"></div>
                <h4>Tour Guide Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-2.png');"></div>
                <h4>Education Africans Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-3.png');"></div>
                <h4>Cinemas Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-4.png');"></div>
                <h4>Crypto Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-5.png');"></div>
                <h4>Future Home Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-6.png');"></div>
                <h4>Pipe Relining Expert</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
        </div>
        <div class="4 portfolio-wrapper">
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-1.png');"></div>
                <h4>Tour Guide Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-2.png');"></div>
                <h4>Education Africans Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-3.png');"></div>
                <h4>Cinemas Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-4.png');"></div>
                <h4>Crypto Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-5.png');"></div>
                <h4>Future Home Web Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
            </div>
            <div class="card">
                <div class="img" style="background-image: url('./assets/images/portfolio-6.png');"></div>
                <h4>Pipe Relining Expert</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer venenatis ligula sed dui consequat iaculis.</p>
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

        var highlightNav = function(event) {
            var z = document.querySelectorAll('#nav-portfolio');
            for (let i = 0; i < z.length; i++) {
                if (z[i].classList.contains(event.classList)) {
                    z[i].classList.add("active");
                } else {
                    z[i].classList.remove("active");
                }
            }
        }

        function changePortfolio(event) {
            var z = document.querySelectorAll('.portfolio-wrapper');
            for (let i = 0; i < z.length; i++) {
                if (z[i].classList.contains(event.classList)) {
                    z[i].classList.add("selected");
                } else {
                    z[i].classList.remove("selected");
                }
            }
        }
    </script>

</body>
</html>