<div class="menu text-lg">
    <li>
        <details close>
            <summary class="text-sm ">Category</summary>
            <div class="px-4 my-5 text-lg">
                <h1 class=" text-stone-500 my-1">All Category</h1>
                @foreach($categories as $category)
                <div class="collapse collapse-plus">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title m-0 text-lg font-bold ">
                        {{ $category->category }}
                    </div>
                    <div class="collapse-content text-blue-500">

                        @foreach(json_decode($category->subcategories) as $subcategory)
                        <form method="GET">
                            <p class="py-1"><button type="submit" name="subcategory" value="{{ $subcategory }}">{{ $subcategory }}</button></p>
                        </form>
                        <!-- <option value="{{ $subcategory }}">{{ $subcategory }}</option> -->
                        @endforeach
                    </div>

                </div>
                @endforeach


            </div>
        </details>
    </li>
</div>