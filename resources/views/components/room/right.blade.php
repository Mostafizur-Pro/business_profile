<div class="my-10 border border-2 p-5 rounded-3xl">
    <h1 class="text-2xl font-bold mb-5">You might like</h1>


    @foreach($posts->take(6) as $post)
    <div class="mb-5">
        <div class="">
            <!-- Related post -->
            <a href="#" class="flex gap-2">
                <img class="post-image w-16 h-16 rounded-lg" src="{{$post->image}}" alt="">
                <div class="">
                    <h3 class="text-lg font-semibold">{{$post->title}}</h3>
                    @foreach($users as $user)
                    @if($user->id === $post->user_id)
                    <div class="user-line flex items-center">
                        <img class="w-8 h-8 rounded-full mr-2" src="{{$user->owner_image}}" alt="">
                        <span>{{$user->owner_name}}</span>
                    </div>
                    @endif
                    @endforeach
                </div>
            </a>
            <!-- Add similar structures for other related posts -->
        </div>
    </div>
    @endforeach


    <div date-rangepicker class="flex items-center">
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start" required>
        </div>
        <span class="mx-4 text-gray-500">to</span>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end" required>
        </div>
    </div>




</div>