@extends('layout.fe')
@section('title')
    Contact
@endsection
@section('content')
    <form>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <textarea placeholder="Message"></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
