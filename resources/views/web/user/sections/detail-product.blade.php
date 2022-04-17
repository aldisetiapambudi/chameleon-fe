@extends('web.user.app')
@section('section')
    <div class="container max-w-6xl px-4 mx-auto mt-4">
        <div class="grid md:grid-cols-2 grid-cols-1  gap-2">
            <div class="px-2">
                <img class="w-full h-auto mx-auto" src="{{ asset('images/product_2.jpeg') }}">
            </div>
            <div class="px-2">
                <div class="flex flex-row">
                    <span
                        class="inline-flex items-center justify-center px-4 py-1 m-1 text-xs font-bold leading-none text-white bg-black rounded-full">NEW</span>
                    <span
                        class="inline-flex items-center justify-center px-4 py-2 m-1 text-xs font-bold leading-none text-white bg-red-600 rounded-full">BEST
                        SELLER</span>
                </div>
                <h1 class="text-gray-400 pb-4 pt-2 text-4xl mr-4">Basic Suit - Notch</h1>
                <p class="text-left mr-12 mb-10">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                    dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                    clita kasd
                </p>
                <label class="font-bold text-lg">COLORS : </label><span class="text-lg"> Navy </span>
                <ul class="flex mt-2 mb-10">
                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="yes" name="color" id="color_1">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_1">
                            <div class="p-2 mx-1 shadow-sm bg-yellow-900 w-2 h-2 rounded-full"></div>
                        </label>
                    </li>
                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="yes" name="color" id="color_2">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_2">
                            <div class="p-2 mx-1 shadow-sm bg-blue-900 w-2 h-2 rounded-full"></div>
                        </label>
                    </li>

                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="maybe" name="color" id="color_3">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_3">
                            <div class="p-2 mx-1 shadow-sm bg-gray-900 w-2 h-2 rounded-full"></div>
                        </label>
                    </li>
                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="yes" name="color" id="color_4">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_4">
                            <div class="p-2 mx-1 shadow-sm bg-gray-500 w-2 h-2 rounded-full"></div>
                        </label>
                    </li>

                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="no" name="color" id="color_5">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_5">
                            <div class="p-2 mx-1 shadow-sm bg-blue-400 w-2 h-2 rounded-full"></div>

                        </label>
                    </li>

                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="maybe" name="color" id="color_6">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_6">
                            <div class="p-2 mx-1 shadow-sm bg-black w-2 h-2 rounded-full"></div>
                        </label>
                    </li>
                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="maybe" name="color" id="color_7">
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
                        <input class="sr-only peer" type="radio" value="yes" name="color_premium" id="color_premium_1">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_premium_1">
                            <div class="p-2 mx-1 shadow-sm bg-yellow-900 w-2 h-2 rounded-full"></div>
                        </label>
                    </li>
                    <li class="relative mr-1">
                        <input class="sr-only peer" type="radio" value="yes" name="color_premium" id="color_premium_2">
                        <label
                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="color_premium_2">
                            <div class="p-2 mx-1 shadow-sm bg-blue-900 w-2 h-2 rounded-full"></div>
                        </label>
                    </li>
                </ul>

                <label class="font-bold text-lg mt-5">SIZE : </label><span class="text-lg"> Small </span>
                <ul class="grid grid-cols-2 gap-2 mt-2 mb-10">
                    <li class="relative">
                        <input class="sr-only peer" type="radio" value="s" name="size" id="size_s">
                        <label
                            class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="size_s">
                            <p class="text-center w-full font-bold">S</p>
                        </label>
                    </li>
                    <li class="relative">
                        <input class="sr-only peer" type="radio" value="m" name="size" id="size_m">
                        <label
                            class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="size_m">
                            <p class="text-center w-full font-bold">M</p>
                        </label>
                    </li>
                    <li class="relative">
                        <input class="sr-only peer" type="radio" value="l" name="size" id="size_l">
                        <label
                            class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="size_l">
                            <p class="text-center w-full font-bold">L</p>
                        </label>
                    </li>
                    <li class="relative">
                        <input class="sr-only peer" type="radio" value="xl" name="size" id="size_xl">
                        <label
                            class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-blue-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="size_xl">
                            <p class="text-center w-full font-bold">XL</p>
                        </label>
                    </li>
                </ul>

                <div class="flex space-x-2">
                    <button type="button"
                        class=" w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-bold text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">ADD TO BAG</button>
                </div>
            </div>
        </div>
    </div>

    {{-- articles --}}
    <x-article-component />
    {{-- end-articles --}}
@endsection
