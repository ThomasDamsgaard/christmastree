<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryNote extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'line_items' => 'array',
        // 'pallet' => 'array',
        // 'type' => 'array',
        // 'size' => 'array',
        // 'amont' => 'array',
        // 'label' => 'array',
    ];

    /**
     * Formats the frontend date d-m-Y to database format Y-m-d.
     */
    // public function setDateAttribute($value)
    // {
    //     $this->attributes['date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    // }
}
