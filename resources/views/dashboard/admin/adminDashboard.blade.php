@extends('dashboard.admin.adminApp')
@section('title', 'Admin - Dashboard')
@section('adminDashboard')



@include('components.logger.logger')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
                      <h1 class="text-2xl font-semibold text-gray-800">Admin Profile</h1>
            <div class="flex space-x-2">
                <a href="{{ url('edit_admin_profile', $data->id) }}"   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-none">Edit</a>
             
            </div>
        </div>
        <hr class="my-5" />
        <div class="flex justify-between gap-10">
            <div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>
                    <p class="text-gray-800">{{ $data->id }}</p>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <p class="text-gray-800">{{ $data->admin_name }}</p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <p class="text-gray-800">{{ $data->admin_email }}</p>
                </div>
                <div class="mb-4">
                    <label for="number" class="block text-gray-700 font-bold mb-2">Number:</label>
                    <p class="text-gray-800">{{ $data->number }}</p>
                </div>
             
            </div>
            <div>
                <img class="w-44" src="{{ $data->admin_image }}" alt="User Photo" />
            </div>
        </div>
     
    </div>
</div>



@endsection