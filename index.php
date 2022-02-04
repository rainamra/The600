<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The 600</title>

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
            <h1>Grow Your <span class="color-red">Business Online</span> with Our <span class="color-red">Bespoke & Robust</span> Strategies</h1>
            <p>From the services industry, trades to e-commerce, we have helped many businesses reach their conversion goals, whether they be leads or sales.</p>
            <a class="button-red" href="">Get Started</a>
        </div>
        <div class="right-side">
            <img src="./assets/images/banner-img.png" alt="">
        </div>
    </div>

    <div class="banner-logo row">
        <img src="./assets/images/airbnb-logo.png" alt="">
        <img src="./assets/images/hubspot-logo.png" alt="">
        <img src="./assets/images/google-logo.png" alt="">
        <img src="./assets/images/microsoft-logo.png" alt="">
        <img src="./assets/images/walmart-logo.png" alt="">
        <img src="./assets/images/fedex-logo.png" alt="">
    </div>

    <div class="what-we-do column">
        <h3>What We Do?</h3>
        <div class="carousel">
            <div class="slider-wrapper column">
                <ul class="row slider"></ul>
            </div>
            <nav></nav>
            <div class="container">
                <div class="desc row slide">
                    <div class="left-side column">
                        <h2>SEO</h2>
                        <p>From the services industry, trades to e-commerce, we have 
                            helped many businesses reach their conversion goals, whether they 
                            be leads or sales. Through True Rich Attended does no end it his 
                            mother since real had half every him.</p>
                        <a class="button-red" href="">Get Started</a>
                    </div>
                    <div class="right-side">
                        <img src="./assets/images/seo-slide.png" alt="">
                    </div>
                </div>
                <div class="desc row slide">
                    <div class="left-side column">
                        <h2>Google <span class="color-red">Ads</span></h2>
                        <p>From the services industry, trades to e-commerce, we have 
                            helped many businesses reach their conversion goals, whether they 
                            be leads or sales. Through True Rich Attended does no end it his 
                            mother since real had half every him.</p>
                        <a class="button-red" href="">Get Started</a>
                    </div>
                    <div class="right-side">
                        <img src="./assets/images/google-ads-slide.png" alt="">
                    </div>
                </div>
                <div class="desc row slide">
                    <div class="left-side column">
                        <h2>Social Media <span class="color-red">Ads</span></h2>
                        <p>From the services industry, trades to e-commerce, we have 
                            helped many businesses reach their conversion goals, whether they 
                            be leads or sales. Through True Rich Attended does no end it his 
                            mother since real had half every him.</p>
                        <a class="button-red" href="">Get Started</a>
                    </div>
                    <div class="right-side">
                        <img src="./assets/images/what-we-do-img.png" alt="">
                    </div>
                </div>
                <div class="desc row slide">
                    <div class="left-side column">
                        <h2>Web & Apps <span class="color-red">Development</span></h2>
                        <p>From the services industry, trades to e-commerce, we have 
                            helped many businesses reach their conversion goals, whether they 
                            be leads or sales. Through True Rich Attended does no end it his 
                            mother since real had half every him.</p>
                        <a class="button-red" href="">Get Started</a>
                    </div>
                    <div class="right-side">
                        <img src="./assets/images/mobile-app-slide.png" alt="">
                    </div>
                </div>
                <div class="desc row slide">
                    <div class="left-side column">
                        <h2>Creative Design <span class="color-red">Solution</span></h2>
                        <p>From the services industry, trades to e-commerce, we have 
                            helped many businesses reach their conversion goals, whether they 
                            be leads or sales. Through True Rich Attended does no end it his 
                            mother since real had half every him.</p>
                        <a class="button-red" href="">Get Started</a>
                    </div>
                    <div class="right-side">
                        <img src="./assets/images/wed-design-slide.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio column">
        <h3>The Latest Cool Portfolio</h3>
        <p>The 4-Steps toward online success</p>
        <div class="card-wrapper row">
            <div class="card column">
                <div class="card-1 img"></div>
                <h4>Marketeria</h4>
                <p>That is why before we hear about your brand, we want to know more about you. What are your values?</p>
            </div>
            <div class="card column">
                <div class="card-2 img"></div>
                <h4>Kampus Indonesia</h4>
                <p>That is why before we hear about your brand, we want to know more about you. What are your values?</p>
            </div>
            <div class="card column">
                <div class="card-3 img"></div>
                <h4>Task Management</h4>
                <p>That is why before we hear about your brand, we want to know more about you. What are your values?</p>
            </div>
            <div class="card column">
                <div class="card-4 img"></div>
                <h4>ALivee Commerce</h4>
                <p>That is why before we hear about your brand, we want to know more about you. What are your values?</p>
            </div>
        </div>
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

    <div class="about column">
        <div class="about-wrapper row">
            <div class="left-side">
                <img src="./assets/images/allan-img.png" alt="">
            </div>
            <div class="right-side column">
                <h2>About <span class="color-red">Ostenpowers</span></h2>
                <p>Ostenpowers was founded in 2018 with a small animation project to serve as
                    a social media ad for a home maintenance company. The founder started receiving
                    more demand from his acquaintances to help as a marketing consultant who mostly participated
                    in discussions about high levels strategies. Over the years a team was built within Ostenpowers
                    to provide a one stop solution, from strategy to execution, to our small but loyal client-based.
                </p>
                <p>
                    <span class="color-red bigger-font bold-font">Over 3 Years</span> as the team is expanding, we are now ready to help more businesses to achieve their online success.
                </p>
                <p>
                    <span class="bold-font">Feel free to connect through email, phone call or add Allan on linkedin.</span>
                </p>
                <a class="button-red" href="">Let's Connect</a>
            </div>
        </div>
    </div>

    <div class="blog">
        <h3>Our Blog</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus purus etiam facilisi at leo adipiscing.</p>
        <div class="card-wrapper row">
            <div class="card column">
                <div class="img"></div>
                <div class="desc">
                    <h6>Blog</h6>
                    <h4>Geoportal for COVID-19 in Serpong</h4>
                    <h6 class="para">The website has become a leading source of centralized data on the COVID-19 pandemic, providing insights for government agencies, the media, and the general public</h6>
                    <a class="row href="#"><span class="color-red">Learn more</span><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                </div>
            </div>
            <div class="card column">
                <div class="img"></div>
                <div class="desc">
                    <h6>Blog</h6>
                    <h4>Geoportal for COVID-19 in Serpong</h4>
                    <h6 class="para">The website has become a leading source of centralized data on the COVID-19 pandemic, providing insights for government agencies, the media, and the general public</h6>
                    <a class="row href="#"><span class="color-red">Learn more</span><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
                </div>
            </div>
            <div class="card column">
                <div class="img"></div>
                <div class="desc">
                    <h6>Blog</h6>
                    <h4>Geoportal for COVID-19 in Serpong</h4>
                    <h6 class="para">The website has become a leading source of centralized data on the COVID-19 pandemic, providing insights for government agencies, the media, and the general public</h6>
                    <a href="#" class="row">
                        <span class="color-red">Learn more</span><img src="./assets/images/ic-arrow-right-long.png" alt=""></a>
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
                    <li><a href=""><img src="./assets/images/web-icon.png" alt=""></a></li>
                    <li><a href=""><img src="./assets/images/twitter-icon.png" alt=""></a></li>
                    <li><a href=""><img src="./assets/images/youtube-icon.png" alt=""></a></li>
                </ul>
            </div>
            <div class="info column">
                <p><span class="bold-font">Contact and Info</span></p>
                <p>+ 6285807117231</p>
                <p>Sumberpucung , malang (65165) Indonesia</p>
                <p>Mon – Sat 8.00 – 18.00 Sunday CLOSED</p>
            </div>
            <div class="form column">
                <p><span class="bold-font">News Letter</span></p>
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

        function Carousel(element) {
            this._autoDuration = 0;
            this._container = element.querySelector('.container');
            this._interval = null;
            this._nav = element.querySelector('nav');
            this._slider = element.querySelector('.slider');
            this._slide = 0;
            this._touchAnchorX = 0;
            this._touchTime = 0;
            this._touchX1 = 0;
            this._touchX2 = 0;
            element.addEventListener('click', this);
            element.addEventListener('touchstart', this);
            element.addEventListener('touchmove', this);
            element.addEventListener('touchend', this);
            element.addEventListener('transitionend', this);
            window.addEventListener('blur', this);
            window.addEventListener('focus', this);
            this.set(0);
        }

        Carousel.prototype.auto = function (ms) {
        if (this._interval) {
            clearInterval(this._interval);
            this._interval = null;
        }
        if (ms) {
            this._autoDuration = ms;
            var self = this;
            this._interval = setInterval(function () { self.next(); }, ms);
        }
        }

        Carousel.prototype.handleEvent = function (event) {
        if (event.touches && event.touches.length > 0) {
            this._touchTime = +new Date;
            this._touchX1 = this._touchX2;
            this._touchX2 = event.touches[0].screenX;
        }

        var screen = document.documentElement.clientWidth;
        var position = this._slide + (this._touchAnchorX - this._touchX2) / screen;
        var velocity = (new Date - this._touchTime) <= 200 ? (this._touchX1 - this._touchX2) / screen : 0;

        switch (event.type) {
            case 'blur':
            this.auto(0);
            break;
            case 'click':
            if (event.target.parentNode != this._nav && event.target.parentNode != this._slider) break;
            var i = parseInt(event.target.dataset.slide);
            if (!isNaN(i)) {
                event.preventDefault();
                this.auto(0);
                this.set(i);
            }
            break;
            case 'focus':
            this.auto(this._autoDuration);
            break;
            case 'touchstart':
            event.preventDefault();
            this.auto(0);
            this._container.style.transition = 'none';
            this._touchAnchorX = this._touchX1 = this._touchX2;
            break;
            case 'touchmove':
            this._container.style.transform = 'translate3d(' + (-position * 100) + 'vw, 0, 0)';
            break;
            case 'touchend':
            this._container.style.transition = '';
            var offset = Math.min(Math.max(velocity * 4, -0.5), 0.5);
            this.set(Math.round(position + offset));
            break;
            case 'transitionend':
            var i = this._slide, count = this._countSlides();
            if (i >= 0 && i < count) break;
            // The slides should wrap around. Instantly move to just outside screen on the other end.
            this._container.style.transition = 'none';
            this._container.style.transform = 'translate3d(' + (i < 0 ? -count * 100 : 100) + 'vw, 0, 0)';
            // Force changes to be applied sequentially by reflowing the element.
            this._container.offsetHeight;
            this._container.style.transition = '';
            this._container.offsetHeight;
            // Animate the first/last slide in.
            this.set(i < 0 ? count - 1 : 0);
            break;
        }
        };

        Carousel.prototype.next = function () {
            this.set(this._slide + 1);
        };

        Carousel.prototype.previous = function () {
            this.set(this._slide - 1);
        };

        Carousel.prototype.set = function (i) {
            var count = this._countSlides();
            if (i < 0) { i = -1; } else if (i >= count) { i = count; }
            this._slide = i;
            this._container.style.transform = 'translate3d(' + (-i * 100) + 'vw, 0, 0)';
            this._updateNav();
            this._updateSlider();
        };

        Carousel.prototype._countSlides = function () {
            return this._container.querySelectorAll('.slide').length;
        };

        Carousel.prototype._updateNav = function () {
            var html = '', count = this._countSlides();
            for (var i = 0; i < count; i++) {
                if (i > 0) html += '&nbsp;';
                html += '<a' +  (i == this._slide ? ' class="current"' : '') + ' data-slide="' + i + '" href="#">●</a>';
            }
            this._nav.innerHTML = html;
        }

        Carousel.prototype._updateSlider = function () {
            var html = '', count = this._countSlides();
            const services = ["SEO", "Google Ads", "Social Media Ads", "Web & Apps Development", "Creative Design Solution"];
            for (var i = 0; i < count; i++) {
                if (i > 0) html += '&nbsp;';
                html += '<a' +  (i == this._slide ? ' class="active"' : '') + ' data-slide="' + i + '" href="#">' + services[i] + '</a>';
            }
            this._slider.innerHTML = html;
        }

        var carousels = Array.prototype.map.call(document.querySelectorAll('.carousel'), function (element) {
            var carousel = new Carousel(element);
            carousel.auto(5000);
            return carousel;
        });
    </script>

</body>
</html>