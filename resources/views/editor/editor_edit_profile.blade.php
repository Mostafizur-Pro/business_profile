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

        <div class="main-container">
            <div class="header-part">
                <div class="header-option">
                    <div class="logo-back">
                    <a href="{{url('/')}}"><img class="company-logo" src="/images/business profile.png" alt="Business Profile"></a>

                    </div>
                     
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
       <div class="sidebar-brand">
      </div>
    </div>
       <li><a href="{{url('/editor_dashboard')}}">Dashboard</a></li>
       <li><a href="{{url('/editor_packageList')}}">Package List</a></li>
       <li><a href="{{url('/editor_employee_list')}}">Employee List</a></li>
       <li><a href="{{url('/logout')}}">Log Out</a></li>
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






        
        
        <div class="container">
            <div class="screen" >
                <div class="screen__content" style="background-color: white;">
                    <form class="registration_form" encrypt="multipart/form-data" method="post" action="{{url('editor_update_request/'.$edit->id)}}" onsubmit="return FormValidation(''); ">
                    {{csrf_field()  }} 
                
                    <div class="login__field">
                   
                        <div class="login__field">
                            <label for="">Owner Name</label>
                            <input type="text" class="login__input"value="{{  $edit->owner_name}}"placeholder="Owner Name" name="owner_name">
                        </div>


                        <div class="login__field">
                            <label for="">Organization Name</label>
                            <input type="text" class="login__input" value="{{  $edit->organization_name}}"  placeholder="Organization Name" name="organization_name">
                        </div>


                        <div class="login__field">
                            <label for="">Email Address</label>
                            <input type="text" class="login__input"value="{{  $edit->email}}" placeholder="Email Address" name="email">
                        </div>

                       

                        <div class="login__field">
                            <label for="">Phone Number</label>
                            <input type="text" class="login__input" value="{{  $edit->contact_number}}"placeholder="Phone Number" name="contact_number">
                        </div>
                        <div class="login__field">
                            <label for="">Business Type</label>
                            <input type="text" class="login__input"value="{{  $edit->business_type}}" placeholder="Business Type" name="business_type">
                        </div>
                        <div class="login__field">
                            <label for="">Address</label>

                            <input type="text" class="login__input" value="{{  $edit->address}}"placeholder="Address" name="address">
                        </div>
                        
                        
                    
                    <button class="button login__submit" style="float: left; margin-left:30%; margin-top:20px;">
                            <span class="button__text">Send Request</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                    </form>
                    
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
            
            
                </script>
        

    </body>
</html>