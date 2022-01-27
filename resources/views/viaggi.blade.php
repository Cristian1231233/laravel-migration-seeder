@extends('layout.main')

@section('content')

    <h1>Viaggi</h1>

    @dump($viaggi)
    

    @foreach ( $viaggi as $viaggio )

        <div>{{$viaggio->id}}</div>
        <div>{{$viaggio->name}}</div>
        <div>{{$viaggio->description}}</div>
        <div>{{$viaggio->price}}</div>
        <div>{{$viaggio->release_date}}</div>

    @endforeach
    
    
@endsection