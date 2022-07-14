<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>CHAMELEON CLOTH</title>
    @stack('css')
    <!-- JS -->

    <script src="https://kit.fontawesome.com/26c87d64a2.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header>
        @include('web.user.layout.header')
    </header>

    <main>
        @yield('section')
    </main>

    <footer>
        @include('web.user.layout.footer')
    </footer>
    <script type="text/javascript">
        let toggleBtn = document.querySelector("#navbar-toggle");
        let collapse = document.querySelector("#navbar-collapse");
        let collapseSearch = document.querySelector("#navbar-collapse-search");
        // cart
        let toggleBtnCart = document.querySelector("#bag");
        let toggleBtnCartMobile = document.querySelector("#bag_mobile")
        let menu_cart = document.querySelector("#user_cart");
        // pencarian lg
        let cariLgBtn = document.querySelector("#cari_lg");
        let boxCari = document.querySelector("#box_cari");
        let halaman = document.querySelector("#halaman");
        let closeCari = document.querySelector("#close_cari");
        let BtnCari = document.querySelector("#cariBtn");
        let navCari = document.querySelector("#navSearch");

        // menu
        toggleBtn.onclick = () => {
            collapse.classList.toggle("hidden");
            collapse.classList.toggle("flex");
            collapseSearch.classList.toggle("hidden");
            halaman.classList.remove("hidden");
            menu_cart.classList.toggle("-translate-y-[294px]")

        };
        //  cart
        toggleBtnCart.onclick = () => {
            menu_cart.classList.toggle("visible");
            menu_cart.classList.toggle("invisible");
        };
        toggleBtnCartMobile.onclick = () => {
            menu_cart.classList.toggle("visible");
            menu_cart.classList.toggle("invisible");
        };

    //    -- pencarian
        cariLgBtn.onclick = () => {
            boxCari.classList.add("flex");
            boxCari.autocompleate;
            boxCari.classList.add("pl-4");
            boxCari.classList.remove("hidden");
            halaman.classList.add("hidden");
            cariLgBtn.classList.add("hidden");
            closeCari.classList.remove("hidden");
            closeCari.classList.add("flex");
            navCari.classList.add("w-full");
            BtnCari.classList.add("flex");
            BtnCari.classList.remove("hidden");
            setfocus()

        }
        function setfocus(){
            document.getElementById("box_cari").focus();

        }

        closeCari.onclick = () => {
            BtnCari.classList.remove("flex");
            BtnCari.classList.add("hidden");
            navCari.classList.remove("w-full");
            cariLgBtn.classList.add("flex");
            cariLgBtn.classList.remove("hidden");
            boxCari.classList.add("hidden");
            boxCari.classList.remove("flex");
            halaman.classList.add("flex");
            halaman.classList.remove("hidden");
            closeCari.classList.add("hidden");
        }

    </script>


    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    @stack('javascript')
</body>

</html>
