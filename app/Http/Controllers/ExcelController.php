<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tree;
use App\Exports\DatasExport;
use App\Mail\DataSent;

class ExcelController extends Controller
{
    public function store(Request $request)
    {

      // dd($request->all());

        $data = $request->all();

        $export = [
          ['Date', $data['date']],
          ['Trækker reg. #', $data['puller']],
          ['Trailer reg. #', $data['trailer']],
          ['Supplier', $data['supplier']],
          ['Reference Person', $data['reference']],
          ['Order number', $data['order']],
          ['Location', $data['location']],
          ['Type', $data['type']],
          ['Size', $data['size']],
          ['Amount', $data['amount']],
          ['Label', $data['label']],
        ];

        // $data = new Tree;
        //
        // $data->order = $request->order;
        // $data->type = $request->type;
        // $data->size = $request->size;
        // $data->amount = $request->amount;
        // $data->label = $request->label;
        //
        // $data->save();



        Mail::to('thomas.damsgaard@hotmail.com')->send(new DataSent($export));

        return redirect('/')->with('success', 'The order is sent');
    }

}
