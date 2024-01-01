<!-- <h1 class="text-5xl text-left font-bold my-10">Introduce Yourself to the World</h1> -->
<div class="t-head my-2 text-center mt-10">
    <h1 class="tracking-tight hover:tracking-wide  text-3xl font-bold">Promote Your <span class="text-purple-600">Image</span></h1>
</div>
<p class="text-center">Choose the perfect solution for your business</p>

<section class="  my-10">
    <div class="  space-y-6 sm:space-y-12">
        <div>
            @if($posts->count() > 0)
            @php
            $randomIndex = rand(0, $posts->count() - 1);
            $randomPost = $posts[$randomIndex];
            @endphp
            <div id="autoPost" class="block border-2 bg-[#282560] p-10 text-white max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12">
                <div id="postImage" class="lg:col-span-7 rounded-2xl overflow-hidden bg-cover">
                    <img src="{{$randomPost->image}}" class="transition duration-300 ease-in-out hover:scale-110 object-cover w-full h-64 rounded-2xl sm:h-96" alt="Louvre" />
                </div>
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 id="postTitle" class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$randomPost->title}}</h3>
                    <span id="postDate" class="text-xs">Posted on {{ \Carbon\Carbon::parse($randomPost->created_at)->isoFormat('MMM, Do YYYY h:mm A') }}</span>
                    <p id="postContent">{{ \Illuminate\Support\Str::limit($randomPost->post, 100) }} <button type="button" class="text-lg text-red-500 rounded-md hover:underline">Read More</button></p>
                </div>
            </div>
            @endif
        </div>
        <div class="grid justify-between grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($posts as $post)
            <div rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline">
                <img role="presentation" class="object-cover w-full rounded h-44" src="{{$post->image}}">
                <div class="space-y-2">
                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$post->title}}</h3>
                    <span class="text-xs">Posted on {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM, Do YYYY h:mm A') }}</span>
                    <div>
                        <p>{{ \Illuminate\Support\Str::limit($post->post, 80) }} <button type="button" class="text-lg text-red-500 rounded-md hover:underline">readme more</button></p>
                    </div>

                </div>
            </div>
            @endforeach


        </div>
        <div class="flex justify-center">
            <a href="{{url('/room')}}">
                <button type="button" class="text-lg btn btn-accent rounded-md hover:text-white  ">Load more posts...</button>
            </a>
        </div>
    </div>
</section>



<script>
    let posts = @json($posts); // Pass PHP variable to JavaScript
    let index = 0;

    function changePost() {
        const post = posts[index];
        document.getElementById('postImage').innerHTML = `<img src="${post.image}" class="transition duration-300 ease-in-out hover:scale-110 object-cover w-full h-64 rounded-2xl sm:h-96" alt="Louvre" />`;
        document.getElementById('postTitle').innerText = post.title;
        document.getElementById('postDate').innerText = `Posted on ${new Date(post.created_at).toLocaleString()}`;
        document.getElementById('postContent').innerText = `${post.post.substring(0, 100)}...`;

        index = (index + 1) % posts.length;
    }

    setInterval(changePost, 15000); // Change post every 20 seconds
    changePost(); // Initial post change
</script>


