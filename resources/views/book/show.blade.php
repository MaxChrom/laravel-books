@extends('layouts/main', [
    'title' => 'Home'
])


@section('content')
    

    <h1>Book Details</h1>

    <h2>{{$book->title}}</h2>

    <img src="{{$book->image}}" alt="">
    
    <div class="author">
        by {{$book->authors->pluck('name')->join(',')}}
    </div>


    @auth

        @if ($errors->count())
            @foreach ($errors->all() as $error)
                <div class="error">&times;{{ $error }}</div>
            @endforeach
        @endif  
        @if (session()->has('success_message'))
        <div class="success-message">{{session()->get('success_message')}}</div>
        @endif
            <form action="{{route('book.save-review', $book->id)}}" method="post">
                @csrf

                <textarea name="text" id="" cols="30" rows="10"></textarea>
                <button>Sumbit review</button>
            </form>
        @endauth
             <h2>Reviews:</h2>
        @foreach ($book->reviews as $review)
                <p>{{$review->text}}</p>
                written by {{$review->user->name}}
        @endforeach
@endsection
