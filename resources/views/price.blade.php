<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/b_icon.png">
    <title> Business Profile - About </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/asset/app.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/asset/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>

<body>

    @include('layouts/navbar1')
    @include('layouts/menubar')


    <div class="container">
        <header class="bg-primary text-white text-center py-5">
            <h1>Pricing Plans</h1>
            <p>Check Our Latest Rates</p>
        </header>
        <div class="mt-5">
            <div class="row">
                <!-- Basic Plan -->
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="my-0 font-weight-normal">Basic Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$200 <small class="text-muted">/ month</small></h1>
                            <ul class="list-unstyled">
                                <li>Basic features</li>
                            </ul>
                            <hr />
                            <div class="text-left">
                                <p>24/7 Customer Support</p>
                                <p>Powerful user Dashboard</p>
                                <p>Basic Analytics</p>
                                <p>3 Standard Image</p>
                                <p>0 Standard Video</p>
                            </div>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Select</button>
                        </div>
                    </div>
                </div>

                <!-- Bronze Plan -->
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="my-0 font-weight-normal">Bronze Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$400 <small class="text-muted">/ month</small></h1>
                            <ul class="list-unstyled">
                                <li>Bronze features</li>

                            </ul>
                            <hr />
                            <div class="text-left">
                                <p>24/7 Customer Support</p>
                                <p>Powerful user Dashboard</p>
                                <p>Limited Analytics</p>
                                <p>6 Standard Image</p>
                                <p>1 Standard Video</p>
                            </div>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Select</button>
                        </div>
                    </div>
                </div>

                <!-- Silver Plan -->
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header bg-success text-white">
                            <h4 class="my-0 font-weight-normal">Silver Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$600 <small class="text-muted">/ month</small></h1>
                            <ul class="list-unstyled">
                                <li>Silver features</li>

                            </ul>
                            <hr />
                            <div class="text-left">
                                <p>24/7 Customer Support</p>
                                <p>Powerful user Dashboard</p>
                                <p>Advanced Analytics</p>
                                <p>9 Standard Image</p>
                                <p>2 Standard Video</p>
                            </div>
                            <button type="button" class="btn btn-lg btn-block btn-success">Select</button>
                        </div>
                    </div>
                </div>

                <!-- Gold Plan -->
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="my-0 font-weight-normal">Gold Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$800 <small class="text-muted">/ month</small></h1>
                            <ul class="list-unstyled">
                                <li>Gold features</li>

                            </ul>
                            <hr />
                            <div class="text-left">
                                <p>24/7 Customer Support</p>
                                <p>Powerful user Dashboard</p>
                                <p>Advanced Analytics</p>
                                <p>12 Standard Image</p>
                                <p>3 Standard Video</p>
                            </div>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Select</button>
                        </div>
                    </div>
                </div>

                <!-- Platinum Plan -->
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header bg-primary text-white">
                            <h4 class="my-0 font-weight-normal">Platinum Plan</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$1000 <small class="text-muted">/ month</small></h1>
                            <ul class="list-unstyled">
                                <li>Platinum features</li>

                            </ul>
                            <hr />
                            <div class="text-left">
                                <p>24/7 Customer Support</p>
                                <p>Powerful user Dashboard</p>
                                <p>Advanced Analytics</p>
                                <p>15 Standard Image</p>
                                <p>4 Standard Video</p>
                            </div>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Select</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>










    @include('layouts/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>