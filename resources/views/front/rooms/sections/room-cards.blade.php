
<section>


    <div class="w-full bg-main-light p-4 sm:px-16 ">

        {{-- Rooms --}}
            <div class="max-w-screen-2xl mx-auto">

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="h-full w-full object-cover lg:h-96 xl:h-80" src="{{asset('assets/img/rooms/simple.jpg')}}" alt="Suite Sencilla">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium capitalize">Suite Sencilla</h2>

                        <div>

                            <p class="text-sm">
                                Si requiere compartir habitación nuestra Suite Doble es su mejor opción, con dos camas dobles cada huésped disfruta de su propio espacio y del mejor descanso sin perturbación por parte de su acompañante.
                            </p>

                            <ul class="grid grid-cols-3 py-4 text-xs">
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Internet inalámbrico y WiFi gratuito</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Televisión plasma</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Señal de TV por cable</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Escritorio de trabajo</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Aire acondicionado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Telefono</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Set para planchado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Baño con acabado de mármol</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Espejo de vanidad</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Secadora de cabello</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Amenidades de baño</li>
                            </ul>

                        </div>

                        <div class="mt-8 xl:mt-4 justify-self-end">

                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="w-36 h-12 font-bold bg-main text-white text-sm">Reservar ahora</button>
                            </a>

                        </div>

                    </div>

                </div>

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="h-full w-full object-cover lg:h-96 xl:h-80" src="{{ asset('assets/img/rooms/Doble.jpg') }}" alt="Habitación Doble">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium">Suite Doble</h2>

                        <div>

                            <p class="text-sm">
                                Si requiere compartir habitación nuestra Suite Doble es su mejor opción, con dos camas dobles cada huésped disfruta de su propio espacio y del mejor descanso sin perturbación por parte de su acompañante.
                            </p>

                            <ul class="grid grid-cols-3 py-4 text-xs">
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Internet inalámbrico y WiFi gratuito</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Televisión plasma</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Señal de TV por cable</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Escritorio de trabajo</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Aire acondicionado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Telefono</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Set para planchado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Baño con acabado de mármol</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Espejo de vanidad</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Secadora de cabello</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Amenidades de baño</li>
                            </ul>

                        </div>

                        <div class="mt-4 justify-self-end">

                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="w-36 h-12 font-bold bg-main text-white text-sm">Reservar ahora</button>
                            </a>

                        </div>

                    </div>

                </div>

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="h-full w-full object-cover lg:h-96 xl:h-80" src="{{ asset('assets/img/rooms/master.jpg') }}" alt="Habitación Triple">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium">Master suite</h2>

                        <div>

                            <p class="text-sm">
                                Nuestra suite estrella, la más amplia. Con un gran baño con tina de hidromasaje y servicios especiales que no encontrarás en las demás habitaciones.
                            </p>

                            <ul class="grid grid-cols-3 py-4 text-xs">
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Internet inalámbrico y WiFi gratuito</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Televisión plasma</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Señal de TV por cable</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Escritorio de trabajo</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Aire acondicionado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Telefono</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Set para planchado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Baño con acabado de mármol</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Espejo de vanidad</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Secadora de cabello</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Amenidades de baño</li>
                            </ul>

                        </div>

                        <div class="mt-4 justify-self-end">

                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="w-36 h-12 font-bold bg-main text-white text-sm">Reservar ahora</button>
                            </a>

                        </div>

                    </div>

                </div>

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="h-full w-full object-cover lg:h-96 xl:h-80" src="{{ asset('assets/img/rooms/urban.jpg') }}" alt="Suite Junior Sencilla">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium">Suite Junior Sencilla</h2>

                        <div>

                            <p class="text-sm">
                                Encuentre más espacio y mayor comodidad en nuestras Suite Junior Sencilla, pase una noche de descanso plena en una amplia cama, tome un “break”, disfrute de un café en los sillones particulares de ésta habitación y deléitese con todas las amenidades especiales que FCH Hotels pone a su alcance.
                            </p>

                            <ul class="grid grid-cols-3 py-4 text-xs">
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Internet inalámbrico y WiFi gratuito</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Televisión plasma</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Señal de TV por cable</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Escritorio de trabajo</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Aire acondicionado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Telefono</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Set para planchado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Baño con acabado de mármol</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Espejo de vanidad</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Secadora de cabello</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-main">•</span>Amenidades de baño</li>
                            </ul>

                        </div>

                        <div class="mt-4 justify-self-end">

                            <a target="_blank" href="{{route('rengin.direct-booking')}}">
                                <button class="w-36 h-12 font-bold bg-main text-white text-sm">Reservar ahora</button>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

    </div>


</section>