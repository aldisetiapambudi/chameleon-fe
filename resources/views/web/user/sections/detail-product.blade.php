@extends('web.user.app')
@section('section')
    <div class="m-4">
        <div class="grid grid-cols-2 gap-2">
            <div class="px-2">
                <img class="mx-auto w-full" src="{{ asset('images/product_2.jpeg') }}">
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
                <ul class="grid grid-cols-3 gap-x-5 m-10 max-w-md mx-auto">
                    <li class="relative">
                        <input class="sr-only peer" type="radio" value="yes" name="answer" id="answer_yes">
                        <label
                            class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="answer_yes">Yes</label>

                        <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                            👍
                        </div>
                    </li>

                    <li class="relative">
                        <input class="sr-only peer" type="radio" value="no" name="answer" id="answer_no">
                        <label
                            class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="answer_no">No</label>

                        <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                            👎
                        </div>
                    </li>

                    <li class="relative">
                        <input class="sr-only peer" type="radio" value="maybe" name="answer" id="answer_maybe">
                        <label
                            class="flex p-5 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-yellow-500 peer-checked:ring-2 peer-checked:border-transparent"
                            for="answer_maybe">Maybe</label>

                        <div class="absolute hidden w-5 h-5 peer-checked:block top-5 right-3">
                            🤔
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- articles --}}
    <x-article-component />
    {{-- end-articles --}}
@endsection
