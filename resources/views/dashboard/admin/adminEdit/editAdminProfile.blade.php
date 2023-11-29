@extends('dashboard.admin.adminApp')
@section('title', 'Admin - Dashboard')
@section('admin/dashboard')

@include('components.logger.logger')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Edit Profile</h1>
            <div class="space-x-2">
            <a href="javascript:history.back()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</a>

            </div>
        </div>
        <hr class="my-5" />

        <form action="{{ route('updateAdminProfile', $editAdmin->id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex justify-between">
                <div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>
                        <!-- <p class="text-gray-800">{{ $editAdmin->id }}</p> -->
                        
                        <p class="text-gray-800">@if($adminData->role == 'superAdmin') {{ $editAdmin->id }} @else  {{ $adminData->id }} @endif</p>
                    </div>
                    <div class="mb-4">
                        <label for="admin_name" class="block text-gray-700 font-bold mb-2">Name:</label>
                        
                        <input type="text" id="admin_name" name="admin_name" value="@if($adminData->role == 'superAdmin') {{ $editAdmin->admin_name }} @else  {{ $adminData->admin_name }} @endif" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                    @if($adminData->role === 'superAdmin')
                    <div class="mb-4">
                        <label for="admin_email" class="block text-gray-700 font-bold mb-2">Email:</label>
                        <input type="email" id="admin_email" name="admin_email" value="@if($adminData->role == 'superAdmin') {{ $editAdmin->admin_email }} @else  {{ $adminData->admin_email }} @endif"  class="w-full border rounded py-2 px-3 text-gray-800" >
                    </div>
                    @else
                    <div class="mb-4">
                        <label for="admin_email" class="block text-gray-700 font-bold mb-2">Email:</label>
                        <input type="email" id="admin_email" name="admin_email" value="@if($adminData->role == 'superAdmin') {{ $editAdmin->admin_email }} @else  {{ $adminData->admin_email }} @endif"   class="w-full rounded py-2 px-3 text-gray-800 hidden" >
                        <input type="email" id="email" name="email" value="@if($adminData->role == 'superAdmin') {{ $editAdmin->admin_email }} @else  {{ $adminData->admin_email }} @endif"  class="w-full rounded py-2 px-3 text-gray-800" disabled>
                    </div>
                    @endif
                   
                 
                    <div class="mb-4">
                        <label for="number" class="block text-gray-700 font-bold mb-2">Number:</label>
                        <input type="text" id="number" name="number" value="@if($adminData->role == 'superAdmin') {{ $editAdmin->number }} @else  {{ $adminData->number }} @endif"  class="w-full border rounded py-2 px-3 text-gray-800" >
                    </div>
                 
                </div>

                <div class="mb-4">
                <label for="admin_image" class="block text-gray-700 font-bold mb-2">Profile Image:</label>
                <img class="w-32 mb-5 mx-auto" src="{{ asset($adminData->role == 'superAdmin' ? $editAdmin->admin_image : $adminData->admin_image) }}" alt="image" />

                    <input type="file" name="admin_image" id="admin_image">
                    <p class="text-gray-600 text-sm">Upload a new profile image (optional)</p>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save Changes</button>
            </div>
        </form>
    </div>
</div>



@endsection