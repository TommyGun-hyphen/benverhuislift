@extends('layouts.app')

@section('content')

<div class="flex max-w-screen-xl mx-auto my-12 flex-col lg:flex-row">
    <div class="p-4 md:p-12 basis-3/4 border border-slate-300 rounded rounded-md mx-6">
        <h1 class="text-3xl font-bold uppercase">GET A QUOTE</h1>
        <form action="/appointment" method="post">
            @csrf
            <section class="mt-8">
                <div class="bg-primary-600 text-white px-6 py-2 text-xl font-semibold uppercase rounded-md">
                    <h3>Address information</h3>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="grow flex flex-col mx-2 my-3">
                        <label class="font-semibold text-lg" for="input-street_name">Street name</label>
                        <input class="border border-slate-300 px-4 py-2 rounded-md" type="text" name="street_name" id="input-street_name">
                        @if($errors->has('street_name'))
                        <div class="text-red-600 text-sm">{{ $errors->first('street_name') }}</div>
                        @endif
                    </div>
                    <div class="grow flex flex-col mx-2 my-3">
                        <label class="font-semibold text-lg" for="input-house_number">House Number</label>
                        <input class="border border-slate-300 px-4 py-2 rounded-md" type="text" name="house_number" id="input-house_number">
                        @if($errors->has('house_number'))
                        <div class="text-red-600 text-sm">{{ $errors->first('house_number') }}</div>
                        @endif
                    </div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="grow flex flex-col mx-2 my-3">
                        <label class="font-semibold text-lg" for="input-postal_code">Postal code</label>
                        <input class="border border-slate-300 px-4 py-2 rounded-md" name="postal_code" type="text" id="input-postal_code">
                        @if($errors->has('postal_code'))
                        <div class="text-red-600 text-sm">{{ $errors->first('postal_code') }}</div>
                        @endif
                    </div>
                    <div class="grow flex flex-col mx-2 my-3">
                        <label class="font-semibold text-lg" for="input-city">City</label>
                        <input class="border border-slate-300 px-4 py-2 rounded-md" name="city" type="text" id="input-city">
                        @if($errors->has('city'))
                        <div class="text-red-600 text-sm">{{ $errors->first('city') }}</div>
                        @endif
                    </div>
                </div>
            </section>
            <section class="mt-8">
                <div class="bg-primary-600 text-white px-6 py-2 text-xl font-semibold uppercase rounded-md">
                    <h3>Moving details</h3>
                </div>
                <div class="grow flex flex-col mx-2 my-3">
                    <label class="font-semibold text-lg" for="input-first_name">Number of hours</label>
                    <input class="border border-slate-300 px-4 py-2 rounded-md" type="number" name="number_hours" value="1" id="input-last_name">
                    @if($errors->has('number_hours'))
                    <div class="text-red-600 text-sm">{{ $errors->first('number_hours') }}</div>
                    @endif
                </div>
                <div class="flex">
                    <div class="grow flex flex-col mx-2 my-3">
                        <label class="font-semibold text-lg" for="input-first_name">Date</label>
                        <input class="border border-slate-300 px-4 py-2 rounded-md" type="date" name="date" id="input-first_name">
                        @if($errors->has('date'))
                        <div class="text-red-600 text-sm">{{ $errors->first('date') }}</div>
                        @endif
                    </div>
                    <div class="shrink my-3">
                        <label class="font-semibold text-lg">Time</label>
                        <div class="flex">
                            <div class="mx-2  w-fit">
                                <select class="border w-18 border-slate-300 px-2 py-2 rounded-md" name="hours">
                                    <option value="00" selected>00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                            </div>
                            <div class="mx-2 w-fit">
                                <select class="border w-18 border-slate-300 px-2 py-2 rounded-md" name="minutes">
                                    <option value="00" selected>00</option>
                                    <option value="01">30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-8">
                <div class="bg-primary-600 text-white px-6 py-2 text-xl font-semibold uppercase rounded-md">
                    <h3>Contact information</h3>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="grow flex flex-col mx-2 my-3">
                        <label class="font-semibold text-lg" for="input-first_name">First name</label>
                        <input class="border border-slate-300 px-4 py-2 rounded-md" name="first_name" type="text" id="input-first_name">
                        @if($errors->has('first_name'))
                        <div class="text-red-600 text-sm">{{ $errors->first('first_name') }}</div>
                        @endif
                    </div>
                    <div class="grow flex flex-col mx-2 my-3">
                        <label class="font-semibold text-lg" for="input-last_name">Last name</label>
                        <input class="border border-slate-300 px-4 py-2 rounded-md" name="last_name" type="text" id="input-last_name">
                        @if($errors->has('last_name'))
                        <div class="text-red-600 text-sm">{{ $errors->first('last_name') }}</div>
                        @endif
                    </div>
                </div>
                <div class="grow flex flex-col mx-2 my-3">
                    <label class="font-semibold text-lg" for="input-first_name">Email address</label>
                    <input class="border border-slate-300 px-4 py-2 rounded-md" name="email" type="text" id="input-last_name">
                    @if($errors->has('email'))
                    <div class="text-red-600 text-sm">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="grow flex flex-col mx-2 my-3">
                    <label class="font-semibold text-lg" for="input-first_name">Phone number</label>
                    <input class="border border-slate-300 px-4 py-2 rounded-md" name="phone" type="text" id="input-last_name">
                    @if($errors->has('phone'))
                    <div class="text-red-600 text-sm">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
            </section>
            <section class="mt-12">
                <button class="mx-2 bg-primary-500 px-6 py-2 text-white font-semibold">Proceed</button>
            </section>
        </form>

    </div>
    <div class="mx-6">
        <div class="border border-slate-300 rounded-md px-6 py-12">
            <ul role="list" class="space-y-5">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-6 h-6 text-primary-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-black text-xl">Wij zijn landelijk
                        bereikbaar</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-6 h-6 text-primary-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-black text-xl">Onze dienstverlening is
                        efficiënt, snel en klantvriendelijk</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-6 h-6 text-primary-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-black text-xl">Wij zijn 24/7 beschikbaar. Op
                        elk moment</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-6 h-6 text-primary-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base font-medium leading-tight text-black text-xl">Pariatur ea minim eu
                        consectetur
                        aliqua.</span>
                </li>
            </ul>
        </div>
        <div class="rounded-md mt-4">
            <div id="googleMap" class="rounded-md" style="width:100%;height:400px;"></div>
        </div>
    </div>
</div>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
@endsection