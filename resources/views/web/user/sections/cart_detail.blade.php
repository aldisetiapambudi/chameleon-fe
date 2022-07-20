@extends('web.user.app')
@section('section')

    <div class="container max-w-6xl w px-4 mx-auto">
        <h1 class="font-bold text-2xl lg:text-3xl">Bag</h1>
        <hr class="mt-2 mb-4 h-0.5 bg-blue-900">
        <div class="row mb-96 block md:flex">
            <div class="col">
                <!-- product -->
                @foreach ($cart as $produk)
                    <div class="row mt-3 komponen-{{ $produk->id_cart }}" id="komponen" data-komponen="{{ $produk->id_cart }}" >
                        <div class="card flex md:block lg:flex shadow-lg border-2 p-1">
                            <div class="col flex justify-center">
                                <img src="{{ asset('images/product_3.jpeg') }}" alt="product image" class="w-40">
                            </div>
                            <div class="col p-4">
                                <div class="row block lg:flex">
                                    <div class="col">
                                        <h3 class="text-base md:text-xl font-semibold">
                                            {{ $produk->DetailCartItem->Product->nama_produk }}</h3>
                                        <h4 class="font-semibold text-sm md:text-base flex">
                                            Rp.
                                            <input type="text" id="harga" readonly
                                                value="{{ $produk->DetailCartitem->Product->harga_produk }}"
                                                class="font-semibold text-sm md:text-base">
                                        </h4>
                                    </div>
                                    <div class="col md:ml-10 mt-4 md:mt-2">
                                        <div class="row">
                                            <div class="col" ">
                                                {{-- <form action="{{ route('user.product.remove') }}" method="POST" > --}}
                                                    {{-- <form action="" method=""> --}}
                                                    {{-- @csrf --}}
                                                    {{-- @method('POST') --}}

                                                    <input type="hidden" name="_token" id="csrfToken" value="{{ csrf_token() }}" />
                                                    <input type="text" name="_token" id="csrfToken" value="{{ $produk->id_cart }}" />
                                                    <input type="text" name="_token" id="csrfToken" value="{{ $produk->DetailCartItem->id_detail_item_cart }}" />

                                                    <button type="button"
                                                        class="w-full max-w-md h-auto p-2 bg-black text-white rounded-md HapusClass" data-id-detail="{{ $produk->DetailCartItem->id_detail_item_cart }}" data-id-cart="{{ $produk->id_cart }}" id="btnHapus" >Hapus</button>
                                                 {{-- </form> --}}
                                            </div>
                                            <div class="col mt-2">
                                                <div class="row flex justify-center">
                                                    <div class="col">
                                                        <button id="prodc_min"
                                                            class="w-12 bg-slate-300 h-auto rounded-md p-1 hover:bg-slate-500 hover:text-white">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <input type="hidden" value="10" id="harga_satuan">
                                                        <input type="text" id="prodc_qty" name="prodc_qty"
                                                            class="w-12 h-auto mx-2 border-2 text-center shadow-md border-yellow-300 border-offset-2 rounded-lg"
                                                            value="1">
                                                    </div>
                                                    <div class="col">
                                                        <button id="prodc_add"
                                                            class="w-12 bg-slate-300 h-auto rounded-md p-1 hover:bg-slate-500 hover:text-white">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- End Product -->

            </div>
            <div class="col md:ml-10 mt-4 md:mt-0 max-w-md ">
                <div class="row">
                    @if(isset($address[0]))
                    <h3 class="text-lg md:text-2xl font-bold">Address</h3>
                    <div class="card border-2 border-blue-500 active:border-blue-600 p-4 rounded-2xl mt-3 bg-slate-50">
                        <h1 class="font-semibold text-base md:text-lg">{{ $address[0]->nama_lengkap }}</h1>
                        <p class="text-sm md:text-base mb-6 mt-2">
                            {{ $address[0]->alamat_1 }} | {{ $address[0]->no_telp }}
                        </p>

                    </div>
                    @else
                    <div class="col max-w-full hover:bg-slate-100 border-2 border-blue-800 rounded-xl ">
                        <a href="#" class=" ">
                            <div class="card md:w-full max-w-2xl px-8 pb-4 md:mt-0 text-center py-4">
                                <p class="text-base md:text-md font-semibold p-4">
                                Anda belum memilih alamat utama pilih alamat utama anda <a href="{{ route('user.address') }}" class="text-blue-400">disini</a>
                                <i class="fas fa-map-marker-alt"></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    @endif
                    <div class="card border-2 border-slate-400 p-4 rounded-2xl mt-3 bg-slate-50">
                        <button  class="flex mx-auto">
                            <p class="font-semibold text-base md:text-lg">
                                Pilih alamat lainnya <i class="fas fa-plus-circle" aria-hidden="true"></i>
                            </p>
                        </button>
                    </div>
                </div>
                <div class="row mt-10">
                    <h3 class="text-lg md:text-2xl font-bold">Shipping</h3>
                    </span>
                    <ul class="flex mt-2 mb-10">
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="yes" name="shipping" id="shipping_jne">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="shipping_jne">
                                <div class="card active:border-blue-600 w-full h-auto p-6 rounded-xl">
                                    <h6 class="text-center font-bold text-lg">JNE</h6>
                                    <div class="row flex gap-2 mt-2">
                                        <div class="mx-auto flex">
                                            <div class="col mr-4  text-left">
                                                <p class="text-xs md:text-sm">
                                                    Rp.9.000,-
                                                </p>
                                            </div>
                                            <div class="col  w-full">
                                                <p class="text-xs md:text-sm">
                                                    3-4 Hari
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </li>
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="yes" name="shipping" id="shipping_jnt">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="shipping_jnt">
                                <div class="card w-full h-auto p-6 rounded-xl">
                                    <h6 class="text-center font-bold text-lg">J&T</h6>
                                    <div class="row flex gap-2  mt-2">
                                        <div class="mx-auto flex">
                                            <div class="col mr-4  text-left">
                                                <p class="text-xs md:text-sm">
                                                    Rp.9.000,-
                                                </p>
                                            </div>
                                            <div class="col w-full">
                                                <p class="text-xs md:text-sm">
                                                    3-4 Hari
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="row mt-4">
                    <h3 class="text-lg md:text-2xl font-bold">Voucher</h3>
                    <div class="w-full h-16 rounded-xl mt-2">
                        <input type="text"
                            class=" w-full h-full bg-yellow-100 text-slate-500 text-base md:text-lg py-3 px-4 rounded-xl border-[6px] border-yellow-500 border-dotted "
                            placeholder="Voucher code">
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
                    <div class="row flex gap-2 mt-6">
                        <div class="col">
                            <h1 class="text-2xl font-bold">Total</h1>
                        </div>
                        <div class="col w-full">
                            <h1 class="flex justify-end text-2xl font-bold">Rp. 895.000</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w-full">
                            <button type="submit"
                                class=" w-full py-3 px-5 mt-4 bg-blue-500 text-white font-semibold rounded-lg">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
                {{-- end address --}}
            </div>

        </div>
    </div>

    {{-- java script --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.HapusClass').on('click', function(){
                var IdDetailCart = $(this).attr('data-id-detail');
                var IdCart = $(this).attr('data-id-cart');
                // -- on dev
                // console.log(IdDetailCart)
                // console.log(IdCart)
                // return
                 // --  end on dev
                var tokenCsrf = $('#csrfToken').val()

                if(confirm('Apakah anda yakin akan menghapus data?')){

                    $.ajax({
                        url: "{{ route('user.product.remove') }}",
                        type: "POST",
                        dataType: "JSON",
                        // cache: false,
                        data: {
                            "idDetailCart_sendToController": IdDetailCart,
                            'idCart_sendToController': IdCart,
                            "_token": tokenCsrf
                        },
                        success:function(response){
                            // console.log(response)

                            var delKomponen = $('#komponen').attr('data-komponen');

                            if(delKomponen =  response[2]){
                                $('.komponen-'+delKomponen).remove();
                            }
                            if(response.success){


                                alert('Item berhasil dihapus');

                            } else {
                                console.log(response.success)
                                alert('Hapus gagal');
                            }
                            console.log(response);
                        },

                    });

                } else {
                   return
                }






            });



        });


    </script>
@endsection
