<?php

namespace Database\Seeders;

use App\Models\ComicBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $_comics = config("db");

        foreach ($_comics as $_comic) {

            $comic_book = new ComicBook();
    
            $comic_book->title = $_comic["title"];
            $comic_book->description = $_comic["description"];
            $comic_book->thumb = $_comic["thumb"];
            $comic_book->price = $_comic["price"];
            $comic_book->series = $_comic["series"];
            $comic_book->sale_date = $_comic["sale_date"];
            $comic_book->type = $_comic["type"];

            
            $comic_book->save();
        }

    }
}