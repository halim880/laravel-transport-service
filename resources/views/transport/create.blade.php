@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create new Invoice
                    </div>
                    <div class="card-body p-4">
                        <form action="{{url("transports")}}" method="post">
                            @csrf

                            <div class="form-group form-row">
                                <label for="truck_number" class="">Truck number</label>
                                <input type="text" class="form-control @error('truck_number') is-invalid @enderror" name="truck_number" value="{{old('truck_number')}}">
                                @error('truck_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-row">
                                <label for="person" class="">Person</label>
                                <input type="text" class="form-control @error('person') is-invalid @enderror" name="person" value="{{old('person')}}">
                                @error('person')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-row">
                                <label for="mobile" class="">Mobile</label>
                                <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{old('mobile')}}">
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-row">
                                <label for="date" class="">Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{old('date')}}">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

        
                            <div class="row form-row">
                                <div class="col">
                                    <label for="place">Place</label>
                                    <input type="text" class="form-control" placeholder="eg. Sylhet" name="place" value="{{old('place')}}">
                                    @error('place')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="point">Point</label>
                                    <input type="number" class="form-control" placeholder="eg. 1" name="point" value="{{old('point')}}">
                                    @error('point')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              </div>
        
                              <div class="row form-row">
                                <div class="col">
                                    <label for="invoice">Invoice</label>
                                    <input type="number" class="form-control" placeholder="eg. 10000" name="invoice" value="{{old('invoice')}}">
                                    @error('invoice')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="fare">Fare</label>
                                    <input type="number" class="form-control" placeholder="eg. 2000" name="fare" value="{{old('fare')}}">
                                    @error('fare')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="point">Commission</label>
                                    <input type="number" class="form-control" placeholder="eg. 1" name="commission" value="{{old('commission')}}">
                                    @error('point')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-row">
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
                                        @error('point')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-row">
                                        <label for="">Status</label>
                                        <input type="text" class="form-control" name="status" value="{{old('status')}}">
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                  </div>
                              </div>
                              <div class="form-row mt-3">
                                <button class="btn btn-primary">Save</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .form-row{
        margin-bottom: 10px;
    }
</style>