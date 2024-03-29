<?php

namespace App\Mail;

use App\Exports\TreesExport;
use App\Models\DeliveryNote;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DataSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var TreesExport
     */
    public $deliveryNote;
    public $pdf;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(DeliveryNote $deliveryNote, $pdf, $data)
    {
        $this->deliveryNote = $deliveryNote;
        $this->pdf = $pdf;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('thdam09@gmail.com')
        ->text('mail')
        ->attachData($this->pdf->output(), $this->deliveryNote->reference . '.pdf')
        ->attach(Excel::download(
                new TreesExport($this->deliveryNote, $this->data), $this->deliveryNote->reference . '.xlsx'
            )->getFile(), ['as' => $this->deliveryNote->reference . '.xlsx']
        );
        // ->attach(Excel::download(
        //         new CsvsExport(), 'report.csv'
        //     )->getFile(), ['as' => 'report.csv']
        // );
    }
}
