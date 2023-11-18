<nav class="bg-white fixed top-0 left-0 w-full z-10">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center">
      <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Verlino<span class="text-primary-color">Fajri</span></span>
  </a>
  <div class="flex md:order-2">
      <form action="/logout" method="POST">
        @csrf
        <button href="/login" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 transition duration-300">Logout</button>
      </form>
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
      <li>
        @if($page == 'home')
        <a href="/" class="block py-2 pl-3 pr-4 text-white bg-primary-color md:bg-transparent md:text-primary-color rounded md:p-0" aria-current="page">Home</a>
        @else
        <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Home</a>
        @endIf
      </li>
      <li>
        @if ('page' == 'project')
        <a href="/" class="block py-2 pl-3 pr-4 text-white bg-primary-color md:bg-transparent md:text-primary-color rounded md:p-0" aria-current="page">Project</a>
        @else
        <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Project</a>
        @endif
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Skills</a>
      </li>
      <li>
        <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Contact</a>
      </li>
      <li>
        @if ($page == 'profile')
        <a href="/" class="block py-2 pl-3 pr-4 text-white bg-primary-color md:bg-transparent md:text-primary-color rounded md:p-0" aria-current="page">Profile</a>
        @else
        <a href="/profile" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Profile</a>
        @endif
      </li>
      <li>
        @if ($page == 'posts')
        <a href="/" class="block py-2 pl-3 pr-4 text-white bg-primary-color md:bg-transparent md:text-primary-color rounded md:p-0" aria-current="page">Gallery</a>
        @else
        <a href="/posts" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-color md:p-0">Gallery</a>
        @endif
      </li>
    </ul>
  </div>
  </div>
</nav>


<div class="p-8 md:p-6 lg:p-8">
</div>