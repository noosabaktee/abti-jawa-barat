<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditBigNewsController extends Controller
{
    public function index()
    {
        return view('edit-bignews', [
            'page' => 'editBignews'
        ]);
    }
}
