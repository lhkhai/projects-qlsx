<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Receiver Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $telephone
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified_at
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property int $deleted_by
 *
 * @property \App\Model\Entity\MaterialsReceivedNote[] $materials_received_note
 * @property \App\Model\Entity\ProductsIssueNote[] $products_issue_note
 * @property \App\Model\Entity\SubstancesReceivedNote[] $substances_received_note
 */
class Receiver extends Entity
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
        'address' => true,
        'telephone' => true,
        'created_at' => true,
        'created_by' => true,
        'modified_at' => true,
        'modified_by' => true,
        'deleted_at' => true,
        'deleted_by' => true,
        'materials_received_note' => true,
        'products_issue_note' => true,
        'substances_received_note' => true,
    ];
}
