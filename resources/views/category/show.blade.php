@extends('layouts.main')

@section('title', 'category Details')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>id:{{$cat['id']}}</h1>
    <h1>name:{{$cat['name']}}</h1>
    <h1>describtion:{{$cat['describtion']}}</h1>
    <button><a href="{{route('category.index')}}">back</a></button>
</body>
</html>
@endsection

