<div class="main-container">
    <div class="header-part">
        <div class="header-option">
            <div class="logo-back">
                <a href="{{url('/')}}"><img class="company-logo" src="/images/business profile.png" alt="Business Profile"></a>

            </div>
        </div>
        <div class="login-section">

            <form action="{{url('/userLogin')}}" method="get" autocomplete="off">
                <button class="button login__submit">
                    <span class="button__text">Log In or Sign Up</span>
                </button>
            </form>
        </div>
    </div>


    <div class="navbar_settings">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/about">About <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/package')}}">Our Services</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/clients')}}">Our Clients</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

  