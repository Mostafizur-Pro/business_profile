<div>
    <div class="mt-auto pb-5">
        <label for="modal_{{$item->id}}" class="btn btn-outline btn-primary text-white">Details</label>
    </div>

    <input type="checkbox" id="modal_{{$item->id}}" class="modal-toggle hidden" />
    <div class="modal" role="dialog">
        <div class="modal-box w-11/12 max-w-5xl">
            <div class="grid grid-cols-3 gap-5">
                <div class="mb-4 col-span-1">
                    <img src="/assets/profile/profile.png" alt="Profile Image" class="w-3/5">
                </div>

                <div class="col-span-2">
                    <h3 class="font-bold text-xl">{{$item->emp_name}}</h3>
                    <div class="text-left">
                        <p class="pt-2"><strong>Employee Role:</strong> {{$item->emp_role}}</p>
                        <p class="pt-2"><strong>Employee Id:</strong> {{$item->emp_id}}</p>
                        <p class="pt-2"><strong>Contact Number:</strong> {{$item->emp_number}}</p>
                        <p class="pt-2"><strong>NID:</strong> {{$item->emp_nid}}</p>
                        <p class="pt-2"><strong>Address:</strong> {{$item->emp_address}}</p>
                        <p class="pt-2"><strong>Email:</strong> {{$item->emp_email}}</p>
                        
                    </div>

                </div>
            </div>
            <div class="modal-action">
                <label for="modal_{{$item->id}}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded cursor-pointer">Close</label>
            </div>
        </div>
    </div>
</div>