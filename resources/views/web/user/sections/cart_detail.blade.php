@extends('web.user.app')
@section('section')
@include('web.user.sections.partials.modalAddressCart')
<form action="{{ route('user.transaction.add') }}" method="POST">
    @csrf
    @method('POST')
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
                                            <input type="text" id="harga-{{ $produk->id_cart  }}" readonly
                                                value=" @currency($produk->DetailCartitem->Product->harga_produk)"
                                                class="font-semibold text-sm md:text-base">
                                            <input type="hidden" id="hargaPcs-{{ $produk->id_cart }}" value="{{ $produk->DetailCartitem->Product->harga_produk }}">
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
                                                    <button type="button"
                                                        class="w-full max-w-md h-auto p-2 bg-black text-white rounded-md HapusClass" data-id-detail="{{ $produk->DetailCartItem->id_detail_item_cart }}" data-id-cart="{{ $produk->id_cart }}" id="btnHapus" >Hapus</button>
                                                 {{-- </form> --}}
                                            </div>
                                            <div class="col mt-2">
                                                <div class="row flex justify-center">
                                                    <div class="col">
                                                        <button id="prodc_min" type="button"
                                                            class="w-12 bg-slate-300 h-auto rounded-md p-1 hover:bg-slate-500 hover:text-white prodc_min" data-harga="{{ $produk->DetailCartitem->Product->harga_produk }}"
                                                            data-aty="{{ $produk->DetailCartitem->qty  }}"
                                                            data-id="{{ $produk->id_cart }}"  for="prodc_qty-{{ $produk->id_cart  }}"
                                                            >
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col">

                                                        <input type="text" id="prodc_qty-{{ $produk->id_cart }}" name="{{ $produk->id_cart }}"
                                                            class="w-12 h-auto mx-2 border-2 text-center shadow-md border-yellow-300 border-offset-2 rounded-lg prodc_qty-class prodc_qty-{{ $produk->id_cart  }}" data-id="{{ $produk->id_cart }}"
                                                            value="{{ $produk->DetailCartItem->quantity }}" onchange="cekAllOngkir()">
                                                    </div>
                                                    <div class="col">
                                                        <button id="prodc_add" type="button" for="prodc_qty-{{ $produk->id_cart  }}"
                                                            class="w-12 bg-slate-300 h-auto rounded-md p-1 hover:bg-slate-500 hover:text-white prodc_add"
                                                            data-harga="{{ $produk->DetailCartitem->Product->harga_produk }}"
                                                            data-ty="{{ $produk->DetailCartitem->qty  }}"
                                                            data-id="{{ $produk->id_cart }}"
                                                            >
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
                    <input type="hidden" class="berat_satuan_class" id="berat_satuan-{{ $produk->id_cart }}" value="{{ $produk->DetailCartitem->Product->berat_produk  }}"></input>
                    <input type="hidden" id="berat_satuan_fix-{{ $produk->id_cart }}" value="{{ $produk->DetailCartitem->Product->berat_produk  }}"></input>
                    @endforeach
                <!-- End Product -->
                    <input type="hidden" id="total_berat" value="{{ $totalBerat }}" ></input>
                </div>
                <div class="col md:ml-10 mt-4 md:mt-0 max-w-md ">
                <div class="row">
                    @if(isset($address[0]))
                    <h3 class="text-lg md:text-2xl font-bold">Address</h3>
                    <div class="card border-2 border-blue-500 active:border-blue-600 p-4 rounded-2xl mt-3 bg-slate-50">
                        <h1 class="font-semibold text-base md:text-lg" id="nama_user">{{ $address[0]->nama_lengkap }}</h1>
                        <p class="text-sm md:text-base m2-2 mt-2" >
                           <span id="alamat_1_cart">{{ $address[0]->alamat_1 }} </span> |
                           <span id="no_telp">{{ $address[0]->no_telp }}</span>
                        </p>
                        <p class="text-xs md:text-sm ">
                            <span id="address_kec" name="address_kec">{{ $address[0]->kecamatan }}</span>,
                            <span id="address_kab" name="address_kab">{{ $address[0]->kabupaten }}</span>,
                            <span id="address_prov" name="address_prov">{{ $address[0]->provinsi }}</span> |
                            <span id="address_kode_pos" name="address_kode_pos">{{ $address[0]->kode_pos }}</span>
                        </p>
                        <input type="hidden" name="id_kec" id="id_kec" class="kec_ganti"  value="{{ $address[0]->kecamatan_id }}">
                        <input type="hidden" name="id_kab" id="id_kab" value="{{ $address[0]->kabupaten_id }}">
                        <input type="hidden" name="id_prov" id="id_prov" value="{{ $address[0]->provinsi_id }}">
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
                        <button type="button"  class="flex mx-auto" data-bs-toggle="modal" data-bs-target="#modalAddressChangeCart" id="alamatLain">
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
                            <input class="sr-only peer" type="radio" value="jne" name="shipping" id="shipping_jne" onclick="getOngkirJne()">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="shipping_jne">
                                <div class="card active:border-blue-600 w-full h-auto p-6 rounded-xl">
                                    <h6 class="text-center font-bold text-lg">JNE</h6>
                                    <div class="row flex gap-2 mt-2">
                                        <div class="mx-auto flex">
                                            <div class="col mr-4  text-left">
                                                <p class="text-xs md:text-sm" id="ongkirJNE">
                                                    0
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
                            <input class="sr-only peer" type="radio" value="jnt" name="shipping" id="shipping_jnt" onclick="getOngkirJnt()" >
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="shipping_jnt">
                                <div class="card w-full h-auto p-6 rounded-xl">
                                    <h6 class="text-center font-bold text-lg">J&T</h6>
                                    <div class="row flex gap-2  mt-2">
                                        <div class="mx-auto flex">
                                            <div class="col mr-4  text-left">
                                                <p class="text-xs md:text-sm" id="ongkirJNT">
                                                    0
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
                        {{-- <form action="{{ route('validasi.vocer') }}" method="POST"> --}}
                            {{-- @csrf --}}
                            {{-- @method('POST') --}}
                            <input type="text" id="inputVocer" name="kode"
                            class=" w-full h-full bg-yellow-100 text-slate-500 text-base md:text-lg py-3 px-4 rounded-xl border-[6px] border-yellow-500 border-dotted "
                            placeholder="Voucher code">
                            {{-- <button type="submit">Cek vocer</button> --}}
                        </form>

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
                                    <p class="font-semibold" id="total_harga" data-harga="{{ $totalHarga }}">
                                        {{ $totalHarga }}
                                    </p>
                                    {{-- <input type="text" id="total"> --}}
                                </td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td class="text-xl flex justify-end">
                                    <p class="" id="total_shipping">
                                        0
                                    </p>

                            </tr>
                            <tr>
                                <td class="text-red-500">Discount</td>
                                <td class="text-xl flex justify-end">
                                    <p class="text-red-500" id="totalDiscount">
                                        0
                                    </p>
                            </tr>
                            <tr>
                                <td>Voucher</td>
                                <td class="text-xl flex justify-end">
                                    <p class="" id="totalVocer">
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
                            <h1 class="flex justify-end text-2xl font-bold">Rp. <span id="totalAll">0</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w-full">
                            <button type="submit" id="chekoutBtn"
                                class=" w-full py-3 px-5 mt-4 bg-blue-500 text-white font-semibold rounded-lg">
                                Checkout
                            </button>
                        </div>
                    </div>

                </div>
                {{-- end address --}}
            </div>
        </div>
        <input type="hidden" name="sub_total" id="sendSub">
        <input type="hidden" name="shipping_total" id="sendShipping">
        <input type="hidden" name="vocer_total" id="sendVocer">
        <input type="hidden" name="totalAll" id="sendTotalAll">

        <input type="text" id="sendNama" name="sendNama" value="{{ $address[0]->nama_lengkap }}">
        <input type="text" id="sendIDAlamat" name="sendIDAlamat" value="{{ $address[0]->id_alamat }}">
        <input type="text" id="sendKec" name="sendKec" value="{{ $address[0]->kecamatan }}">
        <input type="text" id="sendKab" name="sendKab" value="{{ $address[0]->kabupaten }}">
        <input type="text" id="sendProv" name="sendProv" value="{{ $address[0]->provinsi }}">
        <input type="text" id="sendKodePos" name="sendKodePos" value="{{ $address[0]->kode_pos }}">
        <input type="text" id="sendAlamat" name="sendAlamat" value="{{ $address[0]->alamat_1 }}">
        <input type="text" id="sendTelp" name="sendTelp" value="{{ $address[0]->no_telp }}">



        </div>
    </form>
    {{-- java script --}}
    <script type="text/javascript">


        //onclick="getOngkir()"
        function getOngkirJnt() {
            var getHargaOngkir = $('#ongkirJNT').text();
            var replaceShipping = $('#total_shipping').text(getHargaOngkir);
            hitungTotal();
        }
        function getOngkirJne() {
            // cekAllOngkir();
            var getHargaOngkir = $('#ongkirJNE').text();
            var replaceShipping = $('#total_shipping').text(getHargaOngkir);
            hitungTotal();
        }

        $('#inputVocer').on('change', function(){
            validasiVocer();
            // console.log('cek kolom vocer');
            hitungTotal();
        });

        // $('#chekoutBtn').on('click', function(){
        //     var cekShip1 =  $('#shipping_jnt').prop('checked', false);
        //     var chekShip2 = $('#shipping_jne').prop('checked', false);
        //     if( cekShip1 || chekShip2 ){
        //         return alert('Anda belum memilih jasa pengiriman');
        //     }


        // });



          function cekAllOngkir(){
            var tujuan = $('#id_kec').val();
            var mode = "GET";
            var total_ongkirJne = 0;
            var total_ongkirJnt = 0;
            var total_berat = $('#total_berat').val();
            $('#vocer').val();
            ongkirJne();
            ongkirJnt();

             function ongkirJne() {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('cek.ongkir') }}",
                    dataType: 'JSON',
                    data: {
                        kurir: 'jne',
                        tujuan: tujuan,
                        berat: total_berat,
                    },
                    success: function(data) {
                        console.log(data);
                        var ongkir =0;
                            ongkirJne = data.rajaongkir.results[0].costs[0].cost[0].value

                        total_ongkirJne = total_ongkirJne + ongkirJne;
                        console.log(total_ongkirJne);
                        $('#ongkirJNE').text(total_ongkirJne)
                    }
                });
            }

            function ongkirJnt() {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('cek.ongkir') }}",
                    dataType: 'JSON',
                    data: {
                        kurir: 'jnt',
                        tujuan: tujuan,
                        berat: total_berat,
                    },
                    success: function(data) {
                        console.log(data);
                        var ongkir =0;
                            ongkirJnt = data.rajaongkir.results[0].costs[0].cost[0].value

                        total_ongkirJnt = total_ongkirJnt + ongkirJnt;
                        console.log(total_ongkirJnt);
                        $('#ongkirJNT').text(total_ongkirJnt);
                    }
                });

            }
        }


        function validasiVocer() {
             var codeVoder = $('#inputVocer').val();
             var tokenCsrf = $('#csrfToken').val();

            $.ajax({
                url: "{{ route('validasi.vocer') }}",
                type: "POST",
                dataType: "JSON",
                data: {
                    "kode" :codeVoder,
                    "_token": tokenCsrf,
                },
                success:function(data){
                    // console.log(data.totalDiskon);
                    if(data.totalDiskon){
                        var hasilValidasi = data.totalDiskon;
                           $('#totalVocer').text(hasilValidasi);
                            // console.log(hasilValidasi);
                            hitungTotal();
                    } else {
                        alert('Vocer anda tidak valid');
                    }
                }
            });
        }

        function hitungTotal(){
            var subTotal = $('#total_harga').text();
            subTotal = parseInt(subTotal);
            var totalShipping = $('#total_shipping').text();
            totalShipping = parseInt(totalShipping);
            var totalDiscount = $('#totalDiscount').text();
            totalDiscount = parseInt(totalDiscount);
            var totalVocer = $('#totalVocer').text();
            totalVocer = parseInt(totalVocer);

            $('#sendSub').val(subTotal);
            $('#sendShipping').val(totalShipping);
            $('#sendVocer').val(totalDiscount);






            hitung = subTotal+totalShipping-totalDiscount-totalVocer;

            $('#totalAll').text(hitung);

            $('#sendTotalAll').val(hitung);

            console.log(subTotal);
            console.log(totalDiscount);
            console.log(totalShipping);
            console.log(totalDiscount);
            console.log(totalDiscount);
            console.log(totalAll);
            console.log('TOTAL');
            console.log(hitung);

        }

        $('#alamatLain').on('click', function(){
            $('#shipping_jnt').prop('checked', false);
            $('#shipping_jne').prop('checked', false);
        });



        // ------ document ready
       $(document).ready(function(){

           cekAllOngkir();
           hitungTotal();

        var totalHarga = $('#total_harga').attr('data-harga');
        $('.prodc_add').on('click', function(){
             var totalBerat = $('#total_berat').val();
            // add and minus product
            var id = $(this).attr('data-id');
            var getQtyColumn = $('#prodc_qty-'+id).val();
            var getHarga = $('#harga-'+id).val()
            getQtyColumn++;
            var updateQty = $('#prodc_qty-'+id).val(getQtyColumn);
            var getHargaPcs = $('#hargaPcs-'+id).val();
            console.log(getHargaPcs);
            var hitungProduk = getQtyColumn*getHargaPcs;
            $('#harga-'+id).val(hitungProduk);
            console.log(hitungProduk);
            // tambah berat
            var beratPcs = $('#berat_satuan_fix-'+id).val();
            console.log('Berat Pcs :', beratPcs);
            console.log('QTY column', getQtyColumn);
            var tambah_berat = beratPcs*getQtyColumn;
            var hasil = $('#berat_satuan-'+id).val(tambah_berat);
            console.log(tambah_berat);
            // berat total tambah
            totalBerat = (parseInt(totalBerat)+parseInt(beratPcs));
            // console.log('total berat' ,totalBerat);
            $('#total_berat').val(totalBerat);
            // tambah total harga
            totalHarga = parseInt($('#total_harga').attr('data-harga'))+parseInt(getHargaPcs);
            console.log('Total harga add',totalHarga);
            $('#total_harga').text(totalHarga);
            $('#total_harga').attr('data-harga', totalHarga);

            cekAllOngkir();
            hitungTotal();
        });


        $('.prodc_min').on('click', function(){
            var totalBerat = $('#total_berat').val();
        // add and minus product
            var id = $(this).attr('data-id');
            var getQtyColumn = $('#prodc_qty-'+id).val();
            var getHarga = $('#harga-'+id).val()
            if(getQtyColumn > 1){
                getQtyColumn--;
                var updateQty = $('#prodc_qty-'+id).val(getQtyColumn);
                var getHargaPcs = $('#hargaPcs-'+id).val();
                console.log(getHargaPcs);
                var hitungProduk = getQtyColumn*getHargaPcs;
                $('#harga-'+id).val(hitungProduk);
                console.log(hitungProduk);
                $('#prodc_qty-'+id).val(getQtyColumn);
                console.log(getQtyColumn);
                // kurang berat
                var beratPcs = $('#berat_satuan_fix-'+id).val();
                console.log(beratPcs);
                console.log(getQtyColumn);
                var tambah_berat = beratPcs*getQtyColumn;
                $('#berat_satuan-'+id).val(tambah_berat);
                console.log(tambah_berat);
                // berat total tambah
                totalBerat = (parseInt(totalBerat)-parseInt(beratPcs));
                console.log('total berat' ,totalBerat);
                $('#total_berat').val(totalBerat);
                   // tambah total harga
                totalHarga = parseInt($('#total_harga').attr('data-harga'))-parseInt(getHargaPcs);
                console.log('Total harga min ',totalHarga);
                $('#total_harga').text(totalHarga);
                $('#total_harga').attr('data-harga', totalHarga);
            }

            cekAllOngkir();
            hitungTotal();
        });
        // end
        // hapus action
            $('.HapusClass').on('click', function(){
                var IdDetailCart = $(this).attr('data-id-detail');
                var IdCart = $(this).attr('data-id-cart');
                var tokenCsrf = $('#csrfToken').val()
                var getBeratTotalProduct = $('#total_berat').val();
                var getBeratProductRemove = $('#berat_satuan-'+IdCart).val();
                var hargaHapus = $('#harga-'+IdCart).val();
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
                                // hapus berat
                                var kurangBerat = getBeratTotalProduct-getBeratProductRemove;
                                $('#total_berat').val(kurangBerat);
                                // console.log(kurangBerat);
                                $('#berat_satuan-'+IdCart).remove();
                                // end hapus berat

                                // hapus harga total
                                 var hapusHarga = parseInt(totalHarga)-parseInt(hargaHapus);
                                console.log('harga pasca hapus', hapusHarga)
                                $('#total_harga').text(hapusHarga);
                                $('#total_harga').attr('data-harga', hapusHarga);

                                cekAllOngkir();
                                hitungTotal();
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
            // end Hapus action



        });


    </script>
@endsection
