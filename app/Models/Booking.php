<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'room_id',
    ];

    // Relationship: A booking belongs to a room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
