@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 align="center">Search result for 
                        <span style="color:orange">{{$from_date}}</span> to 
                        <span style="color:orange">{{$to_date}}</span>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Date</th>
                            <th>Total Entry</th>
                            <th class="commission">Total Commission</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($transports as $date => $data)
                            <tr>
                                <td>{{\Illuminate\Support\Carbon::parse($date)->format("d M Y")}}</td>
                                <td align="center">{{$data->count()}}</td>
                                <td class="commission">{{$data->sum("commission")}} tk</td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="{{route("show_by_date", $date)}}">View</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2"><b>Total Commission</b></td>
                            <td class="commission"><b>{{$total_commission}} tk</b></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <h4>Search by</h4>
            <ul>
                <li><a href="{{URL::to("search_by_date/form")}}">Date</a></li>
                <li><a href="{{URL::to("search_by_date_to_date/form")}}">Date to date</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

<style>
    .commission {
        text-align: end !important; 
        padding-right: 80px !important;
    }
</style>