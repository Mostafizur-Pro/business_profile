<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="assets/css/style.css">



<div class="my-20">

    <h1 class="text-4xl text-center font-bold my-10">Video Section</h1>

    <div class="grid grid-cols-2 gap-10 ">
        <div class="col-span-1 relative">
            <div class="video-overlay"></div>
            <video class=" w-5/6 h-5/6  rounded-lg" controls autoplay muted>
                <source src="{{ asset('assets/video/kajkormo.mp4') }}" type="video/mp4" />
            </video>
        </div>

        <div class="col-span-1  mt-10">
            <h3 class="text-2xl mb-3 font-semibold sm:text-4xl hover:underline">Noster tincidunt reprimique ad pro</h3>
            <span class="text-xs dark:text-gray-400 block my-2">February 19, 2021</span>
            <p class="text-sm dark:text-gray-500">Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
        </div>
    </div>


    <div class="slide-container swiper">
        <div class="slide-content">
            <div class=" swiper-wrapper">
                <div class=" swiper-slide">
                    <video className="h-full w-full rounded-lg" controls autoPlay muted>
                        <source src="{{ asset('assets/video/kajkormo.mp4') }}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class=" swiper-slide">
                    <video className="h-full w-full rounded-lg" controls autoPlay muted>

                        <source src="{{ asset('assets/video/kajkormo1.mp4') }}" type="video/mp4" />

                        Your browser does not support the video tag.
                    </video>

                </div>
                <div class=" swiper-slide">
                    <video className="h-full w-full rounded-lg" controls autoPlay muted>

                        <source src="{{ asset('assets/video/glambar.mp4') }}" type="video/mp4" />

                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class=" swiper-slide">
                    <video className="h-full w-full rounded-lg" controls autoPlay muted>

                        <source src="{{ asset('assets/video/kajkormo.mp4') }}" type="video/mp4" />

                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class=" swiper-slide">
                    <video className="h-full w-full rounded-lg" controls autoPlay muted>

                        <source src="{{ asset('assets/video/kajkormo1.mp4') }}" type="video/mp4" />

                        Your browser does not support the video tag.
                    </video>
                </div>


            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>


</div>


<!-- Swiper JS -->
<script src="assets/js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="assets/js/script.js"></script>