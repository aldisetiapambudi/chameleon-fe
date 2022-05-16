@extends('web.user.app')
@section('section')
    <div class="row">
        <h3 class="font-bold text-lg md:text-2xl text-center mt-16">Sign in for faster checkout.</h3>
        <div class="col mx-auto mt-3">

            <section id="form" class="mb-12">
                <div class="card w-72 md:w-96 h-auto mx-auto">
                    <div class="block p-2 rounded-lg  bg-white max-w-sm">
                        <form>
                            <div class="form-group mb-3">
                                <input type="email" id="email" name="email"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    placeholder="Email">
                            </div>
                            <div class="form-group mb-6">
                                <input type="email"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput91" placeholder="Email address">
                            </div>
                            <button type="submit" class="">aa<i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
