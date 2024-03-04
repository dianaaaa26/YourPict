@extends('layout.navbar')
@section('contentlogin')
    <section class="mt-32">
        <div id="gallery" class="relative w-full overflow-x-scrol-hidden" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 rounded-lg md:h-96 ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/asset/hero_2.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Inspirasi dan Motivasi</h5>
                        <p>
                            "Mendebarkan Pikiran dengan Inspirasi"
                        </p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/asset/hero_3.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Seni dan Kreativitas</h5>
                        <p>
                            "Mengukir Seni dalam Setiap Sentuhan"
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/asset/hero_4.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Kehidupan Sehari-hari dan Keseharian</h5>
                        <p>
                            "Jejak Petualangan yang Tak Terlupakan"
                        </p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/asset/lans1.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Alam dan Pemandangan:
                        </h5>
                        <p>
                            "Pemandangan Alam yang Memukau"
                        </p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/asset/hero_5.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Karya Seni Dapur</h5>
                        <p>
                            "Seni Memasak dan Karya Dapur Terbaik"
                        </p>
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/asset/intro-bg.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Alam dan Pemandangan:
                        </h5>
                        <p>
                            "Kehangatan Alam dalam Lensa"
                        </p>
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/asset/famili.jpeg"
                        class="absolute block max-w-full h-auto w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="" />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Cinta dan Hubungan
                        </h5>
                        <p>
                            "Momen yang Tak Terlupakan"
                        </p>
                    </div>
                </div>
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
    </section>

    <section class="mt-16">
        <div class="flex flex-col mb-5">
            <!-- <div class="bg-black w-full h-[640px]">
                                                                                                          <img src="/asset/intro-bg.jpg" class="bg-cover mix-blend-screen" />
                                                                                                        </div> -->
            <div class="flex justify-between p-20 mt-44" id="about">
                <div class="flex flex-col">
                    <div class="text-5xl">
                        <span class="italic">Welcome to</span>
                        <span class="font-fontutama text-red-600">YourPict</span>
                    </div>
                    <div class="w-[668px] h-[243px] mt-6" ">
                                                                                                              Unggah dan simpan foto moment anda, temukan berbagai teman Ayo
                                                                                                              temukan berbagai foto menarik lainya hanya di YourPict
                                                                                                            </div>
                                                                                                          </div>
                                                                                                          <div class=" bg-gray-400 w-[288px] h-[223px] overflow-hidden">
                                                                                                            <img src="/asset/img_2_sq.jpg" alt="" />
                                                                                                          </div>
                                                                                                        </div>


                                                                                                        <h1 class="text-center text-5xl font-fontutama ">Temukan Berbagai Kategori</h1>
                                                                                                        <div class="flex gap-7 p-5 justify-center">

                                                                                                          <div class="flex flex-col gap-7">

                                                                                                            <div class="bg-slate-300 w-[383px] h-[282px] rounded-xl overflow-hidden">
                                                                                                              <img src="/asset/b.jpeg" alt="" class="transition duration-500 ease-in-out hover:scale-105 w-full h-full" />

                                                                                                            </div>
                                                                                                            <div class="bg-yellow-300 w-[383px] h-[282px] rounded-xl overflow-hidden">
                                                                                                              <img src="/asset/img_5_sq.jpg" alt="" class="transition duration-500 ease-in-out hover:scale-105" />
                                                                                                            </div>
                                                                                                          </div>
                                                                                                          <div class="bg-green-300 w-[341px] h-[586px] rounded-xl overflow-hidden">
                                                                                                            <img src="/asset/img_1_vertical.jpg" class="h-full transition duration-500 ease-in-out hover:scale-105"
                                                                                                              alt="" />
                                                                                                          </div>
                                                                                                          <div class="flex flex-col gap-7">
                                                                                                            <div class="bg-slate-300 w-[383px] h-[282px] rounded-xl overflow-hidden">
                                                                                                              <img src="/asset/img_4_sq.jpg" class="transition duration-500 ease-in-out hover:scale-105" alt="" />
                                                                                                            </div>
                                                                                                            <div class="bg-yellow-300 w-[383px] h-[282px] rounded-xl overflow-hidden">
                                                                                                              <img src="/asset/img_7_sq.jpg" class="transition duration-500 ease-in-out hover:scale-105" alt="" />
                                                                                                            </div>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </section>

                                                                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
