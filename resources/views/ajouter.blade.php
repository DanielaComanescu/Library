@extends('layouts.base')

@section('title', 'Page pour ajouter un livre')

@section('content')
<h1> Ici vous pouvez ajouter un livre </h1>

<br>
    <form action="/nouveauLivre" method="POST">
    @csrf
        <h3> Quel livre voulez-vous ajouter? Informations sur le livre </h3>
        <br>
            <ol>
                <li><label for="title"> Title : </label>
                    <input type="text" id="title" name="title"> </li>
                <br>
                <li> <label for="selectAuthor"> Choose an Author : </label>
                    <select name="author_id"> 
                        @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    </li>
                <br>
                <li> <label for="publication"> Publication : </label> 
                    <input type="number" id="publication" name="publication"> </li>
                <br>
                <li> <label for="Genre"> Genre : </label> 
                    <input type="text" id="genre" name="genre"> </li>
                <br>
                <li> <label for="Synopsis"> Synopsis : </label> 
                    <input type="text" id="synopsis" name="synopsis"> </li>
                <br>
            </ol>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">AJOUTER LIVRE</button>
     </form>

@endsection