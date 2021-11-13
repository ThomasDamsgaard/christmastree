<?php

namespace App\Exports;

use App\Models\DeliveryNote;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TreesExport implements FromArray, WithHeadings
{
    use Exportable;

    // public function query()
    // {
    //     return DeliveryNote::query()
    //     ->latest('created_at')->first();
    // }

    public function array(): array
    {
        $deliveryNote = DeliveryNote::latest('created_at')->first();
        return [$deliveryNote->toArray()];
    }

    public function map($deliveryNote): array
    {
        return [
            $deliveryNote->order,
            $deliveryNote->destination,
            $deliveryNote->reference,
            Date::dateTimeToExcel($deliveryNote->date),
            Date::dateTimeToExcel($deliveryNote->departure),
            Date::dateTimeToExcel($deliveryNote->arrival),
            $deliveryNote->puller,
            $deliveryNote->second_trailer,
            $deliveryNote->trailer,
            $deliveryNote->line_items
        ];
    }

    public function headings(): array
    {
        return [
            'Order',
            'Destination',
            'Reference',
            'Date',
            'Departure',
            'Arrival',
            'Puller',
            'Trailer',
            'Second Trailer',
            'Line Items'
        ];
    }
}
