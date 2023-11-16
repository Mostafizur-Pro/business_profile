<div class="container mx-auto flex justify-between items-center">
    <div class="mr-3">
        <h3 class="text-2xl font-bold">Item Filter</h3>
    </div>

    <!-- Search Option -->
    <form action="{{ url('clients') }}" method="GET" class="flex items-center ml-4">
        <label for="searchField" class="mr-2 font-bold">Search:</label>
        <input type="text" id="searchField" name="search" value="{{ request()->input('search') }}" class="input input-bordered input-primary w-64">
        <button type="submit" class="btn btn-primary ml-2">Search</button>
    </form>

    <div class="flex items-center space-x-4">
        <div class="flex items-center font-bold">
            <label for="perPage" class="mr-2">Display:</label>
            <input type="text" id="perPage" name="perPage" value="{{ request()->input('perPage', 10) }}" class="input input-bordered input-primary w-20">
            <span class="ml-2">results</span>
        </div>
        <div class="flex items-center font-bold">
            <label for="page" class="mr-2">Page:</label>
            <input type="text" id="page" name="pageNumber" value="{{ request()->input('pageNumber', $data->currentPage()) }}" class="input input-bordered input-primary w-20">
        </div>
    </div>
</div>

<hr class="container mx-auto my-4" />

<div class="container">
    <div class="flex mb-3 space-x-2">
        <form method="GET">
            @foreach (range('A', 'Z') as $letter)
            <button type="submit" name="letter" value="{{ $letter }}" class="btn btn-outline-primary">{{ $letter }}</button>
            @endforeach
            <button type="submit" name="letter" value="" class="btn btn-outline-primary">All</button>
        </form>
    </div>
</div>

<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center">
        <!-- <h2 class="mb-12 text-3xl font-bold">
      Meet the <u class="text-primary dark:text-primary-400">team</u>
    </h2> -->

        <div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12">
            @foreach ($data as $item)
            <div class="mb-6 lg:mb-0">
                <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.jpg" class="w-full rounded-t-lg" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"></div>
                        </a>
                        <svg class="absolute text-white dark:text-neutral-700 left-0 bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="currentColor" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                            </path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h5 class="mb-4 text-lg font-bold">{{$item->owner_name}}</h5>
                        <p class=" text-neutral-500 dark:text-neutral-300">{{$item->organization_name}}</p>
                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">{{$item->owner_number}}</p>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <!-- Section: Design Block -->
</div>


<div class="container">
    {{ $data->links('pagination::tailwind') }}

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