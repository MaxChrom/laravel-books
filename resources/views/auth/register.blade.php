@extends('layouts/main', [
    'title' => 'Register'
])




@section('content')

@if ($errors->count())
    @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach
@endif

<form action="{{ route('register') }}" method="post">
 
    @csrf
    <label for="name">Your name:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br>
    <label for="email">Your e-mail:</label><br>
    <input type="email" name="email" value="{{ old('email') }}"><br>
    <label for="password">Create a password</label><br>
    <input type="password" name="password" value=""><br>
    <label for="password_confirmation">Repeat password</label><br>
    <input type="password" name="password_confirmation" value=""><br><br>
 
    <button>Register</button>
 
</form>
@endsection