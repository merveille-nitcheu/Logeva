<?php

namespace App\Observers;

use App\Bien;
use Illuminate\Support\Str;

class BienObserver
{

    
    public function creating(Bien $bien){
        $bien->slug = Bien::slugExist(Str::random(10));
        $bien->id_proprietaire = 1;
    }


    public function created(Bien $bien)
    {
        //
    }

    /**
     * Handle the Bien "updated" event.
     *
     * @param  \App\Models\Bien  $bien
     * @return void
     */
    public function updated(Bien $bien)
    {
        //
    }

    /**
     * Handle the Bien "deleted" event.
     *
     * @param  \App\Models\Bien  $bien
     * @return void
     */
    public function deleted(Bien $bien)
    {
        //
    }

    /**
     * Handle the Bien "restored" event.
     *
     * @param  \App\Models\Bien  $bien
     * @return void
     */
    public function restored(Bien $bien)
    {
        //
    }

    /**
     * Handle the Bien "force deleted" event.
     *
     * @param  \App\Models\Bien  $bien
     * @return void
     */
    public function forceDeleted(Bien $bien)
    {
        //
    }
}
