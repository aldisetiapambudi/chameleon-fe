@extends('web.user.app')
@section('section')
    <div class="row">
        <div class="relative overflow-hidden bg-no-repeat bg-cover"
            style="background-position:50%;background-image: url('{{ asset('images/bannerr_middle_1.jpg') }}');height: 350px;">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.75)">
                <div class="flex justify-center items-center h-full">
                    <div class="text-center text-white px-6 md:px-12">
                        <h3 class="text-xl md:text-2xl mt-0 mb-6 font-sanserif">New Arival</h3>
                        <h1 class="text-2xl md:text-5xl mb-8  font-serif">FORAL PANT</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mx-auto sm:flex sm:flex-wrap gap-4 sm:justify-center mt-10 mb-14">
            {{-- <div class="col border border-blue-400 w-80 h-80 mx-auto block"> --}}
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs">
                    <a href="#">
                        <img class="rounded-t-lg mx-auto" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                    </a>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_2.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>

            {{-- === DUMMY ==== --}}

            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>
            <div class="col mt-10 flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-xs ">
                    <div class="relative group">
                        <a href="#">
                            <img class="rounded-t-lg mx-auto -z-20" src="{{ asset('images/product_1.jpeg') }}" alt="" />
                            <div
                                class="bg-black bg-opacity-60 z-20 absolute w-full h-full top-1 flex invisible group-hover:visible transform duration-200 transition-all ">
                                <span class="text-white mx-auto my-auto text-lg font-semibold text-center">
                                    Lorem, ipsum dolor. <br>
                                    <span class="text-base font-normal">Lorem ipsum dolor sit amet.</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="row flex -mt-2 mb-3">
                            <div class="col ">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Type</p>
                            </div>
                            <div class="col ml-2">
                                <p class="bg-black text-white p-1 px-3 my-auto rounded-2xl ">Category</p>
                            </div>
                        </div>
                        <h5 class="text-gray-900 text-2xl font-semibold mb-2">Jas Gray white line</h5>
                        {{-- <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum, dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit amet.
                        </p> --}}
                        <h3 class="mt-16 text-green-500 font-bold text-xl">Rp. 589.000 </h3>
                    </div>
                </div>
            </div>


            {{-- END DUMMY --}}
        </div>
    </div>
@endsection
