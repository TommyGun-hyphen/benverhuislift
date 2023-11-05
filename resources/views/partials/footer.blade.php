<footer class="">
    <div
        style="background:linear-gradient(
          rgba(0, 0, 0, 0.7), 
          rgba(0, 0, 0, 0.7)
        ), url('/images/footer-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

        <div class="w-4/5 mx-auto max-w-screen-xl px-4 mx-auto py-12 lg:py-24">
            <h2 class="text-3xl text-white font-black text-center mb-8">WANT TO RENT A MOVING LIFT?</h2>
            <p class="text-2xl text-white text-center font-light leading-10">We can be reached by telephone from 9:00 AM to 6:00 PM throughout the week.</p>
            <p class="text-2xl text-white text-center font-light leading-10">We are available 24/7 for emergency service.</p>
            <div class="flex justify-center items-center content-stretch flex-col md:flex-row mt-8">
                @include('partials.quote_button')
                <span class="p-3"></span>
                @include('partials.call_button')
            </div>
        </div>
    </div>
    <div class="bg-zinc-950 py-24 text-white">
        <div class="flex w-full justify-center md:justify-around text-center md:text-left lg:w-4/5 mx-auto text-xl font-bold tracking-wider px-6 md:px-0 flex-col md:flex-row">
            <ul>
                <li class="my-3">
                    <a href="#" class="underline">Prices</a>
                </li>
                <li class="my-3">
                    <a href="#" class="underline">Method</a>
                </li>
                <li class="my-3">
                    <a href="#" class="underline">Get a quote</a>
                </li>
            </ul>
            <ul>
                <li class="my-3">
                    <a href="#" class="underline">Frequently asked questions</a>
                </li>
                <li class="my-3">
                    <a href="#" class="underline">Contact us</a>
                </li>
                <li class="my-3">
                    <a href="#" class="underline">Terms and conditions</a>
                </li>
            </ul>
            <ul>
                <li class="my-3">
                    <a href="#" class="font-bold">Benverhuislift</a>
                </li>
                <li class="my-3">
                    <a href="#" class="font-light">221 B Baker st. <br> south london</a>
                </li>
                <li class="my-3">
                    <a href="#" class="font-light">Phone: 0695969527</a>
                </li>
                <li class="my-3">
                    <a href="#" class="font-light">Email: contact@benverhuislift.nl</a>
                </li>
            </ul>
        </div>
    </div>
    <a href="https://wa.me/0695969527" target="_blank" class="fixed text-4xl w-16 h-16 border-4 border-green-600 bg-green-500 block flex justify-center text-white items-center rounded-full shadow-xl" style="bottom: 30px; left: 30px"><i class="fa-brands fa-whatsapp"></i></a>
</footer>
