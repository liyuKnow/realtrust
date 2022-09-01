<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function list ()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.index')->with(['appointments' => $appointments]);
    }

    public function add () {
        return view('admin.appointments.add');
    }
}
