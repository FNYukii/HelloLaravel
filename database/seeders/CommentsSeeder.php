<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsSeeder extends Seeder
{
    
    public function run()
    {
        // DB::table('comments')->insert([
        //     'content' => Str::random(20),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Factoryを使用する
        Comment::factory()->count(10)->create();
    }
}
