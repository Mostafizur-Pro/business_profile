@extends('layouts.app.app')
@section('content')
@section('title', 'Package')

<style>
    font-face {
        font-family: "Roboto Flex";
        src: url("https://digitalupgrade.com/images/misc/RobotoFlex-VariableFont_GRADXTRAYOPQYTASYTDEYTFIYTLCYTUCopszslntwdthwght.woff2") format("woff2");
    }

    body {
        font-family: "Roboto Flex", sans-serif;
    }

    .group-hover\:transition-transform {
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
        animation-direction: alternate;
    }

    .num {
        font-size: 10rem;
        line-height: 0.9;
        font-weight: 550;
        font-variation-settings: "wdth" 35, "YTFI" 788;
    }

    .stretch {
        font-weight: 500;
        font-variation-settings: "wdth" 35;
        writing-mode: vertical-rl;
    }
</style>


<div>

    <div class="hero  bg-base-200">
        <div class="grid grid-cols-5 gap-5">
            <div class="col-span-2">
                @if($adminData || $empData || $userData)
                <div>
             
                    <div class="relative py-8 sm:py-8 xl:py-3 en flex items-center justify-center ">
                        <div class="grid border-x lg:grid-cols-6 sm:grid-cols-3 grid-cols-2 lg:divide-x divide-solid divide-white">
                        @foreach($packagesList as $package)
                            <article class="group h-full flex flex-col divide-y text-sm text-center divide-gray-400 px-2">
                                <div class="sm:pb-8 pb-3 num">1</div>
                                <div class="sm:py-3 py-1.5 uppercase font-light">{{$package->title}}</div>
                                <div class="sm:h-36 h-24 flex items-center text-xs">
                                    <p class="break-words font-light whitespace-pre-line mx-auto w-28">          {{$package->description}}</p>
                                </div>
                                <div class="sm:py-3 py-1.5 uppercase">{{$package->price}}</div>
                                <!-- <div class="py-8 text-9xl relative">
                                    <q class="text-xs absolute sm:top-28 top-24 left-[8%] max-w-[84%]">
                                        But if I do not go along with your sadness, do not let myself be infected by it, that does not mean I don't recognize it or take it seriously.
                                    </q>
                                    <div class="sm:pt-36 pt-32 sm:pb-0 pb-1 uppercase w-full max-w-full -scale-100 stretch bg-black sm:group-hover:-translate-y-56 group-hover:-translate-y-44 group-hover:transition-transform flex items-center">Pro</div>
                                </div> -->
                            </article>
                            @endforeach
                        
                        </div>
                    </div>
                   
                </div>

                @elseif(!$adminData || !$empData || !$userData)

                <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                    <form class="card-body" action="{{ url('login') }}" method="post">
                        @csrf
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="text" name="text" required placeholder="Enter your email or number" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                            <span class="text-red-400">@error('text') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input type="password" name="password" required placeholder="Enter your password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                            <span class="text-red-400">@error('password') {{ $message }} @enderror</span>
                            <label class="label">
                                <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                            </label>
                        </div>
                        <!-- <div class="form-control mt-6">
                        <button class="btn btn-primary">Login</button>
                    </div> -->
                        <button type="submit" class="bg-[#282560]  w-full rounded px-6 pb-2 pt-2.5 text-md font-medium leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="button" data-te-ripple-init data-te-ripple-color="light">
                            Submit
                        </button>
                        <p class="mt-5">Create new Account! <a class="text-[#fcae04] font-bold" href="{{url('/register')}}">Please Register</a></p>

                    </form>




                </div>

                @endif
            </div>

            <!-- <div class="text-center lg:text-left col-span-3">
                <p>All-access</p>
                <div class="flex justify-center gap-3 ">
                    <h3 class="text-3xl font-bold">${{$packagesOrder->price}}</h3>
                    <p>one-time payment</p>
                </div>


                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div> -->
            <div class="col-span-3">
                <div class="p-4 sm:p-7 overflow-y-auto">
                    <div class="text-center">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Invoice from Preline
                        </h3>
                        <p class="text-sm text-gray-500">
                            Invoice #3682303
                        </p>
                    </div>

                    <!-- Grid -->
                    <div class="mt-5 sm:mt-10 grid grid-cols-2 sm:grid-cols-3 gap-5">
                        <div>
                            <span class="block text-xs uppercase text-gray-500">Amount paid:</span>
                            <span class="block text-sm font-medium text-gray-800 dark:text-gray-200">${{$packagesOrder->price}}</span>
                        </div>
                        <!-- End Col -->

                        <div>
                            <span class="block text-xs uppercase text-gray-500">Date paid:</span>
                            <span class="block text-sm font-medium text-gray-800 dark:text-gray-200">{{ $todayDate }}</span>

                        </div>
                        <!-- End Col -->

                        <div>
                            <span class="block text-xs uppercase text-gray-500">Payment method:</span>
                            <div class="flex items-center gap-x-2">
                                <svg class="w-5 h-5" width="400" height="248" viewBox="0 0 400 248" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M254 220.8H146V26.4H254V220.8Z" fill="#FF5F00" />
                                        <path d="M152.8 123.6C152.8 84.2 171.2 49 200 26.4C178.2 9.2 151.4 0 123.6 0C55.4 0 0 55.4 0 123.6C0 191.8 55.4 247.2 123.6 247.2C151.4 247.2 178.2 238 200 220.8C171.2 198.2 152.8 163 152.8 123.6Z" fill="#EB001B" />
                                        <path d="M400 123.6C400 191.8 344.6 247.2 276.4 247.2C248.6 247.2 221.8 238 200 220.8C228.8 198.2 247.2 163 247.2 123.6C247.2 84.2 228.8 49 200 26.4C221.8 9.2 248.6 0 276.4 0C344.6 0 400 55.4 400 123.6Z" fill="#F79E1B" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="400" height="247.2" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="block text-sm font-medium text-gray-800 dark:text-gray-200">•••• 4242</span>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 sm:mt-10">
                        <h4 class="text-xs font-semibold uppercase text-gray-800 dark:text-gray-200">Summary</h4>

                        <ul class="mt-3 flex flex-col">
                            <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Payment to Front</span>
                                    <span>${{$packagesOrder->price}}</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Tax fee</span>
                                    <span>$0</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-slate-800 dark:border-gray-700 dark:text-gray-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Amount paid</span>
                                    <span>${{$packagesOrder->price}}</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Button -->
                    <div class="mt-5 flex justify-end gap-x-2">
                        <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" x2="12" y1="15" y2="3" />
                            </svg>
                            Invoice PDF
                        </a>
                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9" />
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                                <rect width="12" height="8" x="6" y="14" />
                            </svg>
                            Print
                        </a>
                    </div>
                    <!-- End Buttons -->

                    <div class="mt-5 sm:mt-10">
                        <p class="text-sm text-gray-500">If you have any questions, please contact us at <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium" href="#">example@site.com</a> or call at <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium" href="tel:+1898345492">+1 898-34-5492</a></p>
                    </div>
                </div>
            </div>




        </div>
    </div>


</div>

@endsection