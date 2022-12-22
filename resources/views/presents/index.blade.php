@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="color-red">Christmas Gifts 2022</h1>
        <div class="row">
            @foreach ($presents as $present)
            <div class="col-2">
               <img src="{{ Vite::asset('resources/img/present.jpg') }}" alt="image ">
               <div class="text-center text-uppercase color-red">{{$present->name}}</div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection 


