@extends('layout.master')
@section('contentlayout')
    @push('cssjsexternal')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    @endpush
    <section class="mt-32">
        <div class="max-w-screen-xl mx-auto">
            <div class="">
                <div class="container ms-auto">
                    {{-- <div class="flex  px-16">
                        <button type="button"
                            class="justify-end focus:outline-none text-white bg-red-100 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6"
                            id="tombol-cari">
                            All Categories
                        </button>
                        <button type="button"
                            class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                            Alam
                        </button>
                        <button type="button"
                            class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                            Hewan
                        </button>
                        <button type="button" id="tombol-cari"
                            class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                            Kecantikan
                        </button>
                        <button type="button"
                            class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                            Outfit
                        </button>
                        <button type="button"
                            class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                            DIY
                        </button>
                     </div> --}}

                    <div id="container">

                        <div class="max-w-screen-xl mx-auto">
                            <div class="flex flex-wrap items-center flex-container">
                                <div id="data"
                                    class=" p-4 bg-white columns-4 md:columns-2 sm:columns-1 lg:columns-3 xl:columns-4">

                                    <div class="break-inside-avoid-column">
                                        <div>

                                            <a href="">
                                                <img class="h-auto mb-4 max-w-[300px] rounded-lg transition duration-500 ease-in-out hover:scale-105"
                                                    {{-- src="/asset/${x.foto}" alt="" /> --}} </a>
                                        </div>
                                        <div class="flex justify-between mb-6 px-3">
                                            <div>
                                                {{-- <img src="/assets/${x.foto}" class="w-8 h-8" alt=""> --}}
                                            </div>
                                            <div class="">
                                                <h5 class="text-sm"></h5>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="w-20 h-20 bg-red-500 rounded-full flex fixed bottom-6 right-5">
                                <a href="/upload" class="text-xl m-auto"><i
                                        class="bi bi-plus text-6xl font-extrabold text-white"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection
@push('footerjsexternal')
    <script src="/javascript/explore.js"></script>
@endpush
