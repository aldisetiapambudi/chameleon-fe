<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="modalAddressBag" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                    <i class="fas fa-map-marker-alt"></i> Pilih Lokasi Utama
                </h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <form action="{{ route('user.address.change') }}" method="POST">
                    @csrf
                    @method('POST')
                    @foreach($a = Auth::user()->UserAddress as $address)
                            <ul class="block mt-2 mb-2">
                                <li class="relative mr-1">
                                    <input class="sr-only peer" type="radio"
                                        value="{{ $address->id_alamat }}" name="changeAddressUser"
                                        id="addressUser {{$address->id_alamat}}">
                                    <label
                                        class="block p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent font-semibold"
                                        for="addressUser {{$address->id_alamat}}">
                                        {{ $address->nama_lengkap }}
                                        <p class="font-normal text-sm">
                                            {{ $address->alamat_1 }}
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
                <button type="submit"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Simpan</button>
            </div>
                </form>

            </div>

        </div>
    </div>
</div>
