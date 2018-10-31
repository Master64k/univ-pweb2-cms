<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VideosGallery $videosGallery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Videos Gallery'), ['action' => 'edit', $videosGallery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Videos Gallery'), ['action' => 'delete', $videosGallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosGallery->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos Gallery'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Gallery'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="videosGallery view large-9 medium-8 columns content">
    <h3><?= h($videosGallery->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('News') ?></th>
            <td><?= $videosGallery->has('news') ? $this->Html->link($videosGallery->news->title, ['controller' => 'News', 'action' => 'view', $videosGallery->news->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($videosGallery->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($videosGallery->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($videosGallery->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($videosGallery->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($videosGallery->updated_at) ?></td>
        </tr>
    </table>
</div>
