<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Health Unit'), ['action' => 'edit', $healthUnit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Health Unit'), ['action' => 'delete', $healthUnit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Health Units'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Unit'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="healthUnits view large-9 medium-8 columns content">
    <h3><?= h($healthUnit->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($healthUnit->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($healthUnit->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CEP') ?></th>
            <td><?= h($healthUnit->CEP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complete Address') ?></th>
            <td><?= h($healthUnit->complete_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($healthUnit->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($healthUnit->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($healthUnit->id) ?></td>
        </tr>
    </table>
</div>
