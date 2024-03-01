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
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah kamu yakin akan keluar
                            aplikasi?</h3>
                        <a href="index.html" data-modal-hide="popup-modal" type="button"
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

    <section class="mt-32">
        <div class="max-w-sm mx-auto">
            <div id="toast-interactive"
                class="absolute hidden z-10 w-full max-w-xs p-4 text-gray-500 bg-red-50 rounded-lg shadow dark:bg-gray-800 dark:text-gray-400"
                role="alert">
                <div class="flex justify-center">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:text-blue-300 dark:bg-blue-900">
                        <i class="bi bi-trash"></i>
                        <span class="sr-only"></span>
                    </div>
                    <div class="ms-3 text-sm font-normal">
                        <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Hapus Foto</span>
                        <div class="mb-2 text-sm font-normal">Apakah anda yakin akan menghapus foto ini?</div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <a href="#"
                                    class=" inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800">Hapus</a>
                            </div>
                            <div>
                                <button type="button" href="#" aria-hidden="true"
                                    class=" inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700"
                                    data-dismiss-target="#toast-interactive" aria-label="Close">Batal</button>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-red-50 items-center justify-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                        data-dismiss-target="#toast-interactive" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-32">

        <div class="flex max-w-screen-lg mx-auto flex-container">
            <a href="/dashboard" type="button"
                class="  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full text-2xl w-12 h-10 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <i class="bi bi-arrow-left"></i>

            </a>
            <div class="flex flex-col w-2/3 p-3 bg-white">
                <div class="max-w-[500px] max-h-[500px] overflow-hidden rounded-2xl  bg-slate-200 mx-auto">
                    <img src="{{ asset('asset/' . $data->url) }}" class="w-full h-full" alt="" />
                </div>
                <div class="flex px-11 gap-4 mt-2 text-xl font-semibold items-center">
                    <div class="text-3xl">

                        <button type="submit" name="like">
                            <i id="btnlike" class="bi bi-heart"></i>
                        </button>
                        {{-- <form action="/like-fotos/{{ $data->id }}" method="post">
                            @csrf
                           
                        </form> --}}
                    </div>
                    <div>276 Suka</div>
                    <div>
                        <i class="bi bi-chat-dots text-3xl"></i>
                    </div>
                    <div>3 Komentar</div>
                </div>
            </div>


            <div class="w-2/4 p-1 bg-blue-00">
                <div class="flex flex-col">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-row gap-4">
                            <div>
                                <img src=" {{ asset('gallery/' . $user->pictures) }}" class="rounded-full w-[56px] h-[56px]"
                                    alt="" />
                            </div>
                            <div class="font-bold text-xl mt-2">{{ $user->nama_lengkap }}</div>
                        </div>

                        <div class="px-7 text-3xl">
                            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownDotsHorizontal"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li class="flex">
                                        <a href="/pilih"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white gap-4"><span
                                                class="bi bi-book"></span>
                                            <span>Tambahkan ke Album</span></a>
                                    </li>
                                    <li>
                                        <a href="/edit"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <span class="bi bi-pencil-square"></span>
                                            <span>Edit</span></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            onclick="notifdel()"><span class="bi bi-trash"></span> <span>Hapus</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="py-4 font-bold text-2xl"> {{ $data->judul_foto }}</div>
                    <div>
                        {{ $data->deskripsi_foto }}
                    </div>
                    <div class="bg-gray-00 py-4">kategori</div>
                    <div class="font-bold">Komentar</div>
                    <div class="bg-white w-full h-48 overflow-y-scroll">
                        <div class="flex gap-3 mt-3">
                            <div class="overflow-hidden">
                                <img src="/asset/img_5_sq.jpg" class="rounded-full w-[50px] h-[50px]" alt="" />
                            </div>
                            <div class="flex flex-col w-full">
                                <div class="font-bold">Araa</div>
                                <div class="text-gray-500 text-[12px]">16-10-2020</div>
                                <div>
                                    waw dimana itu bagus bangettt!!!waw dimana itu bagus
                                    bangettt!!!waw dimana itu bagus bangettt!!!
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3 mt-3">
                            <div class="overflow-hidden">
                                <img src="/asset/img_5_sq.jpg" class="rounded-full w-[50px] h-[50px]" alt="" />
                            </div>
                            <div class="flex flex-col w-full">
                                <div class="font-bold">Araa</div>
                                <div class="text-gray-500 text-[12px]">16-10-2020</div>
                                <div>
                                    waw dimana itu bagus bangettt!!!waw dimana itu bagus
                                    bangettt!!!waw dimana itu bagus bangettt!!!
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3 mt-3">
                            <div class="overflow-hidden">
                                <img src="/asset/img_5_sq.jpg" class="rounded-full w-[50px] h-[50px]" alt="" />
                            </div>
                            <div class="flex flex-col w-full">
                                <div class="font-bold">Araa</div>
                                <div class="text-gray-500 text-[12px]">16-10-2020</div>
                                <div>
                                    waw dimana itu bagus bangettt!!!waw dimana itu bagus
                                    bangettt!!!waw dimana itu bagus bangettt!!!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-1 mt-4">
                        <div class="items-baseline">
                            <input type="text" class="rounded-full border border-black px-4 w-[400px] h-[35px]"
                                placeholder="Tambahkan Komentar..." />
                        </div>
                        <div class="w-6 h-16 px-1 items-center text-2xl hover:text-blue-600">
                            <button class="bi bi-send-fill"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    {{-- <script>
        const btnlike = document.getElementById('btnlike');
        btnlike.addEventListener('click', function() {

            btnlike.classList.remove('bi-heart');
            btnlike.classList.add('bi-heart-fill');
            btnlike.classList.add('text-red-500');

        })
    </script> --}}
@endsection
@push('footerjsexternal')
    <script src="/javascript/exploredetail.js"></script>
@endpush
