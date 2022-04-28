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
    <main x-data="{ expanded: false }" class="fixed top-0 z-0 flex flex-wrap justify-between w-full py-3 bg-neutral-900">
      <section id="header-logo" class=" mt-[1px] text-white uppercase">
        <a href="/"><img class="absolute top-[11px] w-[80px] h-[80px]" src="../images/png/Logo.png" alt=""></a>

        <p class="pl-[75px] text-xl"><span class="text-orange-400">legit</span> solutions</p>
      </section>
      <div class="hidden text-[12px] leading-8 tracking-wider text-white uppercase lg:block">     
        <a class="mx-5 hover:text-orange-400" href="/">Domů</a>     
        <a class="mx-5 hover:text-orange-400" href="/backend">Grafika / Design</a>
        <a class="mx-5 hover:text-orange-400" href="/ux-ui-design">Backend / Databáze</a>
        <a class="mx-5 hover:text-orange-400" href="/blog">IT Blog</a>
        <a class="mx-5 hover:text-orange-400" href="/kontakty">Kontakty</a>
        <a>I</a>
        @if (Route::has('login'))
          @auth
            <a class="mx-5 hover:text-orange-400" href="{{ route('dashboard') }}">Dashboard</a>
          @else
            <a class="mx-5 hover:text-orange-400" href="{{ route('login') }}">Přihlásit se</a>
          @endauth
        @auth                  
              <form method="POST" class="mx-5" action="{{ route('logout') }}" x-data>
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();"> Odhlásit se </a>
              </form>      
        @endauth 
      @endif
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
      <section id="header-links-mobile" class="container leading-8 text-white lg:hidden">
        <div  x-show="expanded" x-collapse.duration.300ms>
          <ul class="pl-[80px] pt-[14px] text-[12px] tracking-wider uppercase">
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
<body class="bg-[#1e1e1e]">
  
</body>
<footer class="bottom-0 text-center bg-[#1e1e1e] lg:text-left">
  <div class="p-4 text-center text-gray-200" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: 
    <a class="text-orange-400" href="https://legitsolutions.cz/">Legit Solutions</a>
  </div>
</footer>
@yield('body')
@livewireScripts
</html>
