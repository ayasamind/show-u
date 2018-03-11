<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            '本・コミック・雑誌 & Audible',
            'DVD・ミュージック・ゲーム',
            '家電・カメラ・AV機器',
            'パソコン・オフィス用品',
            'ホーム＆キッチン・ペット・DIY',
            '食品・飲料・お酒',
            'ドラッグストア・ビューティー',
            'ベビー・おもちゃ・ホビー',
            '服・シューズ・バッグ ・腕時計',
            'スポーツ＆アウトドア',
            '車＆バイク・産業・研究開発'
        ];

        $data = [];
        foreach ($categories as $category) {
            $pushdata = [
                'name' => $category,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ];
            array_push($data, $pushdata);
        }

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
