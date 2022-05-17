@extends('web.user.app')
@section('section')
    <div class="container mx-auto">
        <div class="row ml-2 mt-4 mb-2 flex">
            <div class="col w-1/2">
                <h3 class="text-base md:text-2xl font-semibold ml-4">Chameleon Cloth Account</h3>
            </div>
            <div class="col w-1/2 flex justify-end items-end ">
                <form action="">
                    <button type="submit"
                        class="w-30 h-auto text-white bg-blue-600 py-2 px-4 rounded-lg font-semibold hover:bg-blue-500 mr-2">Keluar</button>
                </form>
            </div>
        </div>
        <hr class="w-full h-4 mx-auto">
        <div class="row mb-96 flex">
            <div class="col w-1/2 max-w-xs block ">
                @include('web.user.sections.account.menu')
            </div>
            <div class="col w-full justify-start  ">
                <h1 class="text-lg md:text-2xl pl-4 font-semibold mt-4">Address</h1>
                <div class="row lg:flex  ml-2 mt-2 md:mt-4">
                    <div class="col max-w-full hover:bg-slate-100 ml-3 border-2 border-blue-800 rounded-xl relative">
                       <div class="translate-x-[360px] translate-y-3 absolute ">
                           <form action="#">
                               <button type="submit" class="button group"><i class="fas fa-trash group-hover:text-red-600"></i></button>
                            </form>
                        </div>
                        <a href="#" class="group">
                            <div
                                class="card w-48 md:w-96 max-w-2xl p-3 md:p-7 mt-3 md:mt-0 ">
                                <h1 class="text-base md:text-xl font-semibold">CHAMELEON CLOTH</h1>
                                <p class="text-xs md:text-sm mt-4">
                                    Jl. Patimuan - Kedungreja, Cinyawang, Patimuan, Cilacap 53264083116200500
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col max-w-full hover:bg-slate-100 border-2 border-blue-200 ml-3 mt-4 lg:mt-0  rounded-xl">
                        <a href="#" class="group">
                            <div
                                class="card w-48 md:w-96 max-w-2xl p-3 md:p-7 mt-3 md:mt-0 ">
                                <h1 class="text-base md:text-xl font-bold text-center my-4">
                                    <i class="fas fa-plus-circle group-hover:text-blue-600"></i>
                                </h1>
                                <p class="text-xs md:text-base text-center group-hover:text-blue-600">Tambah alamat lainnya</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
