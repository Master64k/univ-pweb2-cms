<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $news->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Videos Gallery'), ['controller' => 'VideosGallery', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Edit News') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('content');
            echo $this->Form->control('date');
            echo $this->Form->control('id_users');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('active');
            echo $this->Form->control('photos._ids', ['options' => $photos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
