<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drugs')->insert([
            [
                'name' => 'ロキソニン',
                'component' => 'ロキソプロフェンナトリウム',
                'regimen' => '1回1錠 1日2回まで なるべく食後に服用して下さい。食後の服用が難しければ、多めの水で服用して下さい。',
                'effect' => '頭痛、発熱、歯痛、生理痛に効果があります',
                'img_url' => 'storage/drug_image/1.jpg',
            ],
            [
                'name' => 'セルベール',
                'component' => 'テプレノン',
                'regimen' => '1回1錠 1日3回 食後に服用',
                'effect' => '胃もたれ、胸焼け、食べすぎ、飲みすぎ、胃部・腹部不快感、食欲不振',
                'img_url' => 'storage/drug_image/2.jpg',
            ],
        ]);
    }
}