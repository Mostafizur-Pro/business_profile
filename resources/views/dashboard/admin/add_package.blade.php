@extends('dashboard.admin.adminApp')
@section('title', 'Admin - Dashboard')
@section('admin/dashboard')



@include('components.logger.logger')





<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Package Information</h1>
            <div class="space-x-2">
                <a href="javascript:history.back()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
            </div>
        </div>
        <hr class="my-5" />

        <form action="{{ route('savePack') }}" method="POST">
            @csrf

            <div class="flex justify-between">
                <div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>
                        {{-- <p class="text-gray-800">{{$editUserInfo->id}}</p> --}}
                    </div>
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                        <input type="text" id="title" name="title" value="" placeholder="Enter Package Title" class="w-full max-w-xs border rounded py-2 px-3 text-gray-800">
                        <!-- <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" /> -->
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
                        <input type="text" id="price" name="price" value="" placeholder="Enter package Price" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                        <input type="text" id="description" name="description" value="" placeholder="Enter package description" class="w-full border rounded py-2 px-3 text-gray-800">
                    </div>
                    <div class="mb-4">
                        <label for="details" class="block text-gray-700 font-bold mb-2">Details:</label>
                        <input type="text" id="details" name="details[]" value="24/7 Customer Support" placeholder="Enter Package Details 1" class="w-full border rounded py-2 px-3 text-gray-800">
                        <input type="text" id="details" name="details[]" value="Powerful User Dashboard" placeholder="Enter Package Details 2" class="w-full border rounded py-2 px-3 text-gray-800">
                        <input type="text" id="details" name="details[]" value="Plus Analytics" placeholder="Enter Package Details 3" class="w-full border rounded py-2 px-3 text-gray-800">
                        <input type="text" id="details" name="details[]" value="12 Standard Images" placeholder="Enter Package Details 4" class="w-full border rounded py-2 px-3 text-gray-800">
                        <input type="text" id="details" name="details[]" value="3 Standard Videos" placeholder="Enter Package Details 5" class="w-full border rounded py-2 px-3 text-gray-800">

                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection