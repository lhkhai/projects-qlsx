<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialsIssueNote Entity
 *
 * @property int $id
 * @property string|null $order_number
 * @property int|null $warehouse_from
 * @property int|null $receiving_unit
 * @property string|null $phase
 * @property \Cake\I18n\FrozenDate|null $size_number
 * @property int|null $batch_number
 * @property string|null $unit
 * @property string|null $packing_specification
 * @property string|null $remark
 * @property int|null $note_maker_id
 * @property int|null $receiver_id
 * @property int|null $stockkeeper_id
 * @property int|null $approver_id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenTime|null $modified_at
 * @property int|null $modified_by
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 * @property int|null $deleted_by
 *
 * @property \App\Model\Entity\Receiver $receiver
 */
class MaterialsIssueNote extends Entity
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
        'receiving_unit' => true,
        'phase' => true,
        'size_number' => true,
        'batch_number' => true,
        'unit' => true,
        'packing_specification' => true,
        'remark' => true,
        'note_maker_id' => true,
        'receiver_id' => true,
        'stockkeeper_id' => true,
        'approver_id' => true,
        'created_at' => true,
        'created_by' => true,
        'modified_at' => true,
        'modified_by' => true,
        'deleted_at' => true,
        'deleted_by' => true,
        'receiver' => true,
    ];
}
