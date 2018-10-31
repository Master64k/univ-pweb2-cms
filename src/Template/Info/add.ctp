<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Info $info
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Info'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="info form large-9 medium-8 columns content">
    <?= $this->Form->create($info) ?>
    <fieldset>
        <legend><?= __('Add Info') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('facebook');
            echo $this->Form->control('twitter');
            echo $this->Form->control('instageam');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
