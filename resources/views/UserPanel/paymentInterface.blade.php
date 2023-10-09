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
        <link rel="stylesheet" href="/asset/payment.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <!-- Data Table CSS -->
        <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    </head>
    <body>
        <div class="main-container" style="min-height:600px;">
            <div class="header-part">
                    <div class="header-option">
                        <div class="logo-back">
                        <a href="{{url('/')}}"><img class="company-logo" src="/images/business profile.png" alt="Business Profile"></a>
                        </div>   
                    </div>
            </div>
            <div class="dashboard-content" style="width:100%; min-height:400px;">
                <div id="wrapper" style="position: relative; min-height:100px;">
                        <div class="overlay">
                            <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation" style="margin-top:80px;">
                                <ul class="nav sidebar-nav">
                                <li><a href="{{url('/admin_dashboard')}}">Dashboard</a></li>
                                <li><a href="#">User List</a></li>
                                <li><a href="{{url('/employee_list')}}">Employee List</a></li>
                                <li><a href="{{url('/logout')}}">Log Out</a></li>
                                </ul>
                            </nav>

                        </div>
                        <div id="page-content-wrapper" >
                            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas" style="margin-top:80px; margin-left:35px;">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button>
                            
                        </div>
                        <div class="container-fluid" style="min-height:500px;">
                            <div class="row justify-content-center" >
                                <div class="col-12 col-lg-11" >
                                    <div class="card card0 rounded-0" >
                                        <div class="row" style="width: 90%; margin:auto;">
                                            <div class="col-md-5 d-md-block d-none p-0 box">
                                                <div class="card rounded-0 border-0 card1" id="bill" style ="min-height:700px;">
                                                    <h3 id="heading1">Package</h3>
                                                    <div class="row">
                                                        <div class="col-lg-7 col-8 mt-4  pl-4">
                                                            <h2 class="bill-head">Package Name</h2>
                                                            <small class="bill-date">2017 Feb 10 at 10:30 PM</small>
                                                            <p>Ad Content</p>
                                                            <p>Video Content</p>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                 
                                                    <div class="row">
                                                        <div class="col-md-12 red-bg">
                                                            <p class="bill-date" id="total-label">Total Price</p>
                                                            <h2 class="bill-head" id="total">$ 523.65 (Amount)</h2>
                                                            <small class="pay" id="total-label">Price includes all taxes</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-7 col-sm-12 p-0 box" >
                                                <div class="card rounded-0 border-0 card2" id="paypage">
                                                    <div class="form-card">
                                                        <h2 id="heading2" class="text-danger">Payment Method</h2>
                                                        <div class="radio-group">
                                                            <div class='radio' data-value="bkash"><img src="/images/bkash-logo.png" width="150px" height="60px"></div>
                                                            <div class='radio' data-value="nagad"><img src="/images/Nagad-Logo.png" width="150px" height="60px"></div>
                                                            <br>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-8 col-md-6">
                                                            <label class="pay">Sender Name</label>
                                                        <input type="text" name="holdername" placeholder="Enter Your Name">
                                                                <label class="pay">Phone Number</label>
                                                                <input type="text" name="cardno" id="cr_no" placeholder="01XXX-XXXXXX" minlength="11" maxlength="11">
                                                            </div>
                                                            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="submit" value="MAKE A PAYMENT &nbsp; &#xf178;" class="btn btn-info placeicon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
               



            </div>
            <div class="footer" style="width:100%; margin-top:20px;">
                <div class="row" style="width:100.6%; height:auto; background-color:#282560;;">
                                <div class="col-lg-4 col-sm-2" ><center><h3><b>About Us</b></h3></center>
                                    <p style=" padding-left:15px; text-align:justify;" >Business Profile is a project of IITAB (International IT Association of Bangladesh) that is working to bring all the legal business out there in the front line.
                                        Our main goal is to introduce both the Business and the Business owner to each and every corner of Bangladesh as well as the whole world.
                                        From remote area businesses to urban giant businesses, our journey aims to centralize them in a single place.
                                    </p>
                                </div>
                                <div class="col-lg-4 col-sm-2" ><center><h3><b>Contact Us</b></h3></center>
                                    <p>2/6 Alba Tower, Pallabi, Mirpur, Dhaka-1216 </p>
                                    <p>Customer Care Number: 01896283281</p>
                                    <p>Customer Support: 01896283282; 01896283280</p>
                                    <p>Email:  info.bprofile@gmail.com</p>
                                </div>
                                <div class="col-lg-4 col-sm-2" style="margin-top:20px;">
                                    <center>
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100094334893665%26mibextid%3DZbWKwL&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>                               
                                    </center>
                                </div>
                    </div>
            </div>

        </div>

    





        






        <script>
            $(document).ready(function () {
            var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

            trigger.click(function () {
            hamburger_cross();      
            });

            function hamburger_cross() {

                if (isClosed == true) {          
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                } else {   
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }
            
            $('[data-toggle="offcanvas"]').click(function () {
                    $('#wrapper').toggleClass('toggled');
            });  
            });
            // Radio button
            $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });


        </script>
    </body>

    
</html>