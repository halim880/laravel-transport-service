
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("show_by_date_to_date")}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="date" class="col-form-label text-md-right">{{ __('From date') }}</label>
                                    <div class="col">
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="from_date" required autocomplete="current-date">
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="date" class="col-form-label text-md-right">{{ __('To date') }}</label>
                        
                                    <div class="col">
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="to_date" required autocomplete="current-date">
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"><button class="btn btn-primary">Search</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection