@extends('_layouts.main')

@section('body')
<!-- Hero section -->
<a name="home"></a>
<section class="px-4 pt-12 pb-10 sm:px-6 md:pb-12 md:pt-16 lg:px-8">
    <div class="mx-auto max-w-screen-xl">

        <!-- Hero text -->
        <div class="max-w-screen-4xl mx-auto w-full text-center xl:max-w-5xl">
            <p class="from-dark-600 to-dark-700 inline-flex items-center justify-center rounded-r-full rounded-tl-full bg-gradient-to-r py-2 px-6 text-sm font-medium tracking-wide text-white">
                Virtuelle Zeitreisen
            </p>
            <h1 class="mt-4 text-4xl font-bold text-white sm:text-5xl md:mt-5 md:text-6xl">
                Geschichte <span class="underline">bewegend</span> entdecken!
            </h1>
            <p class="mx-auto mt-4 max-w-lg text-xl text-green md:mt-5 md:max-w-3xl">
                Erleben Sie kreative Inszenierungen historischer Fakten in einzigartigen <br> 3D-Welten. Stadtrundfahrten werden zur faszinierenden Tourismusattraktion.
            </p>
        </div>

        <!-- Hero image -->
        <div class="mx-auto mt-12 max-w-screen-lg rounded-3xl shadow-xl">
            <img class="h-auto max-w-full rounded-3xl align-middle" src="{{ $page->baseUrl }}assets/images/breakdown_header.jpg">
        </div>
    </div>
</section>

<!-- Diagonal section separator -->
@include('_layouts.diagonal-down-right-dark-light')

<!-- Projects section -->
<a name="projects"></a>
<section class="bg-dark-800 py-10 px-4 sm:px-6 md:py-12 lg:px-8">

    <!-- Section text -->
    <div class="mx-auto w-full max-w-screen-xl">

        <!-- Featured work section header -->
        <div class="mx-auto w-full max-w-xl text-center md:max-w-2xl lg:max-w-3xl">
            <p class="from-dark-600 to-dark-700 inline-flex items-center justify-center rounded-r-full rounded-tl-full bg-gradient-to-r py-2 px-6 text-sm font-medium tracking-wide text-white">
                Unsere Projekte
            </p>

            <h2 class="mt-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl">Außergewöhnliches Erlebnis</h2>
            <h3 class="mt-2 text-3xl font-semibold text-white sm:text-4xl md:text-5xl">Phänomenale Gestaltung</h3>
            <h4 class="mt-2 text-3xl font-normal text-white sm:text-4xl md:text-5xl">Reibungsloser Ablauf</h4>
        </div>

        <!-- Section content -->
        <div class="mt-12 lg:mt-16">

            <!-- Project -->
            <div class="relative mx-auto mt-12 max-w-screen-lg">
                <div class="relative h-64 w-full rounded-t-3xl lg:rounded-3xl bg-cover bg-center shadow-xl lg:pt-23/50 lg:w-full lg:h-full" style="background-image: url({{ $page->baseUrl }}assets/images/timetravel_pfaffenthal.jpg);">
                </div>
                <div class="absolute left-4 top-4 z-20 block">
                    <a class="duration-250 hover:bg-white flex w-auto items-center justify-center rounded-full bg-green-300 py-3 px-8 text-sm font-semibold leading-snug text-dark transition ease-in-out focus:outline-none" href="https://sightseeing.lu/tour/petrusse-express-time-travel-in-the-old-town-vr/">
                    Hier Tickets buchen!
                    </a>
                </div>
                <div class="bg-dark-700 relative lg:absolute lg:-bottom-20 lg:-right-20 xl:w-96 z-20 block h-auto w-full rounded-b-3xl lg:rounded-3xl p-6 shadow-xl sm:p-8">
                    <p class="from-dark-800 to-dark-900 inline-flex items-center justify-center rounded-r-full rounded-tl-full bg-gradient-to-r py-2 px-6 text-xs font-medium tracking-wide text-white">
                        Luxembourg
                    </p>

                    <div class="mt-4 h-full lg:flex lg:flex-col lg:justify-between">
                        <div class="flex w-full flex-wrap">
                            <h3 class="text-3xl font-bold text-white lg:text-4xl">
                                Zeitreise Pfaffenthal
                            </h3>
                            <p class="text-dark-300 mt-2 text-base lg:mt-4 lg:text-lg">
                                Eine Wegebahn fährt Sie und bis zu 30 Mitfahrer durch das historische Viertel Pfaffenthal.
                                Kutscher Jos erklärt den Besuchern die Lebensumstände der Einwohner kurz vor der
                                Unabhängigkeit Luxembourgs. Der beeindruckende „Bockfels“ bot der Stadt einen strategisch wichtigen
                                Schutz vor Eroberern.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 lg:py-12"></div>

            <!-- Project -->
            <div class="relative mx-auto mt-12 max-w-screen-lg">
                <div class="relative h-64 w-full rounded-t-3xl lg:rounded-3xl bg-cover bg-center shadow-xl lg:pt-23/50 lg:w-full lg:h-full" style="background-image: url({{ $page->baseUrl }}assets/images/timetravel_otterberg.jpg);">
                </div>
                <div class="absolute right-4 top-4 z-20 block">
                    <a class="duration-250 hover:bg-white flex w-auto items-center justify-center rounded-full bg-green-300 py-3 px-8 text-sm font-semibold leading-snug text-dark transition ease-in-out focus:outline-none" href="https://www.otterbach-otterberg.de/tourismus-freizeit/gaestefuehrungen/time-travel/">
                        Hier Tickets buchen!
                    </a>
                </div>
                <div class="bg-dark-700 relative lg:absolute lg:-bottom-20 lg:-left-20 xl:w-96 z-20 block h-auto w-full rounded-b-3xl lg:rounded-3xl p-6 shadow-xl sm:p-8">
                    <p class="from-dark-800 to-dark-900 inline-flex items-center justify-center rounded-r-full rounded-tl-full bg-gradient-to-r py-2 px-6 text-xs font-medium tracking-wide text-white">
                        Otterberg
                    </p>

                    <div class="mt-4 h-full lg:flex lg:flex-col lg:justify-between">
                        <div class="flex w-full flex-wrap">
                            <h3 class="text-3xl font-bold text-white lg:text-4xl">
                                Stadtgeschichte Otterberg
                            </h3>
                            <p class="text-dark-300 mt-2 text-base lg:mt-4 lg:text-lg">
                                Ein Planwagen, der von den Wallachen Herkules und Nero gezogen wird, fährt 16 Besucher durch die
                                Wallonenstadt.
                                Erleben Sie mit Cellerar Mattheus und Handwerker Jean-Francois die Blütezeit der
                                Zisterzienser Mönche und den Aufstieg Otterbergs zu einer der größten Handels- und
                                Handwerkerstädte der Westpfalz.
                                Die historische Abtei steht heute noch und ist die zweitgrößte Kirche der Pfalz.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 lg:py-12"></div>

            <!-- Project -->
            <div class="relative mx-auto mt-12 max-w-screen-lg">
                <div class="relative h-64 w-full rounded-t-3xl lg:rounded-3xl bg-cover bg-center shadow-xl lg:pt-23/50 lg:w-full lg:h-full" style="background-image: url({{ $page->baseUrl }}assets/images/timetravel_belval.jpg);">
                </div>
                <div class="absolute left-4 top-4 z-20 block">
                    <a class="duration-250 hover:bg-white flex w-auto items-center justify-center rounded-full bg-green-300 py-3 px-8 text-sm font-semibold leading-snug text-dark transition ease-in-out focus:outline-none" href="https://sightseeing.lu/tour/time-travel-belval-school-group-tickets/">
                        Hier Tickets buchen!
                    </a>
                </div>
                <div class="bg-dark-700 relative lg:absolute lg:-bottom-20 lg:-right-20 xl:w-96 z-20 block h-auto w-full rounded-b-3xl lg:rounded-3xl p-6 shadow-xl sm:p-8">
                    <p class="from-dark-800 to-dark-900 inline-flex items-center justify-center rounded-r-full rounded-tl-full bg-gradient-to-r py-2 px-6 text-xs font-medium tracking-wide text-white">
                        Esch-sûr-Alzette
                    </p>

                    <div class="mt-4 h-full lg:flex lg:flex-col lg:justify-between">
                        <div class="flex w-full flex-wrap">
                            <h3 class="text-3xl font-bold text-white lg:text-4xl">
                                Kulturerbe Alzette-Belval
                            </h3>
                            <p class="text-dark-300 mt-2 text-base lg:mt-4 lg:text-lg">
                                Lernen Sie die Geschichte der Minett-Region und deren Bewohner kennen.
                                Die Reisebegleiter Pirchen und sein Enkel Emil fahren von der
                                ehemaligen Mineralwasserquelle Source Belval bis hin zu dem Hüttengelände der
                                ehemaligen ARBED-Werke.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:py-12"></div>
        </div>


</section>

<!-- Diagonal section separator -->
@include('_layouts.diagonal-up-right-light-dark')

<!-- Services section -->
<a name="services"></a>
<section class="bg-dark-900 px-4 pt-10 pb-10 sm:px-6 md:pt-12 md:pb-12 lg:px-8">
    <div class="mx-auto flex w-full max-w-screen-xl flex-wrap items-center">
        <div class="flex w-full flex-wrap">

            <!-- Section header with button -->
            <div class="relative flex w-full w-full lg:w-1/3">
                <div class="relative flex w-full">
                    <div class="flex-start relative flex w-full flex-wrap lg:flex-col">
                        <div class="relative w-full">
                            <p class="from-dark-600 to-dark-700 inline-flex items-center justify-center rounded-r-full rounded-tl-full bg-gradient-to-r py-2 px-6 text-sm font-medium tracking-wide text-white">
                                Unsere Leistungen
                            </p>
                            <h2 class="mt-6 text-left text-3xl font-bold text-white sm:text-4xl md:text-5xl">
                                Planung & Umsetzung
                            </h2>
                            <h2 class="mt-2 text-xl font-normal text-white sm:text-2xl md:text-3xl">aus einer Hand</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2x6 features grid -->
            <div class="relative mt-16 flex w-full lg:w-2/3 lg:pl-8">
                <div class="grid w-full gap-y-10 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-16">

                    <!-- Feature -->
                    <div class="relative flex w-full flex-col">
                        <span class="from-dark-600 to-dark-700 flex h-16 w-16 items-center justify-center rounded-3xl bg-gradient-to-r text-center text-green-300 shadow-xl">
                            <img class="h-10 w-10 items-center rounded-2xl" src="{{ $page->baseUrl }}assets/images/consulting.svg">
                        </span>
                        <h4 class="mt-4 text-2xl font-semibold text-white">
                            Beratung
                        </h4>
                        <p class="mt-1 max-w-md text-sm leading-relaxed text-green-300">
                            Kompetente Beratung zugeschnitten auf Ihre Bedürfnisse
                        </p>
                    </div>

                    <!-- Feature -->
                    <div class="relative flex w-full flex-col">
                        <span class="from-dark-600 to-dark-700 flex h-16 w-16 items-center justify-center rounded-3xl bg-gradient-to-r text-center text-green-300 shadow-xl">
                            <img class="h-10 w-10 items-center rounded-2xl" src="{{ $page->baseUrl }}assets/images/concept.svg">
                        </span>
                        <h4 class="mt-4 text-2xl font-semibold text-white">
                            Konzept
                        </h4>
                        <p class="mt-1 max-w-md text-sm leading-relaxed text-green-300">
                            Entwicklung von bodenständigen Konzepten
                        </p>
                    </div>

                    <!-- Feature -->
                    <div class="relative flex w-full flex-col">
                        <span class="from-dark-600 to-dark-700 flex h-16 w-16 items-center justify-center rounded-3xl bg-gradient-to-r text-center text-green-300 shadow-xl">
                            <img class="h-10 w-10 items-center rounded-2xl" src="{{ $page->baseUrl }}assets/images/3d.svg">
                        </span>
                        <h4 class="mt-4 text-2xl font-semibold text-white">
                            3D Design
                        </h4>
                        <p class="mt-1 max-w-md text-sm leading-relaxed text-green-300">
                            Erstellung digitaler Modelle und kompletten 3D-Welten
                        </p>
                    </div>

                    <!-- Feature -->
                    <div class="relative flex w-full flex-col">
                        <span class="from-dark-600 to-dark-700 flex h-16 w-16 items-center justify-center rounded-3xl bg-gradient-to-r text-center text-green-300 shadow-xl">
                            <img class="h-10 w-10 items-center rounded-2xl" src="{{ $page->baseUrl }}assets/images/panorama.svg">
                        </span>

                        <h4 class="mt-4 text-2xl font-semibold text-white">
                            Panoroma
                        </h4>
                        <p class="mt-1 max-w-md text-sm leading-relaxed text-green-300">
                            Erstellung von 360°-Panoramen für unterschiedliche Anwendungsfälle
                        </p>
                    </div>

                    <!-- Feature -->
                    <div class="relative flex w-full flex-col">
                        <span class="from-dark-600 to-dark-700 flex h-16 w-16 items-center justify-center rounded-3xl bg-gradient-to-r text-center text-green-300 shadow-xl">
                            <img class="h-10 w-10 items-center rounded-2xl" src="{{ $page->baseUrl }}assets/images/software.svg">
                        </span>

                        <h4 class="mt-4 text-2xl font-semibold text-white">
                            Software
                        </h4>
                        <p class="mt-1 max-w-md text-sm leading-relaxed text-green-300">
                            Individuelle Entwicklung & Integration von (mobilen) Apps
                        </p>
                    </div>

                    <!-- Feature -->
                    <div class="relative flex w-full flex-col">
                        <span class="from-dark-600 to-dark-700 flex h-16 w-16 items-center justify-center rounded-3xl bg-gradient-to-r text-center text-green-300 shadow-xl">
                            <img class="h-10 w-10 items-center rounded-2xl" src="{{ $page->baseUrl }}assets/images/virtualreality.svg">
                        </span>
                        <h4 class="mt-4 text-2xl font-semibold text-white">
                            Virtual Reality
                        </h4>
                        <p class="mt-1 max-w-md text-sm leading-relaxed text-green-300">
                            Interaktive Echtzeiterlebnisse kombinieren Design & Software
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA -->
<a name="cta"></a>
<section class="mx-auto max-w-screen-xl py-12 px-4 sm:px-6 md:py-16 lg:px-8">

    <!-- CTA card -->
    <div class="bg-dark-700 relative rounded-3xl py-16 lg:py-20">

        <!-- Right background diagonal -->
        <svg class="text-dark-700 absolute inset-y-0 top-0 right-1/4 z-20 h-full w-1/4" preserveaspectratio="none" viewbox="0 0 100 100" fill="currentcolor">
            <polygon points="0,0 100,0 0,100" />
        </svg>
        <div class="bg-dark-800 absolute inset-y-0 left-1/2 z-10 h-full w-1/2 rounded-r-3xl"></div>

        <!-- CTA content -->
        <div class="relative z-10 z-30 mx-auto flex flex-col items-center justify-center px-4 text-center sm:px-16 lg:flex-row lg:text-left">
            <div class="max-w-lg text-2xl font-bold sm:text-4xl lg:w-1/2">
                <h5 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                    Lust auf eine Zeitreise?
                </h5>
            </div>
            <div class="mt-10 flex max-w-lg justify-center lg:mt-0 lg:w-1/2 lg:justify-end">
                <a class="duration-250 hover:bg-green flex h-14 w-auto items-center justify-center rounded-full bg-white py-4 px-8 text-base font-semibold leading-snug text-green-900 transition ease-in-out hover:text-white focus:outline-none" href="mailto:post@urbantimetravel.com">
                    Kontakt aufnehmen
                </a>
            </div>
        </div>
    </div>
</section>
@endsection