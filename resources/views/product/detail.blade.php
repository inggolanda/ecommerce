<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - RedStore</title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="assets/css/fontawesome.min.css">-->
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="assets/img/logo.png" width="125">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/product">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Account</a></li>
                </ul>
            </nav>
            <img src="assets/img/cart.png" width="30px" height="30px">
            <img src="assets/img/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!------------ Single product------->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="assets/img/gallery-1.jpg" width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="assets/img/gallery-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/img/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/img/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/img/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p><a href="/home">Home</a> / T-Shirt</p>
                <h1>Red Printd T-Shirt by HRX</h1>
                <H4>$50.00</H4>
                <select>
                    <option value="">Select Size</option>
                    <option value="">XXL</option>
                    <option value="">XL</option>
                    <option value="">Large</option>
                    <option value="">Medium</option>
                    <option value="">Small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To cart</a>

                <h3>Product Detail <i class="fa fa-indent"></i></h3>
                <br>
                <p>Give your Summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of
                    short for your morning workout or a denims for an evening out with
                    the guys</p>
            </div>
        </div>
    </div>
    <!------------ title------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Releted Product</h2>
            <p>View More</p>
        </div>
    </div>


    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="assets/img/product-9.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/img/product-10.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/img/product-11.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="assets/img/product-12.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>

    <!------------ footer------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p> Download App for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="assets/img/play-store.png">
                        <img src="assets/img/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="assets/img/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure <br> and of Sport Accessible To The Many.offer mine</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Link</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright"> Copyright 2020 - Inggo Landa Portfolio</p>
        </div>
    </div>

    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>