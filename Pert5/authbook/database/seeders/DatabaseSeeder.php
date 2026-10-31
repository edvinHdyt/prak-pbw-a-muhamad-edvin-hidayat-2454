<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Buat admin user untuk Filament
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            "role" => "admin"
        ]);

         User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            "role" => "staff"
        ]);

         User::factory()->create([
            'name' => 'View User',
            'email' => 'view-user@example.com',
            "role" => "view"
        ]);

        // Buat 10 authors
        $authors = Author::factory(10)->create();

        // Buat 50 books dengan random authors
        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);

        // $categories = [
        //     'Fiksi',
        //     'Teknologi',
        //     'Sains',
        //     'Sejarah',
        //     'Komik & Novel Grafis',
        //     'Bisnis & Ekonomi',
        //     'Biografi',
        // ];
        // foreach ($categories as $category) {
        //     Category::create([
        //         'category' => $category,
        //     ]);
        // }

        $categories = Category::factory(7)->create();
        $books = Book::factory(30)->create();

        $books->each(function ($book) use ($categories) {
            $randomCategoryIds = $categories->random(rand(1, 3))->pluck('id');
            $book->categories()->attach($randomCategoryIds);
        });

    }
}
