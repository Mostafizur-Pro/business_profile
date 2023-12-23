<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Register</title>

    <!-- Include your external CSS libraries if needed -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 min-h-screen">
    <header>
        <div class="header-part py-4 px-8 flex justify-between items-center">
            <div class="header-option">
                <div class="logo-back">
                    <a href="{{ url('/') }}">
                        <img class="company-logo w-44 h-auto" src="/assets/logo/logo.png" alt="Business Profile">
                    </a>
                </div>
            </div>
            <div>
                <button class="bg-[#282560]  w-full rounded px-6 pb-2 pt-2.5 text-md font-medium leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="button" data-te-ripple-init data-te-ripple-color="light">
                    <a href="/login">Login</a>
                </button>
            </div>
        </div>
    </header>

    <div class="flex flex-col md:flex-row justify-center items-center mx-auto">
        <section class="flex flex-col justify-center items-center bg-white p-8 rounded-lg shadow-md md:w-96 lg:w-2/6">
            <form class="bg-white rounded-lg" action="{{ url('registerUser') }}" method="post">
                @csrf

                <h3 class="text-3xl font-semibold mb-4">User Register</h3>

                <div class="flex md:block gap-5">
                    <div class="mb-4">
                        <input type="text" name="owner_name" required placeholder="Enter your name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                        <span class="text-red-400">@error('owner_name') {{ $message }} @enderror</span>
                    </div>

                    <div class="mb-4">
                        <input type="text" name="organization_name" required placeholder="Enter your organization name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                        <span class="text-red-400">@error('organization_name') {{ $message }} @enderror</span>
                    </div>
                </div>


                <div class=" grid grid-cols-2 gap-5 md:block">
                    <div class="md:mb-4">
                        <div class="">
                            <select name="gender" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                                <option value="" disabled selected>Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <span class="text-red-400">@error('gender') {{ $message }} @enderror</span>
                    </div>
                    <div class="md:mb-4">
                        <!-- <p class="text-italic">Location</p> -->
                        <select required name="division" id="regDivision" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option selected disabled>Division</option>
                            @foreach($divisions as $div)
                            <option value="{{ $div->division }}">{{ $div->division }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:mb-4">
                        <select required name="district" id="regDistrict" class="hidden mb-4 w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option selected disabled>District</option>
                        </select>
                    </div>
                    <div class="md:mb-4">
                        <select name="area" id="regArea" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option selected disabled>Local Area</option>
                        </select>
                    </div>
                    <div class="md:mb-4">
                        <input type="text" name="road" id="regRoad" placeholder="Road/Holding/Ward" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <!-- <select name="area" id="regRoad" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"> -->

                    </div>

                </div>


                <div class="flex md:block gap-5">
                    <div class="mb-4">
                        <input type="text" name="owner_number" required placeholder="Enter your number" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="11">
                        <span class="text-red-400">@error('owner_number') {{ $message }} @enderror</span>
                    </div>



                    <!-- <div class="mb-4">
                    <input type="text" name="owner_address" required placeholder="Enter your address" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <span class="text-red-400">@error('owner_address') {{ $message }} @enderror</span>
                </div> -->
                    <div class="mb-4">
                        <input type="text" name="business_type" required placeholder="Enter your business type" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <span class="text-red-400">@error('business_type') {{ $message }} @enderror</span>
                    </div>
                </div>



                <div class="mb-4">
                    <input type="email" name="owner_email" required placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                    <span class="text-red-400">@error('owner_email') {{ $message }} @enderror</span>
                </div>

                <div class="mb-4">
                    <input type="password" name="password" required placeholder="Enter your password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                    <span class="text-red-400">@error('password') {{ $message }} @enderror</span>
                </div>

                <!-- The button to open modal -->
                <label for="my_modal_6" class="btn mb-4 w-full border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">Add Social Media</label>

                <!-- Put this part before </body> tag -->
                <input type="checkbox" id="my_modal_6" class="modal-toggle" />
                <div class="modal" role="dialog">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Add Your Social Media</h3>
                        <div class="flex gap-3 my-2">                            
                            <input type="text" name="facebook"  placeholder="" value="facebook.com" class=" ">
                            <input type="text" name="flink"  placeholder="Enter your facebook id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="flex gap-3 my-2">                            
                            <input type="text" name="twitter"  placeholder="" value="twitter.com" class=" ">
                            <input type="text" name="tlink"  placeholder="Enter your twitter id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="flex gap-3 my-2">                            
                            <input type="text" name="instagram"  placeholder="" value="instagram.com" class=" ">
                            <input type="text" name="ilink"  placeholder="Enter your Instagram id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="flex gap-3 my-2">                            
                            <input type="text" name="linkedin"  placeholder="" value="linkedin.com" class=" ">
                            <input type="text" name="llink"  placeholder="Enter your linkedin id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="modal-action">
                            <label for="my_modal_6" class="btn">Close!</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="bg-[#282560]  w-full rounded px-6 pb-2 pt-2.5 text-md font-medium leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="button" data-te-ripple-init data-te-ripple-color="light">Submit</button>
                <p class="mt-5">Already have an account! <a class="text-[#fcae04] font-bold" href="{{url('/login')}}">Please Login</a></p>
            </form>
        </section>
        <div class="hidden lg:block">
            <img class="w-4/6" src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" alt="">
        </div>
    </div>

    <script>
        document.getElementById('regDivision').addEventListener('change', function() {
            var selectedDivision = this.value;
            var districtSelect = document.getElementById('regDistrict');
            var areaSelect = document.getElementById('regArea');
            if (selectedDivision) {
                districtSelect.style.display = 'block';
                areaSelect.style.display = 'none';
            }
            districtSelect.innerHTML = ''; // Clear previous options

            var defaultOption = document.createElement('option');
            defaultOption.value = "";
            defaultOption.text = "Select Your District";
            defaultOption.selected = true;
            defaultOption.disabled = true;
            districtSelect.appendChild(defaultOption);

            var divisions = @json($divisions); // Assuming $division contains division data
            divisions.forEach(function(division) {
                if (division.division === selectedDivision) {
                    var districts = JSON.parse(division.districts);
                    districts.forEach(function(district) {
                        var option = document.createElement('option');
                        option.value = district;
                        option.text = district;
                        districtSelect.appendChild(option);
                    });
                }
            });
        });

        document.getElementById('regDistrict').addEventListener('change', function() {
            var selectedDistrict = this.value;
            var areaSelect = document.getElementById('regArea');

            if (selectedDistrict) {
                areaSelect.style.display = 'block';

            }
            areaSelect.innerHTML = ''; // Clear previous options

            var defaultOption1 = document.createElement('option');
            defaultOption1.value = "";
            defaultOption1.text = "Select Your Area";
            defaultOption1.selected = true;
            defaultOption1.disabled = true;
            areaSelect.appendChild(defaultOption1);

            var areas = @json($areas); // Assuming $areas contains area data
            areas.forEach(function(area) {
                if (area.districts === selectedDistrict) {
                    var locations = JSON.parse(area.area);
                    locations.forEach(function(location) {
                        var option = document.createElement('option');
                        option.value = location;
                        option.text = location;
                        areaSelect.appendChild(option);
                    });
                }
            });
        });
        document.getElementById('regArea').addEventListener('change', function() {
            var selectedArea = this.value;
            var roadSelect = document.getElementById('regRoad');
            console.log('selectedArea', selectedArea, regRoad)
            if (selectedArea) {
                roadSelect.style.display = 'block';
            }

        });
    </script>
</body>

</html