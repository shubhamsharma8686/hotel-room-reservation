<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        return Room::all();
    }

    public function book(Request $request)
    {
        $roomsToBook = $request->input('rooms');
        $rooms = Room::whereIn('id', $roomsToBook)->get();

        foreach ($rooms as $room) {
            $room->update(['status' => 'booked']);
        }

        return response()->json(['message' => 'Rooms booked successfully']);
    }

    public function reset()
    {
        Room::query()->update(['status' => 'available']);
        return response()->json(['message' => 'All bookings have been reset']);
    }
}
