<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Customer> $customers
 */
?>
<div class="customers index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('telephone') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_by') ?></th>
                    <th><?= $this->Paginator->sort('deleted_at') ?></th>
                    <th><?= $this->Paginator->sort('deleted_by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->id) ?></td>
                    <td><?= h($customer->name) ?></td>
                    <td><?= h($customer->address) ?></td>
                    <td><?= $this->Number->format($customer->type) ?></td>
                    <td><?= h($customer->telephone) ?></td>
                    <td><?= h($customer->created_at) ?></td>
                    <td><?= $this->Number->format($customer->created_by) ?></td>
                    <td><?= h($customer->modified_at) ?></td>
                    <td><?= $this->Number->format($customer->modified_by) ?></td>
                    <td><?= h($customer->deleted_at) ?></td>
                    <td><?= $this->Number->format($customer->deleted_by) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
