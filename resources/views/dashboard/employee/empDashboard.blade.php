@extends('dashboard.employee.empApp')
@section('title', 'Employee - Dashboard')
@section('empDashboard')

@include('components.logger.logger')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">EMPLOYEE PROFILE</h1>
            <div class="flex space-x-2">
                <a href="{{ url('employee/edit_empInfo_profile', $empData->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-none">Edit</a>

            </div>
        </div>
        <hr class="my-5" />
        <div class="flex justify-between gap-10">
            <div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">EmpID:</label>
                    <p class="text-gray-800">{{ $empData->emp_id }}</p>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <p class="text-gray-800">{{ $empData->emp_name }}</p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <p class="text-gray-800">{{ $empData->emp_email }}</p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Number:</label>
                    <p class="text-gray-800">{{ $empData->emp_number }}</p>
                </div>


                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Address:</label>
                    <p class="text-gray-800">{{ $empData->emp_address }}</p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Designation:</label>
                    <p class="text-gray-800">{{ $empData->emp_role }}</p>
                </div>


            </div>
            <div>
                <img class="w-44" src="{{ asset($empData->emp_image) }}" alt="User Photo" />
            </div>
        </div>
        <!-- toast -->
        <div class="toast toast-top toast-center">
            @if(session('fail'))
            <div class="alert alert-error">
                {{ session('fail') }}
            </div>
            @endif
        </div>
        <!-- Add more user profile information here -->
    </div>
</div>



@endsection