<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * * @return void
     */
    public function run(): void
    {
        Article::factory()
            ->count(30)
            ->create();

        
    }
}
