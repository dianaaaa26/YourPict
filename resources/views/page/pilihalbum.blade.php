@extends('layout.master')
@section('contentlayout')
    <section class="mt-32">
        <div class="justify-start px-32 py-2">
            <a href="/detail" type="button"
                class="px-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-full text-2xl w-12 h-10 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="flex flex-col max-w-screen-lg mx-auto bg-slate-00 h-52 gap-6">
            @foreach ($albums as $album)
            <form action="/editalbum/{{ $dataFoto->id }}" method="post">
                @csrf
                    <div class="flex gap-6">
                        <div class="h-40 w-40">
                            <img src="{{ asset('/asset/' . $album->foto) }} " class="w-full h-full rounded-2xl"
                                alt="" />
                        </div>
                        <input value="{{ $album->id }}" class="flex text-2xl font-bold items-center hidden"
                            name="nama_album"></input>
                        <button type="submit" class="flex text-2xl font-bold items-center ">{{ $album->nama_album }}</button>
                    </div>
            </form>
            @endforeach

            <div>
                <div class="flex gap-6">
                    <div class="h-40 w-40 bg-slate-300">
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                            <div class="p-14">
                                <i class="bi bi-plus text-5xl"></i>
                            </div>
                        </button>
                    </div>

                    <div class="flex text-2xl font-bold items-center">
                        Buat Album Baru
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
