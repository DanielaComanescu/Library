@extends('layouts.base')

@section('title', 'Page liste')
@section('css', 'table') 
@section('content')
<h1> Page liste des livres</h1>

<table>
    <thread>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publication</th>
            <th scope="col">Genre</th>
            <th scope="col">Delete Button</th>
            <th scope="col">UpDate Button</th>
        </tr> 
    </thread>   

    <tbody>
        @foreach ($books as $book) 

        <tr>
            <td> {{$book->id }}</td>
            <td><a href="/detailsLivre/{{ $book->id }}"> {{ $book->title }} </a></td>
            <td> {{$book->author->name}} </td>
            <td> {{$book->publication}} </td>

            <td> 
                @foreach ($book->genres as $genre)
                    <p>{{ $genre->name }}</p>
                @endforeach
            </td> 

            <td> 
                <form action="/delete" method="POST">
                @csrf
                    <input type="hidden" name="id" value="{{ $book->id }}">
                    <input type="submit" value="Delete">
                </form>
            </td>
            <td> <a href="/update/{{ $book->id}}"> UpDate </a></td>

        </tr>
        @endforeach
    </tbody>

</table>


@endsection

