@extends('layout.navbar')
@section('contentlogin')
    <section class="mt-24 p-4">
        <form action="/auth" method="POST">
            @csrf
            <div class="flex flex-col justify-center p-3">
                <div class="shadow-md shadow-inner max-w-screen-sm w-1/3 mx-auto rounded-[68px] bg-white mt-15 p-12">
                    <div class="font-fontutama text-7xl text-center mt-"></div>
                    <div class="mx-auto mt-6"></div>
                    <div class="flex flex-col">
                        <div class="items-center mx-auto">
                            <span class="text-blue-700 items-center font-bold text-4xl italic">LOGIN</span>
                        </div>
                        <div class="mt-10">
                            @if (session()->has('error'))
                                <div id="alert-border-1"
                                    class="flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800"
                                    role="alert">
                                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div class="ms-3 text-sm font-medium">
                                        {{ session('error') }}
                                    </div>
                                    <button type="button"
                                        class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                                        data-dismiss-target="#alert-border-1" aria-label="Close">
                                        <span class="sr-only">Dismiss</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                            @endif

                        </div>
                        Email
                        <input type="text" class="border border-slate-300 z-4 px-3 py-2 mt-2 shadow-2xl"
                            name="email" />

                        <span class="mt-4">Password</span>
                        <input type="password" id="passwordKu"
                            class="border border-slate-300 z-4 py-2 px-3 mt-2 shadow-2xl mb-3" name="password" />
                        <div class="mb-3">

                            <input type="checkbox" onclick="showHide()"> <span>Tampilkan Password</span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <button type="submit" value="LOGIN"
                                class="bg-blue-800 py-3 rounded-full text-white font-bold italic tombol-login">
                                Login
                            </button>

                            <div class="flex items-center gap-5">
                                <div class="w-1/2">
                                    <hr class="text-gray-500 border" />
                                </div>
                                <div class="text-gray-500">OR</div>
                                <div class="w-1/2">
                                    <hr class="text-gray-500 border" />
                                </div>
                            </div>


                            <button
                                class="bg-blue800 px-1 py-3 rounded-full inline-flex justify-center text-gray-700 gap-3">
                                <svg class="w-6 h-6 text-center justify-center" width="15" height="15"
                                    viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_502_102)">
                                        <mask id="mask0_502_102" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="15" height="15">
                                            <path
                                                d="M13.9062 6.25H7.5V8.90625H11.1875C10.8438 10.5938 9.40625 11.5625 7.5 11.5625C5.25 11.5625 3.4375 9.75 3.4375 7.5C3.4375 5.25 5.25 3.4375 7.5 3.4375C8.46875 3.4375 9.34375 3.78125 10.0312 4.34375L12.0312 2.34375C10.8125 1.28125 9.25 0.625 7.5 0.625C3.6875 0.625 0.625 3.6875 0.625 7.5C0.625 11.3125 3.6875 14.375 7.5 14.375C10.9375 14.375 14.0625 11.875 14.0625 7.5C14.0625 7.09375 14 6.65625 13.9062 6.25Z"
                                                fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_502_102)">
                                            <path d="M0 11.5625V3.4375L5.3125 7.5L0 11.5625Z" fill="#FBBC05" />
                                        </g>
                                        <mask id="mask1_502_102" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="15" height="15">
                                            <path
                                                d="M13.9062 6.25H7.5V8.90625H11.1875C10.8438 10.5938 9.40625 11.5625 7.5 11.5625C5.25 11.5625 3.4375 9.75 3.4375 7.5C3.4375 5.25 5.25 3.4375 7.5 3.4375C8.46875 3.4375 9.34375 3.78125 10.0312 4.34375L12.0312 2.34375C10.8125 1.28125 9.25 0.625 7.5 0.625C3.6875 0.625 0.625 3.6875 0.625 7.5C0.625 11.3125 3.6875 14.375 7.5 14.375C10.9375 14.375 14.0625 11.875 14.0625 7.5C14.0625 7.09375 14 6.65625 13.9062 6.25Z"
                                                fill="white" />
                                        </mask>
                                        <g mask="url(#mask1_502_102)">
                                            <path d="M0 3.4375L5.3125 7.5L7.5 5.59375L15 4.375V0H0V3.4375Z"
                                                fill="#EA4335" />
                                        </g>
                                        <mask id="mask2_502_102" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="15" height="15">
                                            <path
                                                d="M13.9062 6.25H7.5V8.90625H11.1875C10.8438 10.5938 9.40625 11.5625 7.5 11.5625C5.25 11.5625 3.4375 9.75 3.4375 7.5C3.4375 5.25 5.25 3.4375 7.5 3.4375C8.46875 3.4375 9.34375 3.78125 10.0312 4.34375L12.0312 2.34375C10.8125 1.28125 9.25 0.625 7.5 0.625C3.6875 0.625 0.625 3.6875 0.625 7.5C0.625 11.3125 3.6875 14.375 7.5 14.375C10.9375 14.375 14.0625 11.875 14.0625 7.5C14.0625 7.09375 14 6.65625 13.9062 6.25Z"
                                                fill="white" />
                                        </mask>
                                        <g mask="url(#mask2_502_102)">
                                            <path d="M0 11.5625L9.375 4.375L11.8438 4.6875L15 0V15H0V11.5625Z"
                                                fill="#34A853" />
                                        </g>
                                        <mask id="mask3_502_102" style="mask-type: luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="15" height="15">
                                            <path
                                                d="M13.9062 6.25H7.5V8.90625H11.1875C10.8438 10.5938 9.40625 11.5625 7.5 11.5625C5.25 11.5625 3.4375 9.75 3.4375 7.5C3.4375 5.25 5.25 3.4375 7.5 3.4375C8.46875 3.4375 9.34375 3.78125 10.0312 4.34375L12.0312 2.34375C10.8125 1.28125 9.25 0.625 7.5 0.625C3.6875 0.625 0.625 3.6875 0.625 7.5C0.625 11.3125 3.6875 14.375 7.5 14.375C10.9375 14.375 14.0625 11.875 14.0625 7.5C14.0625 7.09375 14 6.65625 13.9062 6.25Z"
                                                fill="white" />
                                        </mask>
                                        <g mask="url(#mask3_502_102)">
                                            <path d="M15 15L5.3125 7.5L4.0625 6.5625L15 3.4375V15Z" fill="#4285F4" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_502_102">
                                            <rect width="15" height="15" fill="white" />
                                        </clipPath>
                                    </defs>

                                </svg>
                                Masuk dengan Google
                            </button>

                            <p class="text-center">
                                Belum punya account?
                                <a href="/registrasi" class="text-blue-700">Daftar</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @include('sweetalert::alert')

    </section>
    <script>
        function showHide() {
            var passwordInput = document.getElementById('passwordKu');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
@endsection
