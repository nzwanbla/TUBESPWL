@vite('public/css/navbar.css')
@vite('public/js/navbar.js')

<header style="background-color: rgb(29, 11, 103)">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
         <!-- Back Button -->
         <button id="backButton" onclick="history.back()" class="text-sm font-semibold leading-6 text-gray-300 mr-4 pr-20"><span aria-hidden="true">&larr;</span>Back</button>
        
        <a href="{{ route('headline.show') }}">
          <h1 class="text-xl font-semibold text-gray-300">Website Berita</h1>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button id="mobileMenuButton" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <div class="relative">
          <button id="collapseButton" type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-300" aria-expanded="false">
          </button>
        </div>
        <a href="{{ url('/#latest') }} " class=" text-sm font-semibold leading-6 text-gray-300">Latest News</a>
        <a href="{{ url('/#International') }}" class="text-sm font-semibold leading-6 text-gray-300">International</a>
        <a href="{{ url('/#sport') }}" class="text-sm font-semibold leading-6 text-gray-300">Sports</a>

        <a href="{{ route('search.show') }}" class="text-sm font-semibold leading-6 text-gray-300">Search</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end ">
      <button type="submit"> 
    <a href="{{ route('dashboard') }}" class="text-sm font-semibold leading-6 text-gray-300 mr-4">Dashboard<span aria-hidden="true">&rarr;</span></a>
</button>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-sm font-semibold leading-6 text-gray-300">Logout<span aria-hidden="true">&rarr;</span></type>
        </form>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobileMenu" class="hidden lg:hidden" role="dialog" aria-modal="true">
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Sports</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button id="closeMobileMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">

              <a href="{{ url('/#latest') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Latest News</a>
              <a href="{{ url('/#International') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">International</a>
              <a href="{{ url('/#sport') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sports</a>

              <a href="{{ route('search.show') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Search</a>
            </div>
            <div class="py-6">
              <a href="{{ route('dashboard') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>