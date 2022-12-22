<?php 
$behaviour = '';
if(isset($_GET['filter'])){
    $behaviour = $_GET['filter'];
}
?>

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
        <form action="{{route('presents.index')}}" method="GET">
            <select name="filter" id="filter">
                <option value="" {{($behaviour == '') ? 'selected' : ''}}>Tutti</option>
                <option value="buono" {{($behaviour == 'buono') ? 'selected' : ''}}>Buoni</option>
                <option value="cattivo" {{($behaviour == 'cattivo') ? 'selected' : ''}}>Cattivi</option>
            </select>
            <button type="submit" class="btn btn-danger ms-3">Cerca</button>
        </form>
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


