<div class="menu text-lg">
            <!-- <li><a>Item 1</a></li> -->
            <li>
                <details open>
                    <summary class="text-sm ">Location</summary>
                    <div class="px-4 my-10 text-lg">
                        <h1 class=" text-stone-500 my-1">All Bangladesh</h1>
                        @foreach($locationsList as $location)
                        <div class="collapse collapse-plus">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title m-0 text-lg font-bold ">
                                {{ $location['location'] }}
                            </div>
                            <div class="collapse-content text-blue-500">
                                @foreach($location['place'] as $place)

                                <!--  -->
                                <ul>
                                    @if(isset($place['area']))
                                    <li>
                                        <details close>
                                            <summary>
                                                <p class="font-semibold">{{ $place['name'] }}</p>
                                            </summary>
                                            <ul>
                                                @foreach($place['area'] as $area)
                                                <li><a class="text-black">{{ $area }}</a></li>

                                                @endforeach


                                            </ul>
                                        </details>
                                    </li>

                                    @else
                                    <li>
                                        <button class="font-semibold">{{ $place['name'] }}</button>
                                    </li>

                                    @endif


                                </ul>

                                <!--  -->


                                <!--  -->








                                @endforeach
                            </div>
                        </div>
                        @endforeach

                    </div>
                </details>
            </li>
        </div>