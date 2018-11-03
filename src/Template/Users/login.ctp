<?php
/**
 * @var \App\View\AppView $this
 */
?>

<?php

    $this->start('main');

?>
<?= $this->Flash->render() ?>

<div class="users form">

    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Html->image('logo-admin.png', ['width' => '144', 'height' => '144']) ?>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('login', ['class' => 'form-control']) ?>
        <?= $this->Form->control('password', ['class' => 'form-control']) ?>
    </fieldset>
    <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary']); ?>
    <?= $this->Form->end() ?>
    <p class="mt-5 mb-3 text-muted">&copy; TSI 2017.1 UNCISAL</p>
</div>


<?php

    $this->end();

?>