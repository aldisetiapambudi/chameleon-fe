
<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="modalAddressAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
          Tambah Alamat Baru
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <form action="">
            <div class="row">
                <div class="col">
                    <div class="flex justify-left">
                        <div class="mb-3  w-full">
                          <label for="nama_lengkap" class="form-label inline-block mb-2 text-gray-700"
                            >Nama Lengkap</label
                          >
                          <input
                            type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                            placeholder="Nama Lengkap"
                          />
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="flex justify-left">
                        <div class="mb-3  w-full">
                          <label for="no_tlp" class="form-label inline-block mb-2 text-gray-700"
                            >No Telp</label
                          >
                          <input
                            type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}"
                            placeholder="Nomor Telp"
                          />
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="flex justify-left">
                        <div class="mb-3  w-full">
                          <label for="alamat_1" class="form-label inline-block mb-2 text-gray-700"
                            >Alamat Lengkap</label>
                          <textarea class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="alamat_1" name="alamat_1" rows="3" placeholder="Alamat lengkap" >{{ old('alamat_1') }}</textarea>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="flex justify-left">
                        <div class="mb-3 w-full">
                          <select class="form-select appearance-none block w-full px-2 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg- focus:border-blue-600 focus:outline-none" aria-label="Select Provinsi" name="select_prov" id="select_prov">
                            <option selected disabled>--- Provinsi ---</option>
                                {{-- @foreach ($dataProvinsi as $prov) --}}
                                {{-- <option value="{{ $prov->select_prov . "," . $prov->province }} ">{{ $prov->province }}</option> --}}
                                {{-- @endforeach --}}

                          </select>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="flex justify-left">
                        <div class="mb-3 w-full">
                          <select class="form-select appearance-none block w-full px-2 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg- focus:border-blue-600 focus:outline-none" aria-label="Select Kabupaten"  id="select_kab" name="select_kab" >
                              <option selected disabled>--- Kabupaten ---</option>

                          </select>
                        </div>
                      </div>
                </div>
                <div class="col">
                    {{-- try --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group mb-6">
                          <input type="text" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                            aria-describedby="emailHelp123" placeholder="First name">
                        </div>
                        <div class="form-group mb-6">
                          <input type="text" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
                            aria-describedby="emailHelp124" placeholder="Last name">
                        </div>
                      </div>

                    {{-- end try --}}
                    <div class="flex justify-left">
                        <div class="mb-3 w-full">
                          <select class="form-select appearance-none block w-full px-2 py-1 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg- focus:border-blue-600 focus:outline-none" aria-label="Select kecamatan" name="select_kec" id="select_kec">
                              <option selected disabled>--- Kecamatan ---</option>
                          </select>
                        </div>
                      </div>
                </div>



            </div>
        </form>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">Close</button>
        <button type="button"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button>
      </div>
    </div>
  </div>
</div>
