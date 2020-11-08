<?php

namespace App\Exports;

use App\Models\Tree;
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
            'trees' => Tree::latest('created_at')->first()
        ]);
    }
}
