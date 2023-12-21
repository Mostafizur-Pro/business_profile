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



    

</div>