@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Produced On</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($cars) > 0)
                    @foreach($cars as $car)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><a href="cars/{{$car->id}}">{{$car->make}}</a></td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->produced_on}}</td>
                    </tr>
                    @endforeach
                    @endif
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>
        
            {{$cars->links()}}
        </div>
    </div>

</div>

@endsection