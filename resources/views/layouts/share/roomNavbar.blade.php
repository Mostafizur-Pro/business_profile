<div class="fixed top-0 z-50 w-full  -translate-x-1/2 bg-[#282560] border-t border-gray-200 left-1/2 dark:bg-gray-700 dark:border-gray-600">

    <div class="grid h-full max-w-lg grid-cols-6 mx-auto">


        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center p-4 group">
            <a href="{{url('/')}}">
                <img class="w-5" src="/assets/room/logo.png" alt="">
            </a>
        </button>
        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="/room">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
            </a>
            <span class="sr-only">Home</span>
        </button>

        <button data-tooltip-target="tooltip-bookmark" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="/">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z" />
                </svg>
                <span class="sr-only">Bookmark</span>
            </a>
        </button>
        <button onclick="my_modal_3.showModal()" data-tooltip-target="tooltip-post" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">

            <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
            </svg>
            <span class="sr-only">New post</span>

        </button>
        <button data-tooltip-target="tooltip-search" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </a>
            <span class="sr-only">Search</span>
        </button>
        <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                </svg>
            </a>
            <span class="sr-only">Settings</span>
        </button>

        <!-- Modal toggle -->
        <!-- You can open the modal using ID.showModal() method -->
        <!-- <button class="btn" onclick="my_modal_3.showModal()">open modal</button> -->
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
                        <textarea id="post" name="post" rows="4" cols="50" class="mt-1 p-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="What's on your mind"></textarea>
                        <div id="postImage" class="flex justify-between border border-2 py-3 rounded-lg px-3 " onclick="toggleVisibility('postImage', 'postImage1')">
                            <p class="text-lg font-semibold">Add Photos</p>
                            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/Ivw7nhRtXyo.png?_nc_eui2=AeF_XhTxvKhzjhuQM1YfIBFqPL4YoeGsw5I8vhih4azDkr0T0kiKdCOyzBnABJRGxPPExNxAE5qG8tUscWhxrYDJ" alt="">
                        </div>
                        <div class="my-5">
                            <div class="mb-4">
                                <select name="division" id="division" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                    <option selected disabled>Division</option>
                                    @foreach($division as $div)
                                    <option value="{{ $div->division }}">{{ $div->division }}</option>
                                    @endforeach
                                </select>

                                <!-- <span class="text-red-400">@error('emp_role') {{ $message }} @enderror</span> -->
                            </div>
                            <div class="mb-4">
                                <select name="district" id="district" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
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
                                <input id="dropzone-file" type="file" name="image" class="hidden" onchange="previewImage(event)" />
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
        <!-- Main modal -->
    </div>
</div>


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

    function toggleVisibility(hideId, showId) {
        const hideElement = document.getElementById(hideId);
        const showElement = document.getElementById(showId);

        if (hideElement && showElement) {
            hideElement.style.display = 'none';
            showElement.style.display = 'block';
        }
    }

    function previewImage(event) {
        const selectedImage = document.getElementById('selected-image');
        const dropzoneFile = document.getElementById('dropzone-file');
        const hideElement = document.getElementById('postImage1');

        if (event.target.files && event.target.files[0]) {
            hideElement.style.display = 'none';
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage.src = e.target.result;
                selectedImage.classList.remove('hidden');
                dropzoneFile.classList.add('hidden');
            };

            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>
