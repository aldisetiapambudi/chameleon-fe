<div class="row ml-2">
    <div class="col max-w-sm">
        <img src="{{ asset('images/user/ex_user.png') }}" alt="User Alt" class="w-28 h-28 max-w-xl rounded-full">
        <h3 class="mt-3 text-base md:text-lg uppercase font-bold">{{ Auth::user()->username }}</h3>
        <h4 class="mt-1 text-xs md:text-base max-w-sm">{{ Auth::user()->email }}</h4>
    </div>
</div>
<div class="row">
    <nav class="ml-2">
        <ul>
            <li class="mt-6">
                <a href="/account"
                    class="text-base md:text-lg hover:text-sky-700 active:text-red-600 {{ Request::is('account*') ? 'font-bold text-blue-600' : ' ' }}">Account</a>
            </li>
            <li class="mt-3">
                <a href="/address"
                    class="text-base md:text-lg hover:text-sky-700 active:text-sky-600 active:font-semibold {{ Request::is('address*') ? 'font-bold text-blue-600' : ' ' }}">Address</a>
            </li>
            <li class="mt-3">
                <a href="/orders"
                    class="text-base md:text-lg hover:text-sky-700 active:text-sky-600 active:font-semibold {{ Request::is('orders*') ? 'font-bold text-blue-600' : ' ' }}">Orders</a>
            </li>
        </ul>
    </nav>
</div>
