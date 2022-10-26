@extends('layouts/main', [
    'title' => 'Home'
])
@section('content')
            <h1>Lorem, ipsum dolor.</h1> 
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quas, ipsam quidem sint facere id.</p>
            

             {{-- @vite('resources/js/latest-books.js')
                <div id="latest-books"></div> --}}

            @foreach ($crime_books as $crime_book)
                <div class="container"><div class="text__container"><div class="title">{{$crime_book->title}}</div><br>
                <div> {{$crime_book->authors->pluck('name')->join(', ')}} </div><br>
                {{-- <div class ="publication"> Date: {{$crime_book->publication_date}}</div> --}}
                <div class ="description">{!!$crime_book->description!!}</div></div>
                <div class="img__container"><img src="{{$crime_book->image}}" alt="film"></div></div>`
            @endforeach
            
            
            
            <div id="partners"></div>
            @viteReactRefresh
            @vite('resources/js/partners.jsx')

           
@endsection