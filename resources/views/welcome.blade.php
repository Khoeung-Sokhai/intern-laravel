<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/index-18.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 08:54:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800,%20700"
        rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/aos2.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/colors/dark-orange.css">
</head>

<body class="th-18">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="images/logo-white-1.svg"
                                    data-sticky-logo="images/logo-dark-orange.svg" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li><a href="/">Home</a>

                                </li>
                                <li><a href="/listing">Listing</a>

                                </li>
                                <li><a href="/property">Property</a>

                                    <ul>

                                        <li><a href="/property">Single Property 1</a></li>
                                        <li><a href="/property/rent">Single Property 2</a></li>
                                        <li><a href="/property/vacationrental">Single Property 3</a></li>

                                    </ul>

                                </li>
                                <li><a href="/dashboard">CRM</a>

                                </li>
                                <li><a href="/blog">Blog</a>

                                </li>
                                <li><a href="/contact">Contact</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a>
                                </li>
                                <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                        href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                        Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->


                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"><a href="/login">Sign In</a></div>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- STAR HEADER IMAGE -->
        <section class="header-image home-18 d-flex align-items-center" id="slider">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="left wow fadeInLeft">
                            <h1>The best way to find your dream home</h1>
                            <p>With over 400,000 active listings, FindHouses has the largest inventory of apartments in
                                the United States..</p>
                            <a href="submit-property.html" class="btn-white">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 google-maps home-18" data-aos="fade-left">
                        <div class="filter">
                            <div class="filter-toggle d-lg-none d-sm-flex"><i class="fa fa-search"></i>
                                <h6>START SEARCHING</h6>
                            </div>
                            <form method="get">
                                <div class="filter-item">
                                    <label>Property Status</label>
                                    <select name="property-status">
                                        <option value="">Any Status</option>
                                        <option value="for-sale">For Sale</option>
                                        <option value="for-rent">For Rent</option>
                                        <option value="sold">Sold</option>
                                    </select>
                                </div>
                                <div class="filter-item">
                                    <label>Location</label>
                                    <select name="property-type">
                                        <option value="">Any Location</option>
                                        <option value="family-house">New York</option>
                                        <option value="apartment">Los Angeles</option>
                                        <option value="condo">Chicago</option>
                                        <option value="condo">Philadelphia</option>
                                        <option value="condo">San Francisco</option>
                                    </select>
                                </div>
                               <div class="filter-item mb-3">
                                    <label>Price</label>
                                    <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10 mb-3">
                                    <div class="slider-range mt-2"></div>
                                </div>
                                <div class="filter-item filter-half mt-3">
                                    <label>Beds</label>
                                    <select name="beds" id="property-beds">
                                        <option value="">Any</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="filter-item filter-half filter-half-last mt-3">
                                    <label>Baths</label>
                                    <select name="baths" id="property-baths">
                                        <option value="">Any</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="clear"></div>
                                <div class="filter-item"> 
                                    <div class="clear"></div>
                                </div>
                                <div class="filter-item">
                                    <label class="label-submit p-0 m-0">Submit</label>
                                    <br />
                                    <input type="submit" class="button alt mb-0" value="SEARCH PROPERTY" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER IMAGE -->

        <!-- START SECTION PROPERTIES FOR SALE -->
        <section class="recently portfolio bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Properties </span>For Sale</h2>
                    <p>Find your dream home from our Sale added properties.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-1.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-2.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-3.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-4.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-5.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="properties-details.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-6.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES FOR SALE -->

        <!-- START SECTION PROPERTIES FOR RENT -->
        <section class="recently portfolio home18 bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Properties </span>For Rent</h2>
                    <p>Find your dream home from our Rent added properties.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-1.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-2.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-3.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="properties-details.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-4.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-5.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="properties-details.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="single-property-1.html">View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
                                                <img src="images/feature-properties/fp-6.jpg" alt="home-1"
                                                    class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                    NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ 230,000</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <i class="fa fa-user"></i> Jhon Doe
                                            </a>
                                            <span>
                                                <i class="fa fa-calendar"></i> 2 months ago
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES FOR RENT -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="images/icons/icon-1.svg" alt="">
                                <h3>Wide Renge Of Properties</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                    consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="images/icons/icon-2.svg" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                    consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up"
                        data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="images/icons/icon-3.svg" alt="">
                                <h3>24/7 support</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                    consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION TOP LOCATIONS -->
        <section class="visited-cities bg-white-2 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Most Popular </span>Places</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    <div class="col-lg-6 col-md-6 pr-1" data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box hover-effect">
                            <img src="images/popular-places/7.jpg" class="img-responsive" alt="">
                            <!-- Badge -->
                            <div class="img-box-content visible">
                                <h4 class="mb-2">New York</h4>
                                <span>203 Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr-1" data-aos="fade-left">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box hover-effect">
                            <img src="images/popular-places/8.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Los Angeles</h4>
                                <span>307 Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr" data-aos="fade-left">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box hover-effect">
                            <img src="images/popular-places/9.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Miami </h4>
                                <span>409 Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr-1" data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box no-mb mi x3 hover-effect">
                            <img src="images/popular-places/10.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Chicago</h4>
                                <span>507 Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr-1" data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box no-mb mi x3 hover-effect">
                            <img src="images/popular-places/11.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">San Francisco</h4>
                                <span>99 Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 pr" data-aos="fade-left">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box san no-mb x3 hover-effect">
                            <img src="images/popular-places/5.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Detroit </h4>
                                <span>308 Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TOP LOCATIONS -->

        

        <!-- START SECTION BLOG -->
        <section class="blog-section bg-white-2 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Tips & </span>Articles</h2>
                    <p>Grow your appraisal and real estate career with tips.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>Explore The World</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">April 11, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="250">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-2.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>Find Good Places</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">May 20, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Lis Jhonson</p>
                                            <img src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item no-mb" data-aos="fade-up" data-aos-delay="350">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-3.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>All Places In Town</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">Jun 30, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Ted Willians</p>
                                            <img src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white-1">
            <div class="container">
                <div class="owl-carousel style2">
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

        

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                            Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with
                            Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()"
                                            value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()"
                                            value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form"
                                            id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()"
                                                value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()"
                                                value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()"
                                                value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()"
                                                value="">
                                            <button type="submit"
                                                class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/aos2.js"></script>
        <script src="js/nice-select.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/color-switcher.js"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });
        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });
        </script>

        <!-- Slider Revolution scripts -->
        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/index-18.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 08:54:33 GMT -->

</html>
