<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class DatasExport implements FromArray
{
    protected $data;

    public function __construct(array $data)
    {
        $this->invoices = $data;
    }

    public function array(): array
    {
        return $this->invoices;
    }
}
