<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\TrainModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $trains = TrainModel::orderByDesc('id')->get();
        return view('home', compact('trains'));
    }
}
