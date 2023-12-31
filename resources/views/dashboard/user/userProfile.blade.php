@extends('dashboard.user.userApp')
@section('title', 'Admin - Profile')
@section('userDashboard')

@include('components.logger.logger')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">User Profile</h1>
            <div class="flex space-x-2">
                <a href="{{ url('user/edit_userInfo_profile', $userData->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-none">Edit</a>

            </div>
        </div>
        <hr class="my-5" />
        <div class="flex justify-between gap-10">
            <div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <p class="text-gray-800">{{ $userData->owner_name }}</p>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Organization Name:</label>
                    <p class="text-gray-800">{{ $userData->organization_name }}</p>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Business type:</label>
                    <p class="text-gray-800">{{ $userData->business_type }}</p>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <p class="text-gray-800">{{ $userData->owner_email }}</p>
                </div>
                <div class="mb-4">
                    <label for="number" class="block text-gray-700 font-bold mb-2">Number:</label>
                    <p class="text-gray-800">{{ $userData->owner_number }}</p>
                </div>


                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Address:</label>
                    <p class="text-gray-800">{{ $userData->division}}, {{ $userData->district}}, {{ $userData->area}}, {{ $userData->road}}</p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Designation:</label>
                    <p class="text-gray-800">{{ $userData->owner_role }}</p>
                </div>


            </div>
            <div>
                <img class="w-44" src="{{ $userData->owner_image }}" alt="User Photo" />
                <!-- <img class="w-10 rounded-full" src="{{ $userData->owner_image }}" /> -->
            </div>
        </div>

    </div>
</div>


@endsection