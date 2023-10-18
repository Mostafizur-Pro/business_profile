<style>
    .carousel-item.active img {
        opacity: 0.4; /* Set the opacity to 50% */
    }
    .carousel-item.active p {
        margin-bottom: 10%;
    }
</style>

<div class="container d-flex justify-content-between align-items-center">
    <div class="mr-3">
        <!-- <h1 class="text-2xl font-weight-bold">User Information 2023</h1> -->
    </div>

    <!-- Search Option -->
    <form action="{{ route('userInfoOld') }}" method="GET" class="d-flex align-items-center ml-4">
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
<hr class="container"/>
<div class="container">
    <h3>Item Filter</h3>
    <div class="input-group mb-3">
        
        <div class="input-group-append">
            <button class="btn btn-primary" onclick="filterItems('A')">A</button>
            <button class="btn btn-primary" onclick="filterItems('B')">B</button>
            <button class="btn btn-primary" onclick="filterItems('C')">C</button>
            <!-- Add buttons for other letters (D, E, etc.) here -->
            <button class="btn btn-primary" onclick="filterItems('Z')">Z</button>
            <button class="btn btn-primary" onclick="showAllItems()">All</button>
        </div>
    </div>
</div>




<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($data as $item)
        <div class="col-md-4">
            <div class="card p-3 mb-3 h-100">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon">
                            <img src="/images/unused profile picture.png" alt="" width="80" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        </div>
                        <div class="ms-2 c-details text-start">
                            <h4 class="mb-0">{{$item->owner_name}}</h4>
                            <p>{{$item->contact_number}}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">{{$item->organization_name}}</h3>
                    <div class="mt-5 text-start">
                        <div class="mt-3">
                            <h5 class="text1">Email: <span class="text2">{{$item->email}}</span></h5>
                        </div>
                        <div class="mt-3">
                            <h5 class="text1">Type: <span class="text2">{{$item->business_type}}</span></h5>
                        </div>
                        <div class="mt-3">
                            <h5 class="text1">Address: <span class="text2">{{$item->address}}</span></h5>
                        </div>
                    </div>
                </div>
                <div class="mt-auto">
                    <button type="button" class="btn btn-outline-success">More Details</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container pagination">
    {{ $data->links('pagination::bootstrap-4') }}
</div>

