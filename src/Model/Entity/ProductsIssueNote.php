<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsIssueNote Entity
 *
 * @property int $id
 * @property string|null $order_number
 * @property int $warehouse_from
 * @property int|null $customer_id
 * @property string|null $remark
 * @property int|null $note_maker
 * @property int|null $receiver_id
 * @property int|null $stockkeeper_fk
 * @property int|null $approver_fk
 * @property \Cake\I18n\FrozenTime $created_at
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified_at
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property int $deleted_by
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Receiver $receiver
 */
class ProductsIssueNote extends Entity
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
        'customer_id' => true,
        'remark' => true,
        'note_maker' => true,
        'receiver_id' => true,
        'stockkeeper_fk' => true,
        'approver_fk' => true,
        'created_at' => true,
        'created_by' => true,
        'modified_at' => true,
        'modified_by' => true,
        'deleted_at' => true,
        'deleted_by' => true,
        'customer' => true,
        'receiver' => true,
    ];
}
