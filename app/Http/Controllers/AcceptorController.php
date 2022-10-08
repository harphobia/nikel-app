<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceptorController extends Controller
{

    public function index()
    {
        return view('pages.acceptor');
    }

    public function update(Request $request, $id)
    {
        //
    }
}
