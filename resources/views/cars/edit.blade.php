@extends('layouts.app')

@section('content')
    <div class="container mb-3">
        <div class="row">
            <div class="col-md-12">
            
                <form method="POST" action="{{action('CarsController@update', $car->id)}}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label for="carMake">Make</label>
                        <input type="text" value="{{$car->make}}" class="form-control" id="carMake" aria-describedby="emailHelp" placeholder="Make" name="make">
                        <small id="emailHelp" class="form-text text-muted">Car Make</small>
                    </div>
                    <div class="form-group">
                        <label for="carModel">Model</label>
                        <input type="text" value="{{$car->model}}" class="form-control" id="carModel" placeholder="Model" name="model">
                    </div>
                    <div class="form-group">
                        <label for="carModel">Produced On</label>
                        <input type="date" value="{{$car->produced_on}}" class="form-control" id="carProducedOn" placeholder="Produced On" name="produced_on">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            
            </div>
        
        </div>
    
    </div>

@endsection