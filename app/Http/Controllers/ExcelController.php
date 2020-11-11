<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tree;
use App\Exports\DatasExport;
use App\Exports\TreesExport;
use App\Mail\DataSent;

class ExcelController extends Controller
{
    public function store(Request $request)
    {

      // dd($request->all());

        // $data = $request->all();
        //
        // $export = [
        //   ['Date', $data['date']],
        //   ['Trækker reg. #', $data['puller']],
        //   ['Trailer reg. #', $data['trailer']],
        //   ['Supplier', $data['supplier']],
        //   ['Reference Person', $data['reference']],
        //   ['Order number', $data['order']],
        //   ['Location', $data['location']],
        //   ['Type', $data['type']],
        //   ['Size', $data['size']],
        //   ['Amount', $data['amount']],
        //   ['Label', $data['label']],
        // ];
        //
        // dd($export);

        // dd(Tree::first()->type);


        $data = new Tree;

        $data->date = $request->date;
        $data->order = $request->order;
        $data->puller = $request->puller;
        $data->trailer = $request->trailer;
        $data->second_trailer = $request->second_trailer;
        $data->supplier = $request->supplier;
        $data->reference = $request->reference;
        $data->phone = $request->phone;
        $data->location = $request->location;
        $data->pallet = json_encode($request->pallet);
        $data->type = json_encode($request->type);
        $data->size = json_encode($request->size);
        $data->amount = json_encode($request->amount);
        $data->label = json_encode($request->label);

        $data->save();

        // return Excel::download(new TreesExport, 'data.xlsx');



        Mail::to('thomas.damsgaard@hotmail.com')->send(new DataSent($data));

        return redirect('/')->with('success', 'The order is sent');
    }

}
