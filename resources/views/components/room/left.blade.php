<div class=" flex flex-col mx-auto bg-white">
    <aside class="group/sidebar flex flex-col shrink-0 lg:w-[300px] w-[250px] transition-all duration-300 ease-in-out m-0  z-40 inset-y-0 left-0 bg-white border-r border-r-dashed border-r-neutral-200 sidenav fixed-start loopple-fixed-start" id="sidenav-main">
        <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>
        @include('components/room/leftSide/profile')
        <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>

        <!-- search -->
        @include('components/room/leftSide/search')


        <!-- <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div> -->


        <!-- Category -->
        @include('components/room/leftSide/category')

        <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>

        <!-- location -->
        @include('components/room/leftSide/location')



    </aside>
</div>