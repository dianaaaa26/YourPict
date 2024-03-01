@extends('layout.master')
@section('contentlayout')
    <section class="mt-32">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col">
                <div class="font-bold text-3xl px-5 ">Edit Deskripsi</div>
                <form action="/updatepost/{{ $dataFoto->id }}" method="post">
                    @csrf
                    <div class="flex">
                        <div class="w-1/2 p-5">
                            <div class="flex items-center justify-center w-full">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6 overflow-hidden">
                                    <img src="" alt="" />
                                </div>
                                <img src="{{ asset('asset/' . $dataFoto->url) }}" class="max-w-[480px] max-h-[470px] "
                                    alt="" />

                            </div>
                        </div>
                        <div calass="w-1/2">
                            <div class="p-5">
                                <input type="text" class="w-[540px] h-10 border rounded-lg mt-3 px-4" placeholder="Judul"
                                    name="judul" value="{{ $dataFoto->judul_foto }}" />
                            </div>
                            <div class="px-5">
                                <input type="text" class="w-[540px] h-24 border rounded-lg mt-3 px-4"
                                    placeholder="Deskripsi" value="{{ $dataFoto->deskripsi_foto }}" name="deskripsi" />
                            </div>

                            <div class="px-5">
                                <input type="text" class="w-[540px] h-14 border rounded-lg mt-8 px-4"
                                    placeholder="Kategori" name="kategori" value="{{ $dataFoto->kategori }}" />
                            </div>
                            <div class="flex justify-end px-16">
                                <a href="/profile/getprofil/" type=""
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
    </section>
@endsection
