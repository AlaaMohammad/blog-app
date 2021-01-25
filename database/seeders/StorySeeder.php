<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stories')->insert([
            [
                'title' => 'Look at life with the eyes of a child',
                'content' => '<h1>Ergo atque</h1><p>Exercebantur, eaque disciplina effecit tantam illorum utroque in genere dicendi copiam. Duo Reges, constructio interrete. Mene ergo et Triarium dignos existimas, apud quos turpiter loquare? Unum est sine dolore esse, alterum cum voluptate. Quis est autem dignus nomine hominis, qui unum diem totum velit esse in genere isto voluptatis? Bona autem corporis huic sunt, quod posterius posui, similiora. Quod cum ita sit, perspicuum est omnis rectas res atque laudabilis eo referri, ut cum voluptate vivatur. Bona autem corporis huic sunt, quod posterius posui, similiora. Quod cum ita sit, perspicuum est omnis rectas res atque laudabilis eo referri, ut cum voluptate vivatur. Quasi vero aut concedatur in omnibus stultis aeque magna esse vitia, et eadem inbecillitate et inconstantia L. Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum. Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</p>',
                'img_src' => '',
                'blog_id' => '1',
                'user_id' => '1'
            ]
        ]);
    }
}
