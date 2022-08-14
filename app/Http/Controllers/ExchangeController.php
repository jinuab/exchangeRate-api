<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function index()
    {
        return response()->json("Exchange Downloaded successfully!");
    }

    public function download($id)
    {
        //$exchange = ExchangeController::find($id);

        return response()->json("Exchange Downloaded successfully!");
    }
}
