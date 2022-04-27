<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Legit Solutions</title>
  <!-- Import Scripts and links -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<header>
    <main x-data="{ expanded: false }" class="fixed top-0 flex flex-wrap justify-between w-full py-3 bg-neutral-900 ">
      <section id="header-logo" class=" mt-[1px] text-white uppercase">
        <a href="/"><img class="absolute top-[11px] w-[80px] h-[80px]" src="../images/png/Logo.png" alt=""></a>

        <p class="pl-[75px] text-xl"><span class="text-orange-400">legit</span> solutions</p>
      </section>
      <div class="hidden leading-8 text-white lg:block">     
        <a class="mx-5 hover:text-orange-400" href="/">Domů</a>     
        <a class="mx-5 hover:text-orange-400" href="/backend">Grafika / Design</a>
        <a class="mx-5 hover:text-orange-400" href="/ux-ui-design">Backend / Databáze</a>
        <a class="mx-5 hover:text-orange-400" href="/blog">IT Blog</a>
        <a class="mx-5 hover:text-orange-400" href="/kontakty">Kontakty</a>
    </div>
      <section id="header-button-mobile" class="flex items-center px-5 lg:hidden">
        <button @click="expanded = ! expanded" type="button" class="text-white">
          <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              x-show="expanded"
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
            />
            <path
              x-show="!expanded"
              fill-rule="evenodd"
              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
            />
            </svg>
        </button>
      </section>
      <section id="header-links-mobile" class="container leading-8 text-white">
        <div  x-show="expanded" x-collapse.duration.500ms>
          <ul class="pl-[75px] pt-[14px]">
            <li class="hover:text-orange-400">
              <a href="/">Domů</a>
            </li>
            <li class="hover:text-orange-400">
              <a href="">Grafika / Design</a>
            </li>
            <li class="hover:text-orange-400">
              <a href="">Backend / Databáze</a>
            </li>
            <li class="hover:text-orange-400">
              <a href="">IT Blog</a>
            </li>
            <li class="hover:text-orange-400">
              <a href="">Kontakty</a>
            </li>
            @if (Route::has('login'))
              <li class="mt-5 hover:text-orange-400">
                @auth
                  <a class="inline-block hover:text-orange-400" href="{{ route('dashboard') }}">Dashboard</a>
                @else
                  <a class="inline-block hover:text-orange-400" href="{{ route('login') }}">Přihlásit se</a>
                @endauth
              </li>
              @auth                  
                <li class="mt-5 leading-0 hover:text-orange-400">
                    <form method="POST" class="inline-block" action="{{ route('logout') }}" x-data>
                      @csrf
                      <a href="{{ route('logout') }}" @click.prevent="$root.submit();"> Odhlásit se </a>
                    </form>      
                </li>
              @endauth 
            @endif
          </ul>
        </div>
    </section>
    </main>
</header>
<body>
  
</body>
</html>

<!--
<header>
  <nav class="fixed bg-[#1e1e1e] top-0 flex flex-wrap items-center justify-between w-full p-2 border-b-2 shadow-lg border-neutral-900 z-[1000]" x-data="{ isOpen: false }">   

    <div class="font-roboto">
      <a href="/">          
        <img class="absolute top-2 w-[75px] h-[75px]" src="../images/png/Logo.png" alt="">
      </a>    

      <h1 class="ml-[65px] mt-[4px] text-xl font-light tracking-widest text-white uppercase"> <span class="text-orange-400">legit</span> solutions</h1>
    </div>
    

    <button x-on:click="isOpen = !isOpen" type="button" 
    class="block px-2 text-white lg:hidden hover:text-white focus:outline-none focus:text-white" 
    :class="{ 'transition transform-180': isOpen }">
    
    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                x-show="isOpen"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
              />
              <path
                x-show="!isOpen"
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
              />
            </svg>
          </button>
    

          <div
          class="block w-full px-4 py-6 lg:hidden z-9"
          x-show="isOpen "
          >
            <ul
              class="items-center justify-end flex-1 pt-6 lg:pt-0 list-reset lg:flex"
            >
              <li class="mr-3">
                <a
                  class="inline-block py-2 px-4 text-white no-underline hover:text-[#dc9c39] hover:text-underline"
                  href="/backend"
                  >Backend
                </a>
              </li>
              <li class="mr-3">
                <a
                  class="inline-block text-white no-underline hover:text-[#dc9c39] hover:text-underline py-2 px-4"
                  href="#"
                  >UI & UX Design
                </a>
              </li>
              <li class="mr-3">
                <a
                  class="inline-block text-white no-underline hover:text-[#dc9c39] hover:text-underline py-2 px-4"
                  href="#"
                  > IT Blog
                </a>
              </li>
                 <li class="mr-3">
                <a class="navbar-link-lt" href="/kontakty">Kontakt</a>
            </li>
              <li class="mr-3">
                <p
                  class="hidden px-4 py-2 text-white lg:inline-block"
                  href="#"
                  >I
              </p>
              </li>
                @if (Route::has('login'))
              <li class="mr-3">
                  <div class="">
                      @auth
                              <a class="inline-block px-4 py-2 text-white no-underline hover:text-orange-400" href="{{ route('dashboard') }}" >Dashboard</a>
                      @else
                          <a class="inline-block px-4 py-2 text-white no-underline hover:text-orange-400" href="{{ route('login') }}" >Přihlásit se</a>
                      @endauth
                      </div>
                  </li>
                  
          @auth                  
              <li class="mr-3">
                  <div class="">
                      <form method="POST" class="inline-block px-4 py-2 text-white no-underline hover:text-orange-400 hover:text-underline" action="{{ route('logout') }}" x-data>
                                  @csrf

                                  <a href="{{ route('logout') }}" @click.prevent="$root.submit();"> Odhlásit se </a>
                              </form>

                    @endauth       
                  </div>
                </li>
              @endif
            
            </ul>
          </div>

          <div :class= isOpen hidden class="items-center justify-end flex-1 pt-6 text-sm subpixel-antialiased text-white list-none lg:pt-0 lg:flex font-reckoner">


            <li class="mr-3">
                <a class="navbar-link-lt" href="/backend">Backend</a>
            </li>
            <li class="mr-3">
                <a class="navbar-link-lt" href="/ux-ui-design">UI & UX Design</a>
            </li>        
            <li class="mr-3">
                <a class="navbar-link-lt" href="/blog">IT Blog</a>
            </li>
             <li class="mr-3">
                <a class="navbar-link-lt" href="/kontakty">Kontakt</a>
            </li>
            <div class="px-2 mr-3">
                <p class="">I</p>
            </div>     
            
            @if (Route::has('login'))
                <li>
                    <div class="flex flex-row items-center mr-3">
                        @auth
                            <a class="inline-block px-4 text-orange-400 hover:underlinepy-2" href="{{ route('dashboard')}}">Dashboard</a>
                        @else
                            <a class="inline-block px-4 py-2 text-orange-400 hover:underline" href="{{ route('login')}}">Přihlásit se</a>
                        @endauth 

                        @auth                                                                  
                        <form class="mb-0" method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a class="items-center text-orange-400" href="{{ route('logout') }}" @click.prevent="$root.submit();">Odhlásit se</a>
                        @endauth
                        </form>
                    </div>       
                </li>
            @endif               
        </div>

        </nav>


      </header>

      <body class="bg-[#1e1e1e]">
      </body>-->
      @yield('body')
      @livewireScripts
  </html>
