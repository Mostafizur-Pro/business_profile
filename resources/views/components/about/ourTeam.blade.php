<style>
  .active-tab {
    color: #ff0000;   
  }
</style>

<div class="max-w-screen-xl px-4 mx-auto md:px-8">
  <div class="mb-10 md:mb-16">
    <h2 class="mb-4 text-2xl font-bold text-center text-gray-800 lg:text-3xl md:mb-6">
      Our Team Section
    </h2>

    <p class="max-w-screen-md mx-auto text-center text-gray-500 md:text-lg">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis
      perspiciatis omnis aspernatur impedit vel, consectetur laudantium nulla et
      aliqua
    </p>
  </div>



  <div id="tabContainer" class="text-4xl tab-container flex items-center -mx-4 space-x-2 overflow-x-auto overflow-y-hidden sm:justify-center flex-nowrap bg-[#282560] text-gray-100">
    <a rel="noopener noreferrer" href="#1" onclick="showContent('1')" class="tab active-tab flex items-center flex-shrink-0 px-5 py-2 text-xl mb-2 text-white">Management</a>
    <a rel="noopener noreferrer" href="#2" onclick="showContent('2')" class="tab flex items-center flex-shrink-0 px-5 py-2 text-xl mb-2 text-white">Designer</a>
    <a rel="noopener noreferrer" href="#3" onclick="showContent('3')" class="tab flex items-center flex-shrink-0 px-5 py-2 text-xl mb-2 text-white">Best Employee</a>
    <!-- <a rel="noopener noreferrer" href="#4" onclick="showContent('4')" class="tab flex items-center flex-shrink-0 px-5 py-2 mb-2 text-white">Best Clients</a> -->
  </div>

  <div class="content">
    <!-- Management -->
   @include('components/about/ourTeam/ourManagement')
    <!-- Desiner -->
    @include('components/about/ourTeam/ourDesigner')
    <!-- Best employees -->
    @include('components/about/ourTeam/ourBestEmployees')
  

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