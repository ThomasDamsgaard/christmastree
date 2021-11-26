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
    ];

    /**
     * The attributes that should be hidden for arrays.
     */
     protected $hidden = ['id', 'created_at', 'updated_at'];

     /**
     * Get the next increment value from the model to be displayed at the dashboard
     */
     public static function next()
     {
         return static::max('id') + 1;
     }
}
