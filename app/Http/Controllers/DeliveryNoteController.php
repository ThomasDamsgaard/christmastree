<?php

namespace App\Http\Controllers;

use App\Exports\DatasExport;
use App\Exports\TreesExport;
use App\Http\Requests\StoreDeliveryNoteRequest;
use App\Mail\DataSent;
use App\Models\DeliveryNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class DeliveryNoteController extends Controller
{
    /**
     * Store a new delivery in the database.
     *
     * @param  \App\Http\Requests\StoreDeliveryNoteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryNoteRequest $request)
    {

        $data = new DeliveryNote;

        $data->date = $request->date;
        $data->order = $request->order;
        $data->puller = $request->puller;
        $data->trailer = $request->trailer;
        $data->second_trailer = $request->second_trailer;
        $data->supplier = $request->supplier;
        $data->reference = $request->reference;
        $data->phone = $request->phone;
        $data->location = $request->location;
        $data->slot = json_encode($request->slot);
        $data->pallet = json_encode($request->pallet);
        $data->type = json_encode($request->type);
        $data->size = json_encode($request->size);
        $data->amount = json_encode($request->amount);
        $data->label = json_encode($request->label);

        $data->save();

        return redirect('/dashboard')->with('success', 'The order is sent');
    }

}
