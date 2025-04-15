<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Chapter;
use App\Models\Choice;

class StorySeeder extends Seeder
{
    public function run(): void
    {
        $story = Story::create([
            'title' => 'Echo, le chateau sur la colline',
            'summary' => 'A la recherche d\'aide après avoir crevé ton pneu sur la route, tu vois au loin une lueur.
            Tu la suit jusqu\à voir apparaitre ce qui te semble être une immense bâtisse. Arrivé à ses pieds,
            tu te rends compte que c\'est un château. A présent tu as le choix, y entrer ou faire demi-tour ?',
            'author' => 'cassis',
        ]);

        $ch1 = Chapter::create([
            'story_id' => $story->id,
            'number' => 1,
            'content' => 'Tu te réveilles dans une forêt mystérieuse. Deux chemins s\'offrent à toi.',
        ]);

        $ch2 = Chapter::create([
            'story_id' => $story->id,
            'number' => 2,
            'content' => 'Tu suis le sentier éclairé et découvres un village paisible.',
        ]);

        $ch3 = Chapter::create([
            'story_id' => $story->id,
            'number' => 3,
            'content' => 'Tu entres dans la grotte sombre. Des bruits inquiétants résonnent.',
        ]);

        Choice::create([
            'chapter_id' => $ch1->id,
            'label' => 'Prendre le sentier éclairé',
            'next_chapter_id' => $ch2->id,
        ]);

        Choice::create([
            'chapter_id' => $ch1->id,
            'label' => 'Entrer dans la grotte sombre',
            'next_chapter_id' => $ch3->id,
        ]);
    }
}
