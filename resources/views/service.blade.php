@extends('layouts.app.app')
@section('content')
@section('title', 'Service')




<div>

    <!-- Cover Page -->
    @section('cover', 'Service')
    @include('components/cover/cover')
    <!-- Cover Page -->

    @include('components/home/service')
    @include('components/service/service')


    <div>
        <!-- <form class=" mx-auto my-10 bg-white p-6 rounded-md shadow-md">
            <label class="block text-xl font-bold mb-2" for="title">Title:</label>
            <input class="input input-bordered input-primary w-full mb-4 max-w-xs rounded-md" type="text" id="title" name="title">

            <label class="block text-xl font-bold mb-2" for="image">Image:</label>
            <input type="file" class="file-input file-input-bordered file-input-primary w-full mb-4 max-w-xs rounded-md" />

            <label class="block text-xl font-bold mb-2" for="description">Description:</label>
            <textarea class="textarea textarea-primary w-full mb-4 rounded-md" id="description" name="description"></textarea>

            <label class="block text-xl font-bold mb-2" for="category">Category:</label>
            <select class="select select-primary w-full mb-4 max-w-xs rounded-md">
                <option disabled selected>Select the best TV show</option>
                <option>Game of Thrones</option>
                <option>Lost</option>
                <option>Breaking Bad</option>
                <option>Walking Dead</option>
            </select>

            <hr class="my-6">

            <h3 class="text-2xl font-semibold mb-4">Data:</h3>

            <div class="grid grid-cols-2 gap-10" id="data">
                <div class="data-item border mb-4 p-4 rounded-md">
                    <label class="block text-xl font-bold mb-2" for="data_image_1">Data Image:</label>
                    <input type="file" class="file-input file-input-bordered file-input-primary w-full mb-2 max-w-xs rounded-md" />

                    <label class="block text-xl font-bold mb-2" for="data_name_1">Data Name:</label>
                    <input class="input input-bordered input-primary w-full mb-2 max-w-xs rounded-md" type="text" id="data_name_1" name="data[0][name]">

                    <label class="block text-xl font-bold mb-2" for="data_details_1">Data Details:</label>
                    <textarea class="textarea textarea-primary w-full mb-2 rounded-md" id="data_details_1" name="data[0][details]"></textarea>
                </div>
            </div>

            <button class="btn btn-success bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 mr-2" type="button" onclick="addDataItem()">Add Data Item</button>

            <button class="btn btn-primary bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600" type="submit">Submit</button>
        </form> -->

        <script>
            function addDataItem() {
                const dataDiv = document.getElementById('data');
                const dataCounter = dataDiv.childElementCount + 1;

                const newItem = document.createElement('div');
                newItem.className = 'data-item border mb-4 p-4 rounded-md';
                newItem.id = `data_${dataCounter}`;

                newItem.innerHTML = `
                <!-- Your added data item -->
                <label class="block text-xl font-bold mb-2" for="data_image_${dataCounter}">Data Image:</label>
                <input type="file" class="file-input file-input-bordered file-input-primary w-full mb-2 max-w-xs rounded-md" />

                <label class="block text-xl font-bold mb-2" for="data_name_${dataCounter}">Data Name:</label>
                <input class="input input-bordered input-primary w-full mb-2 max-w-xs rounded-md" type="text" id="data_name_${dataCounter}" name="data[${dataCounter - 1}][name]">

                <label class="block text-xl font-bold mb-2" for="data_details_${dataCounter}">Data Details:</label>
                <textarea class="textarea textarea-primary w-full mb-2 rounded-md" id="data_details_${dataCounter}" name="data[${dataCounter - 1}][details]"></textarea>

                <button class="btn btn-danger bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 mt-4" type="button" onclick="removeDataItem(${dataCounter})">Remove</button>
            `;

                dataDiv.appendChild(newItem);
            }

            function removeDataItem(itemNumber) {
                const itemToRemove = document.getElementById(`data_${itemNumber}`);
                itemToRemove.remove();
            }
        </script>
    </div>



    

</div>

@endsection