@extends('layouts.base')

@section('title', 'Page liste')
@section('css', 'table')
@section('content')
<h1> Pour plus de détails </h1>

<table>
    <thread>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">author</th>
            <th scope="col">publication</th>
            <th scope="col">genre</th>
            <th scope="col">synopsis</th>
        </tr>
    </thread>   

    <tbody>
       

        <tr>
            <td> {{$book->id}} </td>
            <td> {{$book->title}}</td>
            <td> {{$book->author->name}} </td>
            <td> {{$book->publication}} </td>
            <td> {{$book->genre}} </td> 
            <td> {{$book->synopsis}} </td> 

        </tr>
          
    </tbody>

</table>



@endsection