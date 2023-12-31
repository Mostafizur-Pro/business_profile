<div class="mb-10">
    <div class="t-head">
        <h1 class="tracking-tight hover:tracking-wide text-center text-3xl font-black">Coverage <span class="text-purple-600">Area</span></h1>
    </div>

    <div class="grid grid-cols-3 gap-10 m-5">
        @foreach($divisions as $div)
        <form action="{{url('/companies/country')}}" method="GET">

            <button class="w-full" type="submit" name="division" value="{{ $div->division }}">
                <div class="bg-gray-200 border hover:border-primary  flex justify-between">
                    <p class=" p-3 font-bold">{{ $div->division }}</p>
                    <p class="p-3 bg-white font-bold">100</p>
                </div>
            </button>

        </form>

        @endforeach
        



    </div>
</div>