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
        <link rel="stylesheet" href="/asset/update_profile.css">
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
        <div class="navbar_settings" >
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">About <span class="sr-only"></span></a>
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
                    </ul>


                    
                </div>
            </nav>
    </div>

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0" style="height:625px;margin-left:32px;">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small1 font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" value="" type="text" placeholder="Enter your first name" value="Valerie">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Employee  ID</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your Employee ID" value="EX:Emp1202502">
                            </div>
                            
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Address</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                            <div class="col-lg-12">
                                <label class="small mb-1" for="inputLocation">Email Address</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                            </div>
                        
                        </div>
                        
                        
                        <!-- Form Group (email address)-->
                       
                        <!-- Form Row-->
                        
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                            </div>
                            

                            <div class="col-md-6">
                                <label class="small mb-1" for="designation">Designation</label>
                                <input class="form-control" id="Designation" type="text" placeholder="Enter your Designation Name" value="Designation">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputJoinning-date">Joining Date</label>
                                <input class="form-control" id="inputJoinning-date" type="text" name="joinningdate" placeholder="Enter your joinning date" value="06/10/1988">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="bloodgroup">Blood Group</label> 
                                <select class="form-control"id="blood" type="input" placeholder="Select Blood Group" value="Designation"> 
                                    <option value="Blood-group">A +ve </option> 
                                    <option value="Blood-group">A -ve</option> 
                                    <option value="Blood-group">B +ve</option> 
                                    <option value="Blood-group">B -ve</option>
                                    <option value="Blood-group">O +ve</option>
                                    <option value="Blood-group">o -ve</option>   
                                </select>
                                </div>
                                
                    </div>


  

</div>

                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<
                    
               
              </div>
            </div>
          </div>
        </div>
    </div>



    </body>
</html>