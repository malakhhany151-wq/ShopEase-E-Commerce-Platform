@extends('layouts.main')

@section('title', 'Edit category')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('category.edit', $cat->id) }}" method="post">
        @csrf
        @method("PUT")
        <label for="">Name:</label><br>
        <input type="text" name="name" value="{{ $cat->name }}" ><br>

        <label for="">Description:</label><br>
        <textarea name="describtion">{{ $cat->describtion }}</textarea><br>

        <button type="submit">Update</button>

    </form>
</body>

</html>

@endsection
