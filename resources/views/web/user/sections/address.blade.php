@extends('web.user.app')
@section('section')
    <div class="container max-w-6xl w px-4 mx-auto">
        <div class="row ml-2 mt-4 mb-2 flex">
            <div class="col w-1/2">
                <h3 class="text-base md:text-2xl font-semibold ml-4">Chameleon Cloth Address</h3>
            </div>
            <div class="col w-1/2 flex justify-end items-end ">
                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit"
                        class="w-30 h-auto text-white bg-blue-600 py-2 px-4 rounded-lg font-semibold hover:bg-blue-500 mr-2">Keluar</button>
                </form>
            </div>
        </div>
        <hr class="w-full h-4 mx-auto">
        <div class="row mb-24 lg:flex">
            <div class="col w-full justify-start  lg:order-2">
                <h1 class="text-lg md:text-2xl pl-4 font-semibold mt-4">Address</h1>
                <div class="row lg:flex  ml-2 mt-2 md:mt-4">
                    @if(isset($address[0]))
                    <div class="col max-w-full hover:bg-slate-100 ml-3 border-2 border-blue-800 rounded-xl ">
                        <div class="group flex justify-end translate-y-3 -translate-x-2">
                            <form action="{{ route('user.address.remove') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id_alamat" value="{{ $address[0]->id_alamat }}">
                                <button type="submit" class="button group w-6 h-auto" onclick="confirm('Apakah anda yakin akan menghapus alamat?')"><i
                                        class="fas fa-trash hover:text-red-600"></i></button>
                            </form>
                        </div>
                        <a href="#" class=" " data-bs-toggle="modal" data-bs-target="#modalAddressBag">
                            <div class="card md:w-full max-w-2xl px-8 pb-4 md:mt-0">
                                <h1 class="text-base md:text-xl font-semibold">
                                    {{ $address[0]->nama_lengkap }}</h1>
                                <p class="text-xs md:text-sm mt-4 w-full">
                                    {{ $address[0]->alamat_1 }}
                                </p>
                            </div>
                        </a>
                    </div>
                    @else
                    <div class="col max-w-full hover:bg-slate-100 ml-3 border-2 border-blue-800 rounded-xl ">
                        <a href="#" class=" " data-bs-toggle="modal" data-bs-target="#modalAddressBag">
                            <div class="card md:w-full max-w-2xl px-8 pb-4 md:mt-0 text-center py-4">
                                <p class="text-base md:text-md font-semibold p-4">
                                Anda belum memilih alamat utama
                                <i class="fas fa-map-marker-alt"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    @endif



                    <div class="col max-w-full hover:bg-slate-100 border-2 border-blue-200 ml-3 mt-4 lg:mt-0  rounded-xl">
                        <button class="group" data-bs-toggle="modal" data-bs-target="#modalAddress">

                            <div class="card w-48 md:w-96 max-w-2xl p-3 md:p-7 mt-3 md:mt-0 mx-auto lg:mx-0">
                                <h1 class="text-base md:text-xl font-bold text-center my-4">
                                    <i class="fas fa-plus-circle group-hover:text-blue-600"></i>
                                </h1>
                                <p class="text-xs md:text-base text-center group-hover:text-blue-600">Tambah alamat
                                    lainnya</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col w-1/2 max-w-xs lg:order-1 mt-5 ">
                @include('web.user.sections.account.menu')
            </div>
        </div>
    </div>
    @include('web.user.sections.partials.modalAddress')
@endsection
