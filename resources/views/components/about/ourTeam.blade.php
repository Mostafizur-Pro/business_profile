<div class="max-w-screen-xl px-4 mx-auto md:px-8">
  <div class="mb-10 md:mb-16">
    <h2 class="
        mb-4
        text-2xl
        font-bold
        text-center text-gray-800
        lg:text-3xl
        md:mb-6
      ">
      Our Team Section
    </h2>

    <p class="max-w-screen-md mx-auto text-center text-gray-500 md:text-lg">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis
      perspiciatis omnis aspernatur impedit vel, consectetur laudantium nulla et
      aliqua
    </p>
  </div>



  <div id="tabContainer" class="tab-container flex items-center -mx-4 space-x-2 overflow-x-auto overflow-y-hidden sm:justify-center flex-nowrap bg-[#282560] text-gray-100">

    <a rel="noopener noreferrer" href="#1" onclick="showContent('1')" class="  flex items-center flex-shrink-0 px-5 py-2 border-b-4 border-violet-400 text-gray-50">Management</a>
    <a rel="noopener noreferrer" href="#2" onclick="showContent('2')" class="  flex items-center flex-shrink-0 px-5 py-2 border-b-4 border-gray-700 text-gray-400">Designer</a>
    <a rel="noopener noreferrer" href="#3" onclick="showContent('3')" class="  flex items-center flex-shrink-0 px-5 py-2 border-b-4 border-gray-700 text-gray-400">Best Employee</a>
    <a rel="noopener noreferrer" href="#4" onclick="showContent('4')" class="  flex items-center flex-shrink-0 px-5 py-2 border-b-4 border-gray-700 text-gray-400">Best Clients</a>
  </div>

  <!-- <div class="tab-container" id="tabContainer">
    <a rel="noopener noreferrer" href="#1" class="tab active-tab" >1</a>
    <a rel="noopener noreferrer" href="#2" class="tab" onclick="showContent('2')">2</a>
    <a rel="noopener noreferrer" href="#3" class="tab" onclick="showContent('3')">3</a>
    <a rel="noopener noreferrer" href="#4" class="tab" onclick="showContent('4')">4</a>
</div> -->

  <!-- <div class="content">
    <p id="1">Content for 1</p>
    <p id="2" class="hidden">Content for 2</p>
    <p id="3" class="hidden">Content for 3</p>
    <p id="4" class="hidden">Content for 4</p>
</div> -->

  <div class="content">

    <section id="1">
      <h2 class="mb-4 text-2xl font-bold text-center text-gray-800 lg:text-3xl md:mb-6 my-10"> Our Management Team </h2>
      <div class="grid gap-4 md:grid-cols-3">
        <div class="p-4 shadow">
          <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80">
            <img src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166__340.jpg" alt="Image" class="object-cover object-center w-full h-full" />
          </div>

          <div class="flex flex-col items-center justify-center">
            <div class="font-bold text-indigo-500 md:text-lg">John Doe</div>
            <p class="mb-3 text-sm text-gray-500 md:text-base md:mb-4">
              Founder / CEO
            </p>

            <div class="flex">
              <div class="flex gap-4">
                <a href="#">
                  <svg class="w-6 h-6 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 shadow">
          <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80">
            <img src="https://cdn.pixabay.com/photo/2016/11/18/19/07/happy-1836445__340.jpg" alt="Image" class="object-cover object-center w-full h-full" />
          </div>

          <div class="flex flex-col items-center justify-center">
            <div class="font-bold text-indigo-500 md:text-lg">John Doe</div>
            <p class="mb-3 text-sm text-gray-500 md:text-base md:mb-4">
              Web Developer
            </p>

            <div class="flex">
              <div class="flex gap-4">
                <a href="#">
                  <svg class="w-6 h-6 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 shadow">
          <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80">
            <img src="https://cdn.pixabay.com/photo/2018/01/15/07/52/woman-3083401__340.jpg" alt="Image" class="object-cover object-center w-full h-full" />
          </div>

          <div class="flex flex-col items-center justify-center">
            <div class="font-bold text-indigo-500 md:text-lg">Scarlet</div>
            <p class="mb-3 text-sm text-gray-500 md:text-base md:mb-4">
              Devops Engineer
            </p>

            <div class="flex">
              <div class="flex gap-4">
                <a href="#">
                  <svg class="w-6 h-6 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="2" class="hidden">
      <h2 class="mb-4 text-2xl font-bold text-center text-gray-800 lg:text-3xl md:mb-6"> Our Designer Team </h2>
      <div class="grid gap-4 md:grid-cols-3">
        <div class="p-4 shadow">
          <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80">
            <img src="https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166__340.jpg" alt="Image" class="object-cover object-center w-full h-full" />
          </div>

          <div class="flex flex-col items-center justify-center">
            <div class="font-bold text-indigo-500 md:text-lg">Mostafizur Rahman</div>
            <p class="mb-3 text-sm text-gray-500 md:text-base md:mb-4">
              Software Developer
            </p>

            <div class="flex">
              <div class="flex gap-4">
                <a href="#">
                  <svg class="w-6 h-6 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 shadow">
          <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80">
            <img src="https://cdn.pixabay.com/photo/2016/11/18/19/07/happy-1836445__340.jpg" alt="Image" class="object-cover object-center w-full h-full" />
          </div>

          <div class="flex flex-col items-center justify-center">
            <div class="font-bold text-indigo-500 md:text-lg">Rafin Hossain</div>
            <p class="mb-3 text-sm text-gray-500 md:text-base md:mb-4">
            Software Developer
            </p>

            <div class="flex">
              <div class="flex gap-4">
                <a href="#">
                  <svg class="w-6 h-6 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 shadow">
          <div class="h-48 mb-2 overflow-hidden rounded-lg shadow-lg md:h-80">
            <img src="https://cdn.pixabay.com/photo/2018/01/15/07/52/woman-3083401__340.jpg" alt="Image" class="object-cover object-center w-full h-full" />
          </div>

          <div class="flex flex-col items-center justify-center">
            <div class="font-bold text-indigo-500 md:text-lg">Rafi Mozumber</div>
            <p class="mb-3 text-sm text-gray-500 md:text-base md:mb-4">
            Software Developer (Intern)
            </p>

            <div class="flex">
              <div class="flex gap-4">
                <a href="#">
                  <svg class="w-6 h-6 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </a>
                <a href="#">
                  <svg class="w-6 h-6 text-blue-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="3" class="hidden">
      <h2 class="mb-4 text-2xl font-bold text-center text-gray-800 lg:text-3xl md:mb-6"> Our Best Employee </h2>
    </section>
    <section id="4" class="hidden">
      <h2 class="mb-4 text-2xl font-bold text-center text-gray-800 lg:text-3xl md:mb-6"> Our Best Client </h2>
    </section>
  </div>
</div>




<script>
  function showContent(id) {
    // Hide all content elements
    const allContent = document.querySelectorAll('.content section');
    allContent.forEach(content => content.classList.add('hidden'));

    // Show the clicked content
    const selectedContent = document.getElementById(id);
    if (selectedContent) {
      selectedContent.classList.remove('hidden');
    }

    // Update active tab styling
    const allTabs = document.querySelectorAll('.tab');
    allTabs.forEach(tab => tab.classList.remove('active-tab'));
    const clickedTab = document.querySelector(`.tab[href="#${id}"]`);
    if (clickedTab) {
      clickedTab.classList.add('active-tab');
    }
  }
</script>