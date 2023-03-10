<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    {{-- <link rel="stylesheet" href="assets/home/css/bootstrap.css"> --}}
    <link rel="stylesheet" href="assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/home/style.css">
    <link rel="stylesheet" href="assets/home/responsive.css">
    <link rel="stylesheet" href="assets/css/zaq/bootstrap.css">
    <style>
        .dark{
            background-color: rgb(37, 37, 37);
            -webkit-text-fill-color:  rgb(255, 255, 255);
        }
        .light{
            background-color: rgb(255, 255, 255);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-dark navbar-expand-lg fixed-top py-4">
                <div class="container">
                  <a class="navbar-brand" href="#"><h2>WeCare</h2></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <div class="nav-link">
                            {{-- <input type="checkbox" id="switch">
                            <label id="theme" for="switch">Toggle Theme</label> --}}
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label id="theme" class="form-check-label" for="flexSwitchCheckDefault">Dark Mode</label>
                            </div>
                        </div>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
              
            </header>
        <section class="carosal-area" style="background:url(img/carosal-bg.jpg); background-size:cover; background-attachment: fixed; background-position: center; background-repeat: no-repeat; height:80vh">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="client owl-carousel owl-theme">
                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our_activity">
            <h2>OUR ACTIVITY</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 col-xs-12"> 
                        <div class="single-Promo">
                            <div class="promo-icon">
                                <i class="material-icons">near_me</i>
                            </div>
                            <h2><a href="#">Fundraising</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="single-Promo">
                            <div class="promo-icon">
                                <i class="material-icons">favorite</i>
                            </div>
                            <h2><a href="#">Volunteering</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="single-Promo">
                            <div class="promo-icon">
                                <i class="material-icons">dashboard</i>
                            </div>
                            <h2><a href="#">Our Programs</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="donate_section" style="background:url(img/donate-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 for-padding">
                        <h4>URGENT CAUSE</h4>
                        <h3>Recent Environmental Disasters</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="progress-text">
                            <p class="progress-top">50%</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                            </div>
                            <p class="progress-left">Raised: $1200</p>
                            <p class="progress-right">Goal: $2400</p>
                        </div>
                        <h2><a href="#">DONATE NOW</a></h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="events_section_area">
            <h2>UPCOMING EVENTS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <img src="img/events_single_one.jpg" alt="">
                            <p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
                            <div class="clear"></div>
                            <h3>Education For Children</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <img src="img/events_single_two.jpg" alt="">
                            <p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
                            <h3>Education For Children</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <img src="img/events_single_three.jpg" alt="">
                            <p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
                            <h3>Education For Children</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="block-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">favorite</i></p>
                            <p class="counter-wrapper"><span class="fb"></span></p>
                            <p class="text-block">CAUSES</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">language</i></p>
                            <p class="counter-wrapper"><span class="code"></span></p>
                            <p class="text-block">PLACES</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">person_add</i></p>
                            <p class="counter-wrapper"><span class="bike"></span></p>
                            <p class="text-block">VOLUNTEERS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">people</i></p>
                            <p class="counter-wrapper"><span class="coffee"></span></p>
                            <p class="text-block">SAVED</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="our_cuauses">
            <h2>OUR CAUSES</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_cuauses_single owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/our_cuauses_one.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="#">DONATE NOW</a></h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/our_cuauses_two.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="#">DONATE NOW</a></h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/our_cuauses_three.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="#">DONATE NOW</a></h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/our_cuauses_three.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="#">DONATE NOW</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="donors">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="donors_input">
                            <h2>DONATION NOW</h2>
                            <form action="#" method="post">
                                <p class="amount">
                                    <label for="usd">AMOUNT : </label>
                                    <input type="radio" name="usd" id="usd" checked>20usd
                                    <input type="radio" name="usd" id="usd">50usd
                                    <input type="radio" name="usd" id="usd">100usd </p>
                                <p class="type">
                                    <label for="type">TYPE : </label>
                                    <input type="radio" name="time" id="type" checked>One Time
                                    <input type="radio" name="time" id="type">Monthly
                                    <input type="radio" name="time" id="type">Yearly <br>
                                </p>
                                <h5>
                                    <input type="text" placeholder="Name">
                                    <input type="email" placeholder="Email">
                                </h5>
                                <h4>
                                    <select>
                                    <option>I Want To Donate For 1</option>
                                    <option>I Want To Donate For 2</option>
                                    <option>I Want To Donate For 3</option>
                                </select>
                                </h4>
                                <input type="submit" value="DONATION NOW">
                            </form>
                        </div>
                        <div class="donors_image">
                            <h2>FEATURED DONORS</h2>
                            <div class="donors_featured owl-carousel owl-theme">
                                <div class="item">
                                    <img src="img/donors_featured_one.jpg" alt="">
                                    <h3>Kenneth J. Garnica</h3>
                                    <p>Donated Amount : <span>220 USD</span> </p>
                                </div>
                                <div class="item">
                                    <img src="img/donors_featured_one.jpg" alt="">
                                    <h3>Kenneth J. Garnica</h3>
                                    <p>Donated Amount : <span>220 USD</span> </p>
                                </div>
                                <div class="item">
                                    <img src="img/donors_featured_one.jpg" alt="">
                                    <h3>Kenneth J. Garnica</h3>
                                    <p>Donated Amount : <span>220 USD</span> </p>
                                </div>
                                <div class="item">
                                    <img src="img/donors_featured_one.jpg" alt="">
                                    <h3>Kenneth J. Garnica</h3>
                                    <p>Donated Amount : <span>220 USD</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clear"></div>
        <section class="volunteer_area">
            <h2>Our Volunteer</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="volunteer_single owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/volanteer_1.jpg" alt="">
                                <div class="text">
                                    <h3>Laura Jammy</h3>
                                    <h6>Designer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_2.jpg" alt="">
                                <div class="text">
                                    <h3>Albert R. Ardoin</h3>
                                    <h6>Actor</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_3.jpg" alt="">
                                <div class="text">
                                    <h3>Cynthia Anni</h3>
                                    <h6>Singer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_1.jpg" alt="">
                                <div class="text">
                                    <h3>Laura Jammy</h3>
                                    <h6>Designer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_2.jpg" alt="">
                                <div class="text">
                                    <h3>Albert R. Ardoin</h3>
                                    <h6>Actor</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_3.jpg" alt="">
                                <div class="text">
                                    <h3>Cynthia Anni</h3>
                                    <h6>Singer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="carosal_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carosal_bottom_single owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/volanteer_1.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <h5><i class="material-icons">format_quote</i></h5>
                                <h4>Florence M. Cofer</h4>
                                <h6>Designer</h6>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_2.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <h5><i class="material-icons">format_quote</i></h5>
                                <h4>Florence M. Cofer</h4>
                                <h6>Designer</h6>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_3.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <h5><i class="material-icons">format_quote</i></h5>
                                <h4>Florence M. Cofer</h4>
                                <h6>Designer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="letast_news">
            <h2>latest news</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single_news">
                            <img src="img/news_images_1.jpg" alt="">
                            <div class="texts">
                                <p class="date"><a href="#">30 May, 2017</a></p>
                                <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h3><a href="#">READ MORE</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_news">
                            <img src="img/news_images_2.jpg" alt="">
                            <div class="texts">
                                <p class="date"><a href="#">30 May, 2017</a></p>
                                <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h3><a href="#">READ MORE</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_news">
                            <img src="img/news_images_3.jpg" alt="">
                            <div class="texts">
                                <p class="date"><a href="#">30 May, 2017</a></p>
                                <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h3><a href="#">READ MORE</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer_carosal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_carosal_icon owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/microsoft.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/envato.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/yahoo.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/jquery.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/amazon.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">
                            <h2>HELP CHARITY</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                            <hr>
                            <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="footer-text one">
                                    <h3>RECENT POST</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing </a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3">
                                <div class="footer-text two">
                                    <h3>USEFUL LINKS</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Causes</a></li>
                                        <li><a href="#">Event</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-text one">
                                    <h3>CONTACT US</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">location_on</i>1 Street, derby, FL 2147, USA</a></li>
                                        <li><a href="#"><i class="material-icons">email</i>dartthemes@gmail.com</a></li>
                                        <li><a href="#"><i class="material-icons">call</i>+123456789</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" class="footer_bottom">
                <p>Copyright @ 2017 <a href="#">DartThemes</a> | All Rights Reserved </p>
            </div>
        </footer>
    </div>
    <script src="assets/home/js/jquery-3.1.1.min.js"></script>
    <script src="assets/home/js/animationCounter.js"></script>
    {{-- <script src="assets/home/js/bootstrap.min.js"></script> --}}
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/home/js/owl.carousel.min.js"></script>
    <script src="assets/home/js/active.js"></script>

    <script>
        var nav = document.querySelector('nav');
        if(window.innerWidth <= 990){
            nav.classList.add('bg-dark', 'shadow');
        }else{
            window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            }
            else{
            nav.classList.remove('bg-dark', 'shadow');
            }
            });
        }

        var switchButton = document.getElementById("flexSwitchCheckDefault");
        var change = document.getElementById("theme");
        var body = document.getElementsByTagName("body")[0];

        switchButton.addEventListener("click", function() {
  if (switchButton.checked) {
    body.classList.add("dark");
    body.classList.remove("light");
    change.innerHTML = "Dark Theme";
  } else {
    body.classList.add("light");
    body.classList.remove("dark");
    change.innerHTML = "Light Theme";
  }
});

    </script>

</body>

</html>