<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class QiitaController extends Controller
{
    public function index()
    {
    $items = Todo::all();
        return view('index', ['items' => $items]);
}
}