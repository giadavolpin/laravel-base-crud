@extends('layouts.app')

@section('content')
    <section class="container my-5">
        <form action="{{ route('presents.store') }}" method="POST" class="my-form">
        @csrf
            <h1 class="text-center fs-1">Aggiungi un Regalo</h1>
            <div>
                <label for="name">Nome</label>
                <input type="text" class="form-controll @error('name') is-invalid @enderror" name="name" id="name" placeholder="Mario" required>
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="surname">Surname</label>
                <input type="text" class="form-controll @error('surname') is-invalid @enderror" name="surname" id="surname" placeholder="Rossi" required>
                @error('surname')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="present">Regalo</label>
                <input type="text" class="form-controll @error('surname') is-invalid @enderror" name="present" id="present" required>
                @error('present')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="address">Indirizzo di Consegna</label>
                <input type="text" class="form-controll @error('address') is-invalid @enderror" name="address" id="address" required>
                @error('address')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="good_or_evil">Comportamento</label>
                <select class="form-controll @error('good_or_evil') is-invalid @enderror" name="good_or_evil" id="good_or_evil" required>
                    <option value="buono" selected>Buono</option>
                    <option value="cattivo">Cattivo</option>
                </select>
                @error('good_or_evil')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="id_elf">Matricola Elfo</label>
                <input type="text" class="form-controll @error('id_elf') is-invalid @enderror" name="id_elf" id="id_elf" required>
                @error('id_elf')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="my-btn text-uppercase fw-bold">Invia</button>
            <button type="reset" class="my-btn text-uppercase fw-bold">Resetta</button>
        </form>

    </section>
@endsection