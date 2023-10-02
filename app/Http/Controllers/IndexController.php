<?php

namespace App\Http\Controllers;

use App\Http\Services\IndexServices;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        $serversList = IndexServices::getServersList();

        return view('index', compact('serversList'));
    }
}
