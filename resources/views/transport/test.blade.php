@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Recent Data</h3>
                <a href="{{URL::to("transports/create")}}" class="btn btn-sm btn-primary">Add new</a>
                   
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr class="">
                        <th class="col-1">SI.</th>
                        <th class="col-1">Truck number</th>
                        <th class="col-2">Person</th>
                        <th class="col-2">Date</th>
                        <th class="col-1">Place</th>
                        <th class="col-1">Actions</th>
                    </tr>
                    @foreach ($transports as $transport)
                        <tr class="">
                            <td class="col-1">{{$transport->id}}</td>
                            <td class="col-1"><b>{{$transport->truck_number}}</b></td>
                            <td class="col-2">{{$transport->person}}</td>
                            <td class="col-2">{{$transport->date}}</td>
                            <td class="col-2">{{$transport->place}}</td>
                            <td>
                                <a class="btn btn-sm btn-danger" href="{{URL::to("transports/".$transport->id)}}">View</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection