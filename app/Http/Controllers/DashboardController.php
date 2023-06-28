<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'users' => User::latest()->paginate(50)
        ]);
    }

    public function store(User $user){
        $result = !$user->is_admin;
        $users = User::where('is_admin', ' true')->get();
        if(count($users) > 1 && $result == true){
            $user->is_admin = $result;
            $user->save();
            return back()->with('success', 'Status has been updated!');
        }else{
            return back()->with('failed', 'System should have one administrator!');
        }
    }
}