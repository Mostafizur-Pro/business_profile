<div class="mb-10">
    <div class="t-head my-2 text-center mt-10">
        <h1 class="tracking-tight hover:tracking-wide  text-3xl font-bold">Coverage <span class="text-purple-600">Area</span></h1>
    </div>
    <p class="text-center">Here is why you should trust us with your work achievements</p>

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
        <a href="{{url('/companies/country')}}">

            <button class="w-full">
                <div class="bg-gray-200 border hover:border-primary  flex justify-between">
                    <p class=" p-3 font-bold">See More ..</p>
                </div>
            </button>
        </a>
    </div>
</div>