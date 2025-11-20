<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Auth::user()->id;
        $profil = User::find($data);
        return view('dashboard', ['profil' => $profil]);
    }
}
