<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\CartItem;
use App\Models\DetailCartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

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

        if(env('FORCE_HTTPS',false)) { // Default value should be false for local server
            URL::forceScheme('https');
        }


        // Cart Item
        // $getIdUser = Auth::guest();
        // return ddd($getIdUser);
        // $cartItem = CartItem::where('id_pengguna', $getIdUser)->get();
        // // $cartItemShow = $cartItem['id_produk'];
        // $cartItem = DetailCartItem::all();
        // View::share('shareCartItem', $cartItem);
    }
}
