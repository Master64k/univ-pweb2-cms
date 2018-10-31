<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Video $video
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videos form large-9 medium-8 columns content">
    <?= $this->Form->create($video) ?>
    <fieldset>
        <legend><?= __('Add Video') ?></legend>
        <?php
            echo $this->Form->control('gallery_id', ['options' => $videosGallery, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('youtube_url');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
