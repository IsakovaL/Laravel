<!doctype html>
<html lang="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach($users as $user)
    <p>this is user {{$user->id}}</p>
    <p>this is user {{$user->name}}</p>
    <p>this is user {{$user->email}}</p>
    <hr>
@endforeach

{{--@for($i = 0; $i<count($array); $i++)--}}
{{--    <div>the current value is {{ $i }}  </div>--}}
{{--@endfor--}}

{{--@switch($i)--}}
{{--    @case(1)--}}
{{--    first case...--}}
{{--    @break--}}

{{--    @case(2)--}}
{{--    second case....--}}
{{--    @break--}}

{{--    @default--}}
{{--    default case....--}}
{{--@endswitch--}}

{{--@env('local')--}}
{{--// application is on....--}}
{{--@endenv--}}

{{--@env(['local', 'dev'])--}}
{{--    // application is on....--}}
{{--@endenv--}}

{{--@auth--}}
{{--    // user authentificated...--}}
{{--@endauth--}}

{{--@guest--}}
{{--    // user is not authenticated...--}}
{{--@endguest--}}


{{--@if(Auth::check())--}}
{{--<h1>Welcome boss</h1>--}}
{{--@else--}}
{{--    <h2>Welcome guest</h2>--}}
{{--@endif--}}

{{--@isset($counts)--}}
{{--    <h1>YES</h1>--}}
{{--    <h2>{{$counts}}</h2>--}}
{{--@endisset--}}


{{--@empty(!$count)--}}
{{--    <h1>YES</h1>--}}
{{--   <h2>{{$count}}</h2>--}}
{{--@endempty--}}



{{--@if($count > 50)--}}
{{--    <h1>20</h1>--}}
{{--    @else--}}
{{--    <h1>50</h1>--}}
{{--@endif--}}





{{--@verbatim--}}
{{--    <div class="container">--}}
{{--        Hello, {{ $text }}--}}
{{--        Hello, {{ $text }}--}}
{{--        Hello, {{ $text }}--}}
{{--        Hello, {{ $text }}--}}
{{--    </div>--}}
{{--@endverbatim--}}



{{--<?php foreach ($array as $val):?>--}}
{{--<h2>{{$val}}</h2>--}}
{{--<?endforeach;>--}}


{{--{{$array}}--}}

{{--@foreach($array as $val)--}}
{{--    <h2>{{$val}}</h2>--}}
{{--@endforeach--}}

{{--<script>--}}
{{--    let app = <?php echo json_encode($array); ?>--}}
{{--</script>--}}

</body>
</html>
