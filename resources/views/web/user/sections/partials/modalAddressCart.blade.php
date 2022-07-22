<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="modalAddressChangeCart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                    <i class="fas fa-map-marker-alt"></i> Pilih Lokasi Tujuan
                </h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <!-- <form action="{{ route('user.address.change') }}" method="POST">
                    @csrf
                    @method('POST') -->
                    @foreach($a = Auth::user()->UserAddress as $address)

                            <ul class="block mt-2 mb-2">
                                <li class="relative mr-1">
                                    <input class="sr-only peer SelectGanti" type="radio"
                                        value="{{ $address->id_alamat }}" name="changeAddressUser"
                                        id="addressUser_{{$address->id_alamat}}"
                                            data-alamat_1 = "{{ $address->alamat_1 }}"
                                            data-id-kec="{{ $address->kecamatan_id }}"
                                            data-id-kab="{{ $address->kabupaten_id }}"
                                            data-id-prov="{{ $address->provinsi_id }}"
                                            data-kec="{{ $address->kecamatan }}"
                                            data-kab="{{ $address->kabupaten }}"
                                            data-prov="{{ $address->provinsi }}"
                                            data-nama="{{ $address->nama_lengkap }}"
                                            data-telp="{{ $address->no_telp }}"
                                            data-pos="{{ $address->kode_pos }}"
                                        >
                                    <label
                                        class="block p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent font-semibold "
                                        for="addressUser_{{$address->id_alamat}}">
                                        <p class="flex">
                                           <i class="fas fa-user mr-2 my-auto"></i> {{ $address->nama_lengkap }}

                                        </p>
                                        <p class="text-xs my-auto font-normal" id="ganti_phone">
                                          <i class="fas fa-phone fa-sm"></i>
                                            {{ $address->no_telp }}
                                         </p>

                                        <p class="font-normal text-sm">
                                            <span id="ganti_alamat1">
                                                {{ $address->alamat_1 }}
                                            </span>
                                            <span id="ganti_kec">
                                                {{ $address->kecamatan }},
                                            </span>
                                            <span id="ganti_kab">
                                                {{ $address->kabupaten }},
                                            </span>
                                            <span id="ganti_prov">
                                                {{ $address->provinsi }},
                                            </span>
                                            <span id="ganti_kode_pos">
                                                Kode Pos : {{ $address->kode_pos }}
                                            </span>
                                        </p>
                                    </label>

                                </li>
                            </ul>
                     @endforeach
                     <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                    class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-bs-dismiss="modal">Batal</button>

            </div>
                <!-- </form> -->

            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.SelectGanti').on('click', function(){
        var getIdAlamat = $(this).val();
        var getAlamat1 = $(this).attr('data-alamat_1');
        var getIdKec = $(this).attr('data-id-kec');
        var getIdKab = $(this).attr('data-id-kab');
        var getIdProv = $(this).attr('data-id-prov');
        var getKec = $(this).attr('data-kec');
        var getKab = $(this).attr('data-kab');
        var getProv = $(this).attr('data-prov');
        var getNama = $(this).attr('data-nama');
        var getTelp = $(this).attr('data-telp');
        var getPos = $(this).attr('data-pos');

        // console.log('Nama :', getNama)
        // console.log('Telp :', getTelp)
        // console.log('ID Alamat:', getIdAlamat)
        // console.log('Alamat 1 :', getAlamat1)
        // console.log('ID kec :', getIdKec)
        // console.log('ID Kab :', getIdKab)
        // console.log('ID Prov :', getIdProv)
        // console.log('kec :', getKec)
        // console.log('Kab :', getKab)
        // console.log('Prov :', getProv)
        // console.log('Kode Pos :', getPos)

        $('#nama_user').text(getNama);
        $('#alamat_1_cart').text(getAlamat1);
        $('#no_telp').text(getTelp);
        $('#address_kec').text(getKec);
        $('#address_kab').text(getKab);
        $('#address_prov').text(getProv);
        $('#address_kode_pos').text(getPos);
        $('#id_kec').val(getIdKec);
        $('#id_kab').val(getIdKab);
        $('#id_prov').val(getIdProv);


        $('#modalAddressChangeCart').modal("toggle");


    });




});
</script>
