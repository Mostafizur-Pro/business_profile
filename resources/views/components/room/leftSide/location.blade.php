<div class="menu text-lg">
    <li>
        <details open>
            <summary class="text-sm ">Location</summary>
            <div class="px-4 my-10 text-lg">
                <h1 class=" text-stone-500 my-1">All Bangladesh</h1>
                @foreach($division as $div)
                <div class="collapse collapse-plus">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title m-0 text-lg font-bold ">
                        {{ $div->division }}
                    </div>
                    <div class="collapse-content text-blue-500">
                        @foreach(json_decode($div->districts) as $district)
                        <ul>
                            <li>
                                <details close>
                                    <summary>
                                        <p class="font-semibold">{{ $district }}</p>
                                    </summary>
                                    <ul>
                                        @foreach($areas as $area)
                                        @if($area->districts === $district )
                                        @foreach(json_decode($area->area) as $location)

                                        <li><a class="text-black" >{{ $location }}</a></li>
                                        @endforeach
                                        @endif
                                        @endforeach
                                    </ul>
                                </details>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </details>
    </li>
</div>
