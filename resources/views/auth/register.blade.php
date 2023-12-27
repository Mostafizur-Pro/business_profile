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
                            <input type="text" name="data[0][facebook]" placeholder="" value="facebook.com" class="hidden ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 448 512" class="text-blue-600 fill-current"><!-- Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc. -->
                                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                            </svg>

                            <input type="text" name="data[0][link]" placeholder="Enter your facebook id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="flex gap-3 my-2">
                            <input type="text" name="data[1][twitter]" placeholder="" value="twitter.com" class="hidden ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512" class="text-blue-400 fill-current">
                                <path d="M512 97.248c-18.84 8.344-39.082 13.98-60.276 16.528 21.624-12.972 38.168-33.54 45.912-58.116-20.196 12.036-42.588 20.76-66.444 25.5C412.22 58.62 385.644 48 356.916 48c-58.332 0-105.564 47.268-105.564 105.564 0 8.28.936 16.248 2.748 23.916C190.688 166.172 101.22 124.304 41.22 50.22c-8.976 15.348-14.136 33.36-14.136 52.536 0 36.444 18.54 68.556 46.86 87.564-17.22-.564-33.372-5.28-47.628-13.176v1.236c0 50.916 36.33 93.372 84.444 103.08-8.784 2.4-18.096 3.72-27.732 3.72-6.768 0-13.392-.66-19.836-1.908 13.412 41.7 52.312 72.096 98.532 72.948-36 28.092-81.252 44.952-130.536 44.952-8.616 0-17.052-.48-25.428-1.428 46.548 29.808 101.592 47.244 161.148 47.244 193.38 0 298.848-160.08 298.848-298.848 0-4.548-.108-9.084-.312-13.62 20.52-14.76 38.292-33.24 52.476-54.336z" />
                            </svg>

                            <input type="text" name="data[1][link]" placeholder="Enter your twitter id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="flex gap-3 my-2">
                            <input type="text" name="data[2][instagram]" placeholder="" value="instagram.com" class="hidden ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="50px" width="32" viewBox="0 0 448 512" class="text-pink-500 fill-current">
                                <rect width="448" height="512" rx="15%" fill="none" />
                                <path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2z" />
                            </svg>


                            <input type="text" name="data[2][link]" placeholder="Enter your Instagram id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        </div>
                        <div class="flex gap-3 my-2">
                            <input type="text" name="data[3][linkedin]" placeholder="" value="linkedin.com" class="hidden ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="30" viewBox="0 0 448 512" class="text-blue-600 fill-current">
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg>


                            <input type="text" name="data[3][link]" placeholder="Enter your linkedin id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
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