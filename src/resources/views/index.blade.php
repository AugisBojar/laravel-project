@extends('layouts.app')

@section('content')
    @if($errors->any())
        {{ implode('', $errors->all(':message')) }}
    @endif

    <form method="GET" action="/country">
        <input id="title" type="text" name="country" maxlength="2" minlength="2">
        <input type="submit" value="Check">
    </form>
@endsection
