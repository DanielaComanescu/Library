@extends('layouts.base')

@section('title', 'UpDate Book')

@section('content')
<h1> Voulez-vous mettre à jour ce livre? </h1>

    <form action="/updateForm" method="POST">
        @csrf
        <h3> Informations à mettre à jour </h3>
        <br>
            <ol>
                <li><label for="title"> Title update: </label>
                    <input type="text" id="title" name="title" value={{$book->title}}> </li>
                <br>
                <li> <label for="selectAuthor"> Choose an Author : </label>
                    <select name="author_id"> 
                        @foreach ($authors as $author)
                            @if($book->author->id == $author->id)
                                <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                            @else
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    </li>
                <br>
                <li> <label for="publication"> Publication update : </label> 
                    <input type="number" id="publication" name="publication" value={{$book->publication}}></li>
                <br>
                <li> <label for="Genre"> Genre update : </label> 
                    <input type="text" id="genre" name="genre" value={{$book->genre}}> </li>
                <br>
                <li> <label for="Synopsis"> Synopsis update : </label> 
                    <input type="text" id="synopsis" name="synopsis" value={{$book->synopsis}}> </li>
                <br>
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <input type="submit" value="UpDateBook">
            </ol>
     </form>



@endsection