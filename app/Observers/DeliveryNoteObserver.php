<?php

namespace App\Observers;

use App\Mail\DataSent;
use App\Models\DeliveryNote;
use Illuminate\Support\Facades\Mail;

class DeliveryNoteObserver
{
    /**
     * Handle the DeliveryNote "created" event.
     *
     * @param  \App\Models\DeliveryNote  $deliveryNote
     * @return void
     */
    public function created(DeliveryNote $deliveryNote)
    {
        // Mail::to('thomas.damsgaard@hotmail.com')->queue(new DataSent($deliveryNote));
    }

    /**
     * Handle the DeliveryNote "updated" event.
     *
     * @param  \App\Models\DeliveryNote  $deliveryNote
     * @return void
     */
    public function updated(DeliveryNote $deliveryNote)
    {
        //
    }

    /**
     * Handle the DeliveryNote "deleted" event.
     *
     * @param  \App\Models\DeliveryNote  $deliveryNote
     * @return void
     */
    public function deleted(DeliveryNote $deliveryNote)
    {
        //
    }

    /**
     * Handle the DeliveryNote "restored" event.
     *
     * @param  \App\Models\DeliveryNote  $deliveryNote
     * @return void
     */
    public function restored(DeliveryNote $deliveryNote)
    {
        //
    }

    /**
     * Handle the DeliveryNote "force deleted" event.
     *
     * @param  \App\Models\DeliveryNote  $deliveryNote
     * @return void
     */
    public function forceDeleted(DeliveryNote $deliveryNote)
    {
        //
    }
}
