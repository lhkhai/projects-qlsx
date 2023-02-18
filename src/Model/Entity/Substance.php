<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Substance Entity
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $remark
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified_at
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property int $deleted_by
 */
class Substance extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'code' => true,
        'remark' => true,
        'created_at' => true,
        'created_by' => true,
        'modified_at' => true,
        'modified_by' => true,
        'deleted_at' => true,
        'deleted_by' => true,
    ];
}
