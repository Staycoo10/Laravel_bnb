<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'description',
        'price',
        'type',
        'rooms',
        'available',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'available' => 'boolean',
    ];
    /**
     * Relație cu Bookings
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}