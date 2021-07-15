@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3 align="center">Search result</h3>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (!$transports->count()>0)
                        <h5>No search result found</h5>                        
                    @else
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
                                <td class="col-2">{{$transport->formated_date}}</td>
                                <td class="col-2">{{$transport->place}}</td>
                                <td>
                                    <a class="btn btn-sm btn-danger" href="{{URL::to("transports/".$transport->id)}}">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                    <div class="d-flex justify-content-center">
                        {!! $transports->links() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <h4>Search by</h4>
            <ul>
                <li><a href="{{URL::to("search/bydate/form")}}">Date</a></li>
                <li><a href="">Person</a></li>
                <li><a href="">Mobile</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection