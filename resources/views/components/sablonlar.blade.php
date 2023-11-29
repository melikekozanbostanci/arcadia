@php
    $sablon = \App\Models\Back\Tema\Sablon::where("id",$id)->first();
@endphp
<div>
    {!! $sablon->sablon !!}
</div>
