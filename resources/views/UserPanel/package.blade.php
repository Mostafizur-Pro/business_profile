<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/b_icon.png">
    <title>

        Business Profile</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/asset/app.css">
    <link rel="stylesheet" href="/asset/p.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body style="background-color: #e7decc;">
    <div class="header-part">
        <div class="header-option">
            <div class="logo-back">
                <a href="{{url('/')}}"><img class="company-logo" src="/images/business profile.png" alt="Business Profile"></a>

            </div>
        </div>
        <div class="login-section">

            <form action="{{url('/login')}}" method="get" autocomplete="off">
                <button class="button login__submit">
                    <span class="button__text">Log In or Sign Up</span>
                </button>
            </form>

        </div>



    </div>
    <div class="navbar_settings">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('package') }}">Our Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Agro Products & Services</a>
                            <a class="dropdown-item" href="#">Book, Stationery & Paper</a>
                            <a class="dropdown-item" href="#">Business Houses & Services</a>
                            <a class="dropdown-item" href="#">Construct Material, Hardware</a>
                            <a class="dropdown-item" href="#">Chemical, Oil & Gas</a>
                            <a class="dropdown-item" href="#">Electrical Equipment</a>
                            <a class="dropdown-item" href="#">Education, Career, Culture</a>
                            <a class="dropdown-item" href="#">Electronic & Automobile</a>
                            <a class="dropdown-item" href="#">Food, Fashion & Greetings</a>
                            <a class="dropdown-item" href="#">Furniture & Decoration</a>
                            <!-- <a class="dropdown-item" href="#">Garments & Textiles</a>
                                <a class="dropdown-item" href="#">Healthcare & Beauty</a>
                                <a class="dropdown-item" href="#">Household & Handicrafts</a>
                                <a class="dropdown-item" href="#">Machinery & Equipment</a>
                                <a class="dropdown-item" href="#">Mill, Industry, Plastic Rubber</a>
                                <a class="dropdown-item" href="#">News, Media, Community</a>
                                <a class="dropdown-item" href="#">Real Estate & Construction</a>
                                <a class="dropdown-item" href="#">Telecom, Computer Internet</a>
                                <a class="dropdown-item" href="#">Tour, Travel & Transportation</a> -->


                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Companies
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Apple</a>
                            <a class="dropdown-item" href="#">Asus</a>
                            <a class="dropdown-item" href="#">Bkash</a>
                            <a class="dropdown-item" href="#">Berger</a>
                            <a class="dropdown-item" href="#">Capstone</a>
                            <a class="dropdown-item" href="#">Dell</a>
                            <a class="dropdown-item" href="#">Moontoon</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/clients')}}">Our Clients</a>
                    </li>
                </ul>



            </div>
        </nav>
    </div>
    <div class="contant">
        <div class="row">

            @foreach($package as $item)
            <div class="col-lg-4 col-sm-6" style="margin-top:36px;">
                <ul class="price">
                    <li class="header">{{$item->package_name}}</li>
                    <li class="grey">{{$item->Package_value}}</li>
                    <li>{{$item->image_ad_count}}</li>
                    <li>{{$item->video_ad_count}}</li>
                    <li class="button1">Sign Up</a></li>
                </ul>
            </div>

            @endforeach



            <!-- </div> -->
        </div>

    </div>
    <div class="row">

    </div>
    <div class="footer" style="width:100%; margin-top:20px; ">
        <div class="row" style="width:100.6%; height:auto; background-color:#282560;;">
            <div class="col-lg-4 col-sm-2">
                <center>
                    <h3><b>About Us</b></h3>
                </center>
                <p style=" padding-left:15px; text-align:justify;">Business Profile is a project of IITAB (International IT Association of Bangladesh) that is working to bring all the legal business out there in the front line.
                    Our main goal is to introduce both the Business and the Business owner to each and every corner of Bangladesh as well as the whole world.
                    From remote area businesses to urban giant businesses, our journey aims to centralize them in a single place.
                    Besides, we have created a novel platform for the encouragement, inspiration and business expansion of new entrepreneurs.
                    Our motto is to reduce unemployment as well as to help the Government making a digital Bangladesh.
                    Our vision is to turn every business into a virtual office or back office within the next few years in the easiest way.</p>
            </div>
            <div class="col-lg-4 col-sm-2">
                <center>
                    <h3><b>Contact Us</b></h3>
                </center>
                <p>2/6 Alba Tower, Pallabi, Mirpur, Dhaka-1216 </p>
                <p>Customer Care Number: 01896283281</p>
                <p>Customer Support: 01896283282; 01896283280</p>
                <p>Email: info.bprofile@gmail.com</p>
            </div>
            <div class="col-lg-4 col-sm-2" style="margin-top:20px;">
                <center>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100094334893665%26mibextid%3DZbWKwL&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </center>
            </div>
        </div>


    </div>

</body>

</html>