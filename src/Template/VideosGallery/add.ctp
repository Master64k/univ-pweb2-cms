<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosGallery $videosGallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Videos Gallery'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videosGallery form large-9 medium-8 columns content">
    <?= $this->Form->create($videosGallery) ?>
    <fieldset>
        <legend><?= __('Add Videos Gallery') ?></legend>
        <?php
            echo $this->Form->control('news_id', ['options' => $news, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
