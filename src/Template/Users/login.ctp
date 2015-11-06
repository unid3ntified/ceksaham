
<div class="large-3 medium-4 columns" id="login">
	<h1>Login</h1>
	<?= $this->Form->create() ?>
	<?= $this->Form->input('email') ?>
	<?= $this->Form->input('password') ?>
	<?= $this->Form->button('Login') ?>
	<?= $this->Form->end() ?>
</div>