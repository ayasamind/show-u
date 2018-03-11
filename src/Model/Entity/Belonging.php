<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use ContentsFile\Model\Entity\ContentsFileTrait;

/**
 * Belonging Entity
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property int $category_id
 * @property string $description
 * @property string $photo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 */
class Belonging extends Entity
{
    // 追加項目
    use ContentsFileTrait;

    // 追加項目
    public $contentsFileConfig = [
        'fields' => [
            'img' => [
                'resize' => [
                    // 画像のリサイズが必要な場合
                    ['width' => 300],
                    ['width' => 300, 'height' => 400],
                    // typeには
                    // normal(default) 長い方を基準に画像をリサイズする
                    // normal_s 短い方を基準に画像をリサイズする
                    // scoop 短い方を基準に画像をリサイズし、中央でくりぬきする
                    ['width' => 300, 'height' => 400, 'type' => 'scoop'],
                ],
            ],
        ],
    ];

    //&getメソッドをoverride
    public function &get($property)
    {
        $value = parent::get($property);
        $value = $this->getContentsFile($property, $value);
        return $value;
    }

    //setメソッドをoverride
    public function set($property, $value = null, array $options = []){
        parent::set($property, $value , $options);
        $this->setContentsFile();
        return $this;
    }
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true
    ];
}
