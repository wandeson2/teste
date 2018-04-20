<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdministratorsHealthUnit $administratorsHealthUnit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administratorsHealthUnit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administratorsHealthUnit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administrators Health Units'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['controller' => 'HealthUnits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Health Unit'), ['controller' => 'HealthUnits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Administrators'), ['controller' => 'Administrators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Administrator'), ['controller' => 'Administrators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administratorsHealthUnits form large-9 medium-8 columns content">
    <?= $this->Form->create($administratorsHealthUnit) ?>
    <fieldset>
        <legend><?= __('Edit Administrators Health Unit') ?></legend>
        <?php
            echo $this->Form->control('health_unit_id', ['options' => $healthUnits]);
            echo $this->Form->control('administrator_id', ['options' => $administrators]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
