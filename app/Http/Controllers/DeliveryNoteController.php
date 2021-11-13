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

        $deliveryNote = DeliveryNote::create([
            'order' => 1,
            'destination' => $request->destination,
            'reference' => $request->reference,
            'date' => \Carbon\Carbon::parse($request->date),
            'departure' => \Carbon\Carbon::parse($request->departure),
            'arrival' => \Carbon\Carbon::parse($request->arrival),
            'puller' => $request->puller,
            'trailer' => $request->trailer,
            'second_trailer' => $request->second_trailer,
            'line_items' => $line_items
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

        $pdf = PDF::loadView('exports.pdf', ['deliveryNote' => $deliveryNote, 'data' => $data])
        ->save('pdf/' . $deliveryNote->reference . '.pdf');

        // return $pdf->stream();

        return redirect('/dashboard')->with('success', 'The order is sent');
    }

}
