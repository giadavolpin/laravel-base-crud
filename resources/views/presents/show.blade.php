<?<?php   

$image = config('imagePresents.random_image');
$length = count($image);
$index = $present->id % $length;
?>


@extends('layouts.app')
@section('content')
<div class="mybody">
        <div class="container">
            <div class="infos">
                <div class="present">
                    <h2 class="kid-name">{{$present->name}} {{$present->surname}}</h2>
                    <div class="box-img-gioco">
                        <img src="{{$image[$index]}}" alt="image present">
                    </div>
                    <a href="{{route('presents.edit', $present->id)}}">Modifica</a>
                    <form action="{{route('presents.destroy', $present->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimina</button>
                    </form>
                </div>
                <div class="details">
                    <div class="s-box">
                        <div class="letter-outline">
                            <div class="letter-title">Consegna Speciale <br> <span class="letter-subtitle">Dal Polo Nord</span> </div>
                            <div class="name s-d-flex separation-line">
                                <span class="index">Nome:</span>
                                <span class="data">{{$present->name}}</span>
                            </div>
                            <div class="surname name s-d-flex separation-line">
                                <span class="index">Cognome:</span>
                                <span class="data">{{$present->surname}}</span>
                            </div>
                            <div class="address name s-d-flex separation-line">
                                <span class="index">Indirizzo:</span>
                                <span class="data">{{Str::limit($present->address, 25)}}</span>
                            </div>
                            <div class="naughty name s-d-flex separation-line">
                                <span class="index">Comportamento:</span>
                                <span class="data text-capitalize">{{$present->good_or_evil}}</span>
                            </div>
                            <div class="elf name s-d-flex separation-line">
                                <span class="index">Elfo n°:</span>
                                <span class="data">{{$present->id_elf}}</span>
                            </div>
                        </div>
                        <div class="timbro"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection