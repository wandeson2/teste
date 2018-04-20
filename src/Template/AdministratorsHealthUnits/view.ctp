<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministratorsHealthUnit $administratorsHealthUnit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrators Health Unit'), ['action' => 'edit', $administratorsHealthUnit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrators Health Unit'), ['action' => 'delete', $administratorsHealthUnit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administratorsHealthUnit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrators Health Units'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrators Health Unit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Administrators'), ['controller' => 'Administrators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrator'), ['controller' => 'Administrators', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administratorsHealthUnits view large-9 medium-8 columns content">
    <h3><?= h($administratorsHealthUnit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Health Unit') ?></th>
            <td><?= $administratorsHealthUnit->has('health_unit') ? $this->Html->link($administratorsHealthUnit->health_unit->name, ['controller' => 'HealthUnits', 'action' => 'view', $administratorsHealthUnit->health_unit->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Administrator') ?></th>
            <td><?= $administratorsHealthUnit->has('administrator') ? $this->Html->link($administratorsHealthUnit->administrator->name, ['controller' => 'Administrators', 'action' => 'view', $administratorsHealthUnit->administrator->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($administratorsHealthUnit->id) ?></td>
        </tr>
    </table>
</div>
