<nav class="bg-white fixed top-0 left-0 w-full z-10 my-5 px-5">
  <div class="max-w-screen-xl flex mx-auto justify-between flex-wrap items-center p-4 border border-black rounded-xl md:rounded-2xl">
    <a href="/" class="flex items-center">
        <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Verlino<span class="text-primary-color">Fajri</span></span>
    </a>
    <div class="flex md:order-2">
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="justify-between ms-auto hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
        <li>
          @if($page == 'home')
          <a href="/" class="block py-2 pl-3 pr-4 text-white bg-primary-color md:bg-transparent md:text-primary-color rounded md:p-0" aria-current="page">Home</a>
          @else
          <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Home</a>
          @endIf
        </li>
        <li>
          @if ($page == 'projects')
          <a href="/projects" class="block py-2 pl-3 pr-4 text-white bg-primary-color md:bg-transparent md:text-primary-color rounded md:p-0" aria-current="page">Projects</a>
          @else
          <a href="/projects" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Projects</a>
          @endif
        </li>
        <li>
          @if ($page == 'skills')
          <a href="/skills" class="block py-2 pl-3 pr-4 text-white bg-primary-color md:bg-transparent md:text-primary-color rounded md:p-0" aria-current="page">Skills</a>
          @else
          <a href="/skills" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Skills</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="p-8 md:p-6 lg:p-8">
</div>