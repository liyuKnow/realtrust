<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function list ()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.index')->with(['appointments' => $appointments]);
    }

    public function add () {
        $users = User::get(['id', 'first_name', 'last_name']);
        $clients = Client::get(['id', 'first_name', 'last_name']);
        return view('admin.appointments.add');
    }
}
