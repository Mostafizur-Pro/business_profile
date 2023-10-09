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
        <div class="dashboard-content" style="width:100%;">
            <div id="wrapper" style="position: relative; min-height:100px;">
                <div class="overlay">
                    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation" style="margin-top:80px;">
                        <ul class="nav sidebar-nav">
                            <li><a href="{{url('/admin_dashboard')}}">Dashboard</a></li>
                            <li><a href="{{url('/pending_list')}}">Pending List</a></li>
                            <li><a href="{{url('/packageList')}}">Package List</a></li>
                            <li><a href="{{url('/employee_list')}}">Employee List</a></li>
                            <li><a href="{{url('/logout')}}">Log Out</a></li>
                        </ul>
                    </nav>

                </div>
                <div id="page-content-wrapper">
                    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas" style="margin-top:80px; margin-left:35px;">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>

                </div>

            </div>
            
            <main class="cd__main">
                <table id="example" class="table table-striped" style="width:80%; margin-left:200px;">
                    <thead>
                        <tr>
                            <th>
                                <center>Organization Name</center>
                            </th>
                            <th>
                                <center>Owner Name</center>
                            </th>
                            <th>
                                <center>Contact</center>
                            </th>
                            <th>
                                <center>Business Type</center>
                            </th>
                            <th>
                                <center>Address</center>
                            </th>
                            <th>
                                <center>Email</center>
                            </th>
                            <th>
                                <center>Employee ID</center>
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>
                                <p>{{$item->organization_name}}</p>
                            </td>
                            <td>
                                <p>{{$item->owner_name}}</p>
                            </td>
                            <td>
                                <p>{{$item->contact_number}}</p>
                            </td>
                            <td>
                                <p>{{$item->business_type}}</p>
                            </td>
                            <td>
                                <p>{{$item->address}}</p>
                            </td>
                            <td>
                                <p>{{$item->email}}</p>
                            </td>
                            <td>
                                <p>{{$item->employee_id}}</p>
                            </td>
                            <td> <a href="{{ url('/edit/'.$item->id) }}" class="btn btn-success">Edit</a>
                            </td>

                            <td> <a href="{{ url('/delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>


            <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
            <!-- Data Table JS -->
            <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
            <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
            <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
            <!-- Script JS -->
            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        //disable sorting on last column
                        "columnDefs": [{
                            "orderable": false,
                            "targets": 5
                        }],
                        language: {
                            //customize pagination prev and next buttons: use arrows instead of words
                            'paginate': {
                                'previous': '<span class="fa fa-chevron-left"></span>',
                                'next': '<span class="fa fa-chevron-right"></span>'
                            },
                            //customize number of elements to be displayed
                            "lengthMenu": 'Display <select class="form-control input-sm">' +
                                '<option value="10">10</option>' +
                                '<option value="20">20</option>' +
                                '<option value="30">30</option>' +
                                '<option value="40">40</option>' +
                                '<option value="50">50</option>' +
                                '<option value="-1">All</option>' +
                                '</select> results'
                        }
                    })
                });
            </script>


        </div>
        <li><a href="{{url('/logout')}}">Log Out</a></li>
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

        

    </div>














    <script>
        $(document).ready(function() {
            var trigger = $('.hamburger'),
                overlay = $('.overlay'),
                isClosed = false;

            trigger.click(function() {
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

            $('[data-toggle="offcanvas"]').click(function() {
                $('#wrapper').toggleClass('toggled');
            });
        });
    </script>
</body>


</html>