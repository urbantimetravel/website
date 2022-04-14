@extends('_layouts.main')

@section('body')
    <a name="home"></a>
    <section class='px-4 pt-12 pb-10 sm:px-6 md:pb-12 md:pt-16 lg:px-8'>
        <div class='mx-auto max-w-screen-xl'>

            <!-- Hero text -->
            <div class='max-w-screen-4xl mx-auto w-full text-center xl:max-w-5xl'>
                <p
                    class="from-dark-600 to-dark-700 inline-flex items-center justify-center rounded-r-full rounded-tl-full bg-gradient-to-r py-2 px-6 text-sm font-medium tracking-wide text-white">
                    Rechtliches
                </p>
                <h1 class='my-4 text-4xl font-extrabold text-white sm:text-5xl md:my-5 md:text-6xl'>
                    Impressum
                </h1>
            </div>

            <div class="mx-auto w-6/12">
                <!-- Company locations -->
                <div class='mt-8 grid gap-6 sm:mt-10 sm:grid-cols-2 sm:grid-rows-1 sm:gap-12 lg:mt-0'>

                    <div>
                        <h3 class='text-green mt-4 text-2xl font-bold'>
                            Wo finden Sie uns?
                        </h3>
                        <h5 class='mt-3 text-lg font-bold text-white'>
                            Luxembourg
                        </h5>
                        <p class='text-dark-300 mt-1 text-sm text-base'>
                            9, Rue du Laboratoire
                            <br>L-1911 Luxembourg
                        </p>
                        <h5 class='mt-3 text-lg font-bold text-white'>
                            Deutschland
                        </h5>
                        <p class='text-dark-300 mt-1 text-sm text-base'>
                            Trippstadter Str. 110
                            <br>D-67663 Kaiserslautern
                        </p>
                    </div>
                    <div>
                        <h3 class='text-green mt-4 text-2xl font-bold'>
                            Wer steckt dahinter?
                        </h3>
                        <h5 class='mt-3 text-lg font-bold text-white'>
                            Verwaltungsrat
                        </h5>
                        <p class='text-dark-300 mt-1 text-sm text-base'>
                            Johannes BERDIN, Michael HELDER, Alexander FRIDHI
                        </p>
                        <h5 class='mt-3 text-lg font-bold text-white'>
                            Handelsregister
                        </h5>
                        <p class='text-dark-300 mt-1 text-sm text-base'>
                            Luxembourg RCS B 216285
                        </p>
                        <h5 class='mt-3 text-lg font-bold text-white'>
                            Steueridentifikationsnummer
                        </h5>
                        <p class='text-dark-300 mt-1 text-sm text-base'>
                            LU 30174939<br />
                            DE 323392418
                        </p>
                        <h5 class='mt-3 text-lg font-bold text-white'>
                            Verantwortlich für die Inhalte der Webseite
                        </h5>
                        <p class='text-dark-300 mt-1 text-sm text-base'>
                            Urban Timetravel S.A.<br />9, Rue du Laboratoire<br />L-1911 Luxembourg
                        </p>
                    </div>
                </div>
                <!-- Disclaimer Links -->
                <div>
                    <h3 class='text-green mt-4 text-2xl font-bold'>
                        Wer ist verantwortlich?
                    </h3>
                    <p class='text-dark-300 mt-1 text-sm text-base'>
                        Gemäß §7 TMG sind wir für eigene Informationen, die wir bereitstellen, verantwortlich. Gemäß §10 TMG
                        sind wir für fremde Informationen nicht verantwortlich. Wir werden selbstverständlich vor dem
                        Einbinden externer Links, deren Inhalte sorgfältig prüfen und regelmäßig überwachen. Um Verweise auf
                        unsere Inhalte von externen Links unterscheiden zu können, sind externe Links durch dieses Symbol
                        <span>
                            <svg class="inline h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg></span> gekennzeichnet.
                    </p>
                </div>

                <!-- Disclaimer Copyright -->
                <div class="text-green">
                    <h3 class='mt-4 text-2xl font-bold'>
                        Wem gehören die Inhalte?
                    </h3>
                    <p class='text-dark-300 mt-1 text-sm text-base'>
                        Grundsätzlich unterlegen alle von uns erstellten Informationen dem Urheberrecht. Sollten Sie Inhalte weitergeben, bearbeiten oder vervielfältigen wollen, senden Sie uns bitte vorher eine Anfrage. Inhalte bzw. Werke von Dritten kennzeichnen wir entsprechend.
                    </p>
                    <h5 class='mt-3 text-lg font-bold text-white'>
                           Quellennachweis
                        </h5>
                        <ul class='mt-2 space-y-1 text-sm'>
                <li class='font-medium hover:text-white'><a href="https://jigsaw.tighten.com">Website Jigsaw Static Sitegenerator<span>
                            <svg class="inline h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg></span></a></li>
                            <li class='font-medium hover:text-white'><a href="https://www.tailwindawesome.com/resources/crator-studio">Webdesign Crator Studio<span>
                            <svg class="inline h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg></span></a></li>
                            <li class='font-medium hover:text-white'><a href="https://www.thenounproject.com">Icons The Noun Project<span>
                            <svg class="inline h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                <polyline points="15 3 21 3 21 9" />
                                <line x1="10" y1="14" x2="21" y2="3" />
                            </svg></span></a></li>
                        </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
