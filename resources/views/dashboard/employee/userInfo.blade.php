@extends('dashboard.employee.empApp')
@section('title', 'Admin - Dashboard')
@section('empDashboard')

@include('components.logger.logger')


<div class="relative mt-10 overflow-x-auto shadow-md p-5 sm:rounded-lg">
    <div class="flex justify-between items-center">
        <div class="">
            <h1 class="text-2xl font-semibold">User Information 2024</h1>
        </div>

        <!-- search option add here -->
        <form method="GET" class="flex items-center ml-4">
            <label for="searchField" class="mr-2">Search:</label>
            <input type="text" id="searchField" name="search" value="{{ request()->input('search') }}" class="w-32 border rounded py-1 px-2 text-gray-800">
            <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">Search</button>
        </form>

        <div class="flex items-center">
            <div class="flex items-center font-semibold mr-4">
                <label for="perPage" class="mr-2">Display:</label>
                <input type="text" id="perPage" name="perPage" value="{{ request()->input('perPage', 10) }}" class="w-14 border rounded py-1 px-2 text-gray-800">
                <span class="ml-2">results</span>
            </div>
            <div class="flex items-center font-semibold">
                <label for="page" class="mr-2">Page:</label>
                <input type="text" id="page" name="page" value="{{ request()->input('pageNumber', $userInfoEmp->currentPage()) }}" class="w-14 border rounded py-1 px-2 text-gray-800">
            </div>
        </div>

    </div>
    <hr class="my-5" />



    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="w-full text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="pr-3 py-3">ID </th>
                <th scope="col" class="pr-3 py-3">Owner </th>
                <th scope="col" class="pr-3 py-3">Organization </th>
                <th scope="col" class="pr-3 py-3">Number </th>
                <th scope="col" class="pr-3 py-3">Business Type </th>
                <th scope="col" class="pr-3 py-3">Address </th>
                <th scope="col" class="pr-3 py-3">Email </th>

                <th scope="col" class="pr-3 py-3">Employee Id </th>
                <th scope="col" class="pr-3 py-3">Action </th>
            </tr>
        </thead>

        <tbody>
            @foreach($userInfoEmp as $userInfoEmp)



            <tr class="text-md bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="pr-3 "> {{ $userInfoEmp->id }} </td>
                <td class="pr-3 "> {{ $userInfoEmp->owner_name }} </td>
                <td class="pr-3 "> {{ $userInfoEmp->organization_name }} </td>
                <td class="pr-3 "> {{ $userInfoEmp->owner_number }} </td>
                <td class="pr-3 "> {{ $userInfoEmp->business_type }} </td>
                <td class="pr-3 "> {{ $userInfoEmp->owner_address }} </td>
                <td class="pr-3 "> {{ $userInfoEmp->owner_email }} </td>

                <td class="pr-3 "> {{ $userInfoEmp->emp_id }} </td>
                <td class="pr-3 ">
                    <a href="{{ url('edit_user_profile', $userInfoEmp->id) }}" class="btn btn-sm bg-blue-500 hover:bg-blue-700 text-white">Edit</a>

                </td>
                <!-- <td class="pr-3 "> <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> </td> -->


            </tr>
            @endforeach
        </tbody>
    </table>


 

</div>

<div class="mt-10">


</div>




<script>
    const perPageInput = document.getElementById('perPage');
    const pageNumberInput = document.getElementById('page');

    perPageInput.addEventListener('change', function() {
        const newPerPage = perPageInput.value;
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);
        url.searchParams.set('perPage', newPerPage);
        window.location.href = url.toString();
    });

    pageNumberInput.addEventListener('change', function() {
        const newPageNumber = pageNumberInput.value;
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);
        url.searchParams.set('page', newPageNumber);
        window.location.href = url.toString();
    });
</script>



@endsection