<html>
<head>
    <title>Profile laravel</title>
</head>
<body>

{{--    <h1>Welcome to Laravel Family</h1>--}}
{{--    <h2>User: {{$user}} </h2>--}}

    <h1>Welcome to Laravel Family</h1>
    <h2>User: {{ $user }} </h2>
    @foreach($food as $f)
        <li>{{ $f }}</li>
    @endforeach

</body>
</html>
