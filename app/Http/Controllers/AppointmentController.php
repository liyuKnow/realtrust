<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function list ()
    {
        $appointments = DB::table('appointments')
            ->join('users', 'users.id', '=', 'appointments.user_id')
            ->join('clients', 'clients.id', '=', 'clients.client_id')
            ->get();
            
        return view('admin.appointments.index')->with(['appointments' => $appointments]);
    }

    public function add () {
        $users = User::get(['id', 'first_name', 'last_name']);
        $clients = Client::get(['id', 'first_name', 'last_name']);
        return view('admin.appointments.add');
    }
}
