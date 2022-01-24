<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
            'title' => 'titre livre1',
            'author_id' => 2,
            'publication' => 2014,
            'synopsis' => 'C est l histoire d un jeune homme Pierre qui cherche son père et tombe sur un vieil ami. ',
            ],

            [
            'title' => 'titre livre2',
            'author_id' => 1,
            'publication' => 2018,
            'synopsis' => 'Rory entre dans lentrepôt puis une fusillade a lieu.',
            ],

            [
            'title' => 'titre livre3',
            'author_id' => 3,
            'publication' => 2020,
            'synopsis' => 'Il s agit de résumer votre scénario en deux phrases au maximum. Présentez le personnage central, les défis',
            ]
        ]);
    }
    
}
