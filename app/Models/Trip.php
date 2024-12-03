<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trips';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firebase_user_id',
        'trip_id',
        'title',
        'img_url',
        'travel_date',
        'days',
        'budget_type',
        'group_type',
        'destination_meta',
        'plan_request',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'destination_meta' => 'array', // Automatically decode JSON to array
        'plan_request' => 'array',     // Automatically decode JSON to array
        'travel_date' => 'date',       // Automatically cast to a date object
    ];
}
