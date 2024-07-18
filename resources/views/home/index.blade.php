<x-layout>
    <livewire:navbar />
    <main class="lg:max-h-96 md:h-full flex flex-col lg:max-w-6xl m-auto md:flex lg:flex-row">
        {{-- Carousel --}}
        <div id="default-carousel" class="relative m-3.5 lg:w-6/12 lg:h-full lg:pb-10"data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-72 sm:h-96 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="w-full h-full bg-black/40 absolute z-10"></div>
                    <img src="{{ asset('imgs/impact-ia.png') }}" alt="Inteligência Artifical"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <a class="absolute hover:underline top-44 text-lg sm:top-64 z-30 text-white font-semibold sm:text-2xl m-2 self-end h-full"
                        href="#">Como a inteligência artificial pode aumentar sua produtividade?</a>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="w-full h-full bg-black/40 absolute z-10"></div>
                    <img src="{{ asset('imgs/impact-ia.png') }}" alt="Inteligência Artifical"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <a class="absolute hover:underline top-44 text-lg sm:top-64 z-30 text-white font-semibold sm:text-2xl m-2 self-end h-full"
                        href="#">Como a inteligência artificial pode aumentar sua produtividade?</a>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="w-full h-full bg-black/40 absolute z-10"></div>
                    <img src="{{ asset('imgs/impact-ia.png') }}" alt="Inteligência Artifical"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <a class="absolute hover:underline top-44 text-lg sm:top-64 z-30 text-white font-semibold sm:text-2xl m-2 self-end h-full"
                        href="#">Como a inteligência artificial pode aumentar sua produtividade?</a>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        {{-- Banners --}}
        <div class="lg:w-6/12 md:self-center lg:self-end md:h-full md:w-full">
            <div class=" md:h-2/6 md:w-[97%] m-3.5 lg:h-[48%]">
                <div class="mx-auto max-w-screen-xl text-center relative">
                    <div class="w-full h-full bg-black/40 absolute"></div>
                    <img src="{{ asset('imgs/what_is_important_automated_test.png') }}"
                        alt="Como e a rotina de um desenvolvedor" class="w-full h-full lg:h-[186px] z-10 md:h-64 ">
                    <a
                        class="absolute top-28 text-xl sm:text-2xl sm:top-48 md:top-52 lg:top-32 left-2 mb-4 xl:text-3xl font-extrabold tracking-tight leading-none text-white md:text-3xl z-20 hover:underline">
                        We invest in the world’s potential
                    </a>
                </div>
            </div>
            <div class="md:h-[20%] md:w-[97%] m-3.5 lg:h-[48%]">
                <div class="mx-auto max-w-screen-xl text-center relative">
                    <div class="w-full h-full bg-black/40 absolute"></div>
                    <img src="{{ asset('imgs/what_is_important_automated_test.png') }}"
                        alt="Como e a rotina de um desenvolvedor"
                        class="w-full md:h-64 md:mt-20 lg:mt-0 lg:h-[186px] z-10">
                    <a
                        class="absolute top-28 text-xl sm:text-2xl sm:top-48  lg:top-32 left-2 mb-4 xl:text-3xl font-extrabold tracking-tight leading-none text-white md:text-3xl z-20 hover:underline">
                        We invest in the world’s potential
                    </a>
                </div>
            </div>
        </div>
    </main>
    <section class="flex items-center flex-col md:max-w-6xl md:flex-row md:mt-96 lg:m-auto ">
        <div class="m-4 md:mt-10">
            <livewire:card class="w-full"/>
        </div>
        <div class="m-4 md:mt-10">
            <livewire:card />
        </div>
        <div class="m-4 md:mt-10">
            <livewire:card />
        </div>
    </section>
    <footer>
        <livewire:footer />
    </footer>
</x-layout>
