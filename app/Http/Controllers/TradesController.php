<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trades;

class TradesController extends Controller
{
    public function index()
    {
        $trades = Trades::orderBy('created_at', 'desc')->get();

        return view('dashboard');
    }

    public function store(Request $request)
    {
        $request->Validate([

        ]);
        Trades::create([

        ]);
    }
}
