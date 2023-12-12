<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-center text-xl">Create Post</h3>

        <div>
            @if($adminData || $empData || $userData)

            @if($adminData)
            <div class="flex items-center justify-between px-8 py-5">
                <div class="flex items-center mr-5">

                    <div class="mr-5">
                        <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                            <img class="w-10 shrink-0 inline-block rounded-[.95rem]" src="{{ $adminData->admin_image }}" alt="avatar image">
                        </div>
                    </div>
                    <div class="mr-2 ">
                        <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $adminData->admin_name }}</a>
                        <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $adminData->role }}</span>
                    </div>
                </div>

            </div>
            @elseif($empData)
            <div class="flex items-center justify-between px-8 py-5">
                <div class="flex items-center mr-5">

                    <div class="mr-5">
                        <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                            <img class="w-10 shrink-0 inline-block rounded-[.95rem]" src="{{ $empData->emp_image }}" alt="avatar image">
                        </div>
                    </div>
                    <div class="mr-2 ">
                        <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $empData->emp_name }}</a>
                        <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $empData->emp_role }}</span>
                    </div>
                </div>

            </div>
            @elseif($userData)
            <div class="flex items-center justify-between px-8 py-5">
                <div class="flex items-center mr-5">

                    <div class="mr-5">
                        <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                            <img class="w-10 shrink-0 inline-block rounded-[.95rem]" src="{{ $userData->owner_image }}" alt="avatar image">
                        </div>
                    </div>
                    <div class="mr-2 ">
                        <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $userData->owner_name }}</a>
                        <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $userData->owner_role }}</span>
                    </div>
                </div>

            </div>
            @endif


            @else

            @endif
        </div>



        <form action="{{ url('hallRoomPost') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div>
                <textarea id="post" name="post" rows="4" cols="50" class="mt-1 p-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="What's on your mind" required></textarea>
                <div id="postImage" class="flex justify-between border border-2 py-3 rounded-lg px-3 " onclick="toggleVisibility('postImage', 'postImage1')">
                    <p class="text-lg font-semibold">Add Photos</p>
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/Ivw7nhRtXyo.png?_nc_eui2=AeF_XhTxvKhzjhuQM1YfIBFqPL4YoeGsw5I8vhih4azDkr0T0kiKdCOyzBnABJRGxPPExNxAE5qG8tUscWhxrYDJ" alt="">
                </div>
                <div class="my-5">
                    <div class="mb-4">
                        <select required name="division" id="division" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option selected disabled>Division</option>
                            @foreach($division as $div)
                            <option value="{{ $div->division }}">{{ $div->division }}</option>
                            @endforeach
                        </select>

                        <!-- <span class="text-red-400">@error('emp_role') {{ $message }} @enderror</span> -->
                    </div>
                    <div class="mb-4">
                        <select required name="district" id="district" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option selected disabled>District</option>
                            <!-- @foreach($division as $div)
                                    @if($div->division === 'Dhaka Division')
                                    @foreach(json_decode($div->districts) as $district)
                                    <option value="{{ $district }}">{{ $district }}</option>
                                    @endforeach
                                    @endif
                                    @endforeach -->
                        </select>



                        <!-- <span class="text-red-400">@error('emp_role') {{ $message }} @enderror</span> -->
                    </div>
                    <div class="mb-4">
                        <select name="area" id="area" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option selected disabled>Local Area</option>
                            <!-- @foreach($areas as $area)
                                    @if($area->districts === 'Dhaka')
                                    @foreach(json_decode($area->area) as $location)
                                    <option value="{{ $district }}">{{ $location }}</option>
                                    @endforeach
                                    @endif
                                    @endforeach -->
                        </select>

                        <!-- <span class="text-red-400">@error('emp_role') {{ $message }} @enderror</span> -->
                    </div>
                </div>
                <div id="postImage1" class="flex items-center justify-center w-full hidden">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" name="image" class="hidden" onchange="previewImage(event)" required />
                    </label>
                </div>
                <img id="selected-image" class="hidden" src="#" alt="Selected Image" />
            </div>
            <div class="mt-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-700 transition ease-in-out duration-150">
                    Post
                </button>
            </div>
        </form>

    </div>
</dialog>


<script>
    document.getElementById('division').addEventListener('change', function() {
        var selectedDivision = this.value;
        var districtSelect = document.getElementById('district');
        var areaSelect = document.getElementById('area');
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

        var divisions = @json($division); // Assuming $division contains division data
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

    document.getElementById('district').addEventListener('change', function() {
        var selectedDistrict = this.value;
        var areaSelect = document.getElementById('area');
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
</script>