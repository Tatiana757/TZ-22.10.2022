<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class InformationController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        return view("information",[
            "user" => $user,
        ]);
    }
}