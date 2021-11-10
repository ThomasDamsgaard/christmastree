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
        $line_items = [];
        foreach ($request->slot as $key => $value) {
            $line_items[] = [
                'slot' => $value,
                'type' => $request->type[$key],
                'label' => $request->label[$key],
                'pallet' => $request->pallet[$key],
                'size' => $request->size[$key],
                'amount' => $request->amount[$key]
            ];
        }

        // dd($line_items);

    //         $slot = collect([$request->slot])->each(function ($item)
    //         {
    //             return ['slot' => $item];
    //         });

    //         dd($slot);
    //             $pallet = [$request->pallet];
    //             $type = [$request->type];
    //             $label = [$request->label];
    //             $size = [$request->size];
    //             $amount = [$request->amount];

    // $line_items = collect(['slot' =>$request->slot])->zip($request->pallet, $request->type, $request->label, $request->size, $request->amount);
    //     // dd($request->line_items);
    //     dd($line_items);



        $deliveryNote = DeliveryNote::create([
            'order' => 1,
            'date' => \Carbon\Carbon::parse($request->date),
            'departure' => \Carbon\Carbon::parse($request->departure),
            'arrival' => \Carbon\Carbon::parse($request->arrival),
            'puller' => $request->puller,
            'trailer' => $request->trailer,
            'second_trailer' => $request->second_trailer,
            'line_items' => $line_items
            // [
            // [
            //     'slot' => $request->slot,
            //     'pallet' => $request->pallet,
            //     'type' => $request->type,
            //     'label' => $request->label,
            //     'size' => $request->size,
            //     'amount' => $request->amount
            // ],
            // [
            //     'slot' => 2,
            //     'pallet' => 'cghjh',
            //     'type' => 'NGR',
            //     'label' => 'purple',
            //     'size' => '125-150',
            //     'amount' => '30'
            // ],
            // [
            //     'slot' => 2,
            //     'pallet' => 'yghiuj',
            //     'type' => 'NGR',
            //     'label' => 'orange',
            //     'size' => '150-175',
            //     'amount' => '30'
            // ],
            // [
            //     'slot' => 3,
            //     'pallet' => 'cghjh',
            //     'type' => 'NGR',
            //     'label' => 'purple',
            //     'size' => '125-150',
            //     'amount' => '30'
            // ],
            // [
            //     'slot' => 3,
            //     'pallet' => 'cghjh',
            //     'type' => 'NOB',
            //     'label' => 'purple',
            //     'size' => '125-150',
            //     'amount' => '30'
            // ]
            // ],
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

        return redirect('/dashboard')->with('success', 'The order is sent');
    }

}
