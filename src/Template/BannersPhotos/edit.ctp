<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BannersPhoto $bannersPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bannersPhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bannersPhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Banners Photos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['controller' => 'Banners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banner'), ['controller' => 'Banners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bannersPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($bannersPhoto) ?>
    <fieldset>
        <legend><?= __('Edit Banners Photo') ?></legend>
        <?php
            echo $this->Form->control('banners_id', ['options' => $banners, 'empty' => true]);
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
