@extends('layout.master')
@section('contentlayout')
    <section class="mt-32">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col">
                <div class="font-bold text-3xl px-5">Upload Foto</div>
                <form action="/uploadfoto" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex">
                        <div class="w-1/2 p-5">
                            <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                                <!-- Photo File Input -->
                                <input type="file" name="up" class="hidden" x-ref="photo"
                                    x-on:change="
                                                      photoName = $refs.photo.files[0].name;
                                                      const reader = new FileReader();
                                                      reader.onload = (e) => {
                                                          photoPreview = e.target.result;
                                                      };
                                                      reader.readAsDataURL($refs.photo.files[0]);
                                  ">

                                <div class="text-center">
                                    <!-- Current Profile Photo -->
                                    <div class="mt-2" x-show="! photoPreview">
                                        <img src="/asset/default_image.png"
                                            class="max-w-[480px] max-h-[470px] w-full h-full m-auto shadow">
                                    </div>
                                    <!-- New Profile Photo Preview -->
                                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                                        <span class="block max-w-[480px] max-h-[470px] w-auto h-80 m-auto shadow"
                                            x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' +
                                            photoPreview + '\');'"
                                            style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                        </span>
                                    </div>
                                    <button type="button"
                                        class=" inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3"
                                        x-on:click.prevent="$refs.photo.click()">
                                        Tambahkan Foto <i class=" bi bi-cloud-arrow-up text-2xl px-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="p-5">
                                <label class="block text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                                <input type="text" name="judul" class="w-[540px] h-10 border rounded-lg mt-3 px-4"
                                    placeholder="Judul" />
                            </div>

                            <div class="px-5">
                                <label class="block text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <input type="text" class="w-[540px] h-24 border rounded-lg mt-3 px-4"
                                    placeholder="Deskripsi" name="deskripsi" />
                            </div>



                            <div class=" mt-6 px-5">

                                <label class="block mt-2 text-sm font-medium text-gray-900 dark:text-white">Album</label>
                                <div class="flex items-center gap-1">
                                    <div class="flex ">

                                        <select class="w-[500px] h-11 border rounded-lg mt-2 px-4" name="album"
                                            id="">
                                            @foreach ($albums as $album)
                                                <option value="{{ $album->id }}">{{ $album->nama_album }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>

                                        <button type="button" class="bg-red-500 rounded-lg mt-2 px-2 py-1"
                                            data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                                            <i class="bi bi-plus text-3xl text-white "></i>
                                        </button>
                                    </div>

                                </div>


                            </div>

                            <div class="flex justify-end px-16">
                                <a href="/dashboard" type="button"
                                    class="justify-end focus:outline-none text-white bg-red-100 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                                    Batal
                                </a>

                                <button type="submit"
                                    class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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
