@extends('layouts.app')

@section('content')
    <section class="w-4/5 lg:w-full max-w-screen-xl mx-auto mt-8">
        <h1 class="text-2xl font-bold text-center">ONZE VERHUISLIFTEN IN ACTIE!</h1>
        {{-- <p class="text-center text-lg">Beelden uit het hele land</p> --}}
        {{-- <hr class="my-8"> --}}
        <div class="my-16">
            <h2 class="text-center text-xl">Rijswijk</h2>
            <div class="splide mb-6 mt-2" id="splide-1" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="/images/Rijswijk/Rijswijk-1.jpg" alt="">
                        </li>

                        <li class="splide__slide">
                            <img src="/images/Rijswijk/Rijswijk-2.jpg" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/Rijswijk/Rijswijk-3.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-center text-xl">Scheveningen</h2>
            <div class="splide my-6" id="splide-2" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="/images/Scheveningen/Scheveningen-1.jpg" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/Scheveningen/Scheveningen-2.jpg" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="/images/Scheveningen/Scheveningen-3.jpg" alt="">
                        </li>
                        </li>
                        <li class="splide__slide">
                            <img src="/images/Scheveningen/Scheveningen-4.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-center text-xl">Haarlem</h2>
            <div class="splide my-6" id="splide-3" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="/images/Haarlem/Haarlem-1.jpg" alt="">
                        </li>

                        <li class="splide__slide">
                            <img src="/images/Haarlem/Haarlem-2.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
