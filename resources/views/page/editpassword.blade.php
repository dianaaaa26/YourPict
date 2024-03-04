@extends('layout.master')
@section('contentlayout')
    <section class="mt-32">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex flex-col">
                <div class="font-bold text-3xl px-5">Ubah Password</div>
                <div class="flex items-center">
                    <form action="/updatepassword" method="post">
                        @csrf
                        <div class="w-1/2">
                            <div class="px-5">
                                <input type="password" class="w-[540px] h-14 border rounded-lg mt-8 px-4"
                                    placeholder="Password Lama" name="password_lama" />
                                @error('password_lama')
                                    <small class="italic text-red-800">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="px-5">
                                <input type="password" class="w-[540px] h-14 border rounded-lg mt-8 px-4"
                                    placeholder="Password Baru" name="password_baru" />
                                @error('password_baru')
                                    <small class="italic text-red-800">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="px-5">
                                <input type="password" class="w-[540px] h-14 border rounded-lg mt-8 px-4"
                                    placeholder="Cofirm password" name="confirm_password" />
                                @error('confirm_password')
                                    <small class="italic text-red-800">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="flex justify-end ">
                                <a href="" type=""
                                    class="justify-end focus:outline-none text-white bg-red-100 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                                    Batal
                                </a>

                                <button type="submit"
                                    class="justify-end focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-6">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')

    </section>
@endsection
