@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 mt-8">Contact Us
    </h2>
    <p class="mb-2 lg:mb-4 font-light text-center text-gray-500  sm:text-xl">Got a technical
        issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.
    </p>
    <div class="flex flex-col">
        <div class="grow p-6 flex flex-col justify-center items-center">
                <h3 class="text-lg">If you have any questions or need any help. don't hesitate to </h3>
                <div class="my-6">
                     @include('partials.call_button')
                </div>
                <h3 class="text-lg">Or to contact us via WhatsApp</h3>
        </div>
        <section class="bg-white grow">
            <div class="py-4 px-4 mx-auto max-w-screen-md">

                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">email</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5     :ring-primary-500 :border-primary-500 "
                            placeholder="enter your email" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
                        <input type="text" id="subject"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500     :ring-primary-500 :border-primary-500 "
                            placeholder="Let us know how we can help you" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">message</label>
                        <textarea id="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500     :ring-primary-500 :border-primary-500"
                            placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300  :bg-primary-700 :ring-primary-800">Send
                        message</button>
                </form>
            </div>
        </section>
    </div>
@endsection
