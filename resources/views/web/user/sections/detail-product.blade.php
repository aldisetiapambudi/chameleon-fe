@extends('web.user.app')
@section('section')
    <div class="container max-w-6xl px-4 mx-auto mt-4">
        <div class="grid md:grid-cols-2 grid-cols-1  gap-2">
            <div class="px-2">
                <img class="w-full h-auto mx-auto" src="{{ asset('images/product_2.jpeg') }}">
            </div>
            <div class="px-2">
                <div class="flex flex-row">

                    @for ($i = 0; $i < $labelLeght; $i++)
                        <span
                            class="inline-flex items-center justify-center px-4 py-1 m-1 text-xs font-bold leading-none text-white badge_label_<?php echo str_replace(' ', '_', $labelExplode[$i]); ?> rounded-full">{{ $labelExplode[$i] }}</span>
                    @endfor

                </div>
                <h1 class="text-gray-400 pb-4 pt-2 text-4xl mr-4">{{ $produk->nama_produk }}</h1>
                <p class="text-left mr-12 mb-10">
                    {{ $produk->deskripsi_produk }}
                </p>
                <form action="{{ route('user.product.add') }}" method="post">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="id_produk" value="{{ $produk->id_produk }}">
                    {{-- <form action="{{ route('user.product.add') }}" action="POST"> --}}
                    {{-- @csrf --}}
                    {{-- @method('POST') --}}
                    <label class="font-bold text-lg">COLORS : </label><span class="text-lg"> Navy </span>
                    <ul class="flex mt-2 mb-10">
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="Orage" name="color" id="color_1">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_1">
                                <div class="p-2 mx-1 shadow-sm bg-yellow-600 w-2 h-2 rounded-full"></div>
                            </label>
                        </li>
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="Navy" name="color" id="color_2">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_2">
                                <div class="p-2 mx-1 shadow-sm bg-blue-900 w-2 h-2 rounded-full"></div>
                            </label>
                        </li>

                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="Darker" name="color" id="color_3">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_3">
                                <div class="p-2 mx-1 shadow-sm bg-gray-900 w-2 h-2 rounded-full"></div>
                            </label>
                        </li>
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="Blue" name="color" id="color_4">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_4">
                                <div class="p-2 mx-1 shadow-sm bg-blue-500 w-2 h-2 rounded-full"></div>
                            </label>
                        </li>

                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="Sky" name="color" id="color_5">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_5">
                                <div class="p-2 mx-1 shadow-sm bg-sky-400 w-2 h-2 rounded-full"></div>

                            </label>
                        </li>

                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="black" name="color" id="color_6">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_6">
                                <div class="p-2 mx-1 shadow-sm bg-black w-2 h-2 rounded-full"></div>
                            </label>
                        </li>
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="red dark" name="color" id="color_7">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_7">
                                <div class="p-2 mx-1 shadow-sm bg-red-900 w-2 h-2 rounded-full"></div>
                            </label>
                        </li>
                    </ul>
                    <label class="font-bold text-lg mt-5">PREMIUM COLORS : </label><span class="text-lg"> Blue Ice
                    </span>
                    <ul class="flex mt-2 mb-10">
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="red premium" name="color_premium"
                                id="color_premium_1">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_premium_1">
                                <div class="p-2 mx-1 shadow-sm bg-yellow-900 w-2 h-2 rounded-full"></div>
                            </label>
                        </li>
                        <li class="relative mr-1">
                            <input class="sr-only peer" type="radio" value="blue ice" name="color_premium"
                                id="color_premium_2">
                            <label
                                class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                for="color_premium_2">
                                <div class="p-2 mx-1 shadow-sm bg-blue-900 w-2 h-2 rounded-full"></div>
                            </label>
                        </li>
                    </ul>

                    <label class="font-bold text-lg mt-5">SIZE : </label><span class="text-lg"> Small </span>
                    <ul class="grid grid-cols-2 gap-2 mt-2 mb-10">

                        @for ($s = 0; $s < $sizeLeght; $s++)
                            <li class="relative">
                                <input class="sr-only peer" onclick="getLabelSize()" type="radio"
                                    value="{{ $sizeExplode[$s] }}" name="size" id="{{ $sizeExplode[$s] }}">
                                <label
                                    class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                                    for="{{ $sizeExplode[$s] }}">
                                    <p class="text-center w-full font-bold">
                                        {{ $sizeExplode[$s] }}
                                    </p>
                                </label>
                            </li>
                        @endfor

                    </ul>



                    <div class="flex space-x-2">
                        <button type="submit"
                            class=" w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-bold text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">ADD
                            TO BAG

                        </button>
                </form>
            </div>
            {{-- </form> --}}
        </div>
    </div>
    </div>

    <script>
        function getLabelSize() {
            var labelUkuran = document.getElementsByName('size');
            console.log(labelUkuran);
        }
    </script>


    {{-- articles --}}
    <x-article-component />
    {{-- end-articles --}}
@endsection
