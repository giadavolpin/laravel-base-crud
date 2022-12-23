<?php 
$behaviour = '';
if(isset($_GET['filter'])){
    $behaviour = $_GET['filter'];
}
?>

@extends('layouts.app')

@section('content')
@include('partials.light')
    <div class="jumbo-presents"></div>
        <div class="main-presents">
            <div class="container">
                <div class="d-flex">
                    <h1 class="py-4 title-index">Regali di Natale 2022</h1>
                    @if(session()->has('message'))
                    <div class="alert alert-success mb-3 mt-3">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                </div>
                <form action="{{route('presents.index')}}" class="d-flex align-items-center" method="GET">
                    <select name="filter" class="form-select" id="filter">
                        <option value="" {{($behaviour == '') ? 'selected' : ''}}>Tutti</option>
                        <option value="buono" {{($behaviour == 'buono') ? 'selected' : ''}}>Buoni</option>
                        <option value="cattivo" {{($behaviour == 'cattivo') ? 'selected' : ''}}>Cattivi</option>
                    </select>
                    <button type="submit" class="rounded-pill ms-3 my-btn mb-1" id="btn-submit">Cerca</button>
                </form>
                <div class="row mt-4">
                    @foreach ($presents as $present)
                    <div class="col-2 position-relative g-3">
                        <a href="{{route('presents.show', $present->id)}}">
                            <img src="{{ Vite::asset('resources/img/present.jpg') }}" alt="image ">
                        </a>
                        <div class="text-center text-uppercase color-red name-present">{{$present->name}}</div>
                    </div>
                    @endforeach
                </div>
            
            </div>
        </div>
@endsection 


