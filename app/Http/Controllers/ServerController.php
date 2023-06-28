<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServerController extends Controller
{
    public function index(){
        return view('server', [
            'server' => Http::get("https://api.battlemetrics.com/servers/22135073")['data']
        ]);
    }
}
