<style>
    .dropdown-item {
        z-index: 1000;
        /* Increase the z-index value as needed to ensure it's above other elements */
    }
</style>


<div class="main-container">
    <div class="header-part">
        <div class="header-option">
            <div class="logo-back">
                <a href="{{url('/')}}">
                    <img class="w-100" src="/images/business profile.png" alt="Business Profile">
                </a>
            </div>
        </div>
        <div class="login-section mr-5">
            <button class="button ">               
                <div class="dropdown">
                    <button class=" float-right mr-5 btn bg-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a href="{{url('/userLogin')}}" class="dropdown-item" type="button">User Login</a>
                        <a href="{{url('/empLogin')}}" class="dropdown-item" type="button">Employee Login</a>
                        <!-- <a href="{{url('/admin')}}" class="dropdown-item" type="button">Admin</a> -->
                    </div>
                </div>
            </button>
        </div>
    </div>


</div>