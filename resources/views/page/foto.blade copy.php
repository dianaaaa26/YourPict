@extends('layout.master')
@section('contentlayout')
    <section class="mt-32">
        <div class="flex flex-col max-w-screen-xl gap-2 p-14 mx-auto bg-slate-00">
            <div class="mx-auto">
                <img src="/asset/Pp.jpeg" class="rounded-full h-52 h-52 items-center" alt="" />
            </div>
            <div class="mx-auto">
                <span class="text-3xl font-bold">Iyannnnnnn</span>
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
                    <a href="album.html">Album</a>
                </div>
                <div>
                    <a href="foto.html" class="text-slate-500">Foto</a>
                </div>
            </div>

            <div class="max-w-screen-xl mx-auto">
                <div class="">
                    <div class="container ms-auto">
                        <div class="rounded-lg shadow-sm p-16 relative">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="grid gap-4">
                                    <div>
                                        <a href="detail.html">
                                            <img class="h-auto max-w-full rounded-lg" src="/asset/img_1_vertical.jpg"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg" src="/asset/img_2_sq.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg" src="/asset/img_1_vertical.jpg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="grid gap-4">
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg" src="/asset/Pp.jpeg" alt="" />
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="grid gap-4">
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="grid gap-4">
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="h-auto max-w-full rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                                            alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="w-20 h-20 bg-red-500 rounded-full flex fixed bottom-6 right-5">
                                <a href="/upload" class="text-xl m-auto"><i
                                        class="bi bi-plus text-6xl font-extrabold text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
