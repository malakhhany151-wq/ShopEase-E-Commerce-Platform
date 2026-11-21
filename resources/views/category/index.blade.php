@extends('layouts.main')

@section('title', 'All categories')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if(session('status'))
    <div>{{session('status')}}</div>
    @endif
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>describtion</td>
            <td>action</td>
        </tr>
        @foreach ($catgs as $cat)
        <tr>
            <td>{{$cat ['id']}}</td>
            <td>{{$cat ['name']}}</td>
            <td>{{$cat ['describtion']}}</td>
            <td><a href="/category/{{$cat ['id'] }}">show</a> / <a href="{{route('category.edit', $cat->id) }}">edit</a> / <a href="{{route('category.destroy' , $cat->id)}}">delete</a></td>
        </tr>
        @endforeach
    </table>
    <h1><a href="{{route('category.create')}}">create</a></h1>
</body>
</html>
@endsection