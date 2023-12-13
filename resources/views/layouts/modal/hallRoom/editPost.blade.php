<div>
    <input type="checkbox" id="my_modal_6{{$post->id}}" class="modal-toggle" />
    <div class="modal" role="dialog">
        <div class="modal-box">
            <div>
                <h3 class="font-bold text-lg text-center">Edit Post {{$post->id}}</h3>
                @foreach($users as $user)
                @if($user->id === $post->user_id)
                <div class="flex items-center mr-5">
                    <div class="mr-5">
                        <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                            <img class="w-[40px] h-[40px] shrink-0 inline-block rounded-[.95rem]" src="{{$user->owner_image}}" alt="avatar image">
                        </div>
                    </div>
                    <div class="mr-2 ">
                        <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{$user->owner_name}}</a>
                        <span class="text-stone-400 dark:text-stone-500 font-medium block text-[0.85rem]">Posted on {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM, Do YYYY h:mm A') }}
                            , {{$post->district}} @if($post->area), {{$post->area}} @endif
                        </span>
                    </div>
                </div>
                @endif

                @endforeach
            </div>



            <form action="{{ url('updateHallRoomPost', $post->id) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div>
                    <textarea id="post" name="post" rows="4" cols="50" class="mt-1 p-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $post->post }}</textarea>
                    <div id="editPostImage" onclick="toggleVisibility('editPostImage', 'editPostImage1')">
                        <img class="w-[50%] mx-auto" src="{{$post->image}}" alt="Selected Image" />
                    </div>
                    <div>
                        <div id="editPostImage1" class="flex items-center justify-center w-full hidden">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="editDropzoneFile" type="file" name="image" class="hidden" onchange="previewImage(event)"  />
                            </label>
                        </div>
                        <img id="editSelectedImage" class="hidden" src="#" alt="Selected Image" />
                    </div>

                    <div class="my-5">
                        <div class="mb-4">
                            <select  name="division" id="editDivision" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                <option selected disabled>Division</option>
                                @foreach($division as $div)
                                <option value="{{ $div->division }}">{{ $div->division }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <select  name="district" id="editDistrict" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                <option selected disabled>District</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <select name="area" id="editArea" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                <option selected disabled>Local Area</option>
                            </select>
                        </div>
                    </div>


                </div>
                <div class="mt-4">
                    <button type="submit" class="update-btn">Update</button>
                </div>
            </form>
            <div class="modal-action">
                <label for="my_modal_6{{$post->id}}" class="btn">Close!</label>
            </div>
        </div>
    </div>
</div>



<script>
    function toggleVisibility(hideId, showId) {
        const hideElement = document.getElementById(hideId);
        const showElement = document.getElementById(showId);

        console.log(hideElement, showElement)

        if (hideElement && showElement) {
            hideElement.style.display = 'none';
            showElement.style.display = 'block';
        }
    }

    function previewImage(event) {
        const selectedImage = document.getElementById('editSelectedImage');
        const dropzoneFile = document.getElementById('editDropzoneFile');
        const hideElement = document.getElementById('editPostImage1');

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



    document.getElementById('editDivision').addEventListener('change', function() {
        var selectedDivision = this.value;
        var districtSelect = document.getElementById('editDistrict');
        var areaSelect = document.getElementById('editArea');
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

    document.getElementById('editDistrict').addEventListener('change', function() {
        var selectedDistrict = this.value;
        var areaSelect = document.getElementById('editArea');
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