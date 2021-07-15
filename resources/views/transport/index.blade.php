@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-striped">
                    <tr class="d-flex">
                        <th class="col-1">SI.</th>
                        <th class="col-1">Truck number</th>
                        <th class="col-2">Person</th>
                        <th class="col-2">Phone</th>
                        <th class="col-2">Date</th>
                        <th class="col-1">Place</th>
                        <th class="col-1">Point</th>
                        <th class="col-1">invoice</th>
                        <th class="col-1">Fare</th>
                        <th class="col-1">Commission</th>
                        <th class="col-1">status</th>
                        <th class="col-1">description</th>
                    </tr>
                    @foreach ($transports as $transport)
                        <tr class="d-flex">
                            <td class="col-1">{{$transport->id}}</td>
                            <td class="col-1">{{$transport->truck_number}}</td>
                            <td class="col-2">{{$transport->person}}</td>
                            <td class="col-2">{{$transport->mobile}}</td>
                            <td class="col-2">{{$transport->date}}</td>
                            <td class="col-1">{{$transport->place}}</td>
                            <td class="col-1">{{$transport->point}}</td>
                            <td class="col-1">{{$transport->invoice}}</td>
                            <td class="col-1">{{$transport->fare}}</td>
                            <td class="col-1">{{$transport->commission}}</td>
                            <td class="col-1">{{$transport->status}}</td>
                            <td class="col-1">{{$transport->description}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection