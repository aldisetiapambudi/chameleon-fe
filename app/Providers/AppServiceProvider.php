<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Category;
use Illuminate\Support\Facades\View;

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
    }
}
