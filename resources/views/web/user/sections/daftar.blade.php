@extends('web.user.app')
@section('section')
    <div class="row">
        <h3 class="font-bold text-lg md:text-2xl text-center mt-16">Daftar akun Chameleon Cloth</h3>
        <div class="col mx-auto mt-3">

            <section id="form" class="mb-14">
                <div class="card w-72 md:w-96 h-auto mx-auto">
                    <div class="block p-2 mt-6 bg-white max-w-sm">
                        <form action="{{ route('user.daftar') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-3 flex">
                                <input type="text" id="nama_depan" name="nama_depan"
                                    class="form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding  border border-solid  @if ($errors->has('nama_depan')) border-red-500 @else border-gray-300 @endif rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-sm"
                                    placeholder="Nama depan" autofocus required value={{ old('nama_depan') }}>
                                <input type="text" id="nama_belakang" name="nama_belakang"
                                    class="form-control ml-2 w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding  border border-solid @if ($errors->has('nama_depan')) border-red-500 @else border-gray-300 @endif rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-sm"
                                    placeholder="Nama belakang" required value="{{ old('nama_belakang') }}">

                            </div>
                            @if ($errors->has('nama_depan') | $errors->has('nama_belakang'))
                                <div class="w-full h-full text-red-500 rounded-lg mb-5 ">
                                    <p class="text-xs"><i class="fas fa-warning"></i> Nama depan dan nama belakang tidak
                                        boleh kosong
                                    </p>
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <input type="email" id="email" name="email"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding  border border-solid rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-sm"
                                    placeholder="Email" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="w-full h-full text-red-500 rounded-lg mb-5 ">
                                        <p class="text-xs"><i class="fas fa-warning"></i> {{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" id="password" name="password"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid @if ($errors->has('nama_depan')) border-red-500 @else border-gray-300 @endif rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-sm"
                                    placeholder="Password" required>
                                @error('password')
                                    <div class="w-full h-full text-red-500 rounded-lg mb-5 ">
                                        <p class="text-xs"><i class="fas fa-warning"></i> {{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-6">
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid @if ($errors->has('nama_depan')) border-red-500 @else border-gray-300 @endif rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-sm"
                                    placeholder="Confirm Password" required>
                                @error('confirm_password')
                                    <div class="w-full h-full text-red-500 rounded-lg mb-5 ">
                                        <p class="text-xs"><i class="fas fa-warning"></i> {{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="py-2 px-5 mt-4 bg-blue-500 text-white font-semibold rounded-lg">
                                    Selanjutnya
                                    <i class="fas fa-arrow-right scale-150 ml-2"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row mt-14 text-center">
                    <p>
                        Sudah memiliki akun? <a href="" class="text-blue-500">Login Di sini</a>
                    </p>
                </div>
                <div class="row mt-3 text-center">
                    <p>
                        Perlu bantuan? <a href="https://wa.me/6283116200500" class="text-blue-600" target="_blank">Chat
                            sekarang</a> dengan
                        customer service kami di
                        WhatsApp 083116200500

                    </p>
                </div>
            </section>
        </div>
    </div>
@endsection
