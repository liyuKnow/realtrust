<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect('home');
        } else {
            // return response()->json([
            //     'status' => 'error',
            //     'message' => 'Username or password is incorrect'
            // ]);
            return redirect('/');
        }
    }

    function home(Request $request)
    {
        $user = session('user');

        if($user->user_role == 'admin'){
            return view('admin.home.index');
        }

        if($user->user_role == 'sales' || $user->user_role == 'client' ){
            return view('site.home.index');
        }

        // $employees = Employee::all();
        // $paginated_employees = Employee::paginate(5);
        // $total_emp = $employees->count();

        // $users = User::all();
        // $total_users = $users->count();
        // // paginated users list
        // $paginated_users = User::paginate(5);

        // if ($user) {
        //     return view('home.index')->with([
        //         'total_emp' => $total_emp,
        //         'paginated_employees'  => $paginated_employees,
        //         'total_users' => $total_users,
        //         'paginated_users' => $paginated_users
        //     ]);
        // }

        return redirect('/');
    }
}
