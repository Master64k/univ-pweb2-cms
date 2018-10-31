
<?php

    $this->start('main');

?>

<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create('User') ?>
    <fieldset>
        <legend><?= __('Por favor informe seu usuário e senha') ?></legend>
        <?= $this->Form->input('login', ['class' => 'form-control']) ?>
        <?= $this->Form->input('password', ['class' => 'form-control']) ?>
    </fieldset>
<?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary']); ?>
<?= $this->Form->end() ?>
</div>

<?php

    $this->end();

?>