<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Exports\DatasExport;
use Maatwebsite\Excel\Facades\Excel;

class DataSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var DatasExport
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
            new DatasExport($this->data), 'report.xlsx'
            )->getFile(), ['as' => '' . $this->data[5][1]]
        );
    }
}
