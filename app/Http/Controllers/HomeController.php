<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use App\Support\MyPaginator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transports = Transport::orderBy("date", "desc")->get()->groupBy("date");
        return view("home")->with([
            "transports"=> MyPaginator::paginate($transports, 30),
        ]);
    }
}
