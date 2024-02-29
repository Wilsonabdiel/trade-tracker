<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trades;

class TradesController extends Controller
{
    public function index()
    {
//        $trades = Trades::orderBy('created_at', 'desc')->get();

        return view('trades');
    }

    public function store(Request $request)
    {
        $request->Validate([
            'entry_point' => 'required',
            'exit_point' => '',
            'stop_loss' => '',
            'take_profit' => '',
            'chart' => '',
            'technicals' => '',
            'fundamentals' =>''
        ]);
        Trades::create([
            'entry_point' => $request->input('entry_point'),
            'exit_point' => $request->input('exit_point'),
            'stop_loss' => $request->input('stop_loss'),
            'take_profit' => $request->input('take_profit'),
            'chart' => $request->input('chart'),
            'technicals' => $request->input('technicals'),
            'fundamentals' => $request->input('fundamentals')

        ]);

        return redirect()->route('trades.index');
    }
    public function add ()
    {
        return view('trades.add');
    }
}
