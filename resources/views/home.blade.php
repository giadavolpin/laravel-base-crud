@extends('layouts.app')

@section('content')
    <section class="container main-home mt-4 mb-5 ">
        <h1 class="display-2 fw-bold text-center">Toy Factory</h1>
        <div class="box-presents">
            <h5 class="display-6 fw-bold">Presents</h5>
            <div class="img-box">
                @for($i = 0; $i < 5; $i++)
                    <img src="{{Vite::asset($presents[$i]['thumb'])}}" class="img-presents">
                @endfor
                <div class="shadow"></div>
                <a href="{{route('presents.index')}}" class="link-presents">
                    <span>Go to Presents</span>
                </a>
            </div>
        </div>
    </section>
@endsection