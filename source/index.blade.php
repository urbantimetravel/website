@extends('_layouts.main')

@section('body')
<!-- Hero section -->
<a name="home"></a>
<section class='px-4 pt-12 pb-10 md:pb-12 md:pt-16 sm:px-6 lg:px-8'>
  <div class='mx-auto max-w-screen-xl'>

    <!-- Hero text -->
    <div class='mx-auto w-full text-center max-w-screen-4xl xl:max-w-5xl'>
      <p class="inline-flex justify-center items-center py-2 px-6 text-sm font-medium tracking-wide text-white bg-gradient-to-r rounded-r-full rounded-tl-full from-dark-600 to-dark-700">
        Virtuelle Zeitreisen
      </p>
      <h1 class='mt-4 text-4xl font-extrabold text-white md:mt-5 sm:text-5xl md:text-6xl'>
     Geschichte neu entdecken!
      </h1>
      <p class='mx-auto mt-4 max-w-lg text-xl md:mt-5 text-green-300 md:max-w-3xl'>
        Tauche ein in das <u>Urban Timetravel Metaverse</u>. Mit Virtual Reality Brille auf Zeitreise gehen. Einzigartiger Zugang zu Geschichte und Kultur. Demnächst auch in Deiner Region.
      </p>
    </div>
    
    <!-- Hero image -->
    <div class='mx-auto mt-12 max-w-screen-lg rounded-3xl shadow-xl'>
      <img class='max-w-full h-auto align-middle rounded-3xl' src='assets/images/hero.png'> 
    </div>
  </div>
</section>

<!-- Diagonal section separator -->
@include('_layouts.diagonal-down-right-dark-light')

<!-- Projects section -->
<a name="projects"></a>
<section class='py-10 px-4 md:py-12 bg-dark-800 sm:px-6 lg:px-8'>

  <!-- Section text -->
  <div class='mx-auto w-full max-w-screen-xl'>
    
          <!-- Featured work section header -->
          <div class='mx-auto w-full max-w-xl text-center lg:max-w-3xl md:max-w-2xl'>
            <p class="inline-flex justify-center items-center py-2 px-6 text-sm font-medium tracking-wide text-white bg-gradient-to-r rounded-r-full rounded-tl-full from-dark-600 to-dark-700">
              Unsere Projekte
            </p>
      
            <h2 class='mt-6 text-3xl font-extrabold text-white sm:text-4xl md:text-5xl'>
              @TODO: Text
            </h2>
          </div>

  <!-- Section content -->
  <div class='mt-12 lg:mt-16'>

  <!-- Work item -->
  <div class='relative mx-auto max-w-lg lg:max-w-none lg:mx-none'>
    <div class='lg:rounded-3xl rounded-t-3xl shadow-xl relative w-full lg:pt-23/50 lg:w-9/10 bg-cover bg-center h-64 lg:h-full' data-background-image="images/featured-work-image-01.jpg" style='background-image: url(assets/images/hero.png);'>
    </div>
    <div class='lg:rounded-3xl rounded-b-3xl shadow-xl h-auto relative w-full bottom-0 right-0 z-20 block p-6 sm:p-8 lg:p-12 bg-dark-700 lg:absolute lg:-bottom-25 lg:w-1/3 lg:h-full'>
      <div class='h-full lg:flex lg:flex-col lg:justify-between'>
        <div class='hidden lg:block'>
          <p class="inline-flex justify-center items-center py-2 px-6 text-xs font-medium tracking-wide text-white bg-gradient-to-r rounded-r-full rounded-tl-full from-dark-800 to-dark-900">
            Luxembourg
          </p>
        </div>
        <div class='flex flex-wrap w-full'>
          <h3 class='text-3xl font-bold text-white lg:text-4xl'>
            Zeitreise Luxembourg
          </h3>
          <p class='mt-2 text-base lg:mt-4 text-dark-300 md:text-lg'>
            @TODO: Text
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class='py-6 lg:py-28'></div>

  <!-- Work item -->
  <div class='relative mx-auto max-w-lg lg:max-w-none lg:mx-none'>
    <div class='lg:rounded-3xl rounded-t-3xl shadow-xl relative w-full lg:pt-23/50 lg:w-9/10 lg:ml-auto bg-cover bg-center h-64 lg:h-full' data-background-image="assets/images/hero.png" style='background-image: url(assets/images/hero.png);'>
    </div>
    <div class='lg:rounded-3xl rounded-b-3xl shadow-xl h-auto relative w-full bottom-0 left-0 z-20 block p-6 sm:p-8 lg:p-12 bg-dark-700 lg:h-full lg:absolute lg:-bottom-25 lg:w-1/3'>
      <div class='h-full lg:flex lg:flex-col lg:justify-between'>
        <div class='hidden lg:block'>
          <p class="inline-flex justify-center items-center py-2 px-6 text-xs font-medium tracking-wide text-white bg-gradient-to-r rounded-r-full rounded-tl-full from-dark-800 to-dark-900">
            Otterberg
          </p>
        </div>
        <div class='flex flex-wrap w-full'>
          <h3 class='text-3xl font-bold text-white lg:text-4xl'>
            Stadtgeschichte Otterberg
          </h3>
          <p class='mt-2 text-base lg:mt-4 text-dark-300 lg:text-lg'>
           @TODO: TEXT
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class='py-6 lg:py-28'></div>

  <!-- Work item -->
  <div class='relative mx-auto max-w-lg lg:max-w-none lg:mx-none'>
    <div class='lg:rounded-3xl rounded-t-3xl shadow-xl relative w-full lg:pt-23/50 lg:w-9/10 bg-cover bg-center h-64 lg:h-full' data-background-image="assets/images/hero.png" style='background-image: url(assets/images/hero.png);'>
    </div>
    <div class='lg:rounded-3xl rounded-b-3xl shadow-xl h-auto relative w-full bottom-0 right-0 z-20 block p-6 sm:p-8 lg:p-12 bg-dark-700 lg:absolute lg:-bottom-25 lg:w-1/3 lg:h-full'>
      <div class='h-full lg:flex lg:flex-col lg:justify-between'>
        <div class='hidden lg:block'>
          <p class="inline-flex justify-center items-center py-2 px-6 text-xs font-medium tracking-wide text-white bg-gradient-to-r rounded-r-full rounded-tl-full from-dark-800 to-dark-900">
            Esch-sûr-Alzette
          </p>
        </div>
        <div class='flex flex-wrap w-full'>
          <h3 class='text-3xl font-bold text-white lg:text-4xl'>
            Kulturerbe Alzette-Belval
          </h3>
          <p class='mt-2 text-base lg:mt-4 text-dark-300 md:text-lg'>
            @TODO: Text
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class='lg:py-12'></div>
</div>
  

</section>

<!-- Diagonal section separator -->
@include('_layouts.diagonal-up-right-light-dark')

<!-- Services section -->
<a name="services"></a>
<section class="px-4 pt-10 pb-10 md:pt-12 md:pb-12 bg-dark-900 sm:px-6 lg:px-8">
  <div class='flex flex-wrap items-center mx-auto w-full max-w-screen-xl'>
    <div class='flex flex-wrap w-full'>

      <!-- Section header with button -->
      <div class='flex w-full relative w-full lg:w-1/3'>
        <div class='flex relative w-full'>
          <div class='flex relative flex-wrap w-full flex-start lg:flex-col'>
            <div class='relative w-full'>
              <p class="inline-flex justify-center items-center py-2 px-6 text-sm font-medium tracking-wide text-white bg-gradient-to-r rounded-r-full rounded-tl-full from-dark-600 to-dark-700">
                Unsere Leistungen
              </p>
              <h2 class='relative mt-6 w-full text-3xl font-extrabold text-left text-white sm:text-4xl md:text-5xl'>
                Design & Software aus einer Hand
              </h2>
            </div>
          </div>
        </div>
      </div>

      <!-- 2x6 features grid -->
      <div class='lg:w-2/3 relative flex w-full mt-16 lg:pl-8'>
        <div class='grid gap-y-10 w-full sm:grid-cols-2 sm:gap-x-8 sm:gap-y-16'>

          <!-- Feature -->
          <div class='flex relative flex-col w-full'>
            <span class='flex justify-center items-center w-16 h-16 bg-gradient-to-r rounded-3xl shadow-xl from-dark-600 to-dark-700 text-green-300 text-center'>
            @TODO: Icon
            </span>
            <h4 class='mt-4 text-2xl font-semibold text-white'>
              Beratung
            </h4>
            <p class='mt-1 max-w-md text-lg leading-relaxed text-green-300'>
            @TODO: Text
            </p>
          </div>

          <!-- Feature -->
          <div class='flex relative flex-col w-full'>
          <span class='flex justify-center items-center w-16 h-16 bg-gradient-to-r rounded-3xl shadow-xl from-dark-600 to-dark-700 text-green-300 text-center'>
            @TODO: Icon
            </span>
            <h4 class='mt-4 text-2xl font-semibold text-white'>
              Konzept
            </h4>
            <p class='mt-1 max-w-md text-lg leading-relaxed text-green-300'>
            @TODO: Text
            </p>
          </div>

          <!-- Feature -->
          <div class='flex relative flex-col w-full'>
          <span class='flex justify-center items-center w-16 h-16 bg-gradient-to-r rounded-3xl shadow-xl from-dark-600 to-dark-700 text-green-300 text-center'>
            @TODO: Icon
            </span>
            <h4 class='mt-4 text-2xl font-semibold text-white'>
              3D Design
            </h4>
            <p class='mt-1 max-w-md text-lg leading-relaxed text-green-300'>
            @TODO: Text
            </p>
          </div>

          <!-- Feature -->
          <div class='flex relative flex-col w-full'>
          <span class='flex justify-center items-center w-16 h-16 bg-gradient-to-r rounded-3xl shadow-xl from-dark-600 to-dark-700 text-green-300 text-center'>
            @TODO: Icon
            </span>
            
            <h4 class='mt-4 text-2xl font-semibold text-white'>
              Panoroma
            </h4>
            <p class='mt-1 max-w-md text-lg leading-relaxed text-green-300'>
            @TODO: Text
            </p>
          </div>

          <!-- Feature -->
          <div class='flex relative flex-col w-full'>
          <span class='flex justify-center items-center w-16 h-16 bg-gradient-to-r rounded-3xl shadow-xl from-dark-600 to-dark-700 text-green-300 text-center'>
            @TODO: Icon
            </span>
            
            <h4 class='mt-4 text-2xl font-semibold text-white'>
              Software
            </h4>
            <p class='mt-1 max-w-md text-lg leading-relaxed text-green-300'>
            @TODO: Text
            </p>
          </div>

          <!-- Feature -->
          <div class='flex relative flex-col w-full'>
          <span class='flex justify-center items-center w-16 h-16 bg-gradient-to-r rounded-3xl shadow-xl from-dark-600 to-dark-700 text-green-300 text-center'>
            @TODO: Icon
            </span>
            <h4 class='mt-4 text-2xl font-semibold text-white'>
              Virtual Reality
            </h4>
            <p class='mt-1 max-w-md text-lg leading-relaxed text-green-300'>
            @TODO: Text
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- CTA -->
<a name="cta"></a>
<section class='py-12 px-4 mx-auto max-w-screen-xl md:py-16 sm:px-6 lg:px-8'>

  <!-- CTA card -->
  <div class="relative py-16 rounded-3xl bg-dark-700 lg:py-20">

    <!-- Right background diagonal -->
    <svg class='absolute top-0 right-1/4 inset-y-0 h-full text-dark-700 w-1/4 z-20' preserveaspectratio='none' viewbox='0 0 100 100' fill='currentcolor'>
      <polygon points='0,0 100,0 0,100'/>
    </svg>
    <div class='absolute w-1/2 inset-y-0 h-full left-1/2 bg-dark-800 z-10 rounded-r-3xl'></div>
   
    <!-- CTA content --> 
    <div class="flex relative z-10 z-30 flex-col justify-center items-center px-4 mx-auto text-center sm:px-16 lg:flex-row lg:text-left">
      <div class="max-w-lg font-bold text-2xl sm:text-4xl lg:w-1/2">
        <h5 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
          Lust auf eine Zeitreise?
        </h5>
      </div>
      <div class="max-w-lg flex justify-center mt-10 lg:w-1/2 lg:mt-0 lg:justify-end">
        <a class="flex justify-center items-center py-4 px-8 w-auto h-14 text-base font-semibold leading-snug bg-white rounded-full transition ease-in-out duration-250 text-green-900 hover:text-white focus:outline-none hover:bg-dark-900" href="contact.html">
          In Verbindung setzen
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
