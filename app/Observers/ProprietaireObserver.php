<?php

namespace App\Observers;

use App\Proprietaire;

class ProprietaireObserver
{
    /**
     * Handle the = proprietaire "created" event.
     *
     * @param  \App\=Proprietaire  $=Proprietaire
     * @return void
     */
    public function creating(Proprietaire $proprietaire){
        $proprietaire->slug = Proprietaire::slugExist(Str::random(10));
        
    }
    public function created(Proprietaire $Proprietaire)
    {
        //
    }

    /**
     * Handle the = proprietaire "updated" event.
     *
     * @param  \App\=Proprietaire  $=Proprietaire
     * @return void
     */
    public function updated(Proprietaire $Proprietaire)
    {
        //
    }

    /**
     * Handle the = proprietaire "deleted" event.
     *
     * @param  \App\=Proprietaire  $=Proprietaire
     * @return void
     */
    public function deleted(Proprietaire $Proprietaire)
    {
        //
    }

    /**
     * Handle the = proprietaire "restored" event.
     *
     * @param  \App\=Proprietaire  $=Proprietaire
     * @return void
     */
    public function restored(Proprietaire $Proprietaire)
    {
        //
    }

    /**
     * Handle the = proprietaire "force deleted" event.
     *
     * @param  \App\=Proprietaire  $=Proprietaire
     * @return void
     */
    public function forceDeleted(Proprietaire $Proprietaire)
    {
        //
    }
}
