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

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Welcome <b>{{$userinfo->user_id}}</b></h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/user_dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/user_profile">Profile</a>
                </li>

                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

        <div class="container emp-profile">
            <form method="get" action="/edit_profile">
                <div class="row">
                     
                    <div class="col-md-6">
                        <div class="profile-head">
                                    
                                    
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2" style="float:right">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-work">
                       
                        <div class="profile-img">
                            <!-- <img src="/UserProfilePicture/{{$userinfo->profile_picture}}" alt="image"> -->
                       
                    </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->user_id}}</p> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->first_name}}</p> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->last_name}}</p> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->user_email}}</p> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->phone_no}}</p> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Father's Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->father_name}}</p> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mother's name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->mother_name}}</p> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Birth (Y-M-D)</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->date_of_birth}}</p> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NID Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->nid_no}}</p> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Present Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->present_address}}</p> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Permanent Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->permanent_address}}</p> -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- <p>{{$userinfo->gender}}</p> -->
                                            </div>
                                        </div>
                           
                               
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

           
        </div>
    </div>
    </body>
</html>