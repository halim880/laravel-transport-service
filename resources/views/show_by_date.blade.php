@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$date}}</h4>
                    </div>
                    <div class="card-body">
                        @if (!$transports->count()>0)
                            <p>No data</p>
                        @else
                            <table class="table table-striped">
                                <tr>
                                    <th>SI</th>
                                    <th>Person</th>
                                    <th>Mobile</th>
                                    <th>Place</th>
                                    <th>Point</th>
                                    <th>Truck Number</th>
                                    <th>Fare</th>
                                    <th>Invoice</th>
                                    <th>Commission</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Updated</th>
                                </tr>
                                @foreach ($transports as $transport)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$transport->person}}</td>
                                        <td>{{$transport->mobile}}</td>
                                        <td>{{$transport->place}}</td>
                                        <td>{{$transport->point}}</td>
                                        <td>{{$transport->truck_number}}</td>
                                        <td>{{$transport->fare}}</td>
                                        <td>{{$transport->invoice}}</td>
                                        <td>{{$transport->commission}}</td>
                                        <td>{{$transport->status}}</td>
                                        <td>{{$transport->description}}</td>
                                        <td>{{$transport->updated}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="6"><b>Total</b></td>
                                    <td><b>{{$transports->sum("fare")}}</b></td>
                                    <td><b>{{$transports->sum("invoice")}}</b></td>
                                    <td><b>{{$transports->sum("commission")}}</b></td>
                                    <td colspan="3"></td>
                                </tr>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection