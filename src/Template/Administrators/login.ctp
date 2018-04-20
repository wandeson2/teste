<div class="users form">
<?= $this->Flash->render('Auth') ?>
<?= $this->Form->create() ?>
	<fieldset>
		<legend><?= __('Por favor, entre com seu usuario e senha:') ?><legend>
		<?= $this->Form->control('username')?>
		<?= $this->Form->control('password')?>
	</fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>