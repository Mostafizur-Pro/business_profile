@extends('dashboard.admin.adminApp')
@section('title', 'Admin - Dashboard')
@section('adminDashboard')

@include('components.logger.logger')


<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Edit User Information</h1>
            <div class="space-x-2">
                <a href="javascript:history.back()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
            </div>
        </div>
        <hr class="my-5" />

        <form action="{{ route('updateUserInfoOldProfile', $editUserInfoOld->id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex justify-between">
                <div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>

                        <p class="text-gray-800">{{$editUserInfoOld->id}}</p>
                    </div>
                    <div class="mb-4">
                        <label for="owner_name" class="block text-gray-700 font-bold mb-2">Owner Name:</label>
                        <input type="text" id="owner_name" name="owner_name" value="{{$editUserInfoOld->owner_name}}" class="w-full max-w-xs border rounded py-2 px-3 text-gray-800">
                        <!-- <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" /> -->
                    </div>
                    <div class="mb-4">
                        <label for="organization_name" class="block text-gray-700 font-bold mb-2">Organization Name:</label>
                        <input type="text" id="organization_name" name="organization_name" value="{{$editUserInfoOld->organization_name}}" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                    <div class="mb-4">
                        <label for="contact_number" class="block text-gray-700 font-bold mb-2">Number:</label>
                        <input type="text" id="contact_number" name="contact_number" value="{{$editUserInfoOld->contact_number}}" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                        <input type="text" id="email" name="email" value="{{$editUserInfoOld->email}}" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 font-bold mb-2">Address:</label>
                        <input type="text" id="address" name="address" value="{{$editUserInfoOld->address}}" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                    <div class="mb-4">
                        <label for="business_type" class="block text-gray-700 font-bold mb-2">Business Type:</label>
                        <input type="text" id="business_type" name="business_type" value="{{$editUserInfoOld->business_type}}" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                </div>
                <div>
                    <label for="profile_image" class="block text-gray-700 font-bold mb-2">Profile Image:</label>
                    

                    <input type="file" name="owner_image" id="owner_image">
                    <p class="text-gray-600 text-sm">Upload a new profile image (optional)</p>
                </div>
            </div>
    </div>

    <div class="mt-4">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save Changes</button>
    </div>
    </form>
</div>
</div>



@endsection