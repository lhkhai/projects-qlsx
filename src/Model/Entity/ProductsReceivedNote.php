<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsReceivedNote Entity
 *
 * @property int $id
 * @property string $order_number
 * @property int $warehouse_from
 * @property int $warehouse_to
 * @property string $remark
 * @property int $note_maker
 * @property int $deliverer
 * @property int $stockkeeper_fk
 * @property int $approver_fk
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified_at
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property int $deleted_by
 */
class ProductsReceivedNote extends Entity
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
        'order_number' => true,
        'warehouse_from' => true,
        'warehouse_to' => true,
        'remark' => true,
        'note_maker' => true,
        'deliverer' => true,
        'stockkeeper_fk' => true,
        'approver_fk' => true,
        'created_at' => true,
        'created_by' => true,
        'modified_at' => true,
        'modified_by' => true,
        'deleted_at' => true,
        'deleted_by' => true,
    ];
}
