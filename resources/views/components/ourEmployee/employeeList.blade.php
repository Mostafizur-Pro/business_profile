<style>
    .carousel-item.active img {
        opacity: 0.4;
        /* Set the opacity to 50% */
    }

    .carousel-item.active p {
        margin-bottom: 10%;
    }
</style>


<div>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="mr-3">
            <h3>Item Filter</h3> <!-- <h1 class="text-2xl font-weight-bold">User Information 2023</h1> -->
        </div>

        <!-- Search Option -->
        <form action="{{ url('clients') }}" method="GET" class="d-flex align-items-center ml-4">
            <label for="searchField" class="mr-2">Search:</label>
            <input type="text" id="searchField" name="search" value="{{ request()->input('search') }}" class="form-control">
            <button type="submit" class="btn btn-primary ml-2">Search</button>
        </form>

        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center font-weight-bold mr-4">
                <label for="perPage" class="mr-2">Display:</label>
                <input type="text" id="perPage" name="perPage" value="{{ request()->input('perPage', 10) }}" class="form-control w-25">
                <span class="ml-2">results</span>
            </div>
            <div class="d-flex align-items-center font-weight-bold">
                <label for="page" class="mr-2">Page:</label>
                <input type="text" id="page" name="pageNumber" value="{{ request()->input('pageNumber', $data->currentPage()) }}" class="form-control w-25">
            </div>
        </div>

    </div>
    <hr class="container" />
    <div class="container">

        <div class="input-group mb-3">
            <form method="GET">
                @foreach (range('A', 'Z') as $letter)
                <button type="submit" name="letter" value="{{ $letter }}" class="btn btn-outline-primary">{{ $letter }}</button>
                @endforeach
                <button type="submit" name="letter" value="" class="btn btn-outline-primary">All</button>
            </form>
        </div>
    </div>

</div>



<div class="container">
    <div class="row row-cols-2 row-cols-md-3 g-4">
        @foreach ($data as $item)
        <div class="col-md-4">
            <div class="card p-3 mb-3 h-100">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon">
                            <img src="{{ asset($item->emp_image) }}" alt="" width="80" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        </div>
                        <div class="ms-2 c-details text-start">
                            <h4 class="mb-0">{{$item->emp_name}}</h4>
                            <p>{{$item->emp_number}}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">{{$item->emp_role}}</h3>
                    <div class="mt-5 text-start">
                        <div class="mt-3">
                            <h5 class="text1">Email: <span class="text2">{{$item->emp_email}}</span></h5>
                        </div>
                        <div class="mt-3">
                            <h5 class="text1">Address: <span class="text2">{{$item->emp_address}}</span></h5>
                        </div>
                        <div class="mt-3">
                            <h5 class="text1">ID: <span class="text2">{{$item->emp_id}}</span></h5>
                        </div>
                    </div>
                </div>
                <div class="mt-auto">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">More Details</button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-5 text-uppercase fw-bold" id="exampleModalLabel">{{$item->emp_name}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <!-- User Profile Image -->
                                <img src="{{ asset($item->emp_image) }}" class="img-thumbnail" width="200" alt="Profile Picture">

                                <!-- User Details -->
                                <div>
                                    <p class="text-capitalize my-0 mt-3"><strong>Organization Name:</strong> {{$item->emp_name}}</p>
                                    <p class="text-capitalize my-0"><strong>Contact Number:</strong> {{$item->emp_number}}</p>

                                    <p class="text-capitalize my-0"><strong>Address:</strong> {{$item->emp_address}}</p>
                                    <p class="text-capitalize my-0"><strong>E-mail:</strong> {{$item->emp_email}}</p>
                                    <p class="text-capitalize my-0"><strong>Designation:</strong> {{$item->emp_role}}</p>
                                    <p class="text-capitalize my-0"><strong>Employee ID:</strong> {{$item->emp_id}}</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- Close Button -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- Add more buttons or actions here if needed -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
            </div>
        </div>
        @endforeach
    </div>
</div>




<div class="container pagination">
    {{ $data->links('pagination::bootstrap-4') }}
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