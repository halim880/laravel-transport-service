<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransportQueryController extends Controller
{
    public function search_by_date(){
        return view("search_result")->with([
            "transports"=> Transport::where("date", Carbon::parse(request("date")))->paginate(20)
        ]);
    }

    public function date_form(){
        return view("forms.search_by_date");
    }
}
