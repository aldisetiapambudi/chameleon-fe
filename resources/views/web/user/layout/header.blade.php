<nav class="bg-black py-2 md:py-4 px-4">
    <div class="px-4 md:flex md:items-center">
        <div class="flex justify-between items-center">
            <button class="border border-solid border-white px-3 py-1 rounded text-white opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <a href="{{ route('user.home') }}" class="font-bold text-xl text-white">
                <img src="{{ asset('images/logo.jpg') }}">
            </a>
            <a href="#" name="bag_mobile" id="bag_mobile" class="md:hidden p-2 lg:px-4 md:mx-2 text-white text-center border border-transparent rounded hover:bg-gray-400 hover:text-white transition-colors duration-300  md:mt-0 mt-2 md:ml-1"><i class="fas fa-bag-shopping"></i>
                @if (session()->has('successAddToCart'))
                <span class="absolute" id="successAddToBag">
                    <p class="text-yellow-500 text-xs">
                        <i class="fas fa-check"></i>
                    </p>
                </span>
                @endif
            </a>

        </div>

        <div class="hidden md:flex flex-row md:flex-row mt-3 md:mt-0 md:ml-auto" id="navbar-collapse">
            <div id="halaman" class="flex flex-col md:flex-row md:ml-auto w-full">
                <div class="hidden md:hidden pt-2 relative mx-auto text-gray-300 w-full" id="navbar-collapse-search">
                    <div class="relative w-full bg-gray-900">
                        <div class="absolute top-2 left-3"> <button type="submit"> <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i> </button> </div>
                        <input type="text" class="h-10 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none bg-transparent" placeholder="Search">
                    </div>
                </div>

                @foreach ($shareMenu as $menu)
                <a href="{{ route('user.list', Str::lower($menu->nama_kategori)) }}" class="p-2 lg:px-4 md:mx-2 text-white rounded hover:text-gray-400 transition-colors duration-300">{{ $menu->nama_kategori }}</a>
                @endforeach
                <a href="#" class="md:hidden mt-3 p-1 my-auto lg:px-4 md:mx-2 text-white rounded-full bg-blue-600 hover:bg-blue-500 transition-colors duration-300 text-center justify-center">
                    Konfirmasi pembayaran
                </a>
            </div>
        </div>

        <div id="navSearch" class="hidden md:flex flex-col md:flex-row mt-3 md:mt-0 md:ml-auto">

            <div class="w-10/12 mx-auto flex">
                <form action="" class="flex w-full">
                    <button id="cariBtn" class="text-slate-400 p-2 hidden hover:text-slate-200">
                        <i class="fas fa-search "></i>
                    </button>
                    <input type="text" id="box_cari" name="search" class="h-10 w-full shadow-lg focus:outline-none bg-transparent  border-b-2 border-blue-400 text-white text-left mx-auto hidden " placeholder="Search" value="" autofocus autocomplete="off">
                </form>
                <button id="close_cari" class=" p-2 text-slate-400 hidden hover:text-slate-200">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <button href="" id="cari_lg" name="cari_lg" class="p-2 lg:px-4 md:mx-2 text-white text-center border border-transparent rounded hover:bg-gray-400 hover:text-white transition-colors duration-300 md:mt-0 mt-2 "><i class="fas fa-search"></i>

            </button>

            <a href="#" id="bag" name="bag" class="p-2 lg:px-4 md:mx-2 text-white text-center border border-transparent rounded hover:bg-gray-400 hover:text-white transition-colors duration-300  md:mt-0 mt-2 md:ml-1"><i class="fas fa-bag-shopping"></i>
                @if (session()->has('successAddToCart'))
                <span class="absolute" id="successAddToBag">
                    <p class="text-yellow-500 text-xs">
                        <i class="fas fa-check"></i>
                    </p>
                </span>
                @endif
            </a>
        </div>
        <!-- menu cart -->
        <section id="user_cart" class="invisible z-50 -translate-y-8 md:translate-y-3 translate-x-6 mb:translate-x-0">
            <div class="ml-3 mr-4 mt-10 relative ">
                <div class="origin-top-right absolute right-0 w-64 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <div class="container mt-2">

                        @auth
                        <!-- <hr class="w-full h-0.5 bg-slate-400"> -->


                        <!-- <div class="ml-3 p-4">
                            <h3 class="text-slate-300 my-4 text-center">Your Bag is empty</h3>
                        </div> -->
                        <!-- {{-- Product Elemet Show --}}
                        {{-- @if ($shareCartItem == null) --}}
                        <div class="ml-3 p-4">
                            <h3 class="text-slate-300 my-4 text-center">Your Bag is empty</h3>
                        </div>
                        {{-- @else --}}
                        {{-- @foreach ($shareCartItem as $item) --}}
                        <div class="ml-3 p-4">
                            {{-- <h3 class="text-slate-300 my-4 text-center">{{ $item['id_produk'] }}</h3> --}}
                        </div>
                        {{-- @endforeach --}}
                        {{-- @endif --}}
                        {{-- END Product Elemet Show --}} -->
                        <hr class="w-full h-0.5 bg-slate-400">
                        <a href="{{ route('user.cart_detail') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 duration-300 transform transition hover:translate-x-2" role="menuitem" tabindex="-1" id="user-menu-item-0">
                            <i class="fas fa-shopping-bag mr-3"></i> Bag
                        </a>
                        <hr>
                        <a href="{{ route('user.orders') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 duration-300 transform transition hover:translate-x-2 " role="menuitem" tabindex="-1" id="user-menu-item-1"><i class="fas fa-box mr-3"></i>Orders</a>
                        <hr>
                        <a href="{{ route('user.account') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 duration-300 transform transition hover:translate-x-2 w-full" role="menuitem" tabindex="-1" id="user-menu-item-2"><i class="fas fa-cogs mr-3"></i>Setting</a>
                        <hr>
                        <a href="{{ route('user.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 duration-300 transform transition hover:translate-x-2 w-full" role="menuitem" tabindex="-1" id="user-menu-item-2"><i class="fas fa-user-circle mr-3"></i>Sign out
                        </a>
                    </div>
                    @else
                    <a href="{{ route('user.login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-200 duration-300 transform transition hover:translate-x-2" role="menuitem" tabindex="-1" id="user-menu-item-2"><i class="fas fa-user-circle mr-3"></i>Sign in</a>
                    @endauth
                </div>
            </div>
        </section>
        <!-- end cart -->

    </div>
</nav>

<div class="bg-red-400 py-2 md:py-2 px-4">
    <div class="mx-auto px-4 text-center">
        <p class="text-white text-sm md:text-lg">Get <span class="font-bold">Discount 50.000</span> with voucher
            code <span class="font-bold">FREE50</span></p>
    </div>

    {{-- notify --}}
    @if (session()->has('LoginSukses'))
    <div class="container w-full mx-auto offcanvas-top " id="alertbox">
        <div class="container w-full bg-blue-500 flex items-center text-white text-sm  px-4 py-3 rounded-lg" role="alert">
            <p class="mx-auto"> <i class="fas fa-info-circle"></i> Halo, Selamat datang
                {{ Auth::user()->username }}
            </p>
            <button class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
                <i class="fas fa-close"></i>
            </button>
        </div>
    </div>
    {{-- notify end --}}
    @endif
</div>





{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script> --}}

<script>
    // $(".closealertbutton").click(function(e) {

    //     pid = $(this).parent().parent().hide(500).slideUp(500)
    //     console.log(pid)

    // })


    setTimeout(function() {

        // Closing the alert
        $('#alertbox').alert('close');
        $('#successAddToBag').alert('close');

    }, 5000);
</script>
