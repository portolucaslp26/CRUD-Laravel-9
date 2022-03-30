<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Book $book)
    {
        $book->create([
            'title'=>'O senhor dos anéis',
            'pages'=>'652',
            'price'=>'120',
            'id_user'=>'1'
        ]);

        $book->create([
            'title'=>'Into the Wild',
            'pages'=>'240',
            'price'=>'49,90',
            'id_user'=>'2'
        ]);

        $book->create([
            'title'=>'Harry Potter',
            'pages'=>'820',
            'price'=>'149,90',
            'id_user'=>'2'
        ]);
    }
}
