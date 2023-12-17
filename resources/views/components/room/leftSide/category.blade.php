<div class="menu text-lg">
    <!-- <li><a>Item 1</a></li> -->
    <li>
        <details close>
            <summary class="text-sm ">Category</summary>
            <div class="px-4 my-5 text-lg">
                <h1 class=" text-stone-500 my-1">All Category</h1>
                @foreach($categoriesList as $category)
                <div class="collapse collapse-plus">
                    <input type="radio" name="my-accordion-3" />
                    <div class="collapse-title m-0 text-lg font-bold ">
                        {{ $category['category'] }}
                    </div>
                    <div class="collapse-content text-blue-500">
                        @foreach($category['subcategories'] as $subcategory)
                        <p class="py-1"><a href="{{url($subcategory['link'])}}">{{ $subcategory['name'] }}</a></p>
                        @endforeach
                    </div>
                </div>
                @endforeach


            </div>
        </details>
    </li>
</div>