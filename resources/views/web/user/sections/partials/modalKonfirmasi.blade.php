<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="modalKonfirmasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                        <i class="fas fa-user"></i> Konfirmasi Pembayaran
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <p>
                        Pesanan anda <b>#</b><b id="modal_kode"></b> telah di pesan jumlah yang perlu di bayar
                        <b id="modal_totalHarga"></b>
                    </p>
                    <p>
                        Terimakasih atas pesanan anda! Terimakasih atas pesanan anda! Pesanan akan diproses setelah anda melakukan pembayaran. Mohon membayar sebelum <b id="modal_expDate">

                        </b> ke nomor rekening dibawah ini :
                    </p>
                    <div class="mt-2 bg-black text-white text-center rounded-md" id="BRI">
                        <p class="p-4">
                            BRI 677901015573536 A/N NAUFAL HUNAIF
                        </p>
                    </div>
                    <div class="mt-2 bg-black text-white text-center rounded-md" id="BRI">
                        <p class="p-4">
                            Mandiri 1800004486124 A/N NAUFAL HUNAIF
                        </p>
                    </div>

                    <div class="flex justify-left mt-2">
                        <div class="mb-3 w-96">
                          <label for="konfirmTransfer" class="form-label inline-block mb-2 text-gray-700">Upload file konfirmasi tranfer</label>
                          <input class="form-control
                          block w-full px-2 py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding
                          border border-solid border-gray-300 rounded transition ease-in-out m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="konfirmTransfer" type="file">
                        </div>
                      </div>
                    <div class="mt-4  modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">

                        <form action="{{ route("user.order.konfirmasi") }}" method="post">
                            @csrf()
                            @method("POST")
                            <input type="hidden" id="kode_order" name="kode_order" value="">

                            <button type="submit" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                            >Konfirmasi</button>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
