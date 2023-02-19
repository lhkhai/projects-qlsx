<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialsReceivedDetail Entity
 *
 * @property int $id
 * @property int|null $material_id
 * @property int $amount
 * @property int $materials_received_note_id
 * @property \Cake\I18n\FrozenDate $expire_date
 * @property int $batch_number
 * @property \Cake\I18n\FrozenDate $manufacturing_date
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenTime|null $modified_at
 * @property int|null $modified_by
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 * @property int|null $deleted_by
 *
 * @property \App\Model\Entity\Material $material
 * @property \App\Model\Entity\MaterialsReceivedNote $materials_received_note
 */
class MaterialsReceivedDetail extends Entity
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
        'material_id' => true,
        'amount' => true,
        'materials_received_note_id' => true,
        'expire_date' => true,
        'batch_number' => true,
        'manufacturing_date' => true,
        'created_at' => true,
        'created_by' => true,
        'modified_at' => true,
        'modified_by' => true,
        'deleted_at' => true,
        'deleted_by' => true,
        'material' => true,
        'materials_received_note' => true,
    ];
}
