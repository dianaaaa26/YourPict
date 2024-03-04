@extends('layout.master')
@section('contentlayout')
    <section class="mt-32">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col">
                <div class="font-bold text-3xl px-5">Edit Profile</div>
                <form action="/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex">
                        <div class="w-1/2 p-5">
                            <div class="flex items-center justify-center w-full">
                                <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                                    <!-- Photo File Input -->
                                    <input type="file" name="picture" class="hidden" x-ref="photo"
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
                                        <div class="mt-2 w-80 h-80" x-show="! photoPreview">
                                            <img src="{{ asset('asset/' . $datappUser->pictures) }}"
                                                class="w-full h-full m-auto shadow">
                                        </div>
                                        <!-- New Profile Photo Preview -->
                                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                                            <span class="block max-w-[480px] max-h-[470px] w-80 h-80 m-auto shadow"
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
                                {{-- <label for="dropzone-file"
                                    class="flex flex-col justify-center w-80 h-80 border-gray-300 border-dashe rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center overflow-hidden" id="imagePreview">
                                        <img src="{{ asset('asset/' . $datappUser->pictures) }}" class="h-full w-full"
                                            alt="" />
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" />
                                </label> --}}
                            </div>
                        </div>

                        <div class="w-1/2 flex flex-col">
                            <div class="p-3">
                                <input type="text" class="w-[540px] h-10 border rounded-lg px-4" name="nama"
                                    value="{{ $datappUser->nama_lengkap }}" />
                            </div>
                            <div class="p-3">
                                <input type="text" class="w-[540px] h-10 border rounded-lg px-4" name="telepon"
                                    placeholder="nomor telepon" value="{{ $datappUser->no_telepon }}" />
                            </div>
                            <div class="p-3">
                                <input type="text" class="w-[540px] h-10 border rounded-lg px-4" name="alamat"
                                    placeholder="alamat" value="{{ $datappUser->alamat }}" />
                            </div>
                            <div class="p-3">
                                <select name="selectJenisKelamin" class="form form-control mb-4 form-control-lg">
                                    <option value=" {{ $datappUser->jenis_kelamin }}">{{ $datappUser->jenis_kelamin }}
                                    </option>
                                    <option value="Laki-Laki"
                                        {{ $datappUser->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="Perempuan"
                                        {{ $datappUser->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                                <input type="text" class="w-[540px] h-10 border rounded-lg px-4" name="bio"
                                    placeholder="bio" value="{{ $datappUser->bio }}" />
                            </div>

                            <div class="p-3">
                                <input type="date" class="w-[540px] h-10 border rounded-lg px-4" name="tgllahir"
                                    placeholder="tangal lahi" value="{{ $datappUser->tgl_lahir }}" />
                            </div>
                            <div class="flex justify-end px-16">
                                <a href="/profile/{{ $datappUser->id }}" type="button"
                                    class="justify-end focus:outline-none text-white bg-red-100 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                                    Update
                                </button>


                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- <script>
            function apalah(input) {
                var imagePreview = document.getElementById("imagePreview");
                imagePreview.innerHTML = "";

                if (input.files && input.files.length > 0) {
                    for (var i = 0; i < input.files.length; i++) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            var img = document.createElement("img");
                            img.src = e.target.result;
                            img.className = "preview";
                            imagePreview.appendChild(img);
                        };

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
        </script> --}}
        <script>
            function previewImage(event) {
                const file = event.target.files[0];
                if (file) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.src = URL.createObjectURL(file);
                    imagePreview.style.display = 'block';
                }
            }
        </script>
        @include('sweetalert::alert')
    </section>
@endsection
