<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransportQueryController extends Controller
{
    public function show_by_date($date){
        return view("show_by_date")->with([
            "date"=> Carbon::parse($date)->format("M d, Y"),
            "transports"=> Transport::where("date", $date)->orderBy("updated_at", "desc")->get(),
        ]);
    }

    public function search_by_date(){
        return view("show_by_date")->with([
            "date"=> Carbon::parse(request("date"))->format("M d, Y"),
            "transports"=> Transport::where("date", request("date"))->orderBy("updated_at", "desc")->get(),
        ]);
    }

    public function date_form(){
        return view("forms.search_by_date");
    }
}
