<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index() {
        // if(Auth::user()->type == 'patient'){
        //     return redirect('/');
        // }
        return view('admin.index');
    }
}



