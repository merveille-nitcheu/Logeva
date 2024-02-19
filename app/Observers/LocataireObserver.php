<?php

namespace App\Observers;

use App\Locataire;

class LocataireObserver
{
    /**
     * Handle the = locataire "created" event.
     *
     * @param  \App\=Locataire  $=Locataire
     * @return void
     */
    public function creating(Locataire $locataire){
        $locataire->slug = Locataire::slugExist(Str::random(10));
        
    }
    public function created(Locataire $locataire)
    {
        //
    }

    /**
     * Handle the = locataire "updated" event.
     *
     * @param  \App\=Locataire  $=Locataire
     * @return void
     */
    public function updated(Locataire $locataire)
    {
        //
    }

    /**
     * Handle the = locataire "deleted" event.
     *
     * @param  \App\=Locataire  $=Locataire
     * @return void
     */
    public function deleted(Locataire $locataire)
    {
        //
    }

    /**
     * Handle the = locataire "restored" event.
     *
     * @param  \App\=Locataire  $=Locataire
     * @return void
     */
    public function restored(Locataire $locataire)
    {
        //
    }

    /**
     * Handle the = locataire "force deleted" event.
     *
     * @param  \App\=Locataire  $=Locataire
     * @return void
     */
    public function forceDeleted(Locataire $locataire)
    {
        //
    }
}
