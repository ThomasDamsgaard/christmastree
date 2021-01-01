<?php

namespace App\Exports;

use App\Models\DeliveryNote;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TreesExport implements FromView
{
    /**
    *
    */
    public function view(): View
    {
        return view('exports.table', [
            'delivery_note' => DeliveryNote::latest('created_at')->first()
        ]);
    }
}
