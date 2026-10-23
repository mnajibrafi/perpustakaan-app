<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data Penulis
        $author1 = Author::create([
            'name' => 'Pramoedya Ananta Toer',
            'email' => 'pram@example.com',
            'bio' => 'Penulis sastra legendaris Indonesia.'
        ]);

        $author2 = Author::create([
            'name' => 'Andrea Hirata',
            'email' => 'andrea@example.com',
            'bio' => 'Penulis novel Laskar Pelangi.'
        ]);

        // 2. Data Kategori
        $cat1 = Category::create([
            'name' => 'Novel Fiksi',
            'slug' => 'novel-fiksi',
            'description' => 'Kategori untuk novel fiksi sastra.'
        ]);

        $cat2 = Category::create([
            'name' => 'Inspiratif',
            'slug' => 'inspiratif',
            'description' => 'Kategori kisah inspiratif dan motivasi.'
        ]);

        // 3. Data Buku
        Book::create([
            'title' => 'Bumi Manusia',
            'isbn' => '978-979-97312-3-0',
            'description' => 'Kisah Minke di era kolonial.',
            'publication_year' => 1980,
            'author_id' => $author1->id,
            'category_id' => $cat1->id,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'isbn' => '978-979-3062-79-2',
            'description' => 'Kisah perjuangan anak-anak Belitung.',
            'publication_year' => 2005,
            'author_id' => $author2->id,
            'category_id' => $cat2->id,
        ]);
    }
}