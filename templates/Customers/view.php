<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($customer->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($customer->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= h($customer->telephone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $this->Number->format($customer->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= $this->Number->format($customer->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= $this->Number->format($customer->modified_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted By') ?></th>
                    <td><?= $this->Number->format($customer->deleted_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($customer->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($customer->modified_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted At') ?></th>
                    <td><?= h($customer->deleted_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products Issue Note') ?></h4>
                <?php if (!empty($customer->products_issue_note)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Order Number') ?></th>
                            <th><?= __('Warehouse From') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Remark') ?></th>
                            <th><?= __('Note Maker') ?></th>
                            <th><?= __('Receiver Id') ?></th>
                            <th><?= __('Stockkeeper Fk') ?></th>
                            <th><?= __('Approver Fk') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Created By') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th><?= __('Modified By') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Deleted By') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->products_issue_note as $productsIssueNote) : ?>
                        <tr>
                            <td><?= h($productsIssueNote->id) ?></td>
                            <td><?= h($productsIssueNote->order_number) ?></td>
                            <td><?= h($productsIssueNote->warehouse_from) ?></td>
                            <td><?= h($productsIssueNote->customer_id) ?></td>
                            <td><?= h($productsIssueNote->remark) ?></td>
                            <td><?= h($productsIssueNote->note_maker) ?></td>
                            <td><?= h($productsIssueNote->receiver_id) ?></td>
                            <td><?= h($productsIssueNote->stockkeeper_fk) ?></td>
                            <td><?= h($productsIssueNote->approver_fk) ?></td>
                            <td><?= h($productsIssueNote->created_at) ?></td>
                            <td><?= h($productsIssueNote->created_by) ?></td>
                            <td><?= h($productsIssueNote->modified_at) ?></td>
                            <td><?= h($productsIssueNote->modified_by) ?></td>
                            <td><?= h($productsIssueNote->deleted_at) ?></td>
                            <td><?= h($productsIssueNote->deleted_by) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProductsIssueNote', 'action' => 'view', $productsIssueNote->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsIssueNote', 'action' => 'edit', $productsIssueNote->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsIssueNote', 'action' => 'delete', $productsIssueNote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsIssueNote->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
