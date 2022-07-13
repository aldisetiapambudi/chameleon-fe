<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\CartItem;
use App\Models\DetailCartItem;
use Illuminate\Support\Facades\Auth;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view currency
        Blade::directive('currency', function ($expression) {
            return "<?php echo number_format($expression,0,',','.'); ?>";
        });

        // menu
        $menu = Category::all();
        View::share('shareMenu', $menu);


        // Cart Item
        // $getIdUser = Auth::guest();
        // return ddd($getIdUser);
        // $cartItem = CartItem::where('id_pengguna', $getIdUser)->get();
        // // $cartItemShow = $cartItem['id_produk'];
        // $cartItem = DetailCartItem::all();
        // View::share('shareCartItem', $cartItem);
    }
}
