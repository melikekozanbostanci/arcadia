<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>{{$sayfa->baslik}}</title>
</head>
<body>


@if($sayfa->editor_icerik)
    <div id="icerik">
        @if(strpos($sayfa->editor_icerik,"<x-sablonlar")!==false)
            @php
                preg_match_all('/<x-sablonlar id="(.*)"><\/x-sablonlar>/',$sayfa->editor_icerik,$id);
            @endphp
            <x-sablonlar id="{{$id[1][0]}}"></x-sablonlar>
        @else
            {!! $sayfa->editor_icerik !!}
        @endif
    </div>
@else
    {!! $sayfa->icerik !!}
@endif

<script>
    /* #icerik içindeki tüm img'lere img-fluid class ekle */
    var icerik = document.getElementById("icerik");
    var resimler = icerik.getElementsByTagName("img");
    for (var i = 0; i < resimler.length; i++) {
        resimler[i].classList.add("img-fluid");
    }
</script>
</body>
</html>
