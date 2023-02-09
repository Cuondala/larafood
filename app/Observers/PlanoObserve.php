<?php

namespace App\Observers;

use App\Models\Plano;
use Illuminate\Support\Str;

class PlanoObserve
{
    /**
     * Handle the Plano "created" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function created(Plano $plano)
    {
        //

        $plano->url = Str::kebab($plano->nomePlano);
    }

    /**
     * Handle the Plano "updated" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function updated(Plano $plano)
    {
        //
        $plano->url = Str::kebab($plano->nomePlano);
    }

    /**
     * Handle the Plano "deleted" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function deleted(Plano $plano)
    {
        //
    }

    /**
     * Handle the Plano "restored" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function restored(Plano $plano)
    {
        //
    }

    /**
     * Handle the Plano "force deleted" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function forceDeleted(Plano $plano)
    {
        //
    }
}
