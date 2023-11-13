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
                <div class="login-section">
                <form action="{{url('/login')}}" method="get" autocomplete="off">
                        <button class="button login__submit">
					        <span class="button__text">Log In or Sign Up</span>
				        </button>
                    </form>>

                </div>
                
                	

            </div>
        </div>
        
        <div class="left-side">
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login" action="{{url('/password_form_action')}}" method="post" autocomplete="off" onsubmit="return IsPageValid();">
                    {{ csrf_field() }}
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" placeholder="Password" name="password" required>
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="text" class="login__input" placeholder="Confirm Password" name="con_password" required>
                        </div>
                        <button class="button login__submit">
                            <span class="button__text">Confirm</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>				
                    </form>

                    <!-- <form action="{{url('/registration')}}" method="get" autocomplete="off">
                    <button class="button login__submit" style="float: left; margin-left:60px; margin-top:15px;">
                            <span class="button__text">Sign Up</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                    </form> -->
                    
                    
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>        </div>
        <div class="right-side">
            <img src="/images/password change page background.png" alt="" class="login_page_image">
        </div>

    </body>
</html>