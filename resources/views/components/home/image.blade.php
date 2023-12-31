<h1 class="text-5xl text-left font-bold my-10">Introduce Yourself to the World</h1>

<section class="  my-10">
    <div class="  space-y-6 sm:space-y-12">
        <div rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 ">
            <div class="lg:col-span-7 rounded-2xl  overflow-hidden bg-cover ">
                <img src="assets/images/anondo confectionary.png" class="transition duration-300 ease-in-out hover:scale-110 object-cover w-full h-64 rounded-2xl sm:h-96  " alt="Louvre" />
            </div>
            
            <div class="p-6 space-y-2 lg:col-span-5">
                <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
                <span class="text-xs ">February 19, 2021</span>
                <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
            </div>
        </div>
        <div class="grid justify-between grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($posts as $post)
            <div rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline ">
                <img role="presentation" class="object-cover w-full rounded h-44 " src="{{$post->image}}">
                <div class=" space-y-2">
                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{$post->title}}</h3>
                    <span class="text-xs ">Posted on {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM, Do YYYY h:mm A') }}
                    </span>
                    <p>{{$post->post}}</p>
                    <div class="flex justify-center">
                        <button type="button" class="px-6 py-3 text-lg text-red-500 rounded-md hover:underline  ">More Details...</button>
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