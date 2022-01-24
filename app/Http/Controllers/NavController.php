<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;

class NavController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function list() {
        $books = Book::all();//recupere toutes les livres (c'est la class modèl Book) = modèle fait la fonction all
        return view('list', ['books' => $books]);
    }

    public function show($id) {
        $book = Book:: findOrFail($id);
        
        return view('detailsLivre', ['book' => $book]);
    }

    public function ajouter() {
        $authors = Author::all();
        $genres = Genre::all();

        return view('ajouter', ['authors' => $authors, 'genres' => $genres]);
    }

    public function updateBook($id) {
        $book = Book:: findOrFail($id);
        $authors = Author:: all()->sortBy('name');
      
        return view('formulaireUpDate', ['book' => $book, 'authors' => $authors]);
    }

}
 