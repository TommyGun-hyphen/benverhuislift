@extends('layouts.app')

@section('content')
    <section class="bg-white"
        style="background:linear-gradient(
          rgba(0, 0, 0, 0.55), 
          rgba(0, 0, 0, 0.7)
        ), url('/images/hero-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: bottom">
        <div class="mx-auto grid w-4/5 lg:w-full max-w-screen-xl pb-8 lg:gap-8 xl:gap-0 lg:py-32 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 text-white pt-20 pb-12 lg:py-2">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl ">
                    We Help You<br>MOVE.</h1>
                {{-- <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-3xl ">
                Non anim dolor tempor ipsum do anim adipisicing mollit voluptate et ad in duis.
                Anim incididunt commodo in ad Lorem. Veniam incididunt qui eu irure ullamco nostrud.
                </p> --}}
                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 ">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-6 h-6 text-primary-500 " fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-white text-xl">Wij zijn landelijk
                            bereikbaar</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-6 h-6 text-primary-500 " fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-white text-xl">Onze dienstverlening is
                            efficiënt, snel en klantvriendelijk</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-6 h-6 text-primary-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-white text-xl">Wij zijn 24/7 beschikbaar. Op
                            elk moment</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-6 h-6 text-primary-500 " fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-white text-xl">Pariatur ea minim eu
                            consectetur
                            aliqua.</span>
                    </li>
                </ul>
                <div class="flex">
                    @include('partials.quote_button')
                    <div class="px-2"></div>
                    @include('partials.call_button')
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="./images/netherlands.png" alt="netherlands" style="filter: contrast(3)">
            </div>
        </div>
    </section>
    <section class="w-4/5 lg:w-full max-w-screen-xl mx-auto">
        <h1 class="text-3xl text-center my-12 font-bold text-slate-800">ONZE DIENSTEN</h1>
        <p class="text-lg">
            Wij helpen u graag met het verhuizen van grote objecten of assisteren bij een verhuizing. Wij zijn door het hele
            land bereikbaar en bieden de beste service
        </p>
        <ul class="flex flex-col lg:flex-row items-center justify-between mx-auto">
            <li class="w-full bg-white border border-gray-200 shadow my-5 mr-0 md:mr-5 grow text-slate-800">
                <div
                    style='background: url("/images/lifting.jpg"); width:100%; height: 300px; background-size: cover; background-position: bottom'>
                    {{-- <img class="" src="/images/lifting.jpg" alt="" /> --}}
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-center"><i class="fa-solid fa-couch"></i></h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-center">LIFT RENTAL</h5>
                    <h6 class="mb-2 text-lg tracking-tight text-center font-thin text-secondary-600">90€ / hour</h6>
                    {{-- <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                </div>
            </li>
            <li class="w-full bg-white border border-gray-200 shadow my-5 mx-0 md:mx-5 grow text-slate-800">
                <div
                    style='background: url("/images/assistance.jpg"); width:100%; height: 300px; background-size: cover; background-position: bottom'>
                    {{-- <img class="" src="/images/lifting.jpg" alt="" /> --}}
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-center"><i class="fa-solid fa-user"></i></h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-center">ASSISTANCE</h5>
                    <h6 class="mb-2 text-lg tracking-tight text-center font-thin text-secondary-600">50€</h6>
                    {{-- <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                </div>
            </li>
            <li class="w-full bg-white border border-gray-200 shadow my-5 ml-0 md:ml-5 grow text-slate-800">
                <div
                    style='background: url("/images/urgent.jpg"); width:100%; height: 300px; background-size: cover; background-position: bottom'>
                    {{-- <img class="" src="/images/lifting.jpg" alt="" /> --}}
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-center"><i class="fa-solid fa-clock"></i></h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-center">URGENT SERVICE</h5>
                    <h6 class="mb-2 text-lg tracking-tight text-center font-thin text-secondary-600">120€ / hour</h6>
                    {{-- <p class="mb-3 font-normal text-gray-700 ">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                </div>
            </li>
            <ul>
    </section>
    <hr class="my-8">
    <section class="w-4/5 lg:w-full max-w-screen-xl mx-auto">
        <h1 class="text-3xl text-center font-bold text-slate-800">WAT ONZE KLANTEN OVER ONS ZEGGEN</h1>
        <div class="flex flex-col lg:flex-row py-6 mx-auto">
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 my-5 mr-0 md:mr-5">
                <div class="flex items-center gap-4">
                    <div>
                        <div class="flex justify-center gap-0.5 text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                </div>

                <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit
                    rerum incidunt, a consequuntur recusandae ab saepe illo est quia
                    obcaecati neque quibusdam eius accusamus error officiis atque
                    voluptates magnam!
                </p>
            </blockquote>
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 my-5 mx-0 md:mx-5">
                <div class="flex items-center gap-4">
                    <div>
                        <div class="flex justify-center gap-0.5 text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                </div>

                <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit
                    rerum incidunt, a consequuntur recusandae ab saepe illo est quia
                    obcaecati neque quibusdam eius accusamus error officiis atque
                    voluptates magnam!
                </p>
            </blockquote>
            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 my-5 ml-0 md:ml-5">
                <div class="flex items-center gap-4">
                    <div>
                        <div class="flex justify-center gap-0.5 text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                </div>

                <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit
                    rerum incidunt, a consequuntur recusandae ab saepe illo est quia
                    obcaecati neque quibusdam eius accusamus error officiis atque
                    voluptates magnam!
                </p>
            </blockquote>
            <div>
    </section>
@endsection
