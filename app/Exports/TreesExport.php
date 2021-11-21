<?php

namespace App\Exports;

use App\Models\DeliveryNote;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TreesExport implements FromArray, WithHeadings, ShouldAutoSize, WithEvents
{
    use Exportable, RegistersEventListeners;

    protected $deliveryNote;

    function __construct(DeliveryNote $deliveryNote)
    {
        $this->deliveryNote = $deliveryNote;
    }

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

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getCell('A5')->setValue('Line items');
                $event->sheet->getCell('A6')->setValue('Order');
                $event->sheet->getCell('B6')->setValue('Pallet');
                $event->sheet->getCell('C6')->setValue('Species');
                $event->sheet->getCell('D6')->setValue('Label');
                $event->sheet->getCell('E6')->setValue('Size');
                $event->sheet->getCell('F6')->setValue('Amount');

                foreach ($this->deliveryNote->line_items as $key => $value) {

                    $event->sheet->getRow('7')->setValue($key);
                }
            }
        ];
    }

    // public static function afterSheet(AfterSheet $event)
    // {
    //     $event->sheet->getCell('B8')
    //             ->setValue($event->getConcernable());
    // }
}
