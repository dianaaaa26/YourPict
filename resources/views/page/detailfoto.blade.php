@extends('layout.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('contentlayout')
    <section class="mt-32">
        @csrf
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
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin akan
                            menghapus foto ini?</h3>
                        <a href="/datadetailfoto/delete/{{ $dataFoto->id }}" data-modal-hide="popup-modal" type="button"
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

        <div class="flex max-w-screen-lg mx-auto flex-container">
            <a href="/dashboard" type="button"
                class="  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full text-2xl w-12 h-10 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <i class="bi bi-arrow-left"></i>

            </a>
            <div class="flex flex-col w-2/3 p-3 bg-white" id="datadetail">
                <div class="max-w-[480px] max-h-[470px] overflow-hidden rounded-2xl  bg-slate-200 mx-auto">
                    <img src="" id="fotodetail" class="w-full h-full" alt="" />
                </div>
                <div class="" id="data">
                    <div class="flex px-11 gap-4 mt-2 text-xl font-semibold items-center">

                        @csrf
                        <input type="hidden" name="suka" value="id">
                        @if ($likeCheck)
                            <button onclick="likkes()">
                                <i id="btn-like" class="bi bi-heart-fill text-red-500 text-3xl" id="btn-like"></i>
                            </button>
                        @else
                            <button onclick="likkes()">
                                <i id="btn-like" class="bi bi-heart text-red-500 text-3xl" id="btn-like"></i>
                            </button>
                        @endif

                        <div id="jumlahsuka"></div>
                        <div class="">
                            <i class=" bi bi-chat-dots text-3xl "></i>
                        </div>
                        <div id="jumlahkomentar"></div>
                    </div>
                </div>
            </div>


            <div class="w-2/4 p-1 bg-blue-00">
                <div class="flex flex-col">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-row gap-4">
                            <div>
                                <a href="/profile" id="profiluser">
                                    <img src="" id="profil" class="rounded-full w-[56px] h-[56px]"
                                        alt="" />
                                </a>
                            </div>
                            <div class="font-bold text-xl mt-2" id="username"></div>
                        </div>

                        <div id="drop">
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
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-50 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="/pilihalbum/{{ $dataFoto->id }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                <button class="bi bi-book"></button>
                                                <span>Tambahkan ke Album</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/editpostingan/{{ $dataFoto->id }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><span
                                                    class="bi bi-pencil-square"></span>
                                                <span>Edit</span></a>
                                        </li>
                                        <li>
                                            <button hrdata-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white items-start text-left"
                                                onclick="notifdel()"><span class="bi bi-trash items-start"></span>
                                                <span>Hapus</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-4 font-bold text-2xl" id="judulfoto"></div>
                    <div id="deskripsifoto">

                    </div>
                    <div class="bg-gray-00 py-4 text-blue-600" id="kategori"></div>
                    <div class="font-bold">Komentar</div>
                    <div class="bg-white h-48 w-98 overflow-y-scroll overflow-x-hidden" id="listkomentar">

                    </div>
                    <div class="flex gap-1 mt-4">
                        <div class="items-baseline">
                            <input type="text" name="isikomentar"
                                class="rounded-full border border-black px-4 w-[400px] h-[35px]"
                                placeholder="Tambahkan Komentar..." />
                        </div>
                        <div class="w-6 h-16 px-1 items-center text-2xl hover:text-blue-600">
                            <button onclick="kirimkankomentar()" class="bi bi-send-fill"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
        const btnlike = document.getElementById('loveButton');

        btnlike.addEventListener('click', function() {

            btnlike.classList.add('bi-heart-fill');
            btnlike.classList.add('text-red-500', 'bi-heart-fill', 'scale-150');
            btnlike.classList.add('scale-150');

            setTimeout(function() {
                button.classList.remove("scale-150"); // Menghapus kelas setelah 0.2 detik
            }, 200);

        })
    </script>

    <script>
        const notifDel = document.getElementById('toast-interactive');

        function notifdel() {
            notifDel.classList.remove('hidden');
        }

        // function animateButton() {
        //     var button = document.getElementById("myButton");
        //     button.classList.add("animate-pulse"); // Menambahkan kelas Tailwind untuk animasi pulse
        //     setTimeout(function() {
        //         button.classList.remove("animate-pulse"); // Menghapus kelas Tailwind setelah selesai
        //     }, 500);
        // }


        if ($('#btn-like').hasClass('bi-heart')) {
            $('#btn-like').removeclass('bi-heart').addClass('bi-heart-fill')
        } else {
            $('#btn-like').removeclass('bi-heart-fill').addClass('bi-heart')
        }
    </script>

    </body>

    </html>
@endsection
@push('footerjsexternal')
    <script src="/javascript/exploredetail.js"></script>
@endpush
