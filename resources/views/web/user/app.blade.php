<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- only on dev -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- only on dev end -->
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

        toggleBtn.onclick = () => {
            collapse.classList.toggle("hidden");
            collapse.classList.toggle("flex");
            collapseSearch.classList.toggle("hidden");
        };
    </script>
    <script type="text/javascript">
        let toggleBtnCart = document.querySelector("#bag");
        let collapse2 = document.querySelector("#user_cart");
        toggleBtnCart.onclick = () => {
            collapse2.classList.toggle("visible");
            collapse2.classList.toggle("invisible");
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    @stack('javascript')
</body>

</html>
