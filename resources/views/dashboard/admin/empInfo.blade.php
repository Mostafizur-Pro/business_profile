@extends('dashboard.admin.adminApp')
@section('title', 'Admin - Dashboard')
@section('adminDashboard')



<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="mb-4">
            <h1 class="text-2xl font-semibold">Employee Information</h1>
        </div>
        <hr class="my-5" />

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="w-full text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="pr-3 py-3">ID </th>
                    <th scope="col" class="pr-3 py-3">Name </th>
                    <th scope="col" class="pr-3 py-3">Number </th>
                    <th scope="col" class="pr-3 py-3">Email </th>
                    <!-- <th scope="col" class="pr-3 py-3">Role </th> -->
                    <th scope="col" class="pr-3 py-3">Address </th>
                    <th scope="col" class="pr-3 py-3">Admin ID </th>
                    <th scope="col" class="pr-3 py-3">Admin Name </th>
                    <th scope="col" class="pr-3 py-3">Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($allEmpData as $empData)
                <tr class=" bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="pr-3 "> {{ $empData->emp_id }} </td>
                    <td class="pr-3 ">
                        <div class="flex items-center gap-5">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                    <img src="{{ asset($empData->emp_image) }}" alt="Avatar Tailwind CSS Component" />
                                </div>
                            </div>
                            <div>
                                <p class=" font-semibold uppercase">
                                    {{ $empData->emp_name }}
                                </p>
                                <p>

                                    {{ $empData->emp_role }}
                                </p>
                            </div>
                        </div>

                    </td>
                    <td class="pr-3 "> {{ $empData->emp_number }} </td>
                    <td class="pr-3 "> {{ $empData->emp_email }} </td>

                    <td class="pr-3 "> {{ $empData->emp_address }} </td>
                    <td class="pr-3 "> {{ $empData->supperAdmin_id }} </td>
                    <td class="pr-3 "> {{ $empData->supperAdmin_name }} </td>


                    <!-- <td class="pr-3 "> <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> </td> -->
                    <td class="pr-5">
                        <a href="{{ url('edit_emp_profile', $empData->id) }}" class="btn btn-sm bg-blue-500 hover:bg-blue-700 text-white">Edit</a>
                        <button class="btn btn-sm bg-red-500 hover:bg-red-700 text-white">Delete</button>
                        <!-- <a class="btn btn-sm bg-green-500 hover:bg-green-700 text-white">Change Role</a> -->
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>


    </div>
</div>







@endsection