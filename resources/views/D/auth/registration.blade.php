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
                    <button class="button login__submit">
					    <span class="button__text">Log In or Sign Up</span>
				    </button>

                </div>
                
                	

            </div>
        </div>
        
        <div class="left-side">
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
                    <form action="{{url('/login')}}" method="get" autocomplete="off">
                    <button class="button login__submit" style="float: left; margin-left:30%; margin-top:15px;">
                            <span class="button__text">Log In</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                    </form>
                    
                </div>
               	
            </div>
        </div>        </div>
        <div class="right-side">
            <img src="/images/login page bg.png" alt="" class="login_page_image">
        </div>

    </body>
</html>