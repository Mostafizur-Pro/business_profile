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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body >

@include('layouts/navbar1')


    <!-- <div class="client_container" style="width:95%; min-height:500px; background-color:red; margin:auto;"> -->
    <section class="wrapper">
        <div class="container-fostrap">

            <div class="content">
                <div class="container_card">
                    <div class="row">






                        <!-- <li>{{ $data }}</li> -->
                        @foreach ($data as $item)
                        <div class="col-xs-12 col-sm-3">
                            <div class="card mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                                <!-- Trigger button with a unique id -->
                                <a class="img-card" href="#">
                                    <img src="/images/unused profile picture.png" alt="Profile Picture" style="width:100%; height:300px;">
                                </a>
                                <div class="m-2">
                                    <h5 class="fs-2 fw-bold"> {{$item->organization_name}}</h5>
                                    <h5 class="fs-4 text-secondary">Owner: {{$item->owner_name}}</h5>
                                    <p class="">Type: {{$item->business_type}}</p>
                                    <p class="text-start"><small class="text-body-secondary">Contact: {{$item->contact_number}}</small></p>
                                    <p class="text-start"><small class="text-body-secondary">Address: {{$item->address}}</small></p>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- </div> -->








    <div class="footer" style="width:100%; margin-top:20px;">
        <div class="row" style="width:100.6%; height:auto; background-color:#282560;;">
            <div class="col-lg-4 col-sm-2">
                <center>
                    <h3><b>About Us</b></h3>
                </center>
                <p style=" padding-left:15px; text-align:justify;">Business Profile is a project of IITAB (International IT Association of Bangladesh) that is working to bring all the legal business out there in the front line.
                    Our main goal is to introduce both the Business and the Business owner to each and every corner of Bangladesh as well as the whole world.
                    From remote area businesses to urban giant businesses, our journey aims to centralize them in a single place.
                </p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>