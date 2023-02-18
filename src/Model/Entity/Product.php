<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $ingredient
 * @property string $producing_type
 * @property string $packing_specification
 * @property string $dosage_form
 * @property string $registery_number
 * @property \Cake\I18n\FrozenDate $expiry_date
 * @property string $note
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified_at
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property int $deleted_by
 *
 * @property \App\Model\Entity\Inventory[] $inventory
 * @property \App\Model\Entity\MaterialsIssueDetail[] $materials_issue_details
 * @property \App\Model\Entity\MaterialsReceivedNote[] $materials_received_note
 * @property \App\Model\Entity\ProductsIssueDetail[] $products_issue_details
 * @property \App\Model\Entity\ProductsReceivedDetail[] $products_received_details
 * @property \App\Model\Entity\SubstancesIssueDetail[] $substances_issue_details
 * @property \App\Model\Entity\SubstancesReceivedNote[] $substances_received_note
 */
class Product extends Entity
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
        'ingredient' => true,
        'producing_type' => true,
        'packing_specification' => true,
        'dosage_form' => true,
        'registery_number' => true,
        'expiry_date' => true,
        'note' => true,
        'created_at' => true,
        'created_by' => true,
        'modified_at' => true,
        'modified_by' => true,
        'deleted_at' => true,
        'deleted_by' => true,
        'inventory' => true,
        'materials_issue_details' => true,
        'materials_received_note' => true,
        'products_issue_details' => true,
        'products_received_details' => true,
        'substances_issue_details' => true,
        'substances_received_note' => true,
    ];
}
