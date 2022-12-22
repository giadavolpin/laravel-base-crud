@extends('layouts.app')

@section('content')
@include('partials.jumbo')
    <div class="container">
        <h1 class="color-red py-4">Regali di Natale 2022</h1>
        <div class="row">
            @foreach ($presents as $present)
            <div class="col-2">
                <a href="{{route('presents.show', $present->id)}}">
                    <img src="{{ Vite::asset('resources/img/present.jpg') }}" alt="image ">
                </a>
                <div class="text-center text-uppercase color-red">{{$present->name}}</div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection 


