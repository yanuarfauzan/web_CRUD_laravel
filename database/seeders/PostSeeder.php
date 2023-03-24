<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        postModel::insert([
            'image' => 'image.jpg',
            'title' => 'coba seeder',
            'content' => 'content seeder'

        ]);
    }
}
