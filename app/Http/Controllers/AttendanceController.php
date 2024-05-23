<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * Store a newly created attendance record in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        // Create a new attendance record
        Attendance::create([
            'name' => $request->name,
            'email' => $request->email,
            'time_in' => now(), // Current time
        ]);

        return response()->json(['message' => 'Attendance recorded successfully']);
    }

    /**
     * Update the specified attendance record in the database with time-out.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'time_out' => 'required|date',
        ]);

        // Find the attendance record by id
        $attendance = Attendance::findOrFail($id);

        // Update the time_out field
        $attendance->update([
            'time_out' => $request->time_out,
        ]);

        return response()->json(['message' => 'Attendance updated successfully']);
    }
}
