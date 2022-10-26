@extends('layouts/main', [
    'title' => 'Authors'
])
@section('content')
@if ($message = Session::get("success_message"))
{{$message}}
   @endif
   <h2>List of authors:</h2>
   <ul>
   @foreach ($authors as $author)
   <li>{{$author->name}}</li>
   @endforeach
   </ul>
   
@endsection
