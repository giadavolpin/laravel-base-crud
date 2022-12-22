<?php
$footer_info = config('footer.footer_info');
$footer_help = config('footer.footer_help');
?>

<footer class="py-4">
    <div class="container_footer container row">

        <div class="col-3">
            <img class="footer_img" src="{{ Vite::asset('resources/img/present.jpg') }}" alt="logo image">
        </div>

        <div class="container_credits white col-3">
        <ul>
        @foreach ($footer_info as $item)
                    <li>{{$item}}</li>
            @endforeach
            </ul>
        </div>

        <div class="container_help white col-3">
            <ul>
        @foreach ($footer_help as $item)
                    <li>{{$item}}</li>
            @endforeach
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center col-3">
        <div class="ms-2 white"><i class="fa-brands fa-square-twitter"></i></div>
        <div class="ms-2 white"><i class="fa-brands fa-square-facebook"></i></div>
        <div class="ms-2 white"><i class="fa-brands fa-square-google-plus"></i></div>
        <div class="ms-2 white"><i class="fa-brands fa-instagram"></i></div>
        <div class="ms-2 white"><i class="fa-brands fa-tiktok"></i></div>
    </div>

</footer>