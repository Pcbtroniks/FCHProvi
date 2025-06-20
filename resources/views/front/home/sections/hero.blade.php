<section id="hero-carousel" class="swiper w-full h-screen mySwiper3">
    <div class="swiper-wrapper hero-bg bg-cover w-full h-screen relative">
        
        <div class="swiper-slide">

            <div class="dark-overlay absolute -z-10 top-0 left-0 h-full w-full overflow-hidden">
                    <img class="w-full h-full bg-cover object-cover" src="{{ asset('/assets/img/hero/principal-1.jpg') }}" alt="Hero Background Image">
            </div>

            <div class="text-white text-center flex flex-col justify-center gap-3 h-full z-10 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="mx-auto">
                    <img class="w-60" src="{{ asset('assets/logo.png') }}" alt="Logo Hotel FCH Minerva">
                </div>
                <h2 class="text-5xl font-light" data-swiper-parallax-duration="400" data-swiper-parallax="-300">
                    “Donde el arte y diseño regional se encuentran con tu descanso”
                </h2>
                <span class="w-[21rem] lg:w-[41rem]  mx-auto border-b-4 border-main"></span>
                <p class="text-lg px-10">
                    Nuestros espacios son únicos y diferentes entre sí, diseñados por artistas regionales para que encuentres no sólo un área agradable estéticamente, sino una experiencia completa de descanso e inmersión en el arte.
                </p>
                <a target="_blanck" href="{{ route('rengin.direct-booking') }}">
                    <button class="cta-main-button w-80 bg-main mx-auto mt-3">
                        <span>Reservar Ahora</span>
                    </button>
                </a>
            </div>

        </div>    
        <!-- <div class="swiper-slide">

            <div class="dark-overlay absolute -z-10 top-0 left-0 h-full w-full overflow-hidden">
                    <img class="w-full h-full bg-cover object-cover" src="{{ asset('assets/img/rooms/ejecutiva.jpg') }}" alt="Hero Background Image">
            </div>

            <div class="text-white text-center flex flex-col justify-center gap-3 h-full z-10 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="mx-auto">
                    <img class="w-60" src="{{ asset('assets/logo.png') }}" alt="Logo Hotel FCH Minerva">
                </div>
                <h2 class="text-5xl font-light" data-swiper-parallax-duration="400" data-swiper-parallax="-300">
                    Perfecto para estancias largas
                </h2>
                <span class="w-[21rem] lg:w-[41rem]  mx-auto border-b-4 border-main"></span>
                <p class="text-lg px-10">
                    Estamos seguros de poder alcanzar sus más altas expectativas, considerando que día a día mejoramos la calidad en nuestros servicios e instalaciones.
                </p>
                <a target="_blanck" href="{{ route('rengin.direct-booking') }}">
                    <button class="cta-main-button w-80 bg-main mx-auto mt-3">
                        <span>Reservar Ahora</span>
                    </button>
                </a>
            </div>

        </div>    
        <div class="swiper-slide">

            <div class="dark-overlay absolute -z-10 top-0 left-0 h-full w-full overflow-hidden">
                    <img class="w-full h-full bg-cover object-cover" src="{{ asset('assets/img/installations/fachada-hotel.jpg') }}" alt="Hero Background Image">
            </div>

            <div class="text-white text-center flex flex-col justify-center gap-3 h-full z-10 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="mx-auto">
                    <img class="w-60" src="{{ asset('assets/logo.png') }}" alt="Logo Hotel FCH Minerva">
                </div>
                <h2 class="text-5xl font-light" data-swiper-parallax-duration="400" data-swiper-parallax="-300">
                    En el corazón de la perla tapatía
                </h2>
                <span class="w-[21rem] lg:w-[41rem]  mx-auto border-b-4 border-main"></span>
                <p class="text-lg px-10">
                    Estamos seguros de poder alcanzar sus más altas expectativas, considerando que día a día mejoramos la calidad en nuestros servicios e instalaciones.
                </p>
                <a target="_blanck" href="{{ route('rengin.direct-booking') }}">
                    <button class="cta-main-button w-80 bg-main mx-auto mt-3">
                        <span>Reservar Ahora</span>
                    </button>
                </a>
            </div>

        </div>    
        <div class="swiper-slide">

            <div class="dark-overlay absolute -z-10 top-0 left-0 h-full w-full overflow-hidden">
                    <img class="w-full h-full bg-cover object-cover" src="{{ asset('assets/img/installations/restarant.jpg') }}" alt="Hero Background Image">
            </div>

            <div class="text-white text-center flex flex-col justify-center gap-3 h-full z-10 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="mx-auto">
                    <img class="w-60" src="{{ asset('assets/logo.png') }}" alt="Logo Hotel FCH Minerva">
                </div>
                <h2 class="text-5xl font-light" data-swiper-parallax-duration="400" data-swiper-parallax="-300">
                    La comodidad al alcance de una reserva.
                </h2>
                <span class="w-[21rem] lg:w-[41rem]  mx-auto border-b-4 border-main"></span>
                <p class="text-lg px-10">
                    Estamos seguros de poder alcanzar sus más altas expectativas, considerando que día a día mejoramos la calidad en nuestros servicios e instalaciones.
                </p>
                <a target="_blanck" href="{{ route('rengin.direct-booking') }}">
                    <button class="cta-main-button w-80 bg-main mx-auto mt-3">
                        <span>Reservar Ahora</span>
                    </button>
                </a>
            </div>

        </div>     -->
    
    </div>
</section>