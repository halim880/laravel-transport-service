<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransportQueryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

    public function search_by_date_to_date(){
        return view("forms.search_by_date_to_date");
    }

    public function show_by_date_to_date(){
        
        $transports = Transport::whereBetween('date',
            [request("from_date"), request("to_date")])
            ->orderBy("date", "desc")
            ->get()
            ->groupBy("date");

        $total_commission = $this->countTotalCommission($transports);

        return view("show_by_date_to_date")->with([
            "transports"=> $transports,
            "total_commission"=> $total_commission,
            "from_date"=> Carbon::parse(request("from_date"))->format("d M Y"),
            "to_date"=> Carbon::parse(request("to_date"))->format("d M Y")
        ]);
    }

    public function date_form(){
        return view("forms.search_by_date");
    }

    private function countTotalCommission($transports){
        $sum = 0;
        foreach($transports as $date => $transport){
            $sum+=$transport->sum("commission");
        }
        return $sum;
    }
}
