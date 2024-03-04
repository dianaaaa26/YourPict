<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/build.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <link rel="icon" href="/asset/icon.png">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>

    <title>YourPict</title>
    @stack('cssjsexternal')
    @push('cssjsexternal')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    @endpush
</head>

<body>
    <nav class="top-0 z-20 fixed w-full shadow-xl ">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto gap-4 h-24 sm:max-w-screen-sm bg-white">
            <div class="flex bi bi-camera-fill text-4xl gap-3 text-red-500 sm:text-sm">
                <div class="font-fontutama text-4xl text-black sm:text-sm">YourPict</div>
                <div class="px-9">
                    <a href="/dashboard"><i class="bi bi-house-fill text-black text-3xl"></i></a>
                </div>
            </div>
            <div class=" ">

                <form action="/dashboard" method="get">

                    <input type="text" name="cari"
                        class="bi bi-search rounded-full h-14 px-4 w-[671px] bg-slate-500 " placeholder="Search.... " />
                    <button type="submit"
                        class="bi bi-search bg-slate-200 h-14 px-4 rounded-3xl hover:bg-blue-300 text-gray-400 "
                        id="tombol-cari"></button>
                </form>
            </div>


            {{-- <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
            class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
            type="button">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 14 20">
                <path
                    d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
            </svg>

            <div
                class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
            </div>
        </button> --}}

            <!-- Dropdown menu -->
            {{-- <div id="dropdownNotification"
            class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
            aria-labelledby="dropdownNotificationButton">
            <div
                class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                Notifications
            </div>
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="" alt="Jese image">
                        <div
                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                            <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                <path
                                    d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's
                            up? All set for the
                            presentation?"</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                    </div>
                </a>
                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/asset/hero_2.jpg" alt="Joseph image">
                        <div
                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                            <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 18">
                                <path
                                    d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span
                                class="font-medium text-gray-900 dark:text-white">5 others</span> started following
                            you.</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
                    </div>
                </a>
                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/asset/profile-picture-3.jpg" alt="Bonnie image">
                        <div
                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                            <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 18">
                                <path
                                    d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> and <span
                                class="font-medium text-gray-900 dark:text-white">141 others</span> love your story.
                            See it and view
                            more stories.</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
                    </div>
                </a>
                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/asset/profile-picture-4.jpg"
                            alt="Leslie image">
                        <div
                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                            <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 18">
                                <path
                                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span>
                            mentioned you in a
                            comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span>
                            what do you say?</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                    </div>
                </a>
                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="" alt="Robert image">
                        <div
                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                            <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 14">
                                <path
                                    d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full ps-3">
                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a
                            new video:
                            Glassmorphism - learn how to implement the new design trend.</div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                    </div>
                </a>
            </div>
            <a href="#"
                class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                <div class="inline-flex items-center ">
                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path
                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    View all
                </div>
            </a>
        </div> --}}
            <!-- notifikasi -->

            <div class="overflow-hidden p-7">

                <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-[70px] h-[70px] rounded-full" src="{{ asset('asset/' . $user->pictures) }}"
                        alt="user photo" />
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatar"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-50 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="flex  items-center gap-3 px-3 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-bold">
                            <a href="/profile/{{ $user->id }}" id="profiluserme"
                                class="block py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">
                                <img src="{{ asset('asset/' . $user->pictures) }}" class="w-10 h-10 rounded-full"
                                    alt="" id="profiluserme" />
                        </div>
                        <div class="font-medium truncate" id="profiluserme">{{ $user->nama_lengkap }}</div>
                        </a>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownUserAvatarButton">
                        <li>
                            <a href="/editpassword"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i
                                    class="bi bi-gear-fill px-3">
                                    <span class="px-3">Ubah Password</span></i></a>
                        </li>
                        <li class="">
                            <a href="/upload"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i
                                    class="bi bi-cloud-arrow-up px-3">
                                    <span class="px-3">Upload</span></i></a>
                        </li>
                        <li class="">
                            <a href="/album"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white gap-5"><i
                                    class="bi bi-book px-3">
                                    <span class="px-3">Album</span></i></a>
                        </li>
                    </ul>
                    <div class="py-2">

                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i
                                class="bi bi-box-arrow-in-left px-3">
                                <span class="px-3">Logout</span></i></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('contentlayout')

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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah kamu yakin akan
                            keluar
                            aplikasi?</h3>
                        <a href="/logout" data-modal-hide="popup-modal" type="button"
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   

    <script>
        const notifDel = document.getElementById('toast-interactive');

        function notifdel() {
            notifDel.classList.remove('hidden');
        }
    </script>
    @stack('footerjsexternal')
    @push('footerjsexternal')
        <script src="/javascript/exploredetail.js"></script>
    @endpush
    



</body>

</html>
