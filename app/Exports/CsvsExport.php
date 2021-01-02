<?php

namespace App\Exports;

use App\Models\DeliveryNote;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DeliveryNote::latest('created_at')->first();
    }
}
