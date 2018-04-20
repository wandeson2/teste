<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrator $administrator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrator'), ['action' => 'edit', $administrator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrator'), ['action' => 'delete', $administrator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrators view large-9 medium-8 columns content">
    <h3><?= h($administrator->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($administrator->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($administrator->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($administrator->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($administrator->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($administrator->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Health Units') ?></h4>
        <?php if (!empty($administrator->health_units)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Telephone') ?></th>
                <th scope="col"><?= __('CEP') ?></th>
                <th scope="col"><?= __('Complete Address') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($administrator->health_units as $healthUnits): ?>
            <tr>
                <td><?= h($healthUnits->id) ?></td>
                <td><?= h($healthUnits->name) ?></td>
                <td><?= h($healthUnits->telephone) ?></td>
                <td><?= h($healthUnits->CEP) ?></td>
                <td><?= h($healthUnits->complete_address) ?></td>
                <td><?= h($healthUnits->latitude) ?></td>
                <td><?= h($healthUnits->longitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HealthUnits', 'action' => 'view', $healthUnits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HealthUnits', 'action' => 'edit', $healthUnits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HealthUnits', 'action' => 'delete', $healthUnits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
