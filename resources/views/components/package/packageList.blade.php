<!-- ====== Pricing Section Start -->
<section class=" z-10 overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[80px] lg:pb-[70px]">
   <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
         <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
               <span class="mb-2 block text-lg font-semibold text-primary">
                  Pricing Table
               </span>
               <h2 class="mb-3 text-3xl leading-[1.208] font-bold text-dark  sm:text-4xl md:text-[40px]">
                  Our Package Plan
               </h2>
               <p class="text-base text-body-color dark:text-dark-6">
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
               </p>
            </div>
         </div>
      </div>
      <div class="-mx-4 flex flex-wrap justify-center">
         
         @foreach($packagesList as $package)
         <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="relative z-10 mb-10 overflow-hidden rounded-[10px] border-2 border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-[50px]">
               <span class="mb-3 block text-4xl  font-bold text-primary">
                  
                  {{$package->title}}

               </span>
               <h2 class="mb-5 text-[42px] font-bold text-dark ">
                  <span> ৳{{$package->price}}</span>
                  <span class="text-base font-medium text-body-color dark:text-dark-6">
                     / month
                  </span>
               </h2>
               <p class="mb-8 border-b border-stroke dark:border-dark-3 pb-8 text-base text-body-color dark:text-dark-6">
                  {{$package->description}}
               </p>


               <div class="p-6">
                  <ol class="list-inside">


                     @foreach(json_decode($package->details) as $detail)
                     <li class="mb-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        {{$detail}}
                     </li>

                     @endforeach



                  </ol>
               </div>


               @if($package->price === '600')
               <a href="{{url('package/package_order', $package->id)}}" class="block w-full rounded-md border border-primary bg-primary p-3 text-center text-base font-medium text-white transition hover:bg-opacity-90">
                  Choose
               </a>
               @else
               <a href="{{url('package/package_order', $package->id)}}" class="block w-full rounded-md border border-stroke dark:border-dark-3 bg-transparent p-3 text-center text-base font-medium text-primary transition hover:border-primary hover:bg-primary hover:text-white">
                  Choose
               </a>

               @endif

               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]">
                     <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="38.9138" cy="87.4849" r="1.42021" transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                        <circle cx="38.9138" cy="74.9871" r="1.42021" transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                        <circle cx="38.9138" cy="62.4892" r="1.42021" transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                        <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                        <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                        <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                        <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                        <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                        <circle cx="26.4157" cy="87.4849" r="1.42021" transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                        <circle cx="26.4157" cy="74.9871" r="1.42021" transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                        <circle cx="26.4157" cy="62.4892" r="1.42021" transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                        <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                        <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                        <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                        <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                        <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                        <circle cx="13.9177" cy="87.4849" r="1.42021" transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                        <circle cx="13.9177" cy="74.9871" r="1.42021" transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                        <circle cx="13.9177" cy="62.4892" r="1.42021" transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                        <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                        <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                        <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                        <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                        <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                        <circle cx="1.41963" cy="87.4849" r="1.42021" transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                        <circle cx="1.41963" cy="74.9871" r="1.42021" transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                        <circle cx="1.41963" cy="62.4892" r="1.42021" transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                        <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                        <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                        <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                        <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                        <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                     </svg>
                  </span>
               </div>
            </div>
         </div>
         @endforeach


      </div>
   </div>
</section>
<!-- ====== Pricing Section End -->