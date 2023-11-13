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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        

        
    </head>
    <body style="background-color: #e7decc;">
    <div class="main-container" style="min-height:600px;">
            <div class="header-part">
                <div class="header-option">
                    <div class="logo-back">
                    <a href="{{url('/')}}"><img class="company-logo" src="/images/business profile.png" alt="Business Profile"></a>

                    </div>
                     
                </div>
                
                
                	

            </div>
            <div class="dashboard_content" style="">
            <div id="wrapper" style="position: relative;">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation" style="margin-top:80px;">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand" style="color:white;">
       {{$empinfo->emp_name}}</div></div>
       <li><a href="{{url('/empDashboard')}}">Dashboard</a></li>
       <li><a href="{{url('/user_card')}}">Profile</a></li>
       <li><a href="{{url('/AccRegistration')}}">Register</a></li>
       <li><a href="{{url('/')}}">Log Out</a></li>
       <!-- <li><a href="#team"></a></li> -->
       
       
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" >
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas" style="margin-top:80px; margin-left:35px;">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            
        </div>
        <!-- /#page-content-wrapper -->
        <div style="width:75%; min-height:600px; display: flex; margin:auto;">
        <div class="container">
            <div class="screen" >
                <div class="screen__content" style="background-color:white;">
                    <form class="registration_form" encrypt="multipart/form-data" method="post" action="{{url('/user_register_form_action')}}" onsubmit="return FormValidation(''); ">
                    {{csrf_field()  }} 
                        <div class="login__field">
                           
                            <input type="text" class="login__input" placeholder="Organization Name" name="organization_name">
                        </div>
                        <div class="login__field">
                            <input type="text" class="login__input" placeholder="Owner Name" name="owner_name">
                        </div>

                        <div class="login__field">
                            <input type="text" class="login__input" placeholder="Contact Number" name="contact_number">
                        </div>
                        <div class="login__field">
                            <input type="text" class="login__input" placeholder="Business Type" name="business_type">
                        </div>
                        <div class="login__field">
                            <input type="text" class="login__input" placeholder="Address" name="address">
                        </div>
                        <div class="login__field">
                         
                            <input type="email" class="login__input" placeholder="Email Address" name="email">
                        </div>
                        <div class="login__field">
                           
                            <select class="form-control" name="employee_id" id="ComSize">
                                            <option value="-1">Employee ID</option>
                                            <option value="IITABBP08230011">IITABBP08230011</option>
                                            <option value="IITABBP08230012">IITABBP08230012</option>
                                            <option value="IITABBP08230013">IITABBP08230013</option>
                                            <option value="IITABBP08230014">IITABBP08230014</option>
                                            <option value="IITABBP08230015">IITABBP08230015</option>
                                            <option value="IITABBP08230017">IITABBP08230017</option>
                                            <option value="IITABBP08230018">IITABBP08230018</option>
                                            <option value="IITABBP08230019">IITABBP08230019</option>
                                            <option value="IITABBP08230020">IITABBP08230020</option>
                                            <option value="IITABBP08230021">IITABBP08230021</option>
                                            <option value="IITABBP08230022">IITABBP08230022</option>
                                            <option value="IITABBP08230023">IITABBP08230023</option>
                                            <option value="IITABBP08230024">IITABBP08230024</option>
                                            <option value="IITABBP08230025">IITABBP08230025</option>
                                            <option value="IITABBP08230026">IITABBP08230026</option>
                                            <option value="IITABBP08230027">IITABBP08230027</option>
                                            <option value="IITABBP08230028">IITABBP08230028</option>
                                            <option value="IITABBP08230029">IITABBP08230029</option>
                                            <option value="IITABBP08230030">IITABBP08230030</option>
                                            <option value="IITABBP08230031">IITABBP08230031</option>
                                            <option value="IITABBP08230033">IITABBP08230033</option>
                                            <option value="IITABBP08230034">IITABBP08230034</option>
                                            <option value="IITABBP08230035">IITABBP08230035</option>
                                            <option value="IITABBP08230036">IITABBP08230036</option>
                                            <option value="IITABBP08230037">IITABBP08230037</option>
                                            <option value="IITABBP08230038">IITABBP08230038</option>


                                            
                                        </select>
                        </div>
                        <div class="login__field">
                            <input type="password" class="login__input" placeholder="Password" name="password">
                        </div>
                       
                        <button class="button login__submit" style="float:left; margin-left:30%">
                            <span class="button__text">Sign Up</span>
                        </button>				
                    </form>
                    
                    
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
                               Besides, we have created a novel platform for the encouragement, inspiration and business expansion of new entrepreneurs.
                                Our motto is to reduce unemployment as well as to help the Government making a digital Bangladesh.
                                 Our vision is to turn every business into a virtual office or back office within the next few years in the easiest way.</p>
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
    <!-- /#wrapper -->

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
    </script>

    </body>
</html>

