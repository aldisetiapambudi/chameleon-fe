@extends('web.user.app')
@section('section')
    <div class="container max-w-6xl w px-4 mx-auto">
        <h1 class="font-bold text-2xl lg:text-3xl">Order Details</h1>
        <hr class="mt-2 mb-4 h-0.5 bg-blue-900">
        <div class="row mb-96 block md:flex">
            <div class="col">
                <div class="row mt-3">
                    <div class="card flex md:block lg:flex shadow-lg border-2 p-1">
                        <div class="col flex justify-center">
                            <img src="{{ asset('images/product_3.jpeg') }}" alt="product image" class="w-40">
                        </div>
                        <div class="col p-4">
                            <div class="row block lg:flex">
                                <div class="col">
                                    <h3 class="text-base md:text-xl font-semibold">Basic Plaid Suit - Notch</h3>
                                    <h4 class="font-semibold text-sm md:text-base flex">
                                        Rp. <span>581.000 ,- </span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <h3 class="text-2xl text-center mr-3 mt-2">1X</h3>
                        </div>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="card flex md:block lg:flex shadow-lg border-2 p-1">
                        <div class="col flex justify-center">
                            <img src="{{ asset('images/product_3.jpeg') }}" alt="product image" class="w-40">
                        </div>
                        <div class="col p-4">
                            <div class="row block lg:flex">
                                <div class="col">
                                    <h3 class="text-base md:text-xl font-semibold">Basic Plaid Suit - Notch</h3>
                                    <h4 class="font-semibold text-sm md:text-base flex">
                                        Rp. <span>581.000 ,-</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <h3 class="text-2xl text-center mr-3 mt-2">1X</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md:ml-10 mt-4 md:mt-0 max-w-md ">
                <div class="row">
                    <h3 class="text-lg md:text-2xl font-bold">Order Details</h3>
                    <div class="card mt-3">
                        <h5>Order Date : <span class="font-semibold">01 Jumadil Awwal 1444 H </span> / 24 november 2022
                            12:25:07</h5>
                        <h5>Order Number : <span class="font-semibold">#TK945698365</span></h5>
                        <h5>Receipt Number : <span class="font-semibold">#TK945698365</span></h5>
                        <h5>Status : <span class="font-semibold">Proses Pengiriman</span></h5>
                        <h5>Make a payment before : <span class="font-semibold text-red-600">02 Jumadil Awwal 1444 H / 24
                                november 2022 12:25:07</span></h5>
                    </div>
                    <h3 class="text-lg md:text-2xl font-bold mt-3">Address</h3>
                    <div class="card border-2 border-blue-500 active:border-blue-600 p-4 rounded-2xl mt-3 bg-slate-50">
                        <h1 class="font-semibold text-base md:text-lg">CHAMELEON CLOTH</h1>
                        <p class="text-sm md:text-base mb-6 mt-2">
                            Jl. Patimuan - Kedungreja, Cinyawang, Patimuan, Cilacap53264083116200500
                        </p>
                    </div>
                </div>


                <div class="row mt-6">
                    <h3 class="text-lg md:text-2xl font-bold">Orders</h3>
                    <table class="table-fixed w-full mt-2">
                        <tbody class="">
                            <tr>
                                <td class=" 
                            text-xl font-semibold">Subtotal</td>
                                <td class="text-xl flex justify-end ">
                                    <p class="font-semibold">
                                        Rp. 895.000
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td class="text-xl flex justify-end">
                                    <p class="">
                                        Free
                                    </p>

                            </tr>
                            <tr>
                                <td class="text-red-500">Discount</td>
                                <td class="text-xl flex justify-end">
                                    <p class="text-red-500">
                                        0
                                    </p>
                            </tr>
                            <tr>
                                <td>Voucher</td>
                                <td class="text-xl flex justify-end">
                                    <p class="">
                                        0
                                    </p>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row flex gap-2 mt-8">
                        <div class="col">
                            <h1 class="text-2xl font-bold">Total</h1>
                        </div>
                        <div class="col w-full">
                            <h1 class="flex justify-end text-2xl font-bold">Rp. 895.000</h1>
                        </div>
                    </div>
                </div>
                {{-- end address --}}
            </div>

        </div>
    </div>
@endsection
