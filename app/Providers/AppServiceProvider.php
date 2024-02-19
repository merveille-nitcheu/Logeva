<?php

namespace App\Providers;

use App\Bien;
use App\Locataire;
use App\Proprietaire;
use App\Observers\BienObserver;
use App\Observers\LocataireObserver;
use App\Observers\ProprietaireObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Bien::observe(BienObserver::class);
        Locataire::observe(LocataireObserver::class);
        Proprietaire::observe(ProprietaireObserver::class);
    }
}
