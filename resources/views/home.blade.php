@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3 align="center">Recent Data</h3>
                    <a href="{{URL::to("transports/create")}}" class="btn btn-sm btn-primary">Add new</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
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
                            <td class="commission"><b>{{$totol_commission}} tk</b></td>
                            <td></td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $transports->links() !!}
                    </div>
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