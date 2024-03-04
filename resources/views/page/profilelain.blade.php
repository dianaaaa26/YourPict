@extends('layout.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('contentlayout')
    <section class="mt-32">
        <div class="flex flex-col max-w-screen-xl gap-2 p-14 mx-auto bg-slate-00">
            <div class="mx-auto w-52 h-52 overflow-hidden rounded-full bg-gray-200 ">
                <img src="" id="profil" class="w-full h-full" alt="" id="imguser" />
            </div>
            <div class="mx-auto">
                <span class="text-3xl font-bold" id="username"></span>
                <a href="" id="Editpp"></a>
            </div>
            <div>
                <span class=" font-bold" id="username"></span>
            </div>
            <div class="mx-auto mt-2">
                <p id="bio"></p>
            </div>
            <div class="flex flex-col">
                <div>
                    <span class="font-semibold">Jenis Kelamin : </span>
                    <span id="jk"> </span>
                </div>
                <div>
                    <span class="font-semibold">Tanggal Lahir : </span>
                    <span id="tgllahir"></span>
                </div>
                <div>
                    <span class="font-semibold">Tinggal di : </span>
                    <span id="alamat"> </span>
                </div>
                <hr class="bg-black border border-slate-500 mt-7" />
            </div>
            <div class="flex gap-5 font-semibold">
                <div>
                    <a href="" class="text-slate-500">Foto</a>
                </div>
            </div>

            <div class="flex flex-wrap items-center flex-container">
                <div id="datafoto" class=" p-4 bg-white columns-4 md:columns-2 sm:columns-1 lg:columns-3 xl:columns-4">

                    <div>
                        <a href="">
                            <img class="h-auto mb-4 max-w-[300px] rounded-lg transition duration-500 ease-in-out hover:scale-105"
                                src="/asset/${x.foto}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div id="Upload">

            </div>
    </section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/profile..js"></script>
@endpush
