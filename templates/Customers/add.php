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
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers form content">
            
            <?$user = $this->Customers->get();

            ?>
            <? foreach ($user as $row) {?>
                <table>
                <tr><th>name</th>
                <th>Address</th></tr>
                <tr>
                <td><? $row->name?></td><td><?$row->address?></td></tr>
            </table>
            }
            

        </div>
    </div>
</div>
