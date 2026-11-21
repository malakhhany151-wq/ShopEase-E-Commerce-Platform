@extends('layouts.main')

@section('title', 'Create category')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label for="">Name:</label><br>
        <input type="text" name="name" placeholder="Enter your name"><br>
        @error('name')
        <div>{{$message}}</div>
        @enderror

        <label for="">Description:</label><br>
        <textarea name="description" placeholder="Enter description"></textarea><br>
        @error('description')
        <div>{{$message}}</div>
        @enderror

        <button type="submit">Submit</button>

    </form>
</body>

</html>

@endsection