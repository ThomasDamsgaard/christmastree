<?php

namespace App\Http\Controllers;

use App\Mail\DataSent;
use PDF;
use App\Exports\DatasExport;
use App\Exports\TreesExport;
use App\Models\DeliveryNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreDeliveryNoteRequest;

class DeliveryNoteController extends Controller
{
    /**
     * Store a new delivery in the database.
     *
     * @param  \App\Http\Requests\StoreDeliveryNoteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

            $slot = [$request->slot];
                $pallet = [$request->pallet];
                $type = [$request->type];
                $label = [$request->label];
                $size = [$request->size];
                $amount = [$request->amount];

    // for ($i=0; $i < count($slot); $i++) {
    //     $line_items = [
    //         'slot' => $slot[$i],
    //         'pallet' => $pallet[$i],
    //         'type' => $type[$i],
    //     ];
    // }
        // dd($request);
        dd($line_items);



        $deliveryNote = DeliveryNote::create([
            'order' => 1,
            'date' => \Carbon\Carbon::parse($request->date),
            'departure' => \Carbon\Carbon::parse($request->departure),
            'arrival' => \Carbon\Carbon::parse($request->arrival),
            'puller' => $request->puller,
            'trailer' => $request->trailer,
            'second_trailer' => $request->second_trailer,
            'line_items' => [
            // [
            //     'slot' => $request->slot,
            //     'pallet' => $request->pallet,
            //     'type' => $request->type,
            //     'label' => $request->label,
            //     'size' => $request->size,
            //     'amount' => $request->amount
            // ],
            [
                'slot' => 2,
                'pallet' => 'cghjh',
                'type' => 'NGR',
                'label' => 'purple',
                'size' => '125-150',
                'amount' => '30'
            ],
            [
                'slot' => 2,
                'pallet' => 'yghiuj',
                'type' => 'NGR',
                'label' => 'orange',
                'size' => '150-175',
                'amount' => '30'
            ],
            [
                'slot' => 3,
                'pallet' => 'cghjh',
                'type' => 'NGR',
                'label' => 'purple',
                'size' => '125-150',
                'amount' => '30'
            ],
            [
                'slot' => 3,
                'pallet' => 'cghjh',
                'type' => 'NOB',
                'label' => 'purple',
                'size' => '125-150',
                'amount' => '30'
            ]
            ],
        ]);



$data = collect($deliveryNote->line_items)
->groupBy(['type', 'size'])
->map(function ($tree) {
        return collect($tree)->map(function ($shipments) {
            return [
                'amount' => $shipments->sum('amount')
            ];
        });
    });

// return $data;

        $pdf = PDF::loadView('exports.pdf', ['deliveryNote' => $deliveryNote, 'data' => $data]);

        return $pdf->stream();

        // $data->date = $request->date;
        // $data->order = $request->order;
        // $data->puller = $request->puller;
        // $data->trailer = $request->trailer;
        // $data->second_trailer = $request->second_trailer;
        // $data->supplier = $request->supplier;
        // $data->reference = $request->reference;
        // $data->phone = $request->phone;
        // $data->location = $request->location;
        // $data->slot = json_encode($request->slot);
        // $data->pallet = json_encode($request->pallet);
        // $data->type = json_encode($request->type);
        // $data->size = json_encode($request->size);
        // $data->amount = json_encode($request->amount);
        // $data->label = json_encode($request->label);

        // $data->save();

        return redirect('/dashboard')->with('success', 'The order is sent');
    }

}
