<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PagesPhoto $pagesPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagesPhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagesPhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pages Photos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pagesPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($pagesPhoto) ?>
    <fieldset>
        <legend><?= __('Edit Pages Photo') ?></legend>
        <?php
            echo $this->Form->control('page_id', ['options' => $pages, 'empty' => true]);
            echo $this->Form->control('photo_id', ['options' => $photos, 'empty' => true]);
            echo $this->Form->control('created_at');
            echo $this->Form->control('update_at');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
