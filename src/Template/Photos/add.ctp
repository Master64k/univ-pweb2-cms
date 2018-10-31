<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['controller' => 'Banners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banner'), ['controller' => 'Banners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="photos form large-9 medium-8 columns content">
    <?= $this->Form->create($photo) ?>
    <fieldset>
        <legend><?= __('Add Photo') ?></legend>
        <?php
            echo $this->Form->control('photo_name');
            echo $this->Form->control('photo_title');
            echo $this->Form->control('page_id');
            echo $this->Form->control('news_id');
            echo $this->Form->control('banners_id');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('active');
            echo $this->Form->control('pages._ids', ['options' => $pages]);
            echo $this->Form->control('news._ids', ['options' => $news]);
            echo $this->Form->control('banners._ids', ['options' => $banners]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
