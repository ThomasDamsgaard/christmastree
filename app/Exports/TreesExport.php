<?php

namespace App\Exports;

use App\Models\DeliveryNote;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class TreesExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return DeliveryNote::query()
        ->latest('created_at')->first();
    }
}
