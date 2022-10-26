@extends('layouts/main', [
    'title' => 'Login'
])




@section('content')

@if ($errors->count())
    @foreach ($errors->all() as $error)
        <div class="error">{{ $error }}</div>
    @endforeach
@endif

<form action="{{ route('login') }}" method="post">
 
    @csrf
    Email: <br>
    <input type="email" name="email" value="{{ old('email') }}"><br>
    Password: <br>
    <input type="password" name="password" value=""><br><br>
 
    <button>Login</button>
 
</form>
@endsection