<?php

namespace App\Mail;

use App\Exports\CsvsExport;
use App\Exports\TreesExport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;

class DataSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var TreesExport
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
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
        ->attach(Excel::download(
                new TreesExport(), 'report.xlsx'
            )->getFile(), ['as' => 'report.xlsx']
        );
        // ->attach(Excel::download(
        //         new CsvsExport(), 'report.csv'
        //     )->getFile(), ['as' => 'report.csv']
        // );
    }
}
