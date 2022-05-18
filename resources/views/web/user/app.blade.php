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

            menu_cart.classList.toggle("-translate-y-64")

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
            boxCari.classList.add("pl-16");
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

    <script type="text/javascript">
        // ==== # sample 1 shopping cart ====
        let addProdc = document.querySelector("#prodc_add");
        let minProdc = document.querySelector("#prodc_min");
        let getValProdc = document.querySelector("#prodc_qty").value;
        let valProdc = document.getElementById("prodc_qty");
        let getHarga = document.getElementById("harga").value;
        let harga = document.getElementById("harga");
        let hargaPcs = document.getElementById("harga_satuan").value;
        addProdc.onclick = () => {
            valProdc.value = ++getValProdc;
            // dev
            getHarga = getValProdc * hargaPcs;
            harga.value = getHarga;
            minProdc.disabled = false;
            // dev
            // console.log(harga.value);
            // end dev
        };
        minProdc.onclick = () => {
            valProdc.value = --getValProdc;
            getHarga = getValProdc * hargaPcs;
            harga.value = getHarga;
            // dev
            // console.log(harga.value);
            // end dev
            if (getValProdc <= 0) {
                getValProdc.value = 0;
                valProdc.value = 0;
                harga.value = 0;
                minProdc.disabled = true;
            }
        };

        // =====  # sample 2 shopping cart ====
        let addProdc2 = document.querySelector("#prodc_add2");
        let minProdc2 = document.querySelector("#prodc_min2");
        let valProdc2 = document.getElementById("prodc_qty2");
        addProdc2.onclick = () => {
            valProdc2.value = ++getValProdc;
            minProdc2.disabled = false;
        };
        minProdc2.onclick = () => {
            valProdc2.value = --getValProdc;
            if (valProdc2.value <= 0) {
                minProdc2.disabled = true;
            }
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    @stack('javascript')
</body>

</html>
