<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        $users = User::where([
            ['status', 1],
            ['role_id', 2]
        ])->get();

        return view('admin.index', compact('users'));
    }
}
