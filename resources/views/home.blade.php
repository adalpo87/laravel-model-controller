@extends('layouts.main')

@section('content')

<header>
    <h1>Laravel-Model-Controller</h1>
</header>

<main>
    <div class="container">

        <ul>
            @foreach ($movies as $movie)
            
            <li>
                <h2>{{ $movie['title']}}</h2>
                <h3>{{ $movie['original_title']}}</h3>
                <p>{{ $movie['nationality']}}</p>
                <p>{{ $movie['date']}}</p>
                <p>{{ $movie['vote']}}</p>
            </li>

            @endforeach
           
        </ul>


    </div>

</main>


@endsection