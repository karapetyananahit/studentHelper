@php
    $types = [
        "success" => "Ավելացում",
        "primary" => "Թարմացում",
        "warning" => "Զգուշացում",
        "danger" => "Հեռացում",
        "dark" => "Այլն",
    ]
@endphp

<div class="mb-30">
    <h1 class="page-title my-5">Վերջին 3 նորությունները</h1>
    @foreach($news as $n)
        <div class="alert bg-light-{{$n->type}}">
            <h2>{{ $types[$n->type] }}</h2>
            <p class="font-size-h5 mb-5">{!! $n->description!!}</p>
            <div class="text-right">
                {{$n->date}}
            </div>
        </div>
    @endforeach
</div>
