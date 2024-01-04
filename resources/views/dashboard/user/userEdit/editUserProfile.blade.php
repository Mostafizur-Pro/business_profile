@extends('dashboard.user.userApp')
@section('title', 'Admin - Dashboard')
@section('userDashboard')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Edit User Information</h1>
            <div class="space-x-2">
                <a href="javascript:history.back()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
            </div>
        </div>
        <hr class="my-5" />

        <form action="{{ route('updateUserInfoProfile', $userData->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex justify-between">
                <div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>
                        <p class="text-gray-800">{{$userData->id}}</p>
                    </div>
                    <div class="mb-4">
                        <label for="owner_name" class="block text-gray-700 font-bold mb-2">Owner Name:</label>
                        <input type="text" id="owner_name" name="owner_name" value="{{$userData->owner_name}}" class="w-full max-w-xs border rounded py-2 px-3 text-gray-800">
                        <!-- <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" /> -->
                    </div>
                    <div class="mb-4">
                        <label for="organization_name" class="block text-gray-700 font-bold mb-2">Organization Name:</label>
                        <input type="text" id="organization_name" name="organization_name" value="{{$userData->organization_name}}" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                    <div class="mb-4">
                        <label for="owner_number" class="block text-gray-700 font-bold mb-2">Number:</label>
                        <input type="text" id="owner_number" name="owner_number" value="{{$userData->owner_number}}" class="w-full border rounded py-2 px-3 text-gray-800" maxlength="11">
                        <span class="text-red-400">@error('owner_number') {{ $message }} @enderror</span>
                    </div>

                    <div class="mb-4">
                        <label for="owner_email" class="block text-gray-700 font-bold mb-2">Email:</label>
                        <input type="text" id="owner_email" name="owner_email" value="{{$userData->owner_email}}" class="w-full border rounded py-2 px-3 text-gray-800" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="division" class="block text-gray-700 font-bold mb-2">Address:</label>
                        <!-- <input type="text" id="division" name="division" value="{{$userData->division}}" class="w-full border rounded py-2 px-3 text-gray-800"> -->
                        <div class="my-5">
                            <div class="mb-4">
                                <p class="text-italic">Location</p>
                                <select name="division" id="editUserDivision" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                    <option class="text-red-400" value="{{ $userData->division }}">@if($userData->area) {{$userData->area}}, @endif {{$userData->district}}, {{$userData->division}}.</option>
                                    @foreach($divisions as $div)
                                    <option value="{{ $div->division }}">{{ $div->division }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <select name="district" id="editUserDistrict" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                    
                                    <option class="text-green-400" value="{{ $userData->district }}">{{$userData->district}}</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <select name="area" id="editUserArea" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                                    @if($userData->area)

                                    <option class="text-green-400" value="{{ $userData->area }}">{{$userData->area}}</option>
                                    @else
                                    <option selected disabled>Local Area</option>
                                    @endif
                                </select>
                            </div>
                            <div class="md:mb-4">
                                <input type="text" name="road" id="editUserRoad" placeholder="Road/Holding/Ward" class="hidden w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">


                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="business_type" class="block text-gray-700 font-bold mb-2">Business Type:</label>
                        <input type="text" id="business_type" name="business_type" value="{{$userData->business_type}}" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                </div>
                <div>
                    <label for="profile_image" class="block text-gray-700 font-bold mb-2">Profile Image:</label>
                    <img class="w-32 mb-5 mx-auto" src="{{ asset($userData->owner_image)}}" alt="image" />

                    <input type="file" name="owner_image" id="owner_image">
                    <p class="text-gray-600 text-sm">Upload a new profile image (optional)</p>
                </div>
            </div>


            <div class="mt-4">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save Changes</button>
            </div>
        </form>
    </div>
</div>


<script>
    document.getElementById('editUserDivision').addEventListener('change', function() {
        var selectedDivision = this.value;
        var districtSelect = document.getElementById('editUserDistrict');
        var areaSelect = document.getElementById('editUserArea');
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

    document.getElementById('editUserDistrict').addEventListener('change', function() {
        var selectedDistrict = this.value;
        var areaSelect = document.getElementById('editUserArea');

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
    document.getElementById('editUserArea').addEventListener('change', function() {
        var selectedArea = this.value;

        var roadSelect = document.getElementById('editUserRoad');

        if (selectedArea) {
            roadSelect.style.display = 'block';
        }

    });
</script>



@endsection