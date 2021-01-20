<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>This is todo index page</h1>

@if(session('msg'))
    <h3>{{session('msg')}}</h3>
@endif

@foreach($todos as $todo)

    {{$todo->title}}

    <a href="{{route('todos.show', [$todo])}}">View</a>

@endforeach

</body>
</html>
