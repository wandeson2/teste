<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit[]|\Cake\Collection\CollectionInterface $healthUnits
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="healthUnits index large-9 medium-8 columns content">
    <h3><?= __('Health Units') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CEP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complete_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($healthUnits as $healthUnit): ?>
            <tr>
                <td><?= $this->Number->format($healthUnit->id) ?></td>
                <td><?= h($healthUnit->name) ?></td>
                <td><?= h($healthUnit->telephone) ?></td>
                <td><?= h($healthUnit->CEP) ?></td>
                <td><?= h($healthUnit->complete_address) ?></td>
                <td><?= h($healthUnit->latitude) ?></td>
                <td><?= h($healthUnit->longitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $healthUnit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $healthUnit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $healthUnit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnit->id)]) ?>
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
