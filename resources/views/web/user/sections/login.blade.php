@extends('web.user.app')
@section('section')
    <div class="row">
        <h3 class="font-bold text-lg md:text-2xl text-center mt-16">Sign in for faster checkout.</h3>
        <div class="col mx-auto mt-3">

            <section id="form" class="mb-14">
                <div class="card w-72 md:w-96 h-auto mx-auto">
                    @if (session()->has('RegistrasiSukses'))
                        <div class="bg-blue-100 p-2 text-center rounded-md" role="alert">
                            <small> <i class="fas fa-check text-green-500 fa-xl"></i><strong> Yey! </strong> Your
                                registration is
                                successfully</small> i
                        </div>
                    @endif
                    <div class="block p-2 mt-6 bg-white max-w-sm">
                        <form>
                            <div class="form-group mb-3">
                                <input type="email" id="email" name="email"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300 rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-sm"
                                    placeholder="Email" autofocus required>
                            </div>
                            <div class="form-group mb-6">
                                <input type="password" id="password" name="password"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none shadow-sm"
                                    placeholder="Password" required>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="-translate-y-14 -translate-x-4 text-blue-600 hover:text-red-500">
                                    <i class="fas fa-arrow-right scale-150"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="row text-center">
                        <a href="#" class="text-blue-600">Lupa Password?</a>
                        <p>Tidak punya akun Chameleon Cloth?,
                            <a href="/daftar" class="text-blue-600">Daftar</a>
                        </p>
                    </div>


                </div>
                <div class="row mt-32 text-center">
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
