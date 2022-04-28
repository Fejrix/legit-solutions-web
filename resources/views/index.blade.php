@extends('layouts.app')
<div class="relative ">
<main class="flex flex-auto mt-[70px] mb-[30px] md:mt-[120px] md:mb-[120px] subpixel-antialiased h-[492px] items-center px-12 xl:px-[215px]">
    <section class="text-center md:text-left xl:pr-20 md:pr-5">
        <h1 class="text-3xl text-orange-400 nadpis-legit">Web utkaný jen z těch nejlepších vláken</h1>

        <p class="text-legit">Pomáháme vizionářům plnit si svoje vize. Můžeme ti nabídnout to, co ostatní nazývají jen nutností. To, čemu spousta lidí a firem nepřikádá žádnou váhu. Jak se prezentuješ svému okolí. Odliš se z davu a ukaž, že kvalitní identita je hrdostí!</p>
    </section>

    <section class="hidden w-[350px] md:flex shrink-0 justify-end">
        <div
          class="break-words rounded-lg shadow-md border-[2px] border-neutral-900 bg-[#1e1e1e]"
        >
          <img
            alt="..."
            src="../images/png/main.png"
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
            <h2 class="text-xl font-bold text-white">
              Přidej se do Legit komunity!
            </h2>
            <p class="mt-2 font-light text-white text-md">
            Přečti si blog nebo se přidej do diskuse na jedné z našich <a class="text-orange-400 underline" href="#">sociálních sítí.</a> Chystáme velké věci, u kterých rozhodně nesmíš chybět!
            </p>
          </blockquote>
        </div>
    </section>
</main>
<main>
 
    <h2 class="self-center m-auto text-xl font-bold text-center text-orange-400 nadpis-legit w-100">
              Co ti můžeme nabídnout
            </h2>

  <section class="pb-10 bg-[#1e1e1e]">

    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap">
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
          <div
            class="relative flex flex-col w-full min-w-0 mb-8 break-words rounded-lg shadow-sm border-[2px] border-neutral-900 bg-[#1e1e1e] hover:border-[#fe7575] hover:none"
          >
          <a href="/backend">
          <div class="flex-auto px-4 py-5">
            <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center shadow-lg text-whit">
              <img class="absolute top-2 w-[75px] h-[75px]" src="../images/png/Logo-red.png" alt="">
              <i class="fas fa-award"></i>
            </div>
              <h6 class="text-xl font-semibold tracking-widest text-center text-[#f67070] uppercase ">Backend</h6>
              <p class="mt-2 mb-4 text-white">
                Jinými slovy mozek a kostra tvého webu. Bez toho by to nešlo. Jakub se o to s radostí postará.
              </p>
            </div>
          </a>
          </div>
        </div>
        <div class="w-full px-4 text-center md:w-4/12">
          <div
            class="relative flex flex-col w-full min-w-0 mb-8 break-words rounded-lg shadow-md border-[2px] border-neutral-900 bg-[#1e1e1e] hover:border-[#5ea2f6] hover:shadow-none"
          >
          <a href="/ux-ui-design">
          <div class="flex-auto px-4 py-5">
            <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center shadow-lg text-whit">
              <img class="absolute top-2 w-[75px] h-[75px]" src="../images/png/Logo-blue.png" alt="">
              <i class="fas fa-award"></i>
            </div>
              <h6 class="text-xl font-semibold tracking-widest text-center text-[#63aafe] uppercase ">UI & UX Design</h6>
              <p class="mt-2 mb-4 text-white">
                Na čem stojí první dojem? Jasně že na designu. Proto tu máme designéra Davida.
              </p>
            </div>
          </a>
          </div>
        </div>
        <div class="w-full px-4 pt-6 text-center md:w-4/12">
          <div
            class="relative flex flex-col w-full min-w-0 mb-8 break-words rounded-lg shadow-md border-[2px] border-neutral-900 bg-[#1e1e1e] hover:border-[#49dc7f] hover:shadow-none"
          >
          <a href="/IT Služby">
          <div class="flex-auto px-4 py-5">
            <div class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center shadow-lg text-whit">
              <img class="absolute top-2 w-[75px] h-[75px]" src="../images/png/Logo-green.png" alt="">
              <i class="fas fa-award"></i>
            </div>
              <h6 class="text-xl font-semibold tracking-widest text-center text-[#49dc7f] uppercase ">Ajťák dle potřeby</h6>
              <p class="mt-2 mb-4 text-white">
                Známe to všichni. Technologie nejsou dokonalé. Napiš a vytáhneme ti trn z paty.
              </p>
            </div>
          </div>
          </a>
        </div>
      </div>
      <div class="flex flex-wrap items-center my-24">
        <div class="w-full px-4 md:w-6/12">
          <h3 class="mb-2 text-3xl font-semibold tracking-widest text-orange-400 uppercase">Proč zrovna Legit Solutions
          </h3>
          <p
            class="mt-4 mb-4 text-base font-light tracking-widest text-white break-words"
          >
          Nic jako konkurence pro nás neexistuje. Jdeme si vlastní cestou a snažíme se dělat věci dobře. Uděláme co bude v našich silách, abys byl s výsledkem spokojený. Nemáš ještě jasnou představu? Nevadí. Pomůžeme, poradíme, vyřešíme... Zkrátka tak, jak by to mělo být.
          </p>
         
        </div>
        <div class="w-full px-2 ml-auto md:w-5/12">
          <div
            class="relative flex flex-col w-full min-w-0 mb-6 break-words rounded-lg shadow-md border-[2px] border-neutral-900 bg-[#1e1e1e]"
          >
            <img
              alt="..."
              src="../images/png/legit-mac.jpg"
              class="w-full align-middle rounded-t-lg"
            />
            <blockquote class="relative p-8 mb-4">
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
              <h4 class="text-xl font-semibold tracking-widest text-white uppercase">
                
              </h4>
              <p class="mt-2 font-light text-white text-md">
                Působíme v celé řadě odvětví a máme v plánu se zapojit do různých neziskovek. Ať už jako partneři, tak i jako organizátoři různých soutěží, pro nadějné talenty.
              </p>
            
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  
  </section>
  <section class="relative py-20">
    <div
      class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
      style="height: 80px;"
    >
    </div>
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap items-center">
        <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
          <img
            alt="..."
            class="max-w-full rounded-lg shadow-lg"
            src="../images/png/ajtaci.png" 
          />
        </div>
        <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
          <div class="md:pr-12">

            <h3 class="text-3xl text-orange-400 nadpis-legit">Ajťák Hojzer pomůže</h3>
            <p class="mt-4 text-white text-legit">
                Hojzer je opak Luboše, totální kapacita v oboru. Týpek prostě ví kdy a kde být aby ti systém šlapal. Máš li problém třikrát vyslov kouzelné zaříkadlo a Hojzer vyjede ve svém batmobilu.
            </p>
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
              <li class="py-2">
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
              <li class="py-2">
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
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-[#181818]">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap justify-center mb-24 text-center">
        <div class="w-full px-4 lg:w-6/12">
          <h2 class="text-4xl text-orange-400 nadpis-legit">Naše elita</h2>
          <p class="m-4 text-white text-legit">
            Zrcadlo, zrcadlo, řekni mi, kdo dělá na internetu weby nejkrásnější?
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

        <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
          <div class="px-6">
            <img
              alt="..."
              src="../images/png/jindra.jpg"
              class="max-w-full mx-auto rounded-full shadow-lg"
              style="max-width: 120px;"
            />
            <div class="pt-6 text-center">
              <h5 class="text-xl text-white nadpis-legit">Jindřich Zdražil</h5>
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

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<div class="absolute left-0 w-11/12 top-0 opacity-[2%] hidden xl:block z-1 pointer-events-none">
  <img src="../images/png/background-2.png" alt="">
</div>