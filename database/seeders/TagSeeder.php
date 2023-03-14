<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['label' => 'HTML', 'color' => 'danger'],
            ['label' => 'CSS', 'color' => 'info'],
            ['label' => 'ES6', 'color' => 'warning'],
            ['label' => 'Vue', 'color' => 'success'],
            ['label' => 'PHP', 'color' => 'primary'],
            ['label' => 'SQL', 'color' => 'secondary'],
            ['label' => 'SASS', 'color' => 'danger-emphasis'],
        ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->label = $tag['label'];
            $new_tag->color = $tag['color'];
            $new_tag->save();
        }
    }
}
