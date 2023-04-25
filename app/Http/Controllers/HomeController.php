<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $user = Auth::user();

        $role = Role::where('slug', 'editor')->first();
        //$user->roles()->attach($role);

        // dd($user->hasRole('editor'));

        return view('dashboard');
    }
}
