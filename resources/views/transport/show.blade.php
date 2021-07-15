@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3>Invoice Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <tr>
                                        <th>SI. </th>
                                        <td>: {{$transport->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Truck number</th>
                                        <td>: {{$transport->truck_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td>: {{$transport->formated_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>invoice</th>
                                        <td>: {{$transport->invoice}}</td>
                                    </tr>
                                    <tr>
                                        <th>Fare</th>
                                        <td>: {{$transport->fare}}</td>
                                    </tr>
                                    <tr>
                                        <th>Commission</th>
                                        <td>: {{$transport->commission}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>: {{$transport->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>: {{$transport->description}}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table">
                                    <tr>
                                        <th>Person </th>
                                        <td>: {{$transport->person}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>: {{$transport->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>Place</th>
                                        <td>: {{$transport->place}}</td>
                                    </tr>
                                    <tr>
                                        <th>Point</th>
                                        <td>: {{$transport->point}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td>: {{$transport->date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created at</th>
                                        <td>: {{$transport->created}}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated at</th>
                                        <td>: {{$transport->updated}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{route("transports.edit", $transport)}}" class="btn btn-primary me-3">Edit</a>
                            <a href="{{URL::to("transport/".$transport->id."/destroy")}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .table{
        width: 350px !important;
    }
    .table th{
        width: 150px !important;
        padding-left: 30px !important;
    }
</style>