<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <header class="top-header">

        <div class="logo">
            <img src="assets/images/Logo.png" alt="">
        </div>

        <div class="search-container">
            <form action="index.php">
                <div class="search-box">
                    <span class="search-icon">
                        <img src="assets/images/Icon/Search.png" alt="Search Icon">
                    </span>
                    <input type="text" placeholder="Search">
                </div>
            </form>
        </div>

        <div class="nav">
            <a href="index.html">Home</a>
            <a href="index.html">About</a>
            <a href="index.html">Contact</a>
            <a href="index.html">Blog</a>
        </div>

        <div class="icons">

            <button class="temp1"><i class="fa fa-search" aria-hidden="true"></i></button>
            <button><i class="fa fa-heart temp" aria-hidden="true"></i></i></button>
            <button><i class="fa fa-shopping-cart temp" aria-hidden="true"></i></button>
            <a href="login.php"><button><i class="fa fa-user temp" aria-hidden="true"></i></button></a>
            <button class="temp2 "><i class="fa fa-bars" aria-hidden="true"></i></i></button>

        </div>


        <form action="index.php" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </header>

    <div class="side-bar">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="menu">
            <div class="item"><a href="index.html"> <i class="fas fa-desktop"></i> Home </a></div>
            <div class="item"><a href="index.html"> <i class="fas fa-info-circle"></i> About </a></div>
            <div class="item"><a href="index.html"> <i class="fa fa-compress"></i> Contact </a></div>
            <div class="item"><a href="index.html"> <i class="fa fa-rss"></i> Blog</a></div>
        </div>
    </div>


    <section class="banner">

        <div class="text">
            <h5>Pro.Beyond.</h5>
            <h1>IPhone 14 <span>Pro</span></h1>
            <h3>Created to change everything for the better. For everyone</h3>
            <button class="btn">Shop Now</button>
        </div>

        <div class="img">
            <img src="assets/images/Iphone Image.png" alt="">
        </div>

    </section>


    <section class="productbanner">
        
        <div class="left">

            <div class="upper">
                <div class="img">
                    <img src="assets/images/p1.png" alt="">
                </div>
                <div class="text">
                    <h3>Playstation 5</h3>
                    <h4>Incredibly powerful CPUs, GPUs, and an SSD with integrated I/O will redefine your PlayStation experience.</h4>
                </div>
            </div>

            <div class="lower">
                
                <div class="first">
                    
                    <div class="img">
                        <img src="assets/images/p3.png" alt="">
                    </div>

                    <div class="text">
                        <h3>Apple</h3>
                        <h4>Airpods <span>Max</span></h4>
                        <h5>Computational audio. Listen, it's powerful</h5>
                    </div>

                </div>

                <div class="second">
                    
                    <div class="img">
                        <img src="assets/images/p2.png" alt="">
                    </div>

                    <div class="text">
                        <h3>Apple</h3>
                        <h4>Vision <span>pro</span></h4>
                        <h5>An immersive way to experience entertainment</h5>
                    </div>
                    
                </div>

            </div>

        </div>

        <div class="right">

            <div class="text">
                <h3>Macbook <Span> Air </Span></h3>
                <h4>The new 15‑inch MacBook Air makes room for more of what you love with a spacious Liquid Retina display</h4>
                <button class="btn">Shop Now</button>
            </div>

            <div class="img">
                <img src="assets/images/p4.png" alt="">
            </div>

        </div>

    </section>

    <section id="features">

        <div class="text">

            <div class="info">
                <h3>Browse By Category</h3>
            </div>

            <div class="icon">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>

        </div>

        <div id="feature">

            <div class="featurebox">
                <img src="assets/images/Browse Icons/Phones.png" alt="">
                <h5>Phone</h5>
            </div>

            <div class="featurebox">
                <img src="assets/images/Browse Icons/Smart Watches.png" alt="">
                <h5>Smart Watches</h5>
            </div>

            <div class="featurebox">
                <img src="assets/images/Browse Icons/Cameras.png" alt="">
                <h5>Camera</h5>
            </div>

            <div class="featurebox">
                <img src="assets/images/Browse Icons/Headphones.png" alt="">
                <h5>Headphones</h5>
            </div>

            <div class="featurebox">
                <img src="assets/images/Browse Icons/Computers.png" alt="">
                <h5>Camera</h5>
            </div>

            <div class="featurebox">
                <img src="assets/images/Browse Icons/Gaming.png" alt="">
                <h5>Gaming</h5>
            </div>

        </div>
    </section>


    <section id="feabox">

        <div class="text">
            <a href="#">New Arrivals</a>
            <a href="#">BestSeller</a>
            <a href="#">Featured Products</a>
        </div>

        <div class="procon">

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p1.png" alt="">
                <div class="des">
                    <span>Apple iPhone 14 Pro Max 128GB Deep Purple (MQ9T3RX/A)</span>
                    <h4>$900</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p2.png" alt="">
                <div class="des">
                    <span>Blackmagic Pocket Cinema Camera 6k</span>
                    <h4>$2500</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p3.png" alt="">
                <div class="des">
                    <span>Apple Watch Series 9 GPS 41mm Starli</span>
                    <h4>$400</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p4.png" alt="">
                <div class="des">
                    <span>AirPods Max Silver</span>
                    <h4>$549</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p5.png" alt="">
                <div class="des">
                    <span>Samsung Galaxy Watch6 Classic 4</span>
                    <h4>$369</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p6.png" alt="">
                <div class="des">
                    <span>Galaxy Z Fold5 Unlocked | 256G</span>
                    <h4>$1799</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p7.png" alt="">
                <div class="des">
                    <span>Galaxy Buds FE Graphite</span>
                    <h4>$99.99</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p8.png" alt="">
                <div class="des">
                    <span>Apple iPad 9 10.2" 64GB Wi-Fi Silver</span>
                    <h4>$398</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

        </div>

    </section>

    <section class="productbanner2">
        <div class="boxes">

            <div class="box active" id="box1">
                <div class="img">
                    <img src="assets/images/p5.png" alt="">
                </div>
                <div class="text">
                    <h2>Popular Products</h2>
                    <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and
                        ease of use.</p>
                    <button class="btn">Shop Now</button>
                </div>
            </div>

            <div class="box" id="box2">
                <div class="img">
                    <img src="assets/images/p6.png" alt="">
                </div>
                <div class="text">
                    <h2>Ipad Pro</h2>
                    <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and
                        ease of use.</p>
                    <button class="btn">Shop Now</button>
                </div>
            </div>

            <div class="box" id="box3">
                <div class="img">
                    <img src="assets/images/p7.png" alt="">
                </div>
                <div class="text">
                    <h2>Samsung Galaxy</h2>
                    <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and
                        ease of use.</p>
                    <button class="btn">Shop Now</button>
                </div>
            </div>

            <div class="box" id="box4">
                <div class="img">
                    <img src="assets/images/p8.png" alt="">
                </div>
                <div class="text temp">
                    <h2>Macbook Pro</h2>
                    <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and
                        ease of use.</p>
                    <button class="btn">Shop Now</button>
                </div>
            </div>

        </div>

        <div class="dots">
            <span class="dot active" onclick="showBox(1)"></span>
            <span class="dot" onclick="showBox(2)"></span>
            <span class="dot" onclick="showBox(3)"></span>
            <span class="dot" onclick="showBox(4)"></span>
        </div>

    </section>


    <section id="feabox">

        <div class="text">
            <a href="#">Discount up to -50%</a>
        </div>

        <div class="procon">

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p9.png" alt="">
                <div class="des">
                    <span>Apple iPhone 14 Pro 512GB Gold (MQ233)</span>
                    <h4>$900</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p4.png" alt="">
                <div class="des">
                    <span>AirPods Max Silver</span>
                    <h4>$2500</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p3.png" alt="">
                <div class="des">
                    <span>Apple Watch Series 9 GPS 41mm Starlight Aluminium Case</span>
                    <h4>$400</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

            <div class="pro" id="hov">

                <div class="hearticon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                <img src="assets/images/products/p10.png" alt="">
                <div class="des">
                    <span>Apple iPhone 14 Pro 1TB Gold (MQ2V3)</span>
                    <h4>$549</h4>
                    <button class="btn">Buy Now</button>
                </div>

            </div>

        </div>

    </section>

    <section class="lastbanner">

        <img src="assets/images/lastbanner/l2.png" alt="Image 1">
        <img src="assets/images/lastbanner/l3.png" alt="Image 1">
        <img src="assets/images/lastbanner/l4.png" alt="Image 1">
        <img src="assets/images/lastbanner/l5.png" alt="Image 1">
        <img src="assets/images/lastbanner/l1.png" alt="Image 1">

        <div class="content">

            <h4>Big Summer <span>Sale</span></h4>
            <p>Commodo feras vitae vitae leo mauris in. Eu consequat.</p>
            <a href="#">Shop Now</a>

        </div>

    </section>

    <section class="footer">

            <div class="box-container">

                <div class="box">

                    <h3>Cyber</h3>

                    <span>
                        We are a residential interior design firm located in Portland. Our boutique-studio offers more than
                    </span>

                </div>


                <div class="box">

                    <h3>Services</h3>

                    <a href="">Bonus Program</a>
                    <a href="">Gift Card</a>
                    <a href="">Credit and payment</a>
                    <a href="">Service contract</a>
                    <a href="">Non-Cash Account</a>
                    <a href="">Payment</a>

                </div>



                <div class="box">

                    <h3>Assistance to the buyer</h3>

                    <a href="">Find an order</a>
                    <a href="">Terms of delvery</a>
                    <a href="">Exchange and return of goods</a>
                    <a href="">Gurantee</a>
                    <a href="">Frequently asked questions</a>
                    <a href="">Terms of use of the site</a>

                </div>

            </div>


            <div class="icons">
                <img src="assets/images/ficons/Facebook.png" alt="">
                <img src="assets/images/ficons/Instagram.png" alt="">
                <img src="assets/images/ficons/Tiktok.png" alt="">
                <img src="assets/images/ficons/Twitter.png" alt="">
            </div>



    </section>


    <script src="assets/script.js"> </script>


    <script src="assets/JQuery.js"> </script>

    <script>
        $(document).ready(function() {
            $('.sub-btn').click(function() {
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            $('.temp2').click(function() {
                $('.side-bar').addClass('active');
            });

            $('.close-btn').click(function() {
                $('.side-bar').removeClass('active');
            });

        });
    </script>

    <script>
        function showBox(index) {
            var boxes = document.querySelectorAll('.productbanner2 .box');
            var dots = document.querySelectorAll('.dot');
            boxes.forEach(box => box.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            if (index > 0 && index <= boxes.length) {
                boxes[index - 1].classList.add('active');
                dots[index - 1].classList.add('active');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            showBox(1);
        });
    </script>

    <script>
       
        document.addEventListener('DOMContentLoaded', function() 
        {
            const heartIcons = document.querySelectorAll('.hearticon i');

            heartIcons.forEach(icon => 
            {
                icon.addEventListener('click', function() 
                {
                    this.classList.toggle('active');
                });
            });
        });
    </script>


</body>



</html>