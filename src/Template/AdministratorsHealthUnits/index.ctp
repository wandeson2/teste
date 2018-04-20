<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministratorsHealthUnit[]|\Cake\Collection\CollectionInterface $administratorsHealthUnits
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administrators Health Unit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administrators'), ['controller' => 'Administrators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administrator'), ['controller' => 'Administrators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administratorsHealthUnits index large-9 medium-8 columns content">
    <h3><?= __('Administrators Health Units') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('health_unit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('administrator_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administratorsHealthUnits as $administratorsHealthUnit): ?>
            <tr>
                <td><?= $this->Number->format($administratorsHealthUnit->id) ?></td>
                <td><?= $administratorsHealthUnit->has('health_unit') ? $this->Html->link($administratorsHealthUnit->health_unit->name, ['controller' => 'HealthUnits', 'action' => 'view', $administratorsHealthUnit->health_unit->id]) : '' ?></td>
                <td><?= $administratorsHealthUnit->has('administrator') ? $this->Html->link($administratorsHealthUnit->administrator->name, ['controller' => 'Administrators', 'action' => 'view', $administratorsHealthUnit->administrator->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administratorsHealthUnit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administratorsHealthUnit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administratorsHealthUnit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administratorsHealthUnit->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
