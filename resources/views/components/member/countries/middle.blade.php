@if ($data->count() === 0)
<div class=" my-10 ">

    <h1 class="text-3xl">No data were found based on the provided criteria. <a class="text-primary" href="/companies/country">Go to All Division</a></h1>
</div>
@endif




<div class="">
    @foreach ($data as $item)
    <div class="flex justify-left gap-10 mb-5 shadow-xl">

        <figure><img class="w-44" src="/assets/profile/profile.png" alt="Movie" /></figure>
        <div>
            <div class="">
                <h2 class="text-2xl font-bold">{{$item->owner_name}}</h2>
                <p>{{$item->organization_name}}</p>

            </div>
            <div class="mt-10">
                @include('layouts/modal/member/modelClient')
            </div>
        </div>

    </div>

    @endforeach

</div>