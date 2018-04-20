<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HealthUnit $healthUnit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $healthUnit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $healthUnit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Health Units'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="healthUnits form large-9 medium-8 columns content">
    <?= $this->Form->create($healthUnit) ?>
    <fieldset>
        <legend><?= __('Edit Health Unit') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('telephone');
            echo $this->Form->control('CEP');
            echo $this->Form->control('complete_address');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
