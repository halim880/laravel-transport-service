
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{URL::to("search_by_date")}}" method="post">
                            @csrf
                            <div class="form-group row mb-3">
                                <label for="date" class="col-md-3 col-form-label text-md-right">{{ __('Choose a date') }}</label>
                        
                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" required autocomplete="current-date">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3"><button class="btn btn-primary">Search</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection