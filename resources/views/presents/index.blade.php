@extends('layouts.app')

@section('content')
@include('partials.jumbo')
    <div class="container">
        <div class="d-flex">
            <h1 class="color-red py-4">Regali di Natale 2022</h1>
            @if(session()->has('message'))
            <div class="alert alert-success mb-3 mt-3">
                {{ session()->get('message') }}
            </div>
            @endif
        </div>
        <select name="" id="">
            <option value="" selected>Tutti</option>
            <option value="buono">Buoni</option>
            <option value="cattivo">Cattivi</option>
        </select>
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


