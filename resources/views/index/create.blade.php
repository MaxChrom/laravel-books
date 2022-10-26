@extends('layouts/main', [
    'title' => 'Create Author'
])    


@section('content')
        
        <h2>Create new Author</h2>
       
        
        <form action="{{route('store')}}" method="post">
      
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name"><br><br>
            <label for="name">Slug:</label>
            <input type="text" name="slug"><br><br>

            <button type='sumbit'>Create</button>

        </form>

@endsection