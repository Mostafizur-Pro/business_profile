@if ($allPosts->count() === 0)
<div class=" my-10 ">

    <h1 class="text-3xl">No posts were found based on the provided criteria. <a class="text-primary" href="/room">Go to Hall Room</a></h1>
</div>
@endif


@foreach($allPosts as $post)



<div class="card border my-10 bg-base-100 shadow-xl">
    <div class="flex items-center justify-between px-8 py-5">
        @foreach($users as $user)
        @if($user->id === $post->user_id)
        <div class="flex items-center mr-5">
            <div class="mr-5">
                <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                    <img class="w-[40px] h-[40px] shrink-0 inline-block rounded-[.95rem]" src="{{$user->owner_image}}" alt="avatar image">
                </div>
            </div>
            <div class="mr-2 ">
                <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{$user->owner_name}}</a>
                <span class="text-stone-400 dark:text-stone-500 font-medium block text-[0.85rem]">Posted on {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM, Do YYYY h:mm A') }}
                    , @if($post->area) {{$post->area}}, @endif {{$post->district}}, {{$post->category}}, {{$post->subcategories}}.
                    <!-- July 26 2023, 01:03pm -->
                </span>
            </div>
        </div>
        @endif

        @endforeach

        <div class="inline-flex relative items-center group justify-end text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-dark bg-transparent shadow-none border-0" href="javascript:void(0)">
            <div class="dropdown dropdown-end">
                <label tabindex="0">
                    <span class="leading-none transition-colors duration-200 ease-in-out peer shrink-0 group-hover:text-primary text-secondary-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 128 512">
                            <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                        </svg>
                    </span>

                </label>
                <ul tabindex="0" class="menu dropdown-content border z-[1] shadow bg-white rounded-box w-80 mt-4">
                    <li><a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z" />
                                </svg>
                            </span>
                            <span>
                                <span class="fond-bold">Bookmark</span> <br>
                                <span class="text-stone-400 ">Add this post to your bookmarks.</span>
                            </span>
                        </a>
                    </li>
                    <hr>
                    <li><a  href="{{ url('/room/' . $post->user_id) }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                </svg>
                            </span>
                            <span>
                                <span class="fond-bold">View Profile</span>
                            </span>
                        </a>
                    </li>


                    @if($userData->id === $post->user_id)
                    <li><a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg>
                            </span>

                            <span>
                                <span class="fond-bold"><label for="my_modal_6{{$post->id}}">Edit Post</label></span>
                            </span>
                        </a>
                    </li>
                    <li><a>
                            <form class="flex gap-3" action="{{ url('hallRoomPost', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                    </svg>
                                </span>
                                <span>
                                    <button type="submit"> <span class="fond-bold">Move to Trash</span></button>
                                </span>
                            </form>
                        </a>
                    </li>

                    @endif
                    <li><a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M256 0c53 0 96 43 96 96v3.6c0 15.7-12.7 28.4-28.4 28.4H188.4c-15.7 0-28.4-12.7-28.4-28.4V96c0-53 43-96 96-96zM41.4 105.4c12.5-12.5 32.8-12.5 45.3 0l64 64c.7 .7 1.3 1.4 1.9 2.1c14.2-7.3 30.4-11.4 47.5-11.4H312c17.1 0 33.2 4.1 47.5 11.4c.6-.7 1.2-1.4 1.9-2.1l64-64c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-64 64c-.7 .7-1.4 1.3-2.1 1.9c6.2 12 10.1 25.3 11.1 39.5H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H416c0 24.6-5.5 47.8-15.4 68.6c2.2 1.3 4.2 2.9 6 4.8l64 64c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-63.1-63.1c-24.5 21.8-55.8 36.2-90.3 39.6V240c0-8.8-7.2-16-16-16s-16 7.2-16 16V479.2c-34.5-3.4-65.8-17.8-90.3-39.6L86.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l64-64c1.9-1.9 3.9-3.4 6-4.8C101.5 367.8 96 344.6 96 320H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H96.3c1.1-14.1 5-27.5 11.1-39.5c-.7-.6-1.4-1.2-2.1-1.9l-64-64c-12.5-12.5-12.5-32.8 0-45.3z" />
                                </svg>
                            </span>
                            <span>
                                <span class="fond-bold">Report</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Edit Post -->
    @include('layouts/modal/hallRoom/editPost')
    <!-- Edit Post -->

    <div class="mx-10 mb-2 text-black text-xl font-bold">
        <p>{{$post->title}}</p>
    </div>
    <div class="mx-10 mb-5 text-stone-500">
        <p>{{$post->post}}</p>
    </div>

    <figure class="mb-5"><img class="w-96 rounded-2xl" src="{{$post->image}}" alt="Shoes" /></figure>

    <div class="flex items-center justify-between px-8 py-5">
        <div class="flex items-center mr-5">
            <div class="mr-5">
                <div class="flex -space-x-4 rtl:space-x-reverse">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="">
                </div>
            </div>
            <div class="mr-2 ">
                <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">Dan<span class="text-stone-500">,</span> Elise </a>
                <span class="text-stone-400 dark:text-stone-500 font-medium block text-[0.85rem]">and 23 more liked this</span>
            </div>
        </div>


        <!-- <p class="font-semibold text-lg">{{$post->like}}</p> -->
        @if($post->like)
        @php
        $decodedLikes = json_decode($post->like);
        $totalLikes = count($decodedLikes);
        @endphp


        <!--  -->

        @if($userData)


        @php
        $decodedLikes = json_decode($post->like);
        $userLiked = false;
        @endphp

        @foreach($decodedLikes as $like)


        @if($userData->id === intval($like))

        @php
        $userLiked = true;
        @endphp

        @endif

        @endforeach

        @if($userLiked)
        <div class="flex items-center -mt-32 px-16">
            <div class="cursor-pointer">
                <span class="flex h-min w-min space-x-1 items-center rounded-full hover:text-gray-200 text-rose-600 hover:bg-gray-700 bg-rose-50 py-1 px-2 text-xs font-medium">


                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current hover:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>

                    <p class="font-semibold text-lg">{{ $totalLikes }}</p>

                </span>
            </div>
        </div>
        @else
        <div class="flex items-center -mt-32 px-16">
            <div class="cursor-pointer">
                <span class="flex h-min w-min space-x-1 items-center rounded-full text-gray-200 hover:text-rose-600 bg-gray-700 hover:bg-rose-50 py-1 px-2 text-xs font-medium">


                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current hover:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>

                    <p class="font-semibold text-lg">{{ $totalLikes }}</p>

                </span>
            </div>
        </div>
        @endif

        @endif


        <!--  -->


        @else
        <div class="flex items-center -mt-32 px-16">
            <div class="cursor-pointer">
                <span class="flex h-min w-min space-x-1 items-center rounded-full text-gray-200 hover:text-rose-600 bg-gray-700 hover:bg-rose-50 py-1 px-2 text-xs font-medium">


                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current hover:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>

                    <p class="font-semibold text-lg"></p>

                </span>
            </div>
        </div>
        @endif











    </div>
</div>




@endforeach