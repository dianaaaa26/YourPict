@extends('layout.master')
@section('contentlayout')
    @push('cssjsexternal')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    @endpush
    <section>

        <div id="popup-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
                    <button type="button"
                        class="absolute top-3 z-10 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <div>

                            <i class="bi bi-trash text-gray-400 text-3xl mt-2 mb-2"></i>
                        </div>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin
                            menghapus album {{ $album->nama_album }} ini? </h3>
                        <a href="/detailalbum/delete/{{ $album->id }}" data-modal-hide="popup-modal" type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                            Ya
                        </a>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>


        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit album
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="/updatealbum/{{ $album->id }}" method="post">
                            @csrf
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                                <input type="text" name="nama_album" value="{{ $album->nama_album }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <input type="text" name="deskripsi_album" value="{{ $album->deskripsion }}"
                                    placeholder="opsional..."
                                    class="bg-gray-50 py-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-start">

                                </div>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="mt-32">
        <div class="max-w-screen-xl mx-auto">
            <div class="">
                <div class="container ms-auto">


                    <div id="container">
                        <div class="flex justify-between p-5">
                            <div class="font-bold text-3xl px-3">{{ $album->nama_album }}</div>
                            <div class="flex gap-3">
                                <button class=""data-modal-target="authentication-modal"
                                    data-modal-toggle="authentication-modal" data-modal-toggle="popup-modal">

                                    <i class="bi bi-pencil-square text-2xl"></i>
                                </button>
                                <div>
                                </div>
                                <div>
                                    <button class="" hrdata-modal-target="popup-modal"
                                        data-modal-toggle="popup-modal">

                                        <i class="bi bi-trash text-2xl"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="p-5 px-10">{{ $album->deskripsion }}
                        </div>
                        <div class="max-w-screen-xl mx-auto">
                            <div class="flex flex-wrap items-center flex-container">
                                <div id=""
                                    class=" p-4 bg-white columns-4 md:columns-2 sm:columns-1 lg:columns-3 xl:columns-4">
                                    @foreach ($fotos as $foto)
                                        <div class="break-inside-avoid-column">

                                            <a href="/detailfoto/{{ $foto->id }}">
                                                <img src="{{ asset('/asset/' . $foto->url) }}"
                                                    class="h-auto mb-1 max-w-[300px] rounded-lg transition duration-500 ease-in-out hover:scale-105"
                                                    alt="" />
                                            </a>

                                            <div class="flex justify-between mb-6 px-2">
                                                <div>
                                                    <h1 class="font-bold w-48"> {{ $foto->judul_foto }}</h1>
                                                </div>
                                                <div class=""> {{ $foto->created_at->format('d-m-Y') }}</div>

                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                </a>
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
