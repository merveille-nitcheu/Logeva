<?php

namespace App\Observers;

use App\location;

class locationObserver
{
    /**
     * Handle the = location "created" event.
     *
     * @param  \App\=location  $=location
     * @return void
     */
    public function creating(location $location){
        $location->slug = location::slugExist(Str::random(10));
        
    }
    public function created(location $location)
    {
        //
    }

    /**
     * Handle the = location "updated" event.
     *
     * @param  \App\=location  $=location
     * @return void
     */
    public function updated(location $location)
    {
        //
    }

    /**
     * Handle the = location "deleted" event.
     *
     * @param  \App\=location  $=location
     * @return void
     */
    public function deleted(location $location)
    {
        //
    }

    /**
     * Handle the = location "restored" event.
     *
     * @param  \App\=location  $=location
     * @return void
     */
    public function restored(location $location)
    {
        //
    }

    /**
     * Handle the = location "force deleted" event.
     *
     * @param  \App\=location  $=location
     * @return void
     */
    public function forceDeleted(location $location)
    {
        //
    }
}
