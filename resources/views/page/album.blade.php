@extends('layout.master')
@section('contentlayout')
    <section class="mt-32">
        <div class="flex flex-col max-w-screen-xl gap-2 p-14 mx-auto bg-slate-00 flex-wrap">
            {{-- <div class="flex flex-col max-w-screen-xl gap-2 p-14 mx-auto bg-slate-00 flex-wrap">
                <div class="mx-auto">
                    <img src="/asset/Pp.jpeg" class="rounded-full h-52 h-52 items-center" alt="" />
                </div>
                <div class="mx-auto">
                    <span class="text-3xl font-bold">Iyannnnnnn</span>
                    <a href="/editpp"><i class="bi bi-pencil-square text-3xl"></i></a>
                </div>
                <div class="mx-auto mt-2">
                    <p>Isikan dengan bio anda</p>
                </div>
                <div class="flex flex-col">
                    <div>
                        <span class="font-semibold">Jenis Kelamin : </span>
                        <span> laki laki</span>
                    </div>
                    <div>
                        <span class="font-semibold">Tanggal Lahir : </span>
                        <span> 30 september 2029x</span>
                    </div>
                    <div>
                        <span class="font-semibold">Tinggal di : </span>
                        <span> Banjar</span>
                    </div>
                    <hr class="bg-black border border-slate-500 mt-7" />
                </div>
                <div class="flex gap-5 font-semibold">
                    <div>
                        <a href="#" class="text-slate-500">Album</a>
                    </div>
                    <div>
                        <a href="/foto">Foto</a>
                    </div>
                </div>
            </div> --}}

            <div>
                <div class="flex gap-2 max-w-screen-xl flex-wrap">
                    <div class="w-96 bg-slate-300 rounded-3xl h-52 mt-3 mb-3">
                        <button class="px-32" data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                            <div class="items-center flex flex-col">
                                <div class="mt-7 text-9xl text-slate-500">
                                    <i class="bi bi-plus"></i>
                                </div>
                                <div class="text-lg text-slate-500">Buat Album</div>
                            </div>
                        </button>
                    </div>

                    @foreach ($albums as $album)
                        <div class="w-96 h-52 bg-slate-300 rounded-3xl mt-3 mb-3">
                            <div class="w-full h-full items-center">
                                <a href="/detailalbum/{{ $album->id }}">
                                    <img class="h-full w-full max-w-full rounded-lg"
                                        src="{{ asset('/asset/' . $album->foto) }}" alt="" />
                                </a>
                            </div>
                            <div>
                                <span class="px-4 font-semibold"> {{ $album->nama_album }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



        </div>
    </section>

    <section>
        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Buat Album Baru
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="/buat-album" method="post" enctype="multipart/form-data" class="p-4 md:p-5">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Album</label>
                                <input type="text" name="namaAlbum" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="" required="" />
                                <label for="name"
                                    class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Tambahkan
                                    Sampul</label>
                                <input type="file" name="foto" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="" required="" />
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
