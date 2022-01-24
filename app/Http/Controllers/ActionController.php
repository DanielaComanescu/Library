<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ActionController extends Controller
{
    public function ajouter(Request $request) { //à cet endroit on a tipé la variable: on écrit pas objet; mais request c'est un objet
        //dd('hello');
        //enregistrer le nouveau livre
        //dd($request->title);

        $book = new Book;
        $book->title = $request->title; //$book->title signifie = dans la base de donnée je vais chercher une colonne qui s'appele title
        $book->author_id = $request->author_id;
        $book->publication = $request->publication;
        $book->genre = $request->genre;
        $book->synopsis = $request->synopsis;

        $book->save();

        return redirect('/livres');
    }

    public function deleteBook(Request $request) {
        //dd($request); 
        $book = Book::find($request->id);
        $book->delete();

        //Book::destroy($request->id); //cette methode destroy marche pareil que delete

        return redirect('/livres');
    }

    public function updateBook(Request $request) {
        //dd($request);
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->publication = $request->publication;
        $book->genre = $request->genre;
        $book->synopsis = $request->synopsis;
        $book->save();

        return redirect('/livres');
    }
}
 