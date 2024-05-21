<?php

namespace App\Providers;

use App\Interfaces\PaymentGateway;
use App\Interfaces\PaymentGateway\BcpGateway;
use App\Interfaces\PaymentGateway\MercadoPagoGateway;
use App\Interfaces\PaymentGateway\PayPalGateway;
use App\Interfaces\PaymentGateway\StripeGateway;
use Illuminate\Support\ServiceProvider;
use App\Models\Coin;
use App\Models\Favorite;
use Exception;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentGateway::class, function ($app) {
            /* return new StripeGateway(); */
                return new MercadoPagoGateway();  
        });
/* laravel telescop solo funcione en etapa de desarrolo */
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
               // 2-PayPal, 1-Stripe o 3-BCP 4mercadopago
    /*     $this->app->bind(PaymentGateway::class, function ($app) {
            if ($app->request->input('payment_method_id') === 'stripe') {
                return new StripeGateway();
            } elseif ($app->request->input('payment_method_id') === 'paypal') {
                return new PayPalGateway();
            } elseif ($app->request->input('payment_method_id') === 'bcp') {
                return new BcpGateway();
            }
            // Agrega cualquier otro método de pago aquí
            throw new Exception('Error metodo de pago no valido ');
        }); */
    }
    

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (auth()->check()) {
                $favoritesCount = Favorite::where('user_id', auth()->user()->id)->count();
                $view->with('favoritesCount', $favoritesCount);
            }
        });

        /* Mostrar en todas las vistas la moneda */
        view()->composer('*', function ($view) {
            $coin = Coin::find(1);
            $view->with(['coin' => $coin]);
        });
     /*    view()->composer('*', function ($view) {
            $coin = Coin::find(1);
            $exchange_rate = $coin->exchange_rate;
            $view->with(['exchange_rate' => $exchange_rate, 'coin' => $coin]);
        }); */

        
    }
}
