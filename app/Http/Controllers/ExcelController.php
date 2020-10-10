<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DatasExport;

class ExcelController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $export = new DatasExport([
          ['Order number', $data['order']],
          ['Type', $data['type']],
          ['Size', $data['size']],
          ['Amount', $data['amount']],
          ['Label', $data['label']],
        ]);

        return Excel::download($export, 'data.xlsx');
    }
}
