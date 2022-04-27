@extends('layouts.app')
<div class="relative ">
<main class="flex flex-auto mt-[70px] mb-[30px] md:mt-[120px] md:mb-[120px] subpixel-antialiased h-[492px] items-center px-12 xl:px-[215px]">
    <section class="text-center md:text-left xl:pr-20 md:pr-5">
        <h1 class="text-3xl text-orange-400">Web Design - Frontend</h1>
        <p class="text-2xl text-white nadpis-legit">David Houser</p>

        <p class="text-legit">Potřebuješ web se systémem na míru nebo se jen chceš dozvědět novinky ze světa “ajťáků”? Tak to jsi tady správně! My v LegitSolutions jdeme s dobou, používáme moderní technologie a zajistíme tobě nebo tvojí firmě nejen kvalitní webovky, ale i dlouhodobou podporu, rozumnou domluvu  a dáme si pozor i na to, abys platil jen za to, co opravdu potřebuješ. Tak na nic nečekej, brnkni, napiš maila nebo si alespoň přečti náš blog, kde se dozvíš co je dneska trendy.</p>
    
        <ul class="mt-6 list-none">
          <li class="py-2">
            <div class="flex items-center">
              <div>
                <span
                  class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-orange-400 rounded-full"
                  ><i class="fas fa-fingerprint"></i
                ></span>
              </div>
              <div>
                <h4 class="text-white nadpis-legit">
                  Carefully crafted components
                </h4>
              </div>
            </div>
          </li>
          <li class="">
            <div class="flex items-center">
              <div>
                <span
                  class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-orange-400 rounded-full"
                  ><i class="fab fa-html5"></i
                ></span>
              </div>
              <div>
                <h4 class="text-white nadpis-legit">Amazing page examples</h4>
              </div>
            </div>
          </li>
          <li class="">
            <div class="flex items-center">
              <div>
                <span
                  class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-orange-400 rounded-full"
                  ><i class="far fa-paper-plane"></i
                ></span>
              </div>
              <div>
                <h4 class="text-white nadpis-legit">Dynamic components</h4>
              </div>
            </div>
          </li>
        </ul>
      </section>

    <section class="hidden w-[350px] md:flex shrink-0 justify-end z-20">
        <div
          class="break-words rounded-lg shadow-md border-[2px] border-neutral-900 bg-[#1e1e1e]"
        >
          <img
            alt="..."
            src="../images/png/david.png"
            class="align-middle rounded-t-lg"
          />
          <blockquote class="relative p-4 mb-4">
            <svg
              preserveAspectRatio="none"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 583 95"
              class="absolute left-0 block w-full"
              style="height: 95px; top: -94px;"
            >
              <polygon
                points="-30,95 583,95 583,65"
                class="text-orange-400 fill-current"
              ></polygon>
            </svg>
            <h4 class="text-xl font-bold text-white">
              Lorem ipsum dolor sit amet.
            </h4>
            <p class="mt-2 font-light text-white text-md">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, illo.
            </p>
          </blockquote>
        </div>
    </section>
</main>
<main>
  </div>
  <section class="pb-10 bg-[#1e1e1e]">

  
  </section>
  <section class="py-5 bg-[#181818] z-20">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap justify-center mb-24 text-center">
        <div class="w-full px-4 lg:w-6/12">
          <h2 class="text-4xl text-orange-400 nadpis-legit">Naše elita</h2>
          <p class="m-4 text-white text-legit">
            Zrcadlo, zrcadlo pověz mi kdo dělá na internetu weby nejkrásnější?..
          </p>
        </div>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
          <div class="px-6">
            <img
              alt="..."
              src="../images/png/david.png"
              class="max-w-full mx-auto rounded-full shadow-lg"
              style="max-width: 120px;"
            />
            <div class="pt-6 text-center">
              <h5 class="text-xl text-white nadpis-legit">David Houser</h5>
              <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                Web Developer / UI & UX Design
              </p>
              <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                IT Služby 
              </p>
              <div class="mt-6">
                <button
                  class="w-8 h-8 mb-1 mr-1 text-white bg-[#48da7d] rounded-full outline-none focus:outline-none"
                  type="button"
                >
                  <i class="fab fa-twitter"></i></button
                ><button
                  class="w-8 h-8 mb-1 mr-1 text-white bg-blue-600 rounded-full outline-none focus:outline-none"
                  type="button"
                >
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
          <div class="px-6">
            <img
              alt="..."
              src="../images/png/jakub.png"
              class="max-w-full mx-auto rounded-full shadow-lg"
              style="max-width: 120px;"
            />
            <div class="pt-6 text-center">
              <h5 class="text-xl text-white nadpis-legit">Jakub Trčka</h5>
              <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                Backend / IT Služby 
              </p>
              <div class="mt-6">
                <button
                  class="w-8 h-8 mb-1 mr-1 text-white bg-[#fe7272] rounded-full outline-none focus:outline-none"
                  type="button"
                >
                  <i class="fab fa-google"></i></button
                ><button
                  class="w-8 h-8 mb-1 mr-1 text-white bg-[#48d97d] rounded-full outline-none focus:outline-none"
                  type="button"
                >
                  <i class="fab fa-facebook-f"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="text-center bg-[#1e1e1e] lg:text-left">
  <div class="p-4 text-center text-gray-200" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: 
    <a class="text-orange-400" href="https://legitsolutions.cz/">Legit Solutions</a>
  </div>
</footer>