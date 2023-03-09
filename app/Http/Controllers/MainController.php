<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $users = AddressBook::all();
        // return view('people', compact('users'));
        dd($users);
    }
}
