@extends('dashboard.admin.adminApp')
@section('title', 'Admin - Dashboard')
@section('admin/dashboard')

@include('components.logger.logger')



<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="mb-4">
            <h1 class="text-2xl font-semibold">Admin Information</h1>
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
                    @if($adminData->role === 'superAdmin')
                    <th scope="col" class="pr-3 py-3">Action </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($allAdminData as $admin)
                <tr class=" bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="pr-3 "> {{ $admin->id }} </td>
                    <td class="pr-3 ">
                        <div class="flex items-center gap-5">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                    <img src="{{ asset($admin->admin_image) }}" alt="Avatar Tailwind CSS Component" />
                                </div>
                            </div>
                            <div>
                            <p class=" font-semibold uppercase">
                                    {{ $admin->admin_name }}
                                </p>
                                <p>

                                    {{ $admin->role }}
                                </p>
                            </div>
                        </div>


                    </td>
                    <td class="pr-3 "> {{ $admin->number }} </td>
                    <td class="pr-3 "> {{ $admin->admin_email }} </td>
                    <!-- <td class="pr-3 "> {{ $admin->role }} </td> -->


                    <!-- <td class="pr-3 "> <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> </td> -->
                    @if($adminData->role === 'superAdmin')
                    <td>


                        <a href="{{ url('admin/edit_profile', $admin->id) }}" class="btn btn-sm bg-blue-500 hover:bg-blue-700 text-white">Edit</a>
                        <!-- <a href="{{ url('deleteAdmin', $admin->id) }}" class="btn btn-sm bg-red-500 hover:bg-red-700 text-white">Delete</a> -->
                        <form method="POST" action="{{ url('deleteAdmin', $admin->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm bg-red-500 hover:bg-red-700 text-white">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 512 512">
                                        <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" fill='white' />
                                    </svg> -->
                                Delete
                            </button>
                        </form>


                        <span>
                            @if($admin->role === 'admin')
                            <form method="POST" action="{{ url('makeSuperAdmin', $admin->id) }}">
                                @csrf
                                <button class="btn btn-sm bg-green-500 hover:bg-green-700 text-white">Make Super Admin</button>
                            </form>
                            @else
                            <form method="POST" action="{{ url('makeAdmin', $admin->id) }}">
                                @csrf
                                <button class="btn btn-sm bg-green-500 hover:bg-green-700 text-white">Make Admin</button>
                            </form>
                            @endif
                        </span>




                    </td>
                    @endif

                </tr>
                @endforeach


            </tbody>
        </table>


    </div>
</div>







@endsection