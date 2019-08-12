@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            
                <form>
                    <div class="form-group">
                        <label for="carMake">Make</label>
                        <input type="text" class="form-control" id="carMake" aria-describedby="emailHelp" placeholder="Make" name="make">
                        <small id="emailHelp" class="form-text text-muted">Car Make</small>
                    </div>
                    <div class="form-group">
                        <label for="carModel">Model</label>
                        <input type="text" class="form-control" id="carModel" placeholder="Model" name="model">
                    </div>
                    <div class="form-group">
                        <label for="carModel">Produced On</label>
                        <input type="date" class="form-control" id="carProducedOn" placeholder="Produced On" name="produced_on">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            
            </div>
        
        </div>
    
    </div>

@endsection