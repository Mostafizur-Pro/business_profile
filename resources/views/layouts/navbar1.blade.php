<style>
    .dropdown-item {
        z-index: 1000; /* Increase the z-index value as needed to ensure it's above other elements */
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
        <div class="login-section">
            <form action="{{url('/userLogin')}}" method="get" autocomplete="off">
                <button class="button login__submit">
                    <span class="button__text">Log In or Sign Up</span>
                </button>
            </form>
        </div>
    </div>

   
</div>