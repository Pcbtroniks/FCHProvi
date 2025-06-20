<section>

    <div class="space-y"></div>


    <div class="space-y"></div>
    <div class="lg:p-20 p-0 bg-main-light">

        <div class="card-shadow flex md:grid md:grid-cols-2 flex-col-reverse">

            <div class="px-10 md:mx-auto my-6">
                
                <h3 class="font-bold text-3xl mb-10">Puntos de Interes cercanos</h3>
                <div class="space-y"></div>
                <ul class="">
                    <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">•</span> Aeropuerto internacional de Guadalajara Miguel Hidalgo y Costilla a 35min.</li>
                    <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">•</span> Central de autobuses de Guadalajara a 25min.</li>
                    <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">•</span> Tequila a 1hr.</li>
                    <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">•</span> Guachimontones a 1hr 9min</li>
                    <li class="text-xl mb-2"> <span class="font-bold text-3xl text-main">•</span> Tonalá a 38min</li>
                </ul>

                <div class="my-12 hidden">
                    <button class="w-36 h-12 font-bold bg-main text-white text-sm">ver todos</button>
                </div>
            </div>

            <div>
                <div class="w-full">
                    <div class="w-full max-h-96 h-96 slider relative overflow-hidden">
                        <div class="w-full h-full slide absolute opacity-0 transition-opacity duration-1000 active">
                            <img class="w-full block max-h-96 h-96 object-cover active" src="{{ asset('assets/img/places/gdl.jpg') }}" alt="Slider Image">
                        </div>
                        <div class="w-full h-full slide absolute opacity-0 transition-opacity duration-1000 active">
                            <img class="w-full block max-h-96 h-96 object-cover active" src="{{ asset('assets/img/places/guachimontones.jpg') }}" alt="Slider Image">
                        </div>
                        <div class="w-full h-full slide absolute opacity-0 transition-opacity duration-1000 active">
                            <img class="w-full block max-h-96 h-96 object-cover active" src="{{ asset('assets/img/places/tequila.jpg') }}" alt="Slider Image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>