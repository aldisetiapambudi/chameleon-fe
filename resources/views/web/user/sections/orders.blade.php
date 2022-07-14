@extends('web.user.app')
@section('section')
    <div class="container max-w-6xl w px-4 mx-auto">
        <div class="row ml-2 mt-4 mb-2 flex">
            <div class="col w-1/2">
                <h3 class="text-base md:text-2xl font-semibold ml-4">
                    Chameleon Cloth Orders</h3>
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
            <div class="col w-full justify-start lg:order-2">
                <h1 class="text-lg md:text-2xl pl-4 font-semibold mt-4">Orders</h1>
                <div class="row lg:flex  ml-2 mt-2 md:mt-4">
                    <!-- order -->
                    <div class="block">
                        <div class="col w-10/12 lg:w-full  max-w-full bg-slate-50 ml-3  rounded-xl border-4 mt-4">
                            <div class="row lg:flex">
                                <div class="col w-full  mr-0 md:mr-20">
                                    <div class="card  w-48 md:w-96 max-w-2xl p-3 md:py-2 mt-3 md:mt-0 ml-3">
                                        <h3 class="text-base md:text-xl ">
                                            #TK098238
                                            <p class="hidden md:inline-block">-</p>
                                            <span class="block md:inline">Pending</span>
                                        </h3>
                                        <h6 class="text-xs mt-2 md:mt-0 md:text-sm">
                                            <span>01 Jumadil Awwal 1444 H</span>
                                            <span>/</span>
                                            <span>24 november 2022</span>
                                            <span>12:25:07</span>
                                        </h6>
                                        <h2 class="text-base lg:text-xl mt-10 font-bold">
                                            Rp. 589.000
                                        </h2>
                                    </div>
                                </div>
                                <div class="col w-full mt-5 lg:mt-3 mb-3 block px-4 ">
                                    <div class="mt-3">
                                        <a href="{{ route('user.order_details') }}"
                                            class="bg-green-500 hover:bg-green-600 text-white  w-full py-2 text-center px-auto rounded-xl text-end  text-sm  xl:text-base block mb-3">Lihat
                                            Pesanan</a>
                                        <a href="#"
                                            class="bg-blue-500 hover:bg-blue-600 text-white  w-full py-2 text-center px-2 rounded-xl text-end  text-sm  xl:text-base block mb-3">Konfirmasi
                                            Pesanan</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end order -->
                        <!-- order -->
                        <div class="col w-10/12 lg:w-full  max-w-full bg-slate-50 ml-3  rounded-xl border-4 mt-4">
                            <div class="row lg:flex">
                                <div class="col w-full mr-0 md:mr-20">
                                    <div class="card  w-48 md:w-96 max-w-2xl p-3 md:py-2 mt-3 md:mt-0 ml-3">
                                        <h3 class="text-base md:text-xl ">
                                            #TK098236
                                            <p class="hidden md:inline-block">-</p>
                                            <span class="block md:inline">Telah di kirim</span>
                                        </h3>
                                        <h6 class="text-xs mt-2 md:mt-0 md:text-sm">
                                            <span>01 Jumadil Awwal 1444 H</span>
                                            <span>/</span>
                                            <span>24 november 2022</span>
                                            <span>12:25:07</span>
                                        </h6>
                                        <h2 class="text-base lg:text-xl mt-10 font-bold">
                                            Rp. 589.000
                                        </h2>
                                    </div>
                                </div>
                                <div class="col w-full mt-5 lg:mt-3 mb-3 block px-4 ">
                                    <div class="mt-3">
                                        <a href="{{ route('user.order_details') }}"
                                            class="bg-green-500 hover:bg-green-600 text-white  w-full py-2 text-center px-auto rounded-xl text-end  text-sm  xl:text-base block mb-3">Lihat
                                            Pesanan</a>
                                        <a href="#"
                                            class="bg-black hover:ring-2 hover:ring-offset-2 text-white  w-full py-2 text-center px-auto rounded-xl text-end  text-sm  xl:text-base block mb-3">Lacak
                                            Pesanan</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end order -->
                    </div>
                </div>
            </div>

            <div class="col w-10/12 max-w-xs lg:order-1 mt-5">
                @include('web.user.sections.account.menu')
            </div>
        </div>
    </div>
@endsection
