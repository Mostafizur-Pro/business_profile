<div class="menu text-lg">
    <li>
        <details open>
            <summary class="text-sm ">Location</summary>
            <div class="px-4 my-10 text-lg">
                <h1 class=" text-stone-500 my-1">All Bangladesh</h1>
                @foreach($divisions as $div)
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

                                        <form method="GET">
                                            <li> <button class=" text-black" type="submit" name="location" value="{{ $location }}">{{ $location }}</button></li>
                                        </form>

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

<!-- <form method="GET">
    @foreach (range('A', 'Z') as $letter)
    <button type="submit" name="letter" value="{{ $letter }}" class="btn btn-outline-primary">{{ $letter }}</button>
    @endforeach
    <button type="submit" name="letter" value="" class="btn btn-outline-primary">All</button>
</form> -->